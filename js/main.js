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

const sidesMenuBtn = document.querySelector('.sides-menu__btn');

// Toggle button
sidesMenuBtn.addEventListener('click', function(e) {
    if (sidesMenuBtn.classList.contains("close")) {
        sidesMenuBtn.classList.remove("close");
        document.querySelector(".sides-menu__btn-nav").classList.remove("close");
        document.querySelector("#menu").classList.remove("active");
        $("body").css("overflow", "inherit");
    } else {
        sidesMenuBtn.classList.add("close");
        document.querySelector(".sides-menu__btn-nav").classList.add("close");
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
    $("#menu").on("click","a", function (e) {
        e.preventDefault();

        const
            id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });
});

$("#name").on("input", function (e) {
    const nameReg = /(^[A-Z]{1}[a-z]{1,14} [A-Z]{1}[a-z]{1,14}$)|(^[А-Я]{1}[а-я]{1,14} [А-Я]{1}[а-я]{1,14}$)/;

    if (nameReg.test($("#name").val())) {
        $("#name").css("border-color", "#1071b8");
        e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
    } else {
        $("#name").css("border-color", "red");
        e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
    }
});

$("#email").on("input", function (e) {
    const emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (emailReg.test($("#email").val())) {
        $("#email").css("border-color", "#1071b8");
        e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
    } else {
        $("#email").css("border-color", "red");
        e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
    }
});

$("#phone").on("input", function (e) {
    const phoneReg = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;

    if (phoneReg.test($("#phone").val())) {
        $("#phone").css("border-color", "#1071b8");
        e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
    } else {
        $("#phone").css("border-color", "red");
        e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
    }
});

$("#text").on("input", function (e) {
   if ($("#text").val().trim().length > 5) {
       $("#text").css("border-color", "#1071b8");
       e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
   } else {
       $("#text").css("border-color", "red");
       e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
   }
});