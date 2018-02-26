<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alchemist
 */

get_header();?>

	<main id="site-main">

		<div class="section-inner index-php">

		<?php
		if (have_posts()):

			$old_year = '1';
			/* Start the Loop */
			while (have_posts()): the_post();

				// Get the date of the current post
				$current_year = get_the_date('Y');

				// If it's different than the old year, output the current year
				if ($current_year != $old_year) {
					echo ('<time class="common-year">' . $current_year . '</time>');
				}

				// Update the old_year variable
				$old_year = $current_year;

				get_template_part('template-parts/content', 'list');

			endwhile;

			the_posts_navigation();

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>

		</div>

	</main><!-- #site-main -->

<?php
get_footer();
