<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ground_Werks
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
	</footer><!-- #colophon -->
	<div class="container bottom-footer">
			<div class="bottom-footer__copyright">
				<span>copyright © 200-<?php echo date('Y'); ?> GroundWerks</span>
			</div>

			<div class="bottom-footer__credit">
				<span class="bottom-footer__credit-copy">Site by</span> <a href="http://creatix.io" target="_blank" class="bottom-footer__logo-link">
				<img class='bottom-footer__logo' src="<?php echo get_bloginfo('template_directory') . '/img/creatix-logo.png' ?>" alt="Creatix Online Marketing">
				</a>
			</div>
		</div><!-- .site-info
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
