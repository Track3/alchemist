<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alchemist
 */

get_header(); ?>

	<main id="site-main">

		<div class="single-php">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			echo('<div class="section-inner">');
			the_post_navigation( array(
				'prev_text'                  => __( 'Prev: ', 'alchemist' ) . '%title',
				'next_text'                  => __( 'Next: ', 'alchemist' ) . '%title',
			) );
			echo('</div>');

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>

	</main><!-- #site-main -->

<?php
get_footer();
