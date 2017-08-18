<?php
/*
Template Name: Projects
*/

//  Vars
$project_desc = get_field('project_description');
$project_img = get_field('project_images');

get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main">

        <div class="container">
            <h1 class="title page-title"><?php echo wp_title(''); ?></h1>

            <div class="wrapper">
                <?php get_template_part( 'template-parts/content', 'project' ); ?>
            </div>

        </div>

    </div>
</div>


<?php 
get_footer();