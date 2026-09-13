const circle = document.getElementById("circle");
let mouseX = 0;
let mouseY = 0;
let currentX = 0;
let currentY = 0;
let animationId = null;

document.addEventListener("mousemove", (event) => {
  mouseX = event.clientX;
  mouseY = event.clientY;
});

function animate() {
  currentX += (mouseX - currentX) * 0.2;
  currentY += (mouseY - currentY) * 0.2;

  circle.style.left = currentX + "px";
  circle.style.top = currentY + "px";

  animationId = requestAnimationFrame(animate);
}
animate();

document.addEventListener("mousedown", () => {
  circle.classList.add("clicked");
});

document.addEventListener("mouseup", () => {
  circle.classList.remove("clicked");
});

document.addEventListener("visibilitychange", () => {
  if (document.hidden) {
    if (animationId) {
      cancelAnimationFrame(animationId);
    }
  } else {
    animate();
  }
});
