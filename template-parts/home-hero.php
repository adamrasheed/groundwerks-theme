<?php 

$hero_headline      = get_field('hero_headline');
$hero_image         = get_field('hero_image');
$hero_desc          = get_field('hero_description');
$hero_cta           = get_field('hero_cta');

$site_description   = get_field('site_description');

?>

<section class="section section--dark section--hero">

    <div class="container hero__container">
        <div class="sml med--half hero__info">
            <h1 class="hero__title">
                <?php if ($hero_headline) {
                    echo $hero_headline;
                } else {
                    echo 'ENTER A HEADLINE';
                } ?>
            </h1>
            <p class="hero__desc">
                <?php if ($hero_desc) {
                    echo $hero_desc;
                } else {
                    echo 'ENTER A DESCRIPTION';
                } ?>
            </p>
            <a 
            href="<?php echo get_page_link(40); ?>"
            class="btn btn--primary btn--large hero__cta">
                <?php if ($hero_cta) {
                    echo $hero_cta;
                } else {
                    echo 'ENTER A CTA';
                } ?>
            </a>
        </div><!-- end info -->

        <div class="sml med--half hero__img-cont">
            <?php if($hero_image): ?>
                <img
                    src="<?php echo $hero_image['url']; ?>"
                    alt="<?php echo $hero_image['alt']; ?>"
                >
            <?php else: ?>
                <img src="https://unsplash.it/800/600" alt="" class="hero__img">
            <?php endif; ?>
        </div>
    </div><!-- end hero container -->

</section>

<section>
    <div class="container container--center">
        <h2 class="center padding-1 tagline">
            <?php if ($site_description) {
                    echo $site_description;
                } else {
                    echo 'ENTER A DESCRIPTION';
                } ?>
        </h2>
    </div>
</section>