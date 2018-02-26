<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Alchemist
 */

get_header(); ?>

	<main id="site-main">

		<section class="error-404 not-found section-inner">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'alchemist' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'alchemist' ); ?></p>

				<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
				?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #site-main -->

<?php
get_footer();
