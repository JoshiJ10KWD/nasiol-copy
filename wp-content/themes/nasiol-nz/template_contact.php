<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<?php
$universal_banner = get_field( 'universal_banner' );
$contact_details = get_field( 'contact_details' );
?>

<section id="uni_banner" style="background-image: url('<?php echo $universal_banner[ 'background_image' ] ?>')">
    <div class="container">
        <div class="row">
            <div class="content_con">
                <div class="left" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="0">
                    <h1>
                        <?php echo $universal_banner[ 'title' ] ?>
                    </h1>
                </div>
                <div class="right" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="0">
                    <span>
                        Follow us on
                    </span>
                    <div class="dash"></div>
                    <a target="_blank" href="<?php echo get_field( 'social_media', 'option' )[ 'facebook_url' ] ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Forma 1 copy 42.svg" alt="">
                    </a>
                    <a target="_blank" href="<?php echo get_field( 'social_media', 'option' )[ 'linkedin_url' ] ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/XMLID_801_2.svg" alt="">
                    </a>
                    <a target="_blank" href="<?php echo get_field( 'social_media', 'option' )[ 'youtube_url' ] ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/youtube (1)2.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact_form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content_con" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                <h6>
                    Get in touch with us on our details below or use our form and we will
                    get back to you as soon as we can.
                </h6>
            </div>
            <div class="col-sm-12 col-lg-9">
                <div class="form_con" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <?php echo do_shortcode( '[contact-form-7 id="57" title="Contact Us"]' ) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact_details">
    <div class="container"
        style="background-image: url( '<?php echo get_stylesheet_directory_uri() ?>/assets/img/Rectangle 573.jpg' )">
        <div class="row">
            <div class="col-sm-12 col-lg-7" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                <div class="left_con">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51064.83986119511!2d174.76564575237776!3d-36.877129102847725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fb5a9ce6fb%3A0x500ef6143a29917!2sAuckland%2C%20New%20Zealand!5e0!3m2!1sen!2s!4v1637923291368!5m2!1sen!2s"
                        width="600" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="right_con">
                    <h6>
                        <?php echo $contact_details[ 'title' ] ?>
                    </h6>
                    <p class="location">
                        <?php echo $contact_details[ 'address' ] ?>
                    </p>
                    <a href="tel:<?php echo $contact_details[ 'phone' ] ?>" class="phone">
                        <?php echo $contact_details[ 'phone' ] ?>
                    </a>
                    <a href="mailto:<?php echo $contact_details[ 'email' ] ?>" class="email">
                        <?php echo $contact_details[ 'email' ] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>