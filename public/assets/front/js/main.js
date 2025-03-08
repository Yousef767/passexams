let links = document.querySelectorAll(".link");

links.forEach((e) => {
  e.addEventListener("click", () => {
    links.forEach((e) => {
      e.classList.remove("active");
    });
    e.classList.add("active");
  });
});

let drop = document.querySelectorAll(".drop");

drop.forEach((e) => {
  e.addEventListener("click", () => {
    e.classList.toggle("active");
  });
});

let nav = document.querySelector("nav");
let menu = document.querySelector(".menu");

menu.addEventListener("click", () => {
  nav.classList.toggle("activeMenu");
});

// window.addEventListener('scroll',()=>{
//   if(window.scrollY >= 100){
//     nav.classList.add('color');
//   }else{
//     nav.classList.remove('color');
//   }
// })

let homeMedia = document.getElementById("homeMedia");
if (homeMedia) {
  homeMedia.addEventListener("click", () => {
    homeMedia.classList.toggle("active");
  });

  if (window.innerWidth <= 421) {
    homeMedia.addEventListener("mouseleave", () => {
      homeMedia.classList.remove("active");
    });
  }
}


let goTop = document.querySelector(".goTop");
let footer = document.querySelector("footer");

if (goTop) {
  goTop.addEventListener("click", () => {
    window.scrollTo(0, 0);
  });
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 500) {
      goTop.style.display = "block";
    } else {
      goTop.style.display = "none";
    }
  });
}
