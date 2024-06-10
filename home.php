<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>
    <section class="hero">
        <div class="hero__container">
            <div class="hero__text-block">
                <h3 class="hero__sub-title">
                    <?php  the_field('sub-title') ?>
                </h3>

                <h1 class="hero__heading">
                    <?php  the_field('heading') ?>
                </h1>

                <p class="hero__text">
                    Crafting innovative solutions tailored to your needs. Let's redefine your digital journey together.
                </p>

                <a class="hero__btn" href="#">
                    Get started a project
                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 11L11.5 1M11.5 1H1.5M11.5 1V11" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="hero__illustration">
                <img class="hero__img" src="<?php bloginfo('template_url'); ?>/assets/img/browser.webp" alt="illustration" width="592" height="449">
            </div>
        </div>
    </section>
<?php get_footer();?>