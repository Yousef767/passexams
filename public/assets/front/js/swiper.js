var swiper = new Swiper(".coSlider", {
  slidesPerView: 1,
  spaceBetween: 20,
  autoplay: {
    delay: 2000,
    disableOnInteraction: true,
  },
  breakpoints: {
    300: {
      slidesPerView: 2,
    },
    400: {
      slidesPerView:3,
    },
    600: {
      slidesPerView:3,
    },
    1250: {
      slidesPerView: 4,
    },
  },
});



var swiper3 = new Swiper(".exams", {
  slidesPerView: 1,
  spaceBetween: 20,
  keyboard: {
    enabled: true,
  },
  speed:400,
  autoplay: {
    delay: 2000,
    disableOnInteraction: true,
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
    },
    360: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },
    600: {
      slidesPerView: 1.5,
    },
    800: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 2.5,
    },
    1150: {
      slidesPerView: 3,
    },
    1250: {
      slidesPerView: 4,
    },
  },
});

