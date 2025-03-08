let navLinks = document.querySelectorAll(".nLink");

function setActive() {
  let currentPath = window.location.href.split('/');
  let path3 = currentPath[3];
  let path4 = currentPath[4];

  navLinks.forEach(link => {
    let linkText = link.innerText.toLowerCase().split(' ');
    if (path3.includes(linkText[0]) || path3.includes(linkText[0]) || path4.includes(linkText[0]) || path4.includes(linkText[1]) )  {
      link.classList.add('active');
    }
  });
}

document.addEventListener('DOMContentLoaded',()=>{
  setActive();
})

let menuBtn = document.getElementById("menu");
let dcont = document.querySelector('.dcont');

menuBtn.addEventListener("click", () => {
  dcont.classList.toggle("showNavLinks");
});
