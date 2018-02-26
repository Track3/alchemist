<?php
/**
 * Template part for displaying a list of posts, used by homepage.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alchemist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('list-style'); ?>>
	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<div class="entry-meta">
		<time class="post-date"><?php echo(the_date('m-d')); ?></span>
	</div><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->