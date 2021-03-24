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

    // Init sliders, add event switching slides
    const
        allSlidersWrap = document.querySelectorAll(".services__slider"),
        slidersInit = [];

    allSlidersWrap.forEach((item, index) => {
        item.dataset.id = index + "";
    });

    allSlidersWrap.forEach((item, index) => {
        slidersInit.push(new Swiper (".services__slider[data-id='" + index + "']", optionSlider));

        item.parentElement.querySelector(".prevBtn").addEventListener("click", function () {
            slidersInit[index].slidePrev();
        });

        item.parentElement.querySelector(".nextBtn").addEventListener("click", function () {
            slidersInit[index].slideNext();
        });
    });

    // Hide sliders
    const allSliders = document.querySelectorAll(".services__slider-wrap");

    allSliders.forEach((item, index) => {
        if (index !== 0) {
            item.classList.add("hidden");
        }
    });


    // Active services tab
    document.querySelector(".services__item").classList.add("active");

    // Toggle Services tab
    const allServicesBtns = document.querySelectorAll(".services__item");
    allServicesBtns.forEach((item, index) => {
        item.addEventListener("click", function (e) {
            allServicesBtns.forEach(item => {
                item.classList.remove("active");
            });
            item.classList.add("active");
            allSliders.forEach((itemSlider, indexSlider) => {
                if (index === indexSlider) {
                    itemSlider.classList.remove("hidden");
                } else {
                    itemSlider.classList.add("hidden");
                }
            });
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