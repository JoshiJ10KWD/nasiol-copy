<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<?php
$universal_banner = get_field( 'universal_banner' );
$about_us = get_field( 'our_company' );
$expertise = get_field( 'expertise_and_values' );
$industrial_solutions = get_field( 'industrial_solutions' );
$brands_worked_with = get_field( 'brands_worked_with' );
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

<section id="about_us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="left_con">
                    <img data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0" src="<?php echo $about_us[ 'back_image' ] ?>" alt="" class="top_left">
                    <img data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300" src="<?php echo $about_us[ 'front_image' ] ?>" alt="" class="bottom_right">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="right_con">
                    <h6 class="title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                        <?php echo $about_us[ 'title' ] ?>
                    </h6>
                    <div class="grey_line" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100"></div>
                    <p class="subtitle" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <?php echo $about_us[ 'subtitle' ] ?>
                    </p>
                    <div class="content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                        <?php echo $about_us[ 'content' ] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="expert_and_value">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-7">
                <div class="left_con">
                    <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                        <?php echo $expertise[ 'title' ] ?>
                    </h6>
                    <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" class="content">
                        <?php echo $expertise[ 'content' ] ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5">
                <div class="right_con" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="400">
                    <img src="<?php echo $expertise[ 'right_image' ] ?>"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="industrial_solutions"
    style="background-image: url('<?php echo $industrial_solutions[ 'background_image' ] ?>')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content_con">
                    <button data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Group 4613.svg" alt="">
                    </button>
                    <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <?php echo $industrial_solutions[ 'title' ] ?>
                    </h6>
                    <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <?php echo $industrial_solutions[ 'subtitle' ] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="560" height="315" src="<?php echo $industrial_solutions[ 'youtube_embedded_url' ] ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<section id="brands_worked_with">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <div class="left_con">
                    <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                        <?php echo $brands_worked_with[ 'title' ] ?>
                    </h6>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7">
                <div class="slider_main_con" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">

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