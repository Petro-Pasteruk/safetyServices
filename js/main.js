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


function inputValidation ($input, regular) {
    $input.on("input", function (e) {
        const submitBtn = $(".questions__btn");

        if (regular.test($input.val())) {
            $input.css("border-color", "#1071b8");
            e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
            submitBtn.disabled = false;
            submitBtn.removeClass("disabled");
        } else {
            $input.css("border-color", "red");
            e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
            submitBtn.disabled = true;
            submitBtn.addClass("disabled");
        }
    });
}

const
    nameReg = /(^[A-Z]{1}[a-z]{1,14} [A-Z]{1}[a-z]{1,14}$)|(^[А-Я]{1}[а-я]{1,14} [А-Я]{1}[а-я]{1,14}$)/,
    emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
    phoneReg = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;

inputValidation($("#name"), nameReg);
inputValidation($("#email"), emailReg);
inputValidation($("#phone"), phoneReg);

$("#text").on("input", function (e) {
    const submitBtn = $(".questions__btn");

   if ($("#text").val().trim().length > 5) {
       $("#text").css("border-color", "#1071b8");
       e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
       submitBtn.disabled = false;
       submitBtn.removeClass("disabled");
   } else {
       $("#text").css("border-color", "red");
       e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
       submitBtn.disabled = true;
       submitBtn.addClass("disabled");
   }
});