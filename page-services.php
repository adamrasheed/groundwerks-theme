<?php
/*
Template Name: Services
*/

//  Vars
$service_list  = 'service_list';


get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main">

        <div class="container container--center">
            <h1 class="title page-title"><?php echo wp_title(''); ?></h1>
            <h3 class="title page-subtitle">We Provide The Following Services:</h3>

            <?php if( have_rows($service_list)): ?>
            <div class="sml services-list">
                <?php while( have_rows($service_list)): the_row(); ?>
                    <h5 class="service"><?php the_sub_field('service'); ?></h5>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

        </div>

    <!-- 
        // Top Services
        // Service List
        // Contact
    -->

    </div>
</div>


<?php 
get_footer();