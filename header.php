<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Daily_Reading
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'daily-reading' ); ?></a>
	<div id="content" class="site-content">
		<div class="container-fluid">
			<?php 
				if (is_single()) {
					echo '<div id="site-title">
							<h1><a href="/" title="Home">Live Sent Together</a></h1>
						</div>';
				} else {
					
				}; 
			?>
			
			<div class="nav_wrapper">
	        	<nav id="site-navigation">
	        		<div id="nav-trigger">
	        			<span>Jump to Day</span>
	        		</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
			</div><!-- #site-navigation -->
