<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alchemist
 */

?>

	<footer id="colophon" class="site-footer">
		<nav id="social-icons">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social-menu',
					'menu_id'        => 'social-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'    => '</span>'
				) );
			?>
		</nav><!-- #social-icons -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alchemist' ) ); ?>" target="_blank"><?php
				printf('Powered by WordPress');
			?></a>
			<span class="sep"> | </span>
			<?php
				printf('Theme: <a href="https://github.com/Track3/Alchemist">Alchemist</a> by <a href="https://www.xxxlbox.com" target="_blank">Track3</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #site-wrapper -->

<aside id="site-sidebar">
	<div class="sidebar-wrapper">
		<div class= "sidebar-container">
			<div class="sidebar-inner">
				<div class="btn-hide-sidebar">
					<a class="sidebar-toggle" onclick="ToggleSidebar()"><i class="fas fa-times"></i></a>
				</div>
				<nav id="site-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary-menu',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
				<?php get_search_form();
				if(is_dynamic_sidebar()) dynamic_sidebar('sidebar');?>
			</div>
		</div>
	</div>
</aside><!-- #site-sidebar -->

<?php wp_footer(); ?>

</body>
</html>
