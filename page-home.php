<?php
/*
Template Name: Home
*/

//  VARS
$testimonial        = get_field('home_testimonial');

get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main">
        <?php get_template_part( 'template-parts/home', 'hero' ); ?>
        <?php get_template_part( 'template-parts/home', 'types'); ?>
        <?php get_template_part( 'template-parts/home', 'projects'); ?>
        <?php // get_template_part( 'template-parts/home', 'services'); ?>

        <?php if($testimonial): ?>
            <?php get_template_part( 'template-parts/home', 'testimonial'); ?>
        <?php endif; ?>
        <?php get_template_part( 'template-parts/home', 'contact'); ?>
    </div>
</div>

<?php 
get_footer();