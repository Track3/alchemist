<?php
/**
 * Template part for displaying post excerpts, used by archive and search pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alchemist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('trad-style'); ?>>
	<header class="entry-header">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'alchemist' ) );
			if ( $categories_list ) : ?>
			<span class="entry-categories"><?php echo $categories_list; ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="post-date"><i class="far fa-calendar-alt"></i> <?php echo(get_the_date()); ?></span>
			<?php
			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				comments_popup_link(
					'<i class="far fa-comment"></i>' . ' ' . __('No Comment', 'alchemist'),
					'<i class="far fa-comment"></i>' . ' ' . __('1 Comment', 'alchemist'),
					'<i class="far fa-comments"></i>' . ' ' . __('% Comments', 'alchemist'),
					'comments-link'
				);
			}
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php 
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'alchemist' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
