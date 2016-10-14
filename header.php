<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WePick
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

<?php 

$wepick_settings_options_hero = get_option( 'wepick_settings_option_hero' ); // Array of All Options
$hero_section = $wepick_settings_options_hero['hero_section'];
$cta_hero_text = $wepick_settings_options_hero['cta_hero_text'];
$cta_url_hero_section = $wepick_settings_options_hero['cta_url_hero_section'];
$hero_app_screen_1 = $wepick_settings_options_hero['hero_app_screen_1'];
$hero_app_screen_2 = $wepick_settings_options_hero['hero_app_screen_2'];

?>

<style>

	.front-screen:before {
		background-image: url(<?php echo $hero_app_screen_1; ?>);
	}

	.back-screen:before {
		background-image: url(<?php echo $hero_app_screen_2; ?>);
	}

</style>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wepick' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="columns small-12">
				<div class="site-header-inner">	
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="fa fa-reorder"></i>
						</button>
						<div class="menu-primary-container">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div><!-- .menu-primary-container -->
					</nav><!-- #site-navigation -->
				</div><!-- .site-header-inner -->
			</div><!-- /columns -->
		</div><!-- /row -->
		<div class="row">
			<div class="columns small-6">
				<div class="branding branding-left">
						<h1 class="site-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-logo.svg" alt="" />
						</h1><!-- .site-logo -->
						<div class="site-desc">
							<?php echo $hero_section; ?>
						</div><!-- .site-desc -->
						<div class="site-cta">
							<a href="#" class="button primary glass big border-primary"><?php echo $cta_hero_text; ?> <i class="fa fa-arrow-circle-o-right"></i> </a>
						</div><!-- .site-cta -->
					</div><!-- .branding-left -->
				
			</div>
			<div class="columns small-6">
				<div class="branding branding-right">
					<div class="feature-screens">
						<div class="screens front-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone-white.png" alt="" />
						</div><!-- .front-screen -->
						<div class="screens back-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone-black.png" alt="" />
						</div><!-- .back-screen -->						
					</div><!-- .feature-screens -->
				</div><!-- .branding-right -->
			</div><!-- .columns small-6 -->
		</div><!-- .row -->
	</header><!-- #site-header -->

	<div id="content" class="site-content">
						
