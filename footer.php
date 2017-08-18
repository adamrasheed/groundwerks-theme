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

 $license 	= get_field('company_license', 'option');
 $dir 		= get_field('company_dir', 'option');

 $address 	= get_field('company_address', 'option');

 $name 	 	= get_field('company_name', 'option');
 $phone 	= get_field('company_phone', 'option');
 $fax 	 	= get_field('company_phone', 'option');
 $phone 	= get_field('company_phone', 'option');

 $yelp 		= get_field('yelp', 'option');
 $facebook 	= get_field('facebook', 'option');

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer site-footer">
		<div class="container footer-container">
			<div class="footer-column">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
					) );
				?>
			</div>

			<div class="footer-column">
				<h5>License Number</h5>
				<p><?php echo $license; ?></p>

				<h5>DIR Number</h5>
				<p><?php echo $dir ?></p>
			</div>

			<div class="footer-column footer-column--double">
				<?php if($address): ?>
				<h5>Address</h5>
				<p>
					<span><?php echo $address['street']; ?></span><br>
					<span><?php echo $address['city']; ?> </span>
					<span><?php echo $address['state']; ?></span>
				</p>
				<?php endif; ?>

				<h5>Phone</h5>
				<p><a href="tel:<?php echo $phone; ?>" target="_blank"><?php echo $phone; ?></a></p>

				<h5>Fax</h5>
				<p><?php echo $fax; ?></p>

				<div class="footer-social">
					<?php if($yelp): ?>
						<a href="<?php echo $yelp; ?>"
						class="footer-social__link"
						title="yelp"
						target="_blank">
							<i class="fa fa-yelp"></i>
						</a>
					<?php endif; ?>
					<?php if($facebook): ?>
						<a href="<?php echo $facebook; ?>"
						class="footer-social__link"
						title="facebook"
						target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="container bottom-footer">
			<div class="bottom-footer__copyright">
				<span>copyright &copy; <?php echo date('Y'); ?> GroundWerks</span>
			</div>

			<div class="bottom-footer__credit">
				<span class="bottom-footer__credit-copy">Site by</span> <a href="http://creatix.io" target="_blank" class="bottom-footer__logo-link">
				<img class='bottom-footer__logo' src="<?php echo get_template_directory_uri() . '/img/creatix-logo.png' ?>" alt="Creatix Online Marketing">
				</a>
			</div>
		</div><!-- .site-info
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
