<?php

//	VARS
 $phone 	= get_field('company_phone', 'option');
 $email 	= get_field('company_email', 'option');

?>

<div class="top-header">
		<div class="container top-header__container">
            <!-- mobile link -->
			<a href="mailto:<?php echo $email; ?>"
				target="_blank"
				class="top-header__mobile-link">
				<i class="top-header__mobile-link-icon fa fa-envelope-o" aria-hidden="true"></i>
				<span class="top-header__mobile-link-text">
					Email Us
				</span>
			</a>

            <a href="mailto:<?php echo $email; ?>"
				target="_blank"
				class="top-header__link">
				<i class="top-header__link-icon fa fa-envelope-o" aria-hidden="true"></i>
				<span class="top-header__link-text">
					<?php echo $email; ?>
				</span>
			</a>

            <!-- mobile link -->
            <a href="tel:<?php echo $phone; ?>"
				target="_blank"
				class="top-header__mobile-link"
            >
				<i class="top-header__mobile-link-icon fa fa-phone" aria-hidden="true"></i>
				<span class="top-header__mobile-link-text">
					Call Us
				</span>
			</a>

			<a href="tel:<?php echo $phone; ?>"
				target="_blank"
				class="top-header__link top-header__link--phone">
				<i class="top-header__link-icon fa fa-phone" aria-hidden="true"></i>
				<span class="top-header__link-text">
					<?php echo $phone; ?>
				</span>
			</a>
		</div><!-- end top header container-->
	</div>