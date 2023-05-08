<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php luciacare_schema_type(); ?>>

<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2480891282368590"
     crossorigin="anonymous"></script>
    <script type="text/javascript" id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="45680e25-7857-4808-a2ae-00bdefc0dc89" data-consentmode="disabled"></script>


    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&family=Sora:wght@200;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css?rnd=' . filemtime(get_template_directory_uri() . '/style.css') ?>">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php if (function_exists('gtm4wp_the_gtm_tag')) {
        gtm4wp_the_gtm_tag();
    } ?>
    <div id="wrapper" class="hfeed">
        <div class="top-bar">

            <?php $currentLang = apply_filters('wpml_current_language', NULL);
            ?>
            <ul id="info--list">
                <?php if ($currentLang != 'da') { ?>
                    <li class="info--items"><?php _e('Free shipping over EUR 150', 'lucia-en'); ?></li>
                <?php } else { ?>
                    <li class="info--items">1-3 dages levering</li>
                    <li class="info--items">Altid fri fragt i DK</li>
                <?php } ?>
            </ul>

            <div class="top-bar-links">
                <div class="wpml_currency">
                    <?php
                    do_action('wcml_currency_switcher', array(
                        'format' => '%code%',
                        'switcher_style',
                    ));

                    ?>
                </div>

                <div id="language_selector">
                    <?php language_selector();
                    ?>
                </div>

                <a id="login" href="

<?php
if (is_user_logged_in()) {
    echo get_permalink(wc_get_page_id('myaccount'));
} else {
    echo get_permalink(wc_get_page_id('myaccount'));
}
?>">
                    <?php
                    if (is_user_logged_in()) {
                        echo _e('My Account', 'default');
                    } else {
                        echo _e('Login / Register', 'default');
                    }
                    ?>
                </a>



            </div>
        </div>
        <header id="masthead" role="banner">
            <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php /* get_template_part( 'template-parts/header/site-nav' ); */ ?>
            <div class="site-navigation-burger">
                <i class="icon-burger menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </i>
            </div>
            <div class="navigation--container">
                <div class="navigation--container_inner">
                    <i class="icon-close menu-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></i>
                    <nav id="menu-mobile" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                        <!--    <div id="search"><?php get_search_form(); ?></div> -->
                    </nav>

                    <?php dynamic_sidebar('mobile-nav-extra-widget-area'); ?>


                </div>
                <div class="navigation--socials">
                    <?php dynamic_sidebar('mobile-nav-socials-widget-area'); ?>
                </div>
            </div>
            <div class="site-logo mobile"><?php the_custom_logo(); ?></div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                <!--    <div id="search"><?php get_search_form(); ?></div> -->
            </nav>

            <div class="site-icons">

                <a href="<?php echo wc_get_page_permalink('cart') ?>">
                    <i class="icon-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="cart--amount" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>"><?php echo sprintf(_n('%d', '%d', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?></span>
                    </i>
                </a>
            </div>

        </header>
        <div id="container">
            <main id="content" role="main">
