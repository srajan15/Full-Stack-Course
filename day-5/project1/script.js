const btn = document.querySelector("button");
const h1 = document.querySelector("h1");

btn.addEventListener("click", handleClick);

//btn.removeEventListener("click", handleClick);

function getRandomNumber(value) {
  return Math.floor(Math.random() * value);
}

function handleClick() {
  let color;
  const r = getRandomNumber(256);
  const g = getRandomNumber(256);
  const b = getRandomNumber(256);
  color = `rgb(${r}, ${g}, ${b})`;
  document.body.style.backgroundColor = color;
  h1.innerHTML = color;
}
