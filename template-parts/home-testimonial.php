<?php
//  VARS
$testimonial        = get_field('home_testimonial');
$testimonial_name   = get_field('home_testimonial_name');
$testimonial_img    = get_field('home_testimonial_image');
?>


<section class="section">
    <div class="container">
        <div class="sml med--half">
            <?php if($testimonial_img): ?>
                <img src="<?php echo $testimonial_img['url'] ?>"
                        alt="<?php echo $testimonial_img['alt'] ?>"
                        class="testimonial__img">
            <?php else: ?>
                <img src="https://unsplash.it/600/800" alt="" class="testimonial__img">
            <?php endif; ?>
        </div>
        
        <div class="sml med--half testimonial">
            <p class="testimonial__body">
                <span class="testimonial__quote">&ldquo;</span>
                <span class="testimonial__text">
                    <?php if($testimonial): ?>
                        <?php echo $testimonial; ?>
                    <?php else: ?>
                        <p>ENTER A TESTIMONIAL</p>
                    <?php endif; ?>
                </span>
                <span class="testimonial__quote">&rdquo;</span>
            </p>
            <h5 class="center testimonial__name">
                <?php if($testimonial_name): ?>
                        <?php echo $testimonial_name; ?>
                    <?php else: ?>
                        <p>ENTER A TESTIMONIAL NAME</p>
                    <?php endif; ?>
            </h5>
        </div>
    </div>
</section>