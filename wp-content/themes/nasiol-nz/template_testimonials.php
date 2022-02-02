<?php
/**
 * Template Name: Testimonials
 */
get_header();
?>

<?php
$universal_banner = get_field( 'universal_banner' );
$brands_worked_with = get_field( 'brands_worked_with', 49 );
$testimonials = get_field( 'testimonial' );
?>

<section id="uni_banner"
    style="background-image: url('<?php echo $universal_banner[ 'background_image' ] ?>')">
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

<section id="testimonials">
    <div class="container">
        <div class="row">
            
            <?php foreach( $testimonials as $testimonial ): ?>
            <div class="col-sm-12 col-lg-4" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                <div class="box_con">
                    <p class="content">
                        <?php echo $testimonial[ 'message' ] ?>
                    </p>
                    <div class="bottom_con">
                        <div class="left">
                            <h6>
                                <?php echo $testimonial[ 'name' ] ?>
                            </h6>
                            <p>
                                <?php echo $testimonial[ 'designation' ] ?>
                            </p>
                        </div>
                        <div class="right">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/right-quote-sign.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<section id="brands_worked_with">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <div class="left_con" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                    <h6>
                        <?php echo $brands_worked_with[ 'title' ] ?>
                    </h6>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7">
                <div class="slider_main_con" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">

                    <?php foreach( $brands_worked_with[ 'slide' ] as $slide ): ?>
                    <div class="slider">
                        <div class="imgs_con">
                            <img src="<?php echo $slide[ 'image' ] ?>" alt="">
                            <img src="<?php echo $slide[ 'image_2' ] ?>" alt="">
                            <img src="<?php echo $slide[ 'image_3' ] ?>" alt="">
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
$('.slider_main_con').slick({
    vertical: true,
    verticalSwiping: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: `<img class="slick-prev slick-arrow" src="../../../wp-content/themes/nasiol-nz/assets/img/diagonal.svg">`,
    nextArrow: `<img class="slick-next slick-arrow" src="../../../wp-content/themes/nasiol-nz/assets/img/diagonal-next.svg">`,
});
</script>