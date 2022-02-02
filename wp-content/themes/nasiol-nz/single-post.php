<?php
/**
 *  Blog Detailed Page
 */
get_header();
?>

<?php
$brands_worked_with = get_field( 'brands_worked_with', 49 );
?>

<section id="uni_banner" style="background-image: url('<?php the_field( 'banner_image' ) ?>')">
    <div class="container">
        <div class="row">
            <div class="content_con">
                <div class="left" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="0">
                    <h1>
                        <?php the_field( 'banner_title' ) ?>
                    </h1>
                </div>
                <div class="right" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="0">
                    <span>
                        Follow us on
                    </span>
                    <div class="dash"></div>
                    <a target="_blank" href="https://www.facebook.com/nasiolove/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Forma 1 copy 42.svg" alt="">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/artekya">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/XMLID_801_2.svg" alt="">
                    </a>
                    <a target="_blank" href="https://www.youtube.com/nasiolnano">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/youtube (1)2.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog_details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <div class="left_con" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-lg-7">
                <div class="right_con">
                    <h5 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <?php the_title() ?>
                    </h5>
                    <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <?php echo get_the_date() ?>
                    </h6>
                    <div class="content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <?php the_field( 'content_at_right' ) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="below_content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <?php 
$comments = get_comments();
var_dump( $comments );
?> -->

<section id="comment_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-6">
                <div class="comment_form" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                    <?php comment_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

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