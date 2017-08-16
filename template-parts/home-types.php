<?php

//VARS
$work_types         = 'home_work_types';

?>

<section class="section">
    <div class="container home-types">
        <div class="sml sml--full">
            <h2 class="title home-types__title">Types of Work</h2>
        </div>
        <div class="sml home-types__main">
            <div class="home-type-main">
                <img src="<?php echo get_template_directory_uri() . '/img/house.svg' ?>" alt="" class="home-type-main__img">
                <hr class="home-type-main__hr">
                <h3 class="home-type-main__title">Residential<span class="home-type-main__plumbing">Plumbing</span></h3>
            </div>

            <div class="home-type-main">
                <img src="<?php echo get_template_directory_uri() . '/img/building.svg' ?>" alt="" class="home-type-main__img">
                <hr class="home-type-main__hr">
                <h3 class="home-type-main__title">Commercial<span class="home-type-main__plumbing">Plumbing</span></h3>
            </div>

            <div class="home-type-main">
                <img src="<?php echo get_template_directory_uri() . '/img/factory.svg' ?>" alt="" class="home-type-main__img">
                <hr class="home-type-main__hr">
                <h3 class="home-type-main__title">Industrial<span class="home-type-main__plumbing">Plumbing</span></h3>
            </div>

        </div>
        
        <?php
            // check if the repeater field has rows of data
            if( have_rows($work_types) ): ?>

            <div class="home-types-other">
                <h4 class="home-types-other__title">Other Types of Work Offered:</h4>
                <ul class="home-types-list">
                    <?php while( have_rows($work_types)): the_row();
                    ?>
                    <li class="home-type-item">
                        <?php the_sub_field('work_type'); ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>

        <?php endif; ?>
    </div>
</section>