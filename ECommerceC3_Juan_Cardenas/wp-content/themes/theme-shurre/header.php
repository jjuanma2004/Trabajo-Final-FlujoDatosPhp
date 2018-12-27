<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-shurre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
	<div class="row">
		<div class="col m2 l2 s2">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.PNG" style="width: 100%;" class="center-align" />	
					
		<?php get_sidebar(); ?>
			
		</div>
		<div class="col m10 l10 s10">
			<header id="masthead" class="site-header">
				<nav class="nav-wrapper">
					<ul id="nav-mobile" class="right">
						<li class="white-text"><a>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1'
								) );
							?>
						</a></li>
					</ul>
				</nav>
			</header><!-- #masthead -->
		
	<div id="content" class="site-content">

			
	