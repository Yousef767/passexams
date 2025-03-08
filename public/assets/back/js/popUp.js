let showPopUp = document.querySelectorAll("#show-popUp");
let popUp = document.getElementById("popUp");
let closeBtn = document.querySelectorAll("#close");

popUp.addEventListener("click", (e) => {
  if (e.target.className === "popUp") {
    popUp.style.display = "none";
  }
});

showPopUp.forEach((e) => {
  e.addEventListener("click", () => {
    popUp.style.display = "flex";
  });
});

closeBtn.forEach((e) => {
  e.addEventListener("click", () => {
    popUp.style.display = "none";
  });
});
