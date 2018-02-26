<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alchemist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<?php 
		
		the_title( '<h1 class="post-title section-inner">', '</h1>' );

		if ( 'post' === get_post_type() ) : ?>

			<div class="post-summary section-inner">
				<?php if ( has_excerpt() ) the_excerpt(); ?>
			</div><!-- .post-summary -->
		
			<div class="post-meta section-inner">

				<?php echo __( 'In', 'alchemist' ) . ' '; the_category( ', ' );

				if ( comments_open() ) : ?>
					<span>&bull;</span>
					<span class="post-comments-link">
						<?php comments_popup_link( __('Add Comment', 'alchemist'), __('1 Comment', 'alchemist'), __('% Comments', 'alchemist') );?>
					</span>
				<?php endif; ?>

			</div><!-- .post-meta -->

		<?php
		endif; ?>

		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('post-thumbnail', ['class' => 'feature-image']);
		}?><!-- .feature-image -->

	</header><!-- .post-header -->

	<div class="post-content section-inner">
		<?php
			the_content();
		?>
	</div><!-- .post-content -->

	<footer class="post-footer section-inner">
		<?php if ( get_the_tags() ) : ?>
		<p class="tags"><?php the_tags( ' #', ' #', ' ' ); ?></p>
		<?php endif; ?>
		<p class="post-date"><?php echo(get_the_date()); ?></p>
	</footer><!-- .post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
