<?php
/*
Template Name: Contact
*/

//  Vars
$img = get_field('contact_img');

get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main">

        <div class="container">
            <h1 class="title page-title"><?php echo wp_title(''); ?></h1>
            <div class="sml med--half">
                <?php if($img): ?>
                    <img
                        src="<?php echo $img['url']; ?>"
                        alt="<?php echo $img['alt']; ?>"
                        class="contact__img"
                        >
                <?php endif; ?>
            </div>
            <div class="sml med--half">
                <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
            </div>
        </div>


    </div>
</div>


<?php 
get_footer();