<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nasiol_NZ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<script language='javascript' type='text/javascript'>$(window).on('load',function(){$('#btnRML').css('transform','scale(1)');});function rmlCLick(){var webSiteId='533029B7-73A8-4930-BBBE-C740ECB80FE9';var curUrl=document.URL;var link='remindMeLater://home/';var newURL=link+curUrl+webSiteId;console.log(newURL);window.location.href=newURL;}</script> <button onClick='rmlCLick()' style='transition: 0.3s;display: block; position: fixed; bottom: 40px; right: 40px; z-index: 99; border: none; outline: none; background-color: inherit; cursor: pointer;' id='btnRML' > <img src='http://rml-staging-api.azurewebsites.net/logo/square.png'/> </button>

	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	
	
	
	
    <?php wp_head(); ?>
    <style>
    .navigation nav ul li {
        padding: 20px 0px;
        margin-left: 20px;
    }

    .sticky .navigation nav ul li {
        padding: 10px 0px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .navigation nav ul li a {
        /* font-family: 'Open Sans';
        font-size: 15px;
        text-transform: uppercase;
        color: #000000;
        text-decoration: none;
        font-weight: 600; */
    }



    .hamburgers { /* test */
        width: 30px;
        height: 25px;
        position: absolute;
        outline: none !important;
        top: 25px;
        right: 10px;
        border: none;
        padding: 0;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .5s ease-in-out;
        -moz-transition: .5s ease-in-out;
        -o-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        cursor: pointer;
    }

    .hamburgers span {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: #000;
        opacity: 1;
        left: 0;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .25s ease-in-out;
        -moz-transition: .25s ease-in-out;
        -o-transition: .25s ease-in-out;
        transition: .25s ease-in-out;
    }

    .navbar {
        position: unset !important;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .site-header.sticky .hamburgers span,
    .site-header.inner .hamburgers span {
        background: #33396B;
    }

    .hamburgers span:nth-child(1) {
        top: 0px;
    }

    .hamburgers span:nth-child(2),
    .hamburgers span:nth-child(3) {
        top: 10px;
    }

    .hamburgers span:nth-child(4) {
        top: 20px;
    }

    .hamburgers[aria-expanded="true"] span:nth-child(1) {
        top: 10px;
        width: 0%;
        left: 50%;
    }

    .hamburgers[aria-expanded="true"] span:nth-child(2) {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .hamburgers[aria-expanded="true"] span:nth-child(3) {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .hamburgers[aria-expanded="true"] span:nth-child(4) {
        top: 10px;
        width: 0%;
        left: 50%;
    }

    .site-header #navigation-main li:hover>ul.sub-menu {
        top: 55px !important;
    }

    .site-header ul.sub-menu>.sub-menu-wrap {
        background: #1B1B1B !important;
        padding: 10px;
        border-radius: 0px !important;
        border: none !important;
        padding-top: 28px;
        padding-bottom: 28px;
        padding-left: 37px;
        padding-right: 61px;
    }

    #masthead .right_con .sub-menu li a {
        font-size: 14px;
        margin-bottom: 15px;
    }

    #navigation-main {
        margin-left: 0px;
    }


    @media (min-width: 768px) {
        .site-header #navigation-main li:hover>ul.sub-menu {
            display: block;
            top: 30px;
            opacity: 1;
            z-index: 9999;
        }

        .site-header.home .navigation ul li:last-child,
        .site-header.inner .navigation ul li:last-child {
            padding-right: 0;
        }

        .site-header.sticky {
            position: fixed;
            width: 100%;
            z-index: 999;
            background: #fff;
        }

        @keyframes slide-down {
            0% {
                opacity: 0;
                transform: translateY(-110%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .site-header.inner .navigation ul li a.active,
        .site-header.inner .navigation ul li a:active,
        .site-header.inner .navigation ul li a:hover {
            / opacity: 0;/ transition: all 0.3s ease-in-out;
        }

        ul.sub-menu {
            background: transparent;
            position: absolute;
            left: auto;
            top: 80px;
            padding-left: 0;
            list-style: none;
            min-width: 200px;
            min-height: 80px;
            opacity: 0;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            margin: 0;
            visibility: hidden;
        }

        .site-header ul.sub-menu>.sub-menu-wrap {
            background: #0B0B0B;
            /* box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px, rgb(51 51 51) 0px 0px 0px 3px; */
            margin-top: 20px;
            border: 1px solid #F2B743;
        }

        .site-header.sticky ul.sub-menu>.sub-menu-wrap {
            margin-top: 22px;
        }


        #navigation-main li:hover {

            overflow: visible;
        }

        .site-header #navigation-main li:hover>ul.sub-menu {
            display: block;
            top: 60px;
            opacity: 1;
            visibility: visible;
        }

        .site-header.sticky #navigation-main li:hover>ul.sub-menu {
            display: block;
            top: 38px;
            opacity: 1;
        }

        .logo-link img {
            transition: 0.5s ease all;
        }

        .site-header.sticky .logo-link img {
            max-width: 50%;
            margin-left: 5px;
        }

        /* .site-header {
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
} */
        .navigation #navigation-main ul.sub-menu>.sub-menu-wrap>li {
            width: 100%;
            padding: 3px 15px;
            margin: 0px;
        }

        .navigation #navigation-main ul.sub-menu>.sub-menu-wrap>li:hover {
            background: rgba(242, 183, 67, 0.3)
        }

        .navigation #navigation-main ul.sub-menu li a {
            padding: 10px 0;
            display: inline-block;
            text-align: left;
            font-size: 13px;
            text-transform: unset;
        }
    }

    @media (max-width: 767px) {
        .site-header .row {
            padding: 15px 0px;
        }

        .navigation nav ul li {
            padding: 10px 0px 0px 0px;
            margin: 0;
        }

        #navigation-main {
            margin: 0;
            margin-bottom: 30px;
        }

        .navbar.navbar-expand-md {
            padding: 0%;
        }

        .sub-menu {
            list-style: none;
            padding: 0 0px 0px 10px;
            margin: 0;
        }

        .navigation nav ul li .sub-menu a {
            font-size: 13px;
        }

    }

    .navigation nav ul li ul li {
        border-bottom: 1px solid #F2B743;
    }

    .navigation nav ul li ul li a {
        border-bottom: 0px !important;
    }

    #masthead {
        /* padding-top: 10.2px;
        padding-bottom: 24px; */
    }

    /* #masthead .right_con {
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }

    #masthead .right_con ul li {
        margin-right: 15px;
    }

    #masthead .right_con ul li a {
        font-size: 16px;
        color: #000;
        font-weight: 300;
        font-family: 'Montserrat', sans-serif;
        transition: 0.7s;
    }

    #masthead .right_con ul li a:after {
        content: '';
        height: 2px;
        width: 0px;
        transition: 0.7s;
        background-color: #373F3C;
        position: absolute;
        left: 0;
        bottom: 0;
        margin-bottom: -2px;
    }

    #masthead .right_con ul li a:hover:after {
        width: 100%;
    }

    #masthead .right_con ul li a:hover {
        /* color: #D4E9E8; */
    }

    #masthead .col-sm-12:last-child {
        display: flex;
        align-items: center;
    }

    */ @media (max-width: 760px) {
        #masthead .logo_con {
            margin-bottom: 30px;
            text-align: center;
        }

        #masthead .right_con {
            /* margin-bottom: 30px; */
        }
    }
    </style>
    <style>
    #masthead .container {
        position: relative;
    }

    #masthead .container .row {
        position: absolute;
        top: 55px;
        width: 100%;
        z-index: 9;
    }

    #masthead .center_con {
        height: 100%;
        display: flex;
        justify-content: flex-end;
    }

    #masthead .center_con ul li {
        margin-left: 10px;
        margin-right: 10px;
    }

    #masthead .center_con ul li a {
        color: #fff;
        font-family: 'Avenir Regular';
        font-size: 16px;
        transition: 0.7s
    }

    #masthead .center_con ul li a:hover {
        color: #707070;
    }

    #masthead .right_con {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #masthead .right_con .dash {
        width: 12px;
        height: 1px;
        background-color: #FFFFFF;
        margin-right: 18px;
    }

    #masthead .right_con .phone a {
        color: #fff;
        font-family: 'Avenir Regular';
        font-size: 16px;
        transition: 0.7s;
        margin-right: 10px;
    }

    #masthead .right_con .phone a:hover {
        color: #707070;
    }

    #masthead .right_con .cart a {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #masthead .right_con .cart a img {
        /* margin-right: 3px; */
    }

    #masthead .right_con .cart a span {
        color: #fff;
        font-family: 'Avenir Regular';
        font-size: 12px;
        transition: 0.7s;
    }

    #masthead .right_con .cart a span:hover {
        color: #707070;
    }

    #masthead .center_con ul li:last-child {
        margin-bottom: 0px;
    }

    #masthead .center_con ul li ul li {
        margin-bottom: 20px;
        margin-left: 0px;
        margin-right: 0px;
    }

    @media (max-width: 1000px) {
        #masthead .right_con .dash {
            display: none;
        }

        #masthead .logo_con {
            text-align: center;
            margin-bottom: 30px;
        }

        #masthead .right_con {
            justify-content: center !important;
        }

        .hamburgers span {
            background-color: #fff;
        }

        #navigation-main {
            background: #1B1B1B;
            margin-top: 30px;
            padding: 20px;
        }

        .navbar {
            width: 100%;
        }

        #masthead .center_con ul li {
            text-align: center;
        }
    }
    </style>
    <style>
    #masthead .center_con ul .current-menu-item a {
        border-bottom: 1px solid #707070;
        color: #707070;
    }

    #masthead .center_con ul .current-menu-item ul li a {
        border-bottom: 0px;
        color: #fff;
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'nasiol-nz' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="container">
                <div class="row" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0">
                    <div class="col-sm-12 col-lg-2">
                        <div class="logo_con">
                            <a href="<?php echo site_url() ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-7">
                        <div class="center_con">
                            <nav class="navbar navbar-expand-md">
                                <button class="navbar-toggler hamburgers" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#main-navigation" aria-controls="main-navigation"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="main-navigation">
                                    <?php
										$menu_args = array(
											'menu'            => 'main-menu', //menu name
											'container'       => 'ul',
											'walker'          => new WPSE_78121_Sublevel_Walker,
											'menu_class'      => 'navbar-nav',
											'menu_id'         => 'navigation-main',
											'echo'            => true);
										wp_nav_menu($menu_args);
									?>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="right_con">
                            <div class="dash"></div>
                            <div class="phone">
                                <a href="tel:022 398 7004">022 398 7004</a>
                            </div>
                            <div class="dash"></div>
                            <div class="cart">
                                <a href="<?php echo site_url() ?>/cart">

                                    <?php global $woocommerce; ?>
                                    <?php if ( !WC()->cart->is_empty() ): ?>
                                    <span>
                                        <?php echo $woocommerce->cart->cart_contents_count; ?>
                                        Items in Cart
                                    </span>
                                    <?php endif; ?>
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bag.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->