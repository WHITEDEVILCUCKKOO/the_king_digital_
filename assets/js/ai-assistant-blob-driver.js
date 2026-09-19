/**
 * Drives the .chatbot_loader gooey CSS/SVG blob from an
 * AIAssistantICPaaSAdapter instance: swaps color palettes on phase
 * transitions (a fresh random one each time a new interaction starts),
 * changes animation tempo per phase, and pulses --size with the live
 * audio level.
 *
 * Usage:
 *   var adapter = new AIAssistantICPaaSAdapter({ onChange: ... });
 *   var driver = new AIAssistantBlobDriver(document.getElementById('aiChatbotLoader'), adapter);
 */
(function (global) {
  "use strict";

  if (!global.AIAssistantICPaaSAdapter) {
    console.error(
      "[AIAssistantBlobDriver] AIAssistantICPaaSAdapter must load before this file.",
    );
    return;
  }

  // Calm default -- shown at idle, and settled back to at the end of every
  // interaction.
  var IDLE_PALETTE = {
    one: "#D6E8FF",
    two: "#8BB9F7",
    three: "#4F8FEF",
    four: "#2864C7",
    five: "#123A7A",
  };

  // Rolled from randomly whenever a fresh interaction begins (idle ->
  // listening), so the blob doesn't look the same call after call.
  var INTERACTION_PALETTES = [
    {
      // teal
      one: "#CFFAF3",
      two: "#7EE8D8",
      three: "#2FC7B0",
      four: "#14947F",
      five: "#0A4D42",
    },
    {
      // magenta
      one: "#FFD6EC",
      two: "#FF9AD1",
      three: "#F059AA",
      four: "#B82E79",
      five: "#6E1548",
    },
    {
      // green
      one: "#D9FFDD",
      two: "#8FE39A",
      three: "#3FBE5A",
      four: "#22883C",
      five: "#0F4A1F",
    },
    {
      // gold
      one: "#FFF3C9",
      two: "#FFE07A",
      three: "#F2C230",
      four: "#B88A0F",
      five: "#664D08",
    },
    {
      // violet
      one: "#E7DBFF",
      two: "#B79CF2",
      three: "#8A63E0",
      four: "#5E3EB0",
      five: "#33206B",
    },
    {
      // amber/orange -- matches --color-primary
      one: "#FFE3C9",
      two: "#FFB673",
      three: "#F47B20",
      four: "#C75A0B",
      five: "#7A3405",
    },
  ];

  // Base --size (pre-transform box is 100x100) per phase; live audio level
  // adds a little on top each frame.
  var BASE_SIZE_BY_PHASE = {
    idle: 2.0,
    listening: 2.15,
    thinking: 2.05,
    speaking: 2.2,
  };

  // Loop duration fed into --time-animation; shorter = more energetic.
  var TEMPO_BY_PHASE = {
    idle: "6s",
    listening: "3.2s",
    thinking: "2.4s",
    speaking: "1.6s",
  };

  var LEVEL_SIZE_BOOST = 0.35;

  // A UI acknowledgment pulse (e.g. picking an agent) adds this much extra
  // --size on top, decaying to 0 over PULSE_DURATION_MS.
  var PULSE_STRENGTH = 0.22;
  var PULSE_DURATION_MS = 500;

  // How far the blob can drift toward the cursor, in pre-scale px (the
  // --size transform then scales this up along with everything else).
  var MAX_TILT_PX = 5;
  var TILT_SMOOTHING = 0.12;

  function AIAssistantBlobDriver(el, adapter, options) {
    if (!el) {
      throw new Error("[AIAssistantBlobDriver] el is required");
    }
    if (!adapter) {
      throw new Error("[AIAssistantBlobDriver] adapter is required");
    }
    options = options || {};

    this.el = el;
    this._adapter = adapter;
    this._disposed = false;
    this._lastPhase = null;
    this._lastPaletteIndex = -1;

    this._pulseStart = null;
    this._pulseUntil = 0;

    this._reducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)",
    ).matches;
    this._isTouch = "ontouchstart" in window;

    this._pointerEl = options.pointerEl || el;
    this._pointer = { x: 0, y: 0 };
    this._pointerTarget = { x: 0, y: 0 };

    this._applyPalette(IDLE_PALETTE);
    this._bindPointer();
    this._tickBound = this._tick.bind(this);
    this._tick();
  }

  /* --------------------------------------------------------------------
   * Public API
   * ------------------------------------------------------------------ */

  /**
   * Fire a brief "acknowledged" pulse -- call this from UI code on a
   * discrete user action that isn't itself a phase change (picking an
   * agent from the dropdown, for example) so the blob visibly reacts to
   * every interaction, not just live call state.
   */
  AIAssistantBlobDriver.prototype.pulse = function () {
    this._pulseStart = performance.now();
    this._pulseUntil = this._pulseStart + PULSE_DURATION_MS;
  };

  AIAssistantBlobDriver.prototype.dispose = function () {
    this._disposed = true;
    if (this._onPointerMoveBound && this._pointerEl) {
      this._pointerEl.removeEventListener("mousemove", this._onPointerMoveBound);
      this._pointerEl.removeEventListener("mouseleave", this._onPointerLeaveBound);
    }
  };

  /* --------------------------------------------------------------------
   * Internal
   * ------------------------------------------------------------------ */

  AIAssistantBlobDriver.prototype._bindPointer = function () {
    if (this._reducedMotion || this._isTouch) return;

    this._onPointerMoveBound = this._onPointerMove.bind(this);
    this._onPointerLeaveBound = this._onPointerLeave.bind(this);
    this._pointerEl.addEventListener("mousemove", this._onPointerMoveBound);
    this._pointerEl.addEventListener("mouseleave", this._onPointerLeaveBound);
  };

  AIAssistantBlobDriver.prototype._onPointerMove = function (e) {
    var rect = this._pointerEl.getBoundingClientRect();
    var nx = ((e.clientX - rect.left) / rect.width - 0.5) * 2; // -1..1
    var ny = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
    this._pointerTarget.x = nx * MAX_TILT_PX;
    this._pointerTarget.y = ny * MAX_TILT_PX;
  };

  AIAssistantBlobDriver.prototype._onPointerLeave = function () {
    this._pointerTarget.x = 0;
    this._pointerTarget.y = 0;
  };

  AIAssistantBlobDriver.prototype._applyPalette = function (palette) {
    var style = this.el.style;
    style.setProperty("--color-one", palette.one);
    style.setProperty("--color-two", palette.two);
    style.setProperty("--color-three", palette.three);
    style.setProperty("--color-four", palette.four);
    style.setProperty("--color-five", palette.five);
  };

  AIAssistantBlobDriver.prototype._pickInteractionPalette = function () {
    if (INTERACTION_PALETTES.length === 1) return INTERACTION_PALETTES[0];
    var next;
    do {
      next = Math.floor(Math.random() * INTERACTION_PALETTES.length);
    } while (next === this._lastPaletteIndex);
    this._lastPaletteIndex = next;
    return INTERACTION_PALETTES[next];
  };

  AIAssistantBlobDriver.prototype._handlePhaseChange = function (phase) {
    if (phase === this._lastPhase) return;
    var previousPhase = this._lastPhase;
    this._lastPhase = phase;

    this.el.style.setProperty(
      "--time-animation",
      TEMPO_BY_PHASE[phase] || "5s",
    );

    if (
      phase === "listening" &&
      (previousPhase === "idle" || previousPhase === null)
    ) {
      // A fresh interaction just started -- roll a new color mood.
      this._applyPalette(this._pickInteractionPalette());
    } else if (phase === "idle") {
      // Interaction ended -- settle back to the calm default.
      this._applyPalette(IDLE_PALETTE);
    }
    // thinking / speaking inherit whatever palette this interaction rolled.
  };

  AIAssistantBlobDriver.prototype._tick = function () {
    if (this._disposed) return;
    requestAnimationFrame(this._tickBound);

    this._adapter.tick(); // advances the adapter's smoothed level
    this._handlePhaseChange(this._adapter.phase);

    var base = BASE_SIZE_BY_PHASE[this._adapter.phase] || BASE_SIZE_BY_PHASE.idle;

    var pulseBoost = 0;
    if (this._pulseStart !== null) {
      var now = performance.now();
      if (now < this._pulseUntil) {
        var remaining = (this._pulseUntil - now) / PULSE_DURATION_MS; // 1 -> 0
        pulseBoost = PULSE_STRENGTH * remaining;
      } else {
        this._pulseStart = null;
      }
    }

    var size = base + this._adapter.currentLevel * LEVEL_SIZE_BOOST + pulseBoost;
    this.el.style.setProperty("--size", size.toFixed(3));

    if (!this._reducedMotion && !this._isTouch) {
      this._pointer.x += (this._pointerTarget.x - this._pointer.x) * TILT_SMOOTHING;
      this._pointer.y += (this._pointerTarget.y - this._pointer.y) * TILT_SMOOTHING;
      this.el.style.setProperty("--tilt-x", this._pointer.x.toFixed(2) + "px");
      this.el.style.setProperty("--tilt-y", this._pointer.y.toFixed(2) + "px");
    }
  };

  global.AIAssistantBlobDriver = AIAssistantBlobDriver;
})(window);