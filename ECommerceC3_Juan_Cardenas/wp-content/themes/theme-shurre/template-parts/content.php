<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-shurre
 */

?>
<div class="card">	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<div class="card-title teal lighten-2"><h4 class="white-text center-align">', '</div></h4>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="center-align">
				<?php
					theme_shurre_posted_on();
					theme_shurre_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->
		<div class="card-image responsive-img" style="width: 40%; margin:auto;">
			<?php theme_shurre_post_thumbnail(); ?>
		</div>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'theme-shurre' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theme-shurre' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->		
	</article><!-- #post-<?php the_ID(); ?> -->
</div>