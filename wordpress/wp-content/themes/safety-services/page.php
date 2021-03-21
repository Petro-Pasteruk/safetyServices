<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Safety_Services
 */

get_header();
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
    <nav class="nav" id="menu">
        <a href="#welcome" class="nav__item"><?php the_field('second_block_sup_title'); ?></a>
        <a href="#services" class="nav__item">Services</a>
        <a href="#contact" class="nav__item">Contact us</a>
    </nav>
    <main id="panel">
        <article class="intro" style="background: url(<?php the_field('intro_background'); ?>) no-repeat; background-size: cover;">
            <div class="sides-menu">
                <button class="sides-menu__btn">
                    <span class="sides-menu__btn-nav"></span>
                </button>
                <a href="<?php the_field('link_left_block'); ?>"><img src="<?php the_field('photo_link_left_block'); ?>" alt="instagram"></a>
            </div>
            <div class="container">
                <img src="<?php the_field('logo'); ?>" alt="logo" class="intro__logo">
                <h1 class="intro__heading"><span><?php the_field('main_header_first-part'); ?></span><br> <span><?php the_field('main_header_second-part'); ?></span></h1>
                <div class="intro__desc"><?php the_field('main_header_description'); ?></div>
            </div>
        </article>
        <article class="welcome" id="welcome" style="background: url(<?php the_field('second_block_background'); ?>) no-repeat; background-size: cover;">
            <div class="container">
                <div class="welcome__content">
                    <div class="sup-title"><?php the_field('second_block_sup_title'); ?></div>
                    <h3 class="title"><?php the_field('second_block_title'); ?></h3>
                    <div class="content"><?php the_field('second_block_content'); ?></div>
                </div>
                <img src="<?php the_field('second_block_img'); ?>" alt="people" class="welcome__img">
            </div>
        </article>
        <article class="counter" style="background: url(<?php the_field('third_block_background'); ?>) no-repeat; background-size: cover;">
            <div class="container">
                <ul class="counter__list">
                    <li class="counter__item">
                        <?php the_field('first_count'); ?>
                        <div class="counter__caption"><?php the_field('first_desc'); ?></div>
                    </li>
                    <li class="counter__item">
                        <?php the_field('second_count'); ?>
                        <div class="counter__caption"><?php the_field('second_desc'); ?></div>
                    </li>
                    <li class="counter__item">
                        <?php the_field('third_count'); ?>
                        <div class="counter__caption"><?php the_field('third_desc'); ?></div>
                    </li>
                    <li class="counter__item">
                        <?php the_field('fourth_count'); ?>
                        <div class="counter__caption"><?php the_field('fourth_desc'); ?></div>
                    </li>
                </ul>
            </div>
        </article>
        <article class="services" id="services" style="background: url(<?php the_field('fourth_block_background'); ?>) no-repeat; background-size: cover;">
            <div class="container">
                <div class="title"><?php the_field('fourth_block_title'); ?></div>
                <div class="content"><?php the_field('fourth_block_content'); ?></div>
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
                    <div class="second-slider services__slider-wrap">
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
                            <button id="twoSwiperPrev">
                                <img src="img/slider_arrow.png" alt="arrow">
                            </button>
                            <button id="twoSwiperNext">
                                <img src="img/slider_arrow.png" alt="arrow">
                            </button>
                        </div>
                    </div>
                    <div class="third-slider services__slider-wrap">
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
                            <button id="threeSwiperPrev">
                                <img src="img/slider_arrow.png" alt="arrow">
                            </button>
                            <button id="threeSwiperNext">
                                <img src="img/slider_arrow.png" alt="arrow">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
</div>
<?php
get_footer();
