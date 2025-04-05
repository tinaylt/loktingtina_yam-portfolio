export function heroHover() {
    const hero = document.querySelector("#hero-section");

    let mouseX = 0, mouseY = 0;
    let targetX = 0, targetY = 0;
    const speed = 0.04;

document.addEventListener("mousemove", (e) => {
  const centerX = window.innerWidth / 2;
  const centerY = window.innerHeight / 2;

  targetX = (e.clientX - centerX) * 0.02;
  targetY = (e.clientY - centerY) * 0.02;
});

function animate() {
  mouseX += (targetX - mouseX) * speed;
  mouseY += (targetY - mouseY) * speed;

  hero.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
  
  requestAnimationFrame(animate);
}

animate();

}
