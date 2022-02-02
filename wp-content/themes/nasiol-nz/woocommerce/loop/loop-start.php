<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="woocommerce_products">
    <div class="container">
        <div class="title_con">
            <h6>
                <?php
                $my_cat = get_queried_object();
                echo $my_cat->name;
                ?>
            </h6>
            <div class="grey_line"></div>
            <p>
                <?php echo $my_cat->description ?>
            </p>
        </div>
        <div class="row">
            <ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">