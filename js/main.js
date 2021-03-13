$(document).ready(function(){

    // Init Sliders
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
      };

    const
        firstSwiperSlider = new Swiper('.first-slider .services__slider', optionSlider),
        secondSwiperSlider = new Swiper('.second-slider .services__slider', optionSlider),
        thirdSwiperSlider = new Swiper('.third-slider .services__slider', optionSlider);

    // Add a slide switching event
    const
        oneSwiperPrev = document.getElementById('oneSwiperPrev'),
        oneSwiperNext = document.getElementById('oneSwiperNext'),
        twoSwiperPrev = document.getElementById('twoSwiperPrev'),
        twoSwiperNext = document.getElementById('twoSwiperNext'),
        threeSwiperPrev = document.getElementById('threeSwiperPrev'),
        threeSwiperNext = document.getElementById('threeSwiperNext');

    function addEventSliderArrow (slider, prevArrow, nextArrow) {
        prevArrow.addEventListener("click", () => { slider.slidePrev(); });
        nextArrow.addEventListener("click", () => { slider.slideNext(); });
    }

    addEventSliderArrow(firstSwiperSlider, oneSwiperPrev, oneSwiperNext);
    addEventSliderArrow(secondSwiperSlider, twoSwiperPrev, twoSwiperNext);
    addEventSliderArrow(thirdSwiperSlider, threeSwiperPrev, threeSwiperNext);

    // Hide sliders
    const
        $firstSlider = $(".first-slider"),
        $secondSlider = $(".second-slider"),
        $thirdSlider = $(".third-slider");

        $secondSlider.addClass("hidden");
        $thirdSlider.addClass("hidden");

    // Toggle Services tab
    const allServicesBtns = document.querySelectorAll(".services__item");
    allServicesBtns.forEach((item, index) => {
        item.addEventListener("click", function (e) {
            allServicesBtns.forEach(item => {
                item.classList.remove("active");
            });
            item.classList.add("active");

            if (index === 0) {
                $firstSlider.removeClass("hidden");
                $secondSlider.addClass("hidden");
                $thirdSlider.addClass("hidden");
            } else if (index === 1) {
                $firstSlider.addClass("hidden");
                $secondSlider.removeClass("hidden");
                $thirdSlider.addClass("hidden");
            } else if (index === 2) {
                $firstSlider.addClass("hidden");
                $secondSlider.addClass("hidden");
                $thirdSlider.removeClass("hidden");
            }
        });
    });

    // Open main menu
    const $sidesMenuBtn = $('.sides-menu__btn');
    $sidesMenuBtn.on('click', function(e) {
        if ($(this).hasClass("close")) {
            $sidesMenuBtn.removeClass("close");
            $(".sides-menu__btn-nav").removeClass("close");
            $("#menu").removeClass("active");
            $("body").css("overflow", "inherit");
        } else {
            $sidesMenuBtn.addClass("close");
            $(".sides-menu__btn-nav").addClass("close");
            $("#menu").addClass("active");
            $("body").css("overflow", "hidden");
        }
    });

    // Click main menu link
    const allNavItem = document.querySelectorAll(".nav__item");
    allNavItem.forEach(item => {
        item.addEventListener("click", function () {
            $(".sides-menu__btn").removeClass("close");
            $(".sides-menu__btn-nav").removeClass("close");
            $("#menu").removeClass("active");
            $("body").css("overflow", "inherit");
        });
    });

    // Smooth scrolling
    $("#menu").on("click","a", function (e) {
        e.preventDefault();
        const
            id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    // Validation form
    const
        nameReg = /(^[A-Z]{1}[a-z]{1,14} [A-Z]{1}[a-z]{1,14}$)|(^[А-Я]{1}[а-я]{1,14} [А-Я]{1}[а-я]{1,14}$)/,
        emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
        phoneReg = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;

    function inputValidation ($input, regular) {
        $input.on("input", function (e) {
            const $submitBtn = $(".questions__btn");

            if (regular.test($input.val())) {
                $input.css("border-color", "#1071b8");
                e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
            } else {
                $input.css("border-color", "red");
                e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
                $submitBtn.disabled = true;
                $submitBtn.addClass("disabled");
            }

            if (nameReg.test($("#name")) && emailReg.test($("#email")) && phoneReg.test($("#phone"))) {
                $submitBtn.disabled = false;
                $submitBtn.removeClass("disabled");
            }
        });
    }

    inputValidation($("#name"), nameReg);
    inputValidation($("#email"), emailReg);
    inputValidation($("#phone"), phoneReg);

    $("#text").on("input", function (e) {
        const $submitBtn = $(".questions__btn");

       if ($("#text").val().trim().length > 5) {
           $("#text").css("border-color", "#1071b8");
           e.target.parentElement.parentElement.querySelector(".error-text").classList.remove("active");
           $submitBtn.disabled = false;
           $submitBtn.removeClass("disabled");
       } else {
           $("#text").css("border-color", "red");
           e.target.parentElement.parentElement.querySelector(".error-text").classList.add("active");
           $submitBtn.disabled = true;
           $submitBtn.addClass("disabled");
       }
    });
});