<?php 
    $args = array(
        'post_type' => 'projects',
        'order' => 'DESC',
        );
    $the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    
        $desc = get_field('project_description');
        $images = get_field('project_images');

    ?>

        <div class="container project">
            <div class="sml project__info">
                <h3 class="project__title"><?php the_title(); ?></h3>
                <p class="project__desc" ><?php echo $desc; ?></p>
            </div>

            <?php if($images): ?>
            <div class="project__gallery">
                <?php foreach($images as $image): ?>
                    <a href="<?php echo $image['url']; ?>" class="project__img-link" target="_blank">
                        <img
                            src="<?php echo $image['sizes']['medium']; ?>"
                            alt=""
                            class="project__img"
                        >
                    </a>
                <?php endforeach;?>
            </div>
            <?php endif ;?>
            <?php wp_reset_postdata(); ?>

        </div>

    <?php endwhile;  ?>

<?php endif; ?>