<?php
/*
 * Template Name: Worldwide Imports
 */
get_header();

$theParent = wp_get_post_parent_id(get_the_ID());

//while(have_posts()) {
the_post(); ?>
<main id="main-content">
    <!-- [S] #contact -->
    <section id="services" class="services">
        <div class="container" style="text-align: left;">
            <div >
                <img class="center-image" src="<?= get_field('imports_hero_image')['url']; ?>" alt="<?= get_field('imports_hero_image')['alt']; ?>">
                <!-- Breadcrumbs -->
            <?php if ($theParent): ?>
                <div class="container" style="text-align: left;">
                    You are here:
                    <a href="/">Home</a> >
                    <!--suppress XmlUnboundNsPrefix -->
                    <ul class="breadcrumbs">
                        <li>
                            <a href='/services'>Sevices</a> >
                        </li>
                        <!--suppress XmlUnboundNsPrefix -->
                        <li>
                            <?php the_title(); ?>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
            </div>
    </section>
    <section class="container-fluid" id="imports-description">
        <div class="col-lg-5" id="import-service-desc">
            <h3 class="lead-text">Worldwide Parcel Import Service</h3>
                <?= get_field('imports_service_description') ?>
            <br>
        </div>
        <div class="col-lg-5" id="why-import-desc">
            <h3 class="lead-text">Why should I use Impact Express for my imports?</h3>
                <?= get_field('why_should_i_description') ?>
        </div>
    </section>
    <section class="container-fluid" id="imports-form">
        <?= do_shortcode('[contact-form-7 id="2567" title="Import Request Form" html_class="import-request-form"]'); ?>
    </section>
</main>
<?php //}
get_footer();
?>









