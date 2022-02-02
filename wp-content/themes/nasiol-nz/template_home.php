<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<?php
$banner = get_field( 'banner' );
$about_us = get_field( 'about_us' );
$area_of_expertise = get_field( 'area_of_expertise' );
$shop_categories = get_field( 'shop_categories' );
$industrial_solutions = get_field( 'industrial_solutions' );
$catalogs = get_field( 'catalogs' );
$brands_worked_with = get_field( 'brands_worked_with' );
$testimonials = get_field( 'testimonials' );
?>

<section id="home_banner" style="background-image: url('<?php echo $banner[ 'background_image' ] ?>')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="left_con">
                                <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                                    <?php echo $banner[ 'subtitle' ] ?>
                                </h6>
                                <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                                    <?php echo $banner[ 'title' ] ?>
                                </h1>
                                <div class="bottom_con">
                                    <div class="left" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                                        <a href="<?php echo $banner[ 'button_url' ] ?>" class="btnn">
                                            <span><?php echo $banner[ 'button_text' ] ?></span>
                                        </a>
                                    </div>
                                    <div class="right" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                                        <a download href="<?php echo $banner[ 'downloadable_file' ] ?>">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Group 4648.svg"
                                                alt="">
                                        </a>
                                        <span>Download<br>
                                            Our Catalogue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="right_con" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                                <img src="<?php echo $banner[ 'right_image' ] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="follow_us">
    <div class="container">
        <div class="row">
            <div class="content_con" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="0">
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
                    <a data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" href="<?php echo $about_us[ 'button_url' ] ?>" class="btnn__black">
                        <span><?php echo $about_us[ 'button_text' ] ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="area_of_expertise">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <div class="left_con">
                    <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                        <?php echo $area_of_expertise[ 'title' ] ?>
                    </h6>
                    <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <?php echo $area_of_expertise[ 'description' ] ?>
                    </p>
                    <a data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" href="<?php echo $area_of_expertise[ 'button_url' ] ?>" class="btnn__black btnn__lg">
                        <span><?php echo $area_of_expertise[ 'button_text' ] ?></span>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7">
                <div class="container">
                    <div class="row">

                        <?php 
                        $counter = 1;
                        foreach( $area_of_expertise[ 'boxes' ] as $box ): 
                        ?>
                        <div class="col-sm-12 col-lg-6" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                            <div
                                class="<?php if ( $counter % 2 != 0 ) { echo 'left_box'; } else { echo 'right_box'; } ?> <?php if ( $counter < 3 ) { echo 'padding_top_0'; } ?>">
                                <div class="img_con">
                                    <img src="<?php echo $box[ 'image' ] ?>" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="96.556" height="37.874"
                                        viewBox="0 0 96.556 37.874">
                                        <path id="Path_10780" data-name="Path 10780"
                                            d="M-11997,1809.926V1825.8a10.292,10.292,0,0,0,5,6.8c4.2,2.2,42.8,15.2,42.8,15.2l43.8-15.2s3.8-1.4,4.6-6.8,0-15.874,0-15.874Z"
                                            transform="translate(11997 -1809.926)" fill="#d9d9d9" />
                                    </svg>
                                </div>
                                <h6>
                                    <?php echo $box[ 'title' ] ?>
                                </h6>
                                <p>
                                    <?php echo $box[ 'description' ] ?>
                                </p>
                            </div>
                        </div>
                        <?php 
                        $counter++;
                        endforeach; 
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="three_col_sec">
    <div class="container-fluid">
        <div class="row">

            <?php foreach( $shop_categories as $cat ): ?>
            <div class="col-sm-12 col-lg-4" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                <div class="box_con" style="background-image: url('<?php echo $cat[ 'background_image' ] ?>')">
                    <h6>
                        <?php echo $cat[ 'title' ] ?>
                    </h6>
                    <a href="<?php echo $cat[ 'button_url' ] ?>" class="btnn">
                        <span><?php echo $cat[ 'button_text' ] ?></span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

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

<section id="catalogs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="img_con" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                    <img src="<?php echo $catalogs[ 'left_image' ] ?>" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="tabs_con">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                        <li class="nav-item" role="presentation">
                            <button class="active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                <span><?php echo $catalogs[ 'tab_1' ][ 'name' ] ?></span>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Path 10782.svg"
                                    alt="">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">
                                <span><?php echo $catalogs[ 'tab_2' ][ 'name' ] ?></span>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Path 10782.svg"
                                    alt="">
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                                <?php echo $catalogs[ 'tab_1' ][ 'title' ] ?>
                            </h6>
                            <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                                <?php echo $catalogs[ 'tab_1' ][ 'description' ] ?>
                            </p>
                            <a data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600" download href="<?php echo $catalogs[ 'tab_1' ][ 'file_to_download' ] ?>"
                                class="btnn__black">
                                <span>Download</span>
                            </a>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <h6>
                                <?php echo $catalogs[ 'tab_2' ][ 'title' ] ?>
                            </h6>
                            <p>
                                <?php echo $catalogs[ 'tab_2' ][ 'description' ] ?>
                            </p>
                            <a download href="<?php echo $catalogs[ 'tab_2' ][ 'file_to_download' ] ?>"
                                class="btnn__black">
                                <span>Download</span>
                            </a>
                        </div>
                    </div>
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

<section id="home_testimonials"
    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/zac-nielson-YOcxav3eFw4-unsplash.jpg')">
    <div class="container">
        <div class="row">
            <div class="content_con">
                <h6 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                    <?php echo $testimonials[ 'title' ] ?>
                </h6>
            </div>
        </div>
        <div class="row">
            <div class="testimonial_slider_con">

                <?php foreach( $testimonials[ 'testimonial' ] as $testimonial ): ?>
                <div class="box_con" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
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
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<section id="home_latest_news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top_con">
                    <div class="left" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="0">
                        <h6>
                            Latest News
                        </h6>
                        <div class="grey_line"></div>
                    </div>
                    <div class="right" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <a href="<?php echo site_url() ?>/blog" class="btnn__white">
                            <span>View All</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $blogs = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 3
            ));
            while( $blogs->have_posts() ): $blogs->the_post();
            ?>
            <div class="col-sm-12 col-lg-4" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">
                <a href="<?php the_permalink() ?>">
                    <div class="blog_box_con">
                        <div class="img_con">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>"
                                alt="">
                        </div>
                        <div class="bottom">
                            <span class="date">
                            <?php echo get_the_date() ?>
                            </span>
                            <h6 class="title">
                                <?php the_title() ?>
                            </h6>
                            <p>
                                <?php echo wp_trim_words( get_the_content(), 20 ) ?>
                            </p>
                            <a href="<?php the_permalink() ?>" class="btnn__white">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>

<?php get_footer();?>

<script>
$('.slider_main_con').slick({
    vertical: true,
    verticalSwiping: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: `<img class="slick-prev slick-arrow" src="../../../wp-content/themes/nasiol-nz/assets/img/diagonal-next.svg">`,
    nextArrow: `<img class="slick-next slick-arrow" src="../../../wp-content/themes/nasiol-nz/assets/img/diagonal-next.svg">`,
});

$('.testimonial_slider_con').slick({
    infinite: true,
	centerMode: true,
	centerPadding: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: `<img class="slick-prev slick-arrow" src="../../../wp-content/themes/nasiol-nz/assets/img/Group 4617.svg">`,
    nextArrow: `<img class="slick-next slick-arrow" src="../../../wp-content/themes/nasiol-nz/assets/img/Group 4616.svg">`,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
</script>