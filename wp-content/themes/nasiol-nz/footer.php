<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nasiol_NZ
 */

?>

<?php
$footer_options = get_field( 'footer_options', 'option' );
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-7">
                <div class="left_con_top" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                    <h6>
                        <?php echo $footer_options[ 'text_in_footer' ] ?>
                    </h6>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5">
                <div class="footer_form_con" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <?php echo do_shortcode( '[contact-form-7 id="17" title="Footer Form"]' ) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-lg-2">
                <div class="column_1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                    <a href="<?php echo site_url() ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Logo.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="column_2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'	=> 17,
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="column_3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="menu__items">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu'	=> 18,
                            )
                        );
                    	?>
                    </div>
                    <div class="social_media_links">
                        <ul>
                            <li>
                                <a target="_blank"
                                    href="<?php echo get_field( 'social_media', 'option' )[ 'facebook_url' ] ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Forma 1 copy 4.svg"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="<?php echo get_field( 'social_media', 'option' )[ 'linkedin_url' ] ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/XMLID_801_.svg"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="<?php echo get_field( 'social_media', 'option' )[ 'youtube_url' ] ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/youtube (1).svg"
                                        alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="column_4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="location">
                        <p>
                            <?php echo $footer_options[ 'address' ] ?>
                        </p>
                    </div>
                    <div class="email">
                        <a href="mailto:<?php echo $footer_options[ 'email' ] ?>">
                            <?php echo $footer_options[ 'email' ] ?>
                        </a>
                    </div>
                    <div class="phone">
                        <a href="tel:<?php echo $footer_options[ 'phone' ] ?>">
                            <?php echo $footer_options[ 'phone' ] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<div id="footer_bar">
    <div class="container">
        <div class="row">
            <div class="content_con">
                <div class="left_con">
                    <p>
                    <?php echo $footer_options[ 'copyright_text' ] ?>
                    </p>
                </div>
                <div class="right_con">
                    <p>
                        Website Design by:
                    </p>
                    <a href="http://kiwiwebsitedesign.nz/" target="_blank" rel="nofollow">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Group 17.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
AOS.init({
    startEvent: 'load',
});
</script>

</body>

</html>