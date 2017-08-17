<?php
/*
Template Name: About Page
*/
get_header(); ?>

<?php
    //  Vars
$desc       = get_field('about_description');
$img       = get_field('about_image');
$ms_desc    = get_field('mission_statement_description');
?>



<div id="primary" class="content-area">
    <div id="main" class="site-main">

    <div class="container">
        <h1 class="title page-title"><?php echo wp_title(''); ?></h1>

        <p class="page-body">
            <?php if($img): ?>
                <img
                    src="<?php echo $img['url']; ?>"
                    alt="<?php echo $img['alt']; ?>">
            <?php endif; ?>
            <?php echo $desc;?>
        </p>

        <div class="about-ms">
            <h2 class="about-ms__title">Mission Statement</h2>
            <p class="about-ms__body">
                <?php echo $ms_desc; ?>
            </p>
        </div>
    </div>

    

    </div>
</div>


<?php 
get_footer();