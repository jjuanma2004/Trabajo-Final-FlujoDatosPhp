<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-shurre
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h4 class="center-align"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		
	</header><!-- .entry-header -->

	<div class="card-image responsive-img" style="margin-left: 25%;">
		<?php theme_shurre_post_thumbnail(); ?>
	</div>
	

	
	
</article><!-- #post-<?php the_ID(); ?> -->
