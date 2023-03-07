<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress-backend-theme
 */

?>
<div class="footer-section">
	<div class="footer-section__col1 flex-display-start">
		<?php $footerlogo = get_field('footer_icon') ;?><img src="<?php echo $footerlogo ?>" class="footer__logo">
	</div>

	<div class="footer-section__col2">
		<nav id="site-navigation" class="footer__navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'map-menu',
				)
			);
			?>
		</nav>
		<p class="footer__credits">© Copyright 2023 HOA Management</p>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
