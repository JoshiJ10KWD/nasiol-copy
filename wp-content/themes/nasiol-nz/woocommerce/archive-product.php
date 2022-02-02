<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<section id="uni_banner" style="background-image: url('<?php echo site_url() ?>/wp-content/uploads/2021/11/uni-header-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="content_con">
                <div class="left" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="0">
                    <h1>
                        Products
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

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

$catalogs = get_field( 'catalogs', 15 );
$brands_worked_with = get_field( 'brands_worked_with', 15 );
?>

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

<?php
get_footer( 'shop' );
?>

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
