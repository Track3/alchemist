<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alchemist
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area section-inner">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( $comment_count == 1 ) {
				_e( '1 Comment Already', 'alchemist' );
			} else {
				printf( __( '%s Comments Already', 'alchemist' ), $comment_count );
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 0,
					'style'       => 'ol',
					'short_ping'  => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
