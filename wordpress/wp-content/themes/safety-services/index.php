<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Safety_Services
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safety services provider</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>
<div id="wrapper">
    <main>
        <article class="intro">
            <div class="sides-menu">
                <button class="sides-menu__btn-nav"></button>
                <a href="/"><img src="img/instagram.png" alt="instagram"></a>
            </div>
            <div class="container">
                <img src="img/logo.png" alt="logo" class="intro__logo">
                <h1 class="intro__heading"><span>Your safety &</span><br> <span>compliane partner</span></h1>
                <div class="intro__desc">A dedicated and experienced team to help you with your trucking needs.</div>
            </div>
        </article>
        <article class="welcome">
            <div class="container">
                <div class="welcome__content">
                    <div class="sup-title">We help you</div>
                    <h3 class="title">Welcome</h3>
                    <div class="content">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</div>
                </div>
                <img src="img/welcome_people.png" alt="people" class="welcome__img">
            </div>
        </article>
        <article class="counter">
            <div class="container">
                <ul class="counter__list">
                    <li class="counter__item">
                        869
                        <div class="counter__caption">Global brand</div>
                    </li>
                    <li class="counter__item">
                        876
                        <div class="counter__caption">Happy client</div>
                    </li>
                    <li class="counter__item">
                        876
                        <div class="counter__caption">Happy client</div>
                    </li>
                    <li class="counter__item">
                        869
                        <div class="counter__caption">Global brand</div>
                    </li>
                </ul>
            </div>
        </article>
        <article class="services">
            <div class="container">
                <div class="title">Services</div>
                <div class="content">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </div>
                <div class="services__sliders">
                    <ul class="services__nav">
                        <li class="services__item active">Title processing</li>
                        <li class="services__item">Trailer plates</li>
                        <li class="services__item">Base plates</li>
                    </ul>

                    <div class="first-slider services__slider-wrap">
                        <div class="services__slider">
                            <div class="swiper-wrapper">
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                                <div class="slide swiper-slide">
                                    <img src="img/slider__plug.png" alt="plug">
                                    <h5 class="slide__title">IRP Registation (New/text)</h5>
                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <button id="oneSwiperPrev">
                                <img src="img/slider_arrow.png" alt="arrow">
                            </button>
                            <button id="oneSwiperNext">
                                <img src="img/slider_arrow.png" alt="arrow">
                            </button>
                        </div>
                    </div>
<!--                    <div class="second-slider services__slider-wrap">-->
<!--                        <div class="services__slider">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="swiper-navigation">-->
<!--                            <button id="twoSwiperPrev">-->
<!--                                <img src="img/slider_arrow.png" alt="arrow">-->
<!--                            </button>-->
<!--                            <button id="twoSwiperNext">-->
<!--                                <img src="img/slider_arrow.png" alt="arrow">-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="third-slider services__slider-wrap">-->
<!--                        <div class="services__slider">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                                <div class="slide swiper-slide">-->
<!--                                    <img src="img/slider__plug.png" alt="plug">-->
<!--                                    <h5 class="slide__title">IRP Registation (New/text)</h5>-->
<!--                                    <div class="slide__content">We can transfer titles of any motorcycle, passenger vehicle, truck, tractor or trailer.</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="swiper-navigation">-->
<!--                            <button id="threeSwiperPrev">-->
<!--                                <img src="img/slider_arrow.png" alt="arrow">-->
<!--                            </button>-->
<!--                            <button id="threeSwiperNext">-->
<!--                                <img src="img/slider_arrow.png" alt="arrow">-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </article>
    </main>
</div>

<?php
get_footer();
