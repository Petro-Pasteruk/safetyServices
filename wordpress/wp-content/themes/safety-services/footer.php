<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Safety_Services
 */

?>

<footer id="footer" style="background: url(<?php the_field('footer_background'); ?>) no-repeat; background-size: cover;">
    <div class="container">
        <div class="footer__businesswoman">
            <img src="<?php the_field('footer_main_img'); ?>" alt="business woman">
        </div>
        <div class="contact" id="contact">
            <h5 class="contact__heading"><?php the_field('footer_title'); ?></h5>
            <div class="contact__desc"><?php the_field('footer_desc'); ?></div>
            <div class="contact__phone">
                <img src="<?php the_field('footer_phone_icon'); ?>" alt="phone">
                <div>
                    <?php the_field('footer_phone_number'); ?>
                    <div class="contact__phone-desc">
                        <?php the_field('footer_opening_schedule'); ?>
                    </div>
                </div>
            </div>
            <div class="contact__email">
                <img src="<?php the_field('footer_email_icon'); ?>" alt="email">
                <span><?php the_field('footer_email'); ?></span>
            </div>
            <img src="<?php the_field('footer_logo'); ?>" alt="logo">
        </div>
        <div class="questions">
            <h5 class="questions__heading"><?php the_field('footer_form_title'); ?></h5>
            <div class="questions__desc"><?php the_field('footer_form_sub_title'); ?></div>
            <form action="<?php echo get_template_directory_uri(); ?>/send.php"  id="form" method="POST">
                <div class="questions__form-block">
                    <div style="position: relative;">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <span class="error-text">Invalid syntax</span>
                </div>
                <div class="questions__form-block two-input">
                    <div>
                        <div style="position: relative;">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <span class="error-text">Invalid syntax email</span>
                    </div>
                    <div>
                        <div style="position: relative;">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="000-000-00-00">
                        </div>
                        <span class="error-text">Invalid syntax phone</span>
                    </div>
                </div>
                <div class="questions__form-block">
                    <div style="position: relative;">
                        <label for="text">Text</label>
                        <input type="text" name="text" id="text">
                    </div>
                    <span class="error-text">Invalid syntax text</span>
                </div>
                <div class="questions__form-block">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
            </form>
            <button type="submit" form="form" class="questions__btn disabled" disabled><?php the_field('footer_submit_btn'); ?></button>
        </div>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.services__first-slider', {
        spaceBetween: 20,
        slidesPerView: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>