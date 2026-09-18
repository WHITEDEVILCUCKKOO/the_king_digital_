

(function (global) {
  "use strict";

  if (typeof THREE === "undefined") {
    console.error(
      "[AIAssistantVisualizer] THREE is not loaded. Include three.js before this file.",
    );
    return;
  }

  var SIZE_PRESETS = {
    small: { px: 140, particleCount: 40 },
    medium: { px: 220, particleCount: 70 },
    large: { px: 320, particleCount: 110 },
  };

  var LOW_POWER_PARTICLE_DIVISOR = 2.2; // used on mobile / small screens

  function AIAssistantVisualizer(config) {
    config = config || {};
    if (!config.container) {
      throw new Error("[AIAssistantVisualizer] config.container is required");
    }

    this.container = config.container;
    this.color = new THREE.Color(config.color || "#4F7FF7");
    this.accentColor = new THREE.Color(config.accentColor || "#91a96b");
    this.sizePreset = SIZE_PRESETS[config.size] || SIZE_PRESETS.medium;

    this._isMobile =
      window.matchMedia("(max-width: 768px)").matches ||
      "ontouchstart" in window;
    this._reducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)",
    ).matches;

    this._adapter = null;
    this._disposed = false;
    this._visible = true;

    // Externally-driven state (updated by setPhase / setLevel, or by the adapter)
    this.phase = "idle";
    this.currentLevel = 0;
    this._targetLevel = 0;

    // Pointer / parallax state (disabled on mobile)
    this._pointer = { x: 0, y: 0 };
    this._pointerTarget = { x: 0, y: 0 };
    this._hovering = false;

    this._clock = new THREE.Clock();

    this._initScene();
    this._initOrb();
    this._initRings();
    this._initParticles();
    this._bindEvents();
    this._onResize();
    this._animate();
  }

  /* --------------------------------------------------------------------
   * Setup
   * ------------------------------------------------------------------ */

  AIAssistantVisualizer.prototype._initScene = function () {
    var el = this.container;

    this.renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    this.renderer.setPixelRatio(
      Math.min(window.devicePixelRatio || 1, this._isMobile ? 1.5 : 2),
    );
    this.renderer.setClearColor(0x000000, 0);
    this.renderer.domElement.style.display = "block";
    this.renderer.domElement.style.width = "100%";
    this.renderer.domElement.style.height = "100%";
    el.appendChild(this.renderer.domElement);

    this.scene = new THREE.Scene();

    this.camera = new THREE.PerspectiveCamera(45, 1, 0.1, 100);
    this.camera.position.set(0, 0, 6);

    this.group = new THREE.Group();
    this.scene.add(this.group);

    var ambient = new THREE.AmbientLight(0xffffff, 0.6);
    var point = new THREE.PointLight(this.color.getHex(), 1.2, 20);
    point.position.set(2, 2, 4);
    this.scene.add(ambient, point);
  };

  AIAssistantVisualizer.prototype._initOrb = function () {
    var geometry = new THREE.IcosahedronGeometry(1, 2);
    var material = new THREE.MeshStandardMaterial({
      color: this.color.getHex(),
      emissive: this.color.getHex(),
      emissiveIntensity: 0.6,
      roughness: 0.35,
      metalness: 0.2,
      flatShading: true,
    });
    this.orb = new THREE.Mesh(geometry, material);
    this.group.add(this.orb);

    // Soft glow via an additive-blended sprite behind the orb -- cheap,
    // no post-processing / bloom pass required.
    this._glowSprite = new THREE.Sprite(
      new THREE.SpriteMaterial({
        map: this._makeGlowTexture(),
        color: this.color.getHex(),
        transparent: true,
        depthWrite: false,
        blending: THREE.AdditiveBlending,
        opacity: 0.85,
      }),
    );
    this._glowSprite.scale.set(4.2, 4.2, 1);
    this.group.add(this._glowSprite);
  };

  AIAssistantVisualizer.prototype._makeGlowTexture = function () {
    var size = 128;
    var canvas = document.createElement("canvas");
    canvas.width = canvas.height = size;
    var ctx = canvas.getContext("2d");
    var gradient = ctx.createRadialGradient(
      size / 2,
      size / 2,
      0,
      size / 2,
      size / 2,
      size / 2,
    );
    gradient.addColorStop(0, "rgba(255,255,255,0.9)");
    gradient.addColorStop(0.4, "rgba(255,255,255,0.35)");
    gradient.addColorStop(1, "rgba(255,255,255,0)");
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, size, size);
    var texture = new THREE.CanvasTexture(canvas);
    texture.needsUpdate = true;
    return texture;
  };

  AIAssistantVisualizer.prototype._initRings = function () {
    this.rings = [];
    var ringDefs = [
      { radius: 1.6, tube: 0.015, tilt: 0.35 },
      { radius: 2.05, tube: 0.012, tilt: -0.5 },
    ];

    for (var i = 0; i < ringDefs.length; i++) {
      var def = ringDefs[i];
      var geometry = new THREE.TorusGeometry(def.radius, def.tube, 8, 64);
      var material = new THREE.MeshBasicMaterial({
        color: this.accentColor.getHex(),
        transparent: true,
        opacity: 0.35,
      });
      var ring = new THREE.Mesh(geometry, material);
      ring.rotation.x = Math.PI / 2 + def.tilt;
      ring.userData.baseRadius = def.radius;
      ring.userData.spinSpeed = 0.05 + i * 0.03;
      this.group.add(ring);
      this.rings.push(ring);
    }
  };

  AIAssistantVisualizer.prototype._initParticles = function () {
    var count = this._isMobile
      ? Math.round(this.sizePreset.particleCount / LOW_POWER_PARTICLE_DIVISOR)
      : this.sizePreset.particleCount;

    var positions = new Float32Array(count * 3);
    var baseRadii = new Float32Array(count);
    var angles = new Float32Array(count);
    var speeds = new Float32Array(count);

    for (var i = 0; i < count; i++) {
      var radius = 1.8 + Math.random() * 0.9;
      var theta = Math.random() * Math.PI * 2;
      var phi = Math.acos(Math.random() * 2 - 1);

      baseRadii[i] = radius;
      angles[i] = theta;
      speeds[i] = 0.05 + Math.random() * 0.12;

      positions[i * 3] = radius * Math.sin(phi) * Math.cos(theta);
      positions[i * 3 + 1] = radius * Math.sin(phi) * Math.sin(theta);
      positions[i * 3 + 2] = radius * Math.cos(phi);
    }

    var geometry = new THREE.BufferGeometry();
    geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));

    var material = new THREE.PointsMaterial({
      color: this.accentColor.getHex(),
      size: 0.045,
      transparent: true,
      opacity: 0.75,
      depthWrite: false,
      blending: THREE.AdditiveBlending,
    });

    this.particles = new THREE.Points(geometry, material);
    this.group.add(this.particles);

    this._particleMeta = {
      baseRadii: baseRadii,
      angles: angles,
      speeds: speeds,
      count: count,
    };
  };

  /* --------------------------------------------------------------------
   * Public API
   * ------------------------------------------------------------------ */

  /** Convenience: hand this visualizer an AIAssistantICPaaSAdapter instance. */
  AIAssistantVisualizer.prototype.attachAdapter = function (adapter) {
    this._adapter = adapter;
    this.setPhase(adapter.phase);
  };

  AIAssistantVisualizer.prototype.setPhase = function (phase) {
    this.phase = phase || "idle";
  };

  /** level: 0..1, already-smoothed values are fine too -- this just becomes the target. */
  AIAssistantVisualizer.prototype.setLevel = function (level) {
    this._targetLevel = Math.max(0, Math.min(1, level || 0));
  };

  AIAssistantVisualizer.prototype.dispose = function () {
    this._disposed = true;
    window.removeEventListener("resize", this._onResizeBound);
    if (!this._isMobile) {
      this.container.removeEventListener("mousemove", this._onPointerMoveBound);
      this.container.removeEventListener(
        "mouseenter",
        this._onPointerEnterBound,
      );
      this.container.removeEventListener(
        "mouseleave",
        this._onPointerLeaveBound,
      );
    }
    if (this._resizeObserver) this._resizeObserver.disconnect();
    if (this._visibilityObserver) this._visibilityObserver.disconnect();

    this.scene.traverse(function (obj) {
      if (obj.geometry) obj.geometry.dispose();
      if (obj.material) {
        if (obj.material.map) obj.material.map.dispose();
        obj.material.dispose();
      }
    });
    this.renderer.dispose();
    if (this.renderer.domElement.parentNode) {
      this.renderer.domElement.parentNode.removeChild(this.renderer.domElement);
    }
  };

  /* --------------------------------------------------------------------
   * Events: resize, pointer parallax, visibility (pause off-screen)
   * ------------------------------------------------------------------ */

  AIAssistantVisualizer.prototype._bindEvents = function () {
    this._onResizeBound = this._onResize.bind(this);
    window.addEventListener("resize", this._onResizeBound);

    if (window.ResizeObserver) {
      this._resizeObserver = new ResizeObserver(this._onResizeBound);
      this._resizeObserver.observe(this.container);
    }

    if (!this._isMobile) {
      this._onPointerMoveBound = this._onPointerMove.bind(this);
      this._onPointerEnterBound = function () {
        this._hovering = true;
      }.bind(this);
      this._onPointerLeaveBound = function () {
        this._hovering = false;
        this._pointerTarget.x = 0;
        this._pointerTarget.y = 0;
      }.bind(this);

      this.container.addEventListener("mousemove", this._onPointerMoveBound);
      this.container.addEventListener("mouseenter", this._onPointerEnterBound);
      this.container.addEventListener("mouseleave", this._onPointerLeaveBound);
    }

    if (window.IntersectionObserver) {
      this._visibilityObserver = new IntersectionObserver(
        function (entries) {
          this._visible = entries[0].isIntersecting;
        }.bind(this),
        { threshold: 0.05 },
      );
      this._visibilityObserver.observe(this.container);
    }
  };

  AIAssistantVisualizer.prototype._onPointerMove = function (e) {
    var rect = this.container.getBoundingClientRect();
    this._pointerTarget.x = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
    this._pointerTarget.y = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
  };

  AIAssistantVisualizer.prototype._onResize = function () {
    var rect = this.container.getBoundingClientRect();
    var w = rect.width || this.sizePreset.px;
    var h = rect.height || this.sizePreset.px;
    this.renderer.setSize(w, h, false);
    this.camera.aspect = w / h;
    this.camera.updateProjectionMatrix();
  };

  /* --------------------------------------------------------------------
   * Animation loop -- single rAF loop per instance, as required.
   * ------------------------------------------------------------------ */

  AIAssistantVisualizer.prototype._animate = function () {
    if (this._disposed) return;
    requestAnimationFrame(this._animate.bind(this));

    if (!this._visible) return; // pause work while scrolled out of view

    var delta = Math.min(this._clock.getDelta(), 0.05);
    var elapsed = this._clock.elapsedTime;

    // Pull latest level from the adapter, if attached, then smooth locally too
    // (the adapter already smooths, but a light local smoothing keeps the
    // visual stable even if someone drives setLevel() directly).
    if (this._adapter) {
      this._adapter.tick();
      this.setPhase(this._adapter.phase);
      this._targetLevel = this._adapter.currentLevel;
    }
    this.currentLevel += (this._targetLevel - this.currentLevel) * 0.15;

    var phaseConfig = this._phaseConfig(this.phase);

    this._updateOrb(delta, elapsed, phaseConfig);
    this._updateRings(delta, elapsed, phaseConfig);
    this._updateParticles(delta, elapsed, phaseConfig);
    this._updateParallax(delta);

    this.renderer.render(this.scene, this.camera);
  };

  AIAssistantVisualizer.prototype._phaseConfig = function (phase) {
    // Base tuning per phase. currentLevel further modulates these on top.
    switch (phase) {
      case "listening":
        return {
          breathe: 0.05,
          breatheSpeed: 2.2,
          glow: 0.9,
          ringSpin: 1.4,
          particleSpeed: 1.3,
          ringLevelReactive: true,
        };
      case "thinking":
        return {
          breathe: 0.03,
          breatheSpeed: 1.4,
          glow: 0.75,
          ringSpin: 2.2,
          particleSpeed: 1.6,
          ringLevelReactive: false,
          orbit: true,
        };
      case "speaking":
        return {
          breathe: 0.09,
          breatheSpeed: 3.2,
          glow: 1.15,
          ringSpin: 1.8,
          particleSpeed: 1.9,
          ringLevelReactive: true,
        };
      case "idle":
      default:
        return {
          breathe: 0.025,
          breatheSpeed: 0.9,
          glow: 0.55,
          ringSpin: 0.5,
          particleSpeed: 0.6,
          ringLevelReactive: false,
        };
    }
  };

  AIAssistantVisualizer.prototype._updateOrb = function (delta, elapsed, cfg) {
    var breathe = Math.sin(elapsed * cfg.breatheSpeed) * cfg.breathe;
    var levelBoost = this.currentLevel * 0.25;
    var scale = 1 + breathe + levelBoost;
    this.orb.scale.setScalar(scale);

    this.orb.rotation.y += delta * 0.15;
    this.orb.rotation.x += delta * 0.05;

    var glowScale = 4.2 * (1 + breathe * 0.6 + this.currentLevel * 0.35);
    this._glowSprite.scale.set(glowScale, glowScale, 1);
    this._glowSprite.material.opacity = Math.min(
      1,
      0.55 * cfg.glow + this.currentLevel * 0.4,
    );

    this.orb.material.emissiveIntensity =
      0.45 * cfg.glow + this.currentLevel * 0.5;
  };

  AIAssistantVisualizer.prototype._updateRings = function (
    delta,
    elapsed,
    cfg,
  ) {
    for (var i = 0; i < this.rings.length; i++) {
      var ring = this.rings[i];
      var spin =
        cfg.ringSpin *
        ring.userData.spinSpeed *
        (this._reducedMotion ? 0.3 : 1);
      ring.rotation.z += delta * spin;

      var levelEffect = cfg.ringLevelReactive ? this.currentLevel : 0;
      var radiusScale =
        1 + levelEffect * 0.18 + Math.sin(elapsed * 1.5 + i) * 0.015;
      ring.scale.setScalar(radiusScale);
      ring.material.opacity =
        0.25 + levelEffect * 0.35 + (cfg.glow - 0.55) * 0.15;
    }
  };

  AIAssistantVisualizer.prototype._updateParticles = function (
    delta,
    elapsed,
    cfg,
  ) {
    var positions = this.particles.geometry.attributes.position.array;
    var meta = this._particleMeta;
    var speedMul = cfg.particleSpeed * (this._reducedMotion ? 0.3 : 1);

    for (var i = 0; i < meta.count; i++) {
      var idx = i * 3;
      var wobble = cfg.orbit
        ? delta * meta.speeds[i] * speedMul * 2
        : delta * meta.speeds[i] * speedMul;
      meta.angles[i] += wobble;

      var radius = meta.baseRadii[i] * (1 + this.currentLevel * 0.2);
      var theta = meta.angles[i];
      var phiWobble = Math.sin(elapsed * 0.6 + i) * 0.15;

      positions[idx] = radius * Math.cos(theta);
      positions[idx + 1] = radius * Math.sin(theta) * Math.cos(phiWobble);
      positions[idx + 2] = radius * Math.sin(phiWobble) * 1.4;
    }
    this.particles.geometry.attributes.position.needsUpdate = true;
    this.particles.material.opacity = 0.55 + this.currentLevel * 0.35;
  };

  AIAssistantVisualizer.prototype._updateParallax = function (delta) {
    if (this._isMobile) return;
    this._pointer.x += (this._pointerTarget.x - this._pointer.x) * 0.08;
    this._pointer.y += (this._pointerTarget.y - this._pointer.y) * 0.08;

    this.group.rotation.y = this._pointer.x * 0.25;
    this.group.rotation.x = -this._pointer.y * 0.2;

    var targetScale = this._hovering ? 1.06 : 1;
    var current = this.group.scale.x;
    var next = current + (targetScale - current) * 0.1;
    this.group.scale.setScalar(next);
  };

  global.AIAssistantVisualizer = AIAssistantVisualizer;
})(window);
