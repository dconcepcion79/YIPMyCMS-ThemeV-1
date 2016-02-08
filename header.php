<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<body id="page-top" data-spy="scroll" data-target=".navbar">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> --> <?php //esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php // wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		<!-- </nav> --> <!-- #site-navigation --> 
        
        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="site-branding">
                  <div class="logo-wrap">
                        <?php $tpie_image_logo = get_theme_mod( 'regular_logo' ); ?>
                        <?php if (!empty($tpie_image_logo)) { ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo $tpie_image_logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
                                </a>
                        <?php } else { ?>
                            <?php if( is_front_page() || is_home() || is_404() ) { ?>
                                <h1 id="logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                </h1>
                            <?php } else { ?>
                                <h2 id="logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                </h2>
                            <?php } ?>
                        <?php } ?>
                    </div>
		      </div><!-- .site-branding -->
                <div class="search-box-wrap pull-right hidden-sm hidden-xs">
                    <div class="search-icon"></div>
                    <input id="search-box" placeholder="Search">
                </div>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mobile-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse mobile-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#home">CHANNELS</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">HOW TO WATCH</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">LOGIN/WATCH NOW</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">JOIN FREE</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        
	</header><!-- #masthead -->

	<div id="content" class="site-content">
