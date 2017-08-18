
<?php 
    $args = array(
        'post_type' => 'projects',
        'order' => 'DESC',
        'posts_per_page' => 1,
        );
    $the_query = new WP_Query( $args ); 
?>

<section class="section">
    <div class="container home-projects">
    <div class="sml med--half home-projects__info">
        <h2 class="title home-projects__title">Recent Projects</h2>
        <p class="home-projects__desc">
            Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
        </p>
        <a href="<?php echo get_page_link(97); ?>" class="btn btn--primary">View all Projects</a>
    </div>

    
    <div class="sml med--half">

        <div class="box project-preview">
            <a href="<?php echo get_page_link(97); ?>" class="project-preview__link">

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();
            
            // Vars
            $desc = get_field('project_description');
            $images = get_field('project_images');
            
            ?>

            <?php if($images): ?>
                <img
                src="<?php echo $images[0]['url'] ?>"
                alt="<?php echo $images[0]['alt'] ?>"
                class="project-preview__img">
            <?php endif ;?>

            <div class="project-preview__info">
                <h5 class="project-preview__category">Latest Project</h5>
                <h3 class="project-preview__title"><?php the_title(); ?></h3>
                <p class="small light project-preview__desc">
                    Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </a>
        </div><!-- end porject preview -->
    </div>
</div>
</section>




