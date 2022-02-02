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
 * @package Nasiol_NZ
 */

get_header();
?>

<section id="uni_banner" style="background-image: url('<?php echo site_url() ?>/wp-content/uploads/2021/11/uni-header-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="content_con">
                <div class="left">
                    <h1>
                        <?php the_title() ?>
                    </h1>
                </div>
                <div class="right">
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

<section id="generic_page">
    <div class="container">
        <div class="row">
            <main id="primary" class="site-main">

                <?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

            </main><!-- #main -->
        </div>
    </div>
</section>

<?php
get_sidebar();
get_footer();