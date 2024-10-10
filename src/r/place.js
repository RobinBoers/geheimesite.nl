// Important: if you update this file, make sure to also update
// the according SHA256 hash in the CSP.
//
//    cat src/r/place.js | openssl dgst -sha384 -binary | openssl base64 -A
//

console.log("IT WORKS :)");

const cooldown = 3;

const display = document.querySelector(".cooldown");
const pixels = document.querySelectorAll("td");

// Fancy timer at the top of the screen counting down.
let timer = cooldown - timeSinceLastMove();
if (timer < 0) timer = 0;

function tick() {
  if (timer > 0) {
    display.innerText = timer;
    timer -= 1;
  } else display.innerText = "";
}

tick();
window.setInterval(tick, 1000);

pixels.forEach((pixel) => {
  pixel.addEventListener("click", (e) => {
    if (timeSinceLastMove() >= cooldown) {
      const x = pixel.getAttribute("data-x");
      const y = pixel.getAttribute("data-y");

      resetCooldown();
      setPixel(x, y);
    }
  });
});

function timeSinceLastMove() {
  const lastMove = new Date(localStorage.getItem("lastMove"));
  const difference = Date.now() - lastMove.getTime();

  // Time difference is in milliseconds.
  return Math.floor(difference / 1000);
}

function resetCooldown() {
  localStorage.setItem("lastMove", new Date());
}

function setPixel(x, y) {
  document.querySelector("[name='x']").value = x;
  document.querySelector("[name='y']").value = y;
  document.querySelector("form").submit();
}
