const optionSlider = {
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      600: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  },
  firstSwiperSlider = new Swiper(
    '.first-slider .services__slider',
    optionSlider
  );
// secondSwiperSlider = new Swiper('.first-slider .second-slider', optionSlider),
// thirdSwiperSlider = new Swiper('.third-slider .second-slider', optionSlider);

const oneSwiperPrev = document.getElementById('oneSwiperPrev'),
  oneSwiperNext = document.getElementById('oneSwiperNext');
// twoSwiperPrev = document.getElementById('twoSwiperPrev'),
// twoSwiperNext = document.getElementById('twoSwiperNext'),
// threeSwiperPrev = document.getElementById('threeSwiperPrev'),
// threeSwiperNext = document.getElementById('threeSwiperNext');

oneSwiperPrev.addEventListener('click', () => {
  firstSwiperSlider.slidePrev();
});
oneSwiperNext.addEventListener('click', () => {
  firstSwiperSlider.slideNext();
});

// twoSwiperPrev.addEventListener('click', () => {
//     secondSwiperSlider.slidePrev();
// });
// twoSwiperNext.addEventListener('click', () => {
//     secondSwiperSlider.slideNext();
// });
//
// threeSwiperPrev.addEventListener('click', () => {
//     thirdSwiperSlider.slidePrev();
// });
// threeSwiperNext.addEventListener('click', () => {
//     thirdSwiperSlider.slideNext();
// });
