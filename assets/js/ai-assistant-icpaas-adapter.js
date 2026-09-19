(function (global) {
  "use strict";

  var DEBUG = true; // flip to false once you've confirmed the payload shape

  var VALID_PHASES = ["idle", "listening", "thinking", "speaking"];

  /**
   * @param {Object} [options]
   * @param {number} [options.smoothing=0.15] 0..1, higher = snappier / less smoothed
   * @param {function} [options.onChange] called with {phase, level} whenever either changes
   */
  function ICPaaSAdapter(options) {
    options = options || {};

    this._smoothing =
      typeof options.smoothing === "number" ? options.smoothing : 0.15;
    this._onChange =
      typeof options.onChange === "function" ? options.onChange : null;

    this.phase = "idle"; // last known phase, always one of VALID_PHASES
    this.targetLevel = 0; // raw-ish normalized target (0..1)
    this.currentLevel = 0; // smoothed, safe to read every animation frame
    this.available = false; // whether ICPaaS (window.KD) has been seen at all

    this._boundState = this._handleState.bind(this);
    this._boundLevel = this._handleLevel.bind(this);

    window.addEventListener("kd:state", this._boundState);
    window.addEventListener("kd:level", this._boundLevel);

    // In case KD is already mid-call by the time this adapter attaches.
    this._syncFromKD();
  }

  /* --------------------------------------------------------------------
   * Public API
   * ------------------------------------------------------------------ */

  /**
   * Call this once per animation frame from the visualizer. Advances the
   * smoothed audio level toward the latest target. Cheap -- one lerp.
   */
  ICPaaSAdapter.prototype.tick = function () {
    this.currentLevel +=
      (this.targetLevel - this.currentLevel) * this._smoothing;
    if (Math.abs(this.currentLevel) < 0.0005) this.currentLevel = 0;
    return this.currentLevel;
  };

  /**
   * Public, explicit override -- lets UI code (a button click, an agent
   * pick, etc.) push a phase immediately instead of waiting for KD's own
   * kd:state event to round-trip. Any real KD event that arrives afterwards
   * still wins and simply confirms/corrects it.
   */
  ICPaaSAdapter.prototype.forcePhase = function (phase) {
    this._setPhase(phase);
  };

  ICPaaSAdapter.prototype.destroy = function () {
    window.removeEventListener("kd:state", this._boundState);
    window.removeEventListener("kd:level", this._boundLevel);
  };

  /* --------------------------------------------------------------------
   * Internal: event handling
   * ------------------------------------------------------------------ */

  ICPaaSAdapter.prototype._syncFromKD = function () {
    if (!window.KD) {
      this._setPhase("idle");
      return;
    }
    this.available = true;
    var phase = this._extractPhaseFromKD();
    this._setPhase(phase);
  };

  ICPaaSAdapter.prototype._handleState = function (e) {
    var detail = (e && e.detail) || {};
    if (DEBUG)
      console.log(
        "[AIAssistantVisualizer] kd:state",
        detail,
        "KD.phase =",
        window.KD && window.KD.phase,
        "KD.inCall =",
        window.KD && window.KD.inCall,
      );

    this.available = true;

    // Prefer the documented KD.phase; fall back to sniffing the event detail.
    var phase = this._extractPhaseFromKD();
    if (!phase) phase = this._extractPhase(detail);
    if (!phase) phase = window.KD && window.KD.inCall ? this.phase : "idle";

    this._setPhase(phase);

    // Some integrations pipe an initial level on the state event too.
    var level = this._extractLevel(detail);
    if (level !== null) this._setLevel(level);
  };

  ICPaaSAdapter.prototype._handleLevel = function (e) {
    var detail = (e && e.detail) || {};
    if (DEBUG) console.log("[AIAssistantVisualizer] kd:level", detail);

    var level = this._extractLevel(detail);
    if (level !== null) {
      this._setLevel(level);
    } else if (DEBUG) {
      console.warn(
        "[AIAssistantVisualizer] kd:level fired but no numeric level could be found in the payload above. " +
          "Tell me the exact shape of e.detail and I will fix extractLevel() to read it directly.",
      );
    }
  };

  /* --------------------------------------------------------------------
   * Internal: extraction / normalization (the "guessing" lives ONLY here,
   * isolated so it's a one-place fix once you've confirmed real payloads)
   * ------------------------------------------------------------------ */

  ICPaaSAdapter.prototype._extractPhaseFromKD = function () {
    if (!window.KD) return null;
    if (
      typeof window.KD.phase === "string" &&
      VALID_PHASES.indexOf(window.KD.phase) !== -1
    ) {
      return window.KD.phase;
    }
    if (window.KD.inCall)
      return this.phase === "idle" ? "listening" : this.phase;
    return "idle";
  };

  ICPaaSAdapter.prototype._extractPhase = function (detail) {
    var candidates = [detail.phase, detail.state, detail.status];
    for (var i = 0; i < candidates.length; i++) {
      var val = candidates[i];
      if (typeof val === "string") {
        var normalized = val.toLowerCase();
        if (VALID_PHASES.indexOf(normalized) !== -1) return normalized;
        // loose matches for common synonyms, still never invented out of nothing
        if (/listen/.test(normalized)) return "listening";
        if (/speak|talk|respond/.test(normalized)) return "speaking";
        if (/think|process/.test(normalized)) return "thinking";
        if (/idle|ready|end|stop/.test(normalized)) return "idle";
      }
    }
    return null;
  };

  ICPaaSAdapter.prototype._extractLevel = function (detail) {
    var candidates = [
      detail.level,
      detail.volume,
      detail.amplitude,
      detail.audioLevel,
      detail.rms,
    ];
    for (var i = 0; i < candidates.length; i++) {
      var val = candidates[i];
      if (typeof val === "number" && !isNaN(val)) {
        // Normalize: most VU-style values are already 0..1; a few libs use 0..100.
        return val > 1 ? Math.min(1, val / 100) : Math.max(0, val);
      }
    }
    return null;
  };

  ICPaaSAdapter.prototype._setPhase = function (phase) {
    if (VALID_PHASES.indexOf(phase) === -1) phase = "idle";
    if (phase === this.phase) return;
    this.phase = phase;
    this._emitChange();
  };

  ICPaaSAdapter.prototype._setLevel = function (level) {
    this.targetLevel = Math.max(0, Math.min(1, level));
    this._emitChange();
  };

  ICPaaSAdapter.prototype._emitChange = function () {
    if (this._onChange) {
      this._onChange({ phase: this.phase, level: this.targetLevel });
    }
  };

  global.AIAssistantICPaaSAdapter = ICPaaSAdapter;
})(window);