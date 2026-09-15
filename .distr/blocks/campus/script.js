(() => {
  const body = document.querySelector("body");
  const wrap = document.querySelector("#carouselWrap");
  const items = document.querySelectorAll(".campus__carousel-element");
  if (!wrap || !items.length) return;

  const BREAKPOINTS = [
    {
      media: "(max-width: 640px)",
      z: 600,
      rotateZ: 2,
      step: -3,
      yMin: 180,
      yMax: 315,
      drag: 0.28,
      wheelCooldown: 80,
      gapFactor: 2.2,
    },
    {
      media: "(max-width: 1024px)",
      z: 1000,
      rotateZ: 4,
      step: 2,
      yMin: 185,
      yMax: 300,
      drag: 0.2,
      wheelCooldown: 60,
      gapFactor: 2.35,
    },
    {
      media: "",
      z: 2050,
      rotateZ: 6,
      step: -1.5,
      yMin: 190,
      yMax: 287,
      drag: 0.15,
      wheelCooldown: 40,
      gapFactor: 2.5,
    },
  ];

  const GAP_DEG = 360; // полный оборот карусели
  const LERP_IDLE = 0.12; // плавность доводки без перетаскивания
  const LERP_DRAG = 0.15; // плавность при перетаскивании
  const STOP_EPSILON = 0.05; // порог остановки анимации
  const RESIZE_DELAY = 150; // debounce пересчёта при ресайзе

  let cfg = BREAKPOINTS[BREAKPOINTS.length - 1];
  let currentY = cfg.yMin;
  let targetY = currentY;
  let isAnimating = false;
  let lastWheelTime = 0;

  let lastTouchY = null;
  let lastTouchTime = 0;
  let touchVelocity = 0;
  let momentumId = 0;

  let isDragging = false;
  let startClientX = 0;
  let startRotation = 0;
  let resizeTimer = 0;

  const resolveConfig = () =>
    BREAKPOINTS.find((bp) => !bp.media || matchMedia(bp.media).matches);

  const clampY = (y) => Math.min(cfg.yMax, Math.max(cfg.yMin, y));

  function layoutItems() {
    const gap = GAP_DEG / items.length / cfg.gapFactor;
    items.forEach((el, i) => {
      el.style.transform = `rotateY(${-gap * i}deg) translateZ(${cfg.z}px)`;
    });
  }

  function applyTransform() {
    wrap.style.transform = `translateZ(${cfg.z}px) rotateZ(${cfg.rotateZ}deg) rotateY(${currentY}deg)`;
  }

  function animate() {
    const diff = targetY - currentY;

    if (Math.abs(diff) < STOP_EPSILON) {
      currentY = targetY;
      isAnimating = false;
      applyTransform();
      return;
    }

    currentY += diff * (isDragging ? LERP_DRAG : LERP_IDLE);
    applyTransform();
    requestAnimationFrame(animate);
  }

  function startAnimation() {
    if (isAnimating) return;
    isAnimating = true;
    requestAnimationFrame(animate);
  }

  function onWheel(e) {
    if (isDragging || !e.deltaY) return;

    const now = performance.now();
    if (now - lastWheelTime < cfg.wheelCooldown) return;
    lastWheelTime = now;

    targetY = clampY(targetY + (e.deltaY < 0 ? cfg.step : -cfg.step));
    startAnimation();
  }

  function onTouchStart(e) {
  lastTouchY = e.touches[0].clientY;
  lastTouchTime = performance.now();
  touchVelocity = 0;
  cancelAnimationFrame(momentumId);
  momentumId = 0;
}

function onTouchMove(e) {
  if (isDragging || lastTouchY === null) return;

  const y = e.touches[0].clientY;
  const deltaPx = lastTouchY - y;
  const now = performance.now();
  const dt = Math.max(1, now - lastTouchTime);

  lastTouchY = y;
  lastTouchTime = now;

  touchVelocity = touchVelocity * 0.7 + (deltaPx / dt) * 0.3;

  if (now - lastWheelTime < cfg.wheelCooldown) return;
  lastWheelTime = now;

  targetY = clampY(targetY + (deltaPx > 0 ? -cfg.step : cfg.step));
  startAnimation();
}

function onTouchEnd() {
  if (lastTouchY === null) return;
  lastTouchY = null;

  if (performance.now() - lastTouchTime > 120) {
    touchVelocity = 0;
  }

  const MOMENTUM_FACTOR = 10; // больше = длиннее «докрут»
  const impulse = touchVelocity * MOMENTUM_FACTOR;

  if (Math.abs(impulse) < 0.5) return;

  const startY = targetY;
  const endY = clampY(targetY + impulse);
  const startTime = performance.now();
  const duration = 900;

  const easeOut = (t) => 1 - Math.pow(1 - t, 3);

  function step() {
    const t = Math.min(1, (performance.now() - startTime) / duration);
    targetY = startY + (endY - startY) * easeOut(t);
    startAnimation();
    if (t < 1) momentumId = requestAnimationFrame(step);
  }

  momentumId = requestAnimationFrame(step);
}

  function onPointerDown(e) {
    if (isDragging || e.button !== 0) return;

    isDragging = true;
    startClientX = e.clientX;
    startRotation = currentY;
    wrap.setPointerCapture(e.pointerId);
    if (e.pointerType === "mouse") e.preventDefault();
    // wrap.style.cursor = "grabbing";
  }

  function onPointerMove(e) {
    if (!isDragging) return;
    targetY = clampY(startRotation + (e.clientX - startClientX) * cfg.drag);
    startAnimation();
  }

  function onPointerUp() {
    if (!isDragging) return;
    isDragging = false;
    wrap.style.cursor = "pointer";
  }

  function applyBreakpoint() {
    const ratio = (targetY - cfg.yMin) / (cfg.yMax - cfg.yMin);

    cfg = resolveConfig();
    layoutItems();

    targetY = clampY(cfg.yMin + ratio * (cfg.yMax - cfg.yMin));
    currentY = targetY;
    applyTransform();
  }

  function onResize() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(applyBreakpoint, RESIZE_DELAY);
  }

  function hoverTxt() {
    const carouselElements = document.querySelectorAll(
      ".campus__carousel-element",
    );

    carouselElements.forEach((element) => {
      const textBlock = element.querySelector(".campus__carousel-text_block");

      if (textBlock && cfg.media !== "(max-width: 640px)") {
        textBlock.style.opacity = "0";
        textBlock.style.transform = `translateY(20px) scaleX(-1) rotateZ(-${cfg.rotateZ}deg)`;
        textBlock.style.transition = "opacity 0.4s ease, transform 0.4s ease";

        element.addEventListener("mouseenter", function () {
          textBlock.style.opacity = "1";
          textBlock.style.transform = `translateY(-60px) scaleX(-1) rotateZ(-${cfg.rotateZ}deg)`;
        });

        element.addEventListener("mouseleave", function () {
          textBlock.style.opacity = "0";
          textBlock.style.transform = `translate(20px) scaleX(-1) rotateZ(-${cfg.rotateZ}deg)`;
        });
      }
    });
  }

  function init() {
    applyBreakpoint();
    hoverTxt();
    wrap.style.cursor = "pointer";
    wrap.style.touchAction = "pan-y";

    body.addEventListener("wheel", onWheel, { passive: true });
    wrap.addEventListener("pointerdown", onPointerDown);
    wrap.addEventListener("pointermove", onPointerMove);
    wrap.addEventListener("pointerup", onPointerUp);
    wrap.addEventListener("pointercancel", onPointerUp);

    body.addEventListener("touchstart", onTouchStart, { passive: true });
    body.addEventListener("touchmove", onTouchMove, { passive: true });
    body.addEventListener("touchend", onTouchEnd, { passive: true });

    window.addEventListener("resize", onResize);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
