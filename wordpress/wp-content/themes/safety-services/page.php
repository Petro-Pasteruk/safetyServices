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
                        <?php

                        $services_items = carbon_get_post_meta( get_the_ID(), 'tab');
                        $slider_arrow = carbon_get_post_meta( get_the_ID(), 'slider_img_arrow');
                        print_r($slider_arrow);
                        foreach ($services_items as $services_item) {

                        ?>
                            <li class="services__item"><?php echo $services_item['tab_title'] ?></li>
                        <?php
                        }
                        ?>
                    </ul>

                    <?php

                    $services_items = carbon_get_post_meta( get_the_ID(), 'tab');
                    foreach ($services_items as $services_item) {
                    ?>
                        <div class="services__slider-wrap">
                            <div class="services__slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    $slides = $services_item['slides_list'];
                                    foreach ($slides as $slide) {
                                    ?>

                                    <div class="slide swiper-slide">
                                        <img src="<?php echo $slide['slide_photo'] ?>" alt="slide img">
                                        <h5 class="slide__title"><?php echo $slide['slide_title'] ?></h5>
                                        <div class="slide__content"><?php echo $slide['slide_desc'] ?></div>
                                    </div>

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="swiper-navigation">
                                <button class="prevBtn">
                                    <img src="<?php echo $slider_arrow ?>" alt="arrow">
                                </button>
                                <button class="nextBtn">
                                    <img src="<?php echo $slider_arrow ?>" alt="arrow">
                                </button>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </article>
    </main>
</div>
<?php
get_footer();
