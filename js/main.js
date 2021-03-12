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

const allServicesBtns = document.querySelectorAll(".services__item");

allServicesBtns.forEach(item => {
    item.addEventListener("click", function (e) {
        allServicesBtns.forEach(item => {
            item.classList.remove("active");
        });
        item.classList.add("active");
    });
});

// Toggle button
document.querySelector('.sides-menu__btn-nav').addEventListener('click', function(e) {
    if (e.target.classList.contains("close")) {
        e.target.classList.remove("close");
        document.querySelector("#menu").classList.remove("active");
        $("body").css("overflow", "inherit");
    } else {
        e.target.classList.add("close");
        document.querySelector("#menu").classList.add("active");
        $("body").css("overflow", "hidden");
    }
});

const allNavItem = document.querySelectorAll(".nav__item");

allNavItem.forEach(item => {
    item.addEventListener("click", function () {
        document.querySelector(".sides-menu__btn-nav").classList.remove("close");
        document.querySelector("#menu").classList.remove("active");
        $("body").css("overflow", "inherit");
    });
});

$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();

        const
            id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });
});
