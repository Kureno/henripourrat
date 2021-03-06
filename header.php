<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="masthead" class="site-header" role="banner">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <img class='nav_logo' src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo sahp"/>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">

                <?php if ( function_exists('yoast_breadcrumb') ) {
                     yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                 } ?>
