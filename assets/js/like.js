const likeBtn = document.querySelector(".like__btn");
let likeIcon = document.querySelector(".bb"),
  count = document.querySelector(".count");

let clicked = false;

likeBtn.addEventListener("click", () => {
  if (!clicked) {
    clicked = true;
    likeIcon.innerHTML = `<a class="god">&#128525;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</a>`;
    count.textContent++;
  } else {
    clicked = false;
    likeIcon.innerHTML = `<a class="god">&#x1F60C;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</a>`;
    count.textContent--;
  }
});
