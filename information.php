<?php
/*
 * Template Name: Information
 */
get_header();

$theParent = wp_get_post_parent_id(get_the_ID());

//while(have_posts()) {
the_post(); ?>

    <main id="main-content">
        <section id="services" class="services">

            <div class="container" style="text-align: left;">
                <div class="service-image">
                    <img src="<?= get_field('hero_image')['url']; ?>" alt="<?= get_field('hero_image')['alt']; ?>">
                </div>
                <!-- Breadcrumbs -->
                <?php if ($theParent): ?>
                    <div class="container" style="text-align: left;">
                        You are here:
                        <a href="/">Home</a> >
                        <!--suppress XmlUnboundNsPrefix -->
                        <ul class="breadcrumbs">
                            <li>
                                <a href='/services'>Information</a> >
                            </li>
                            <!--suppress XmlUnboundNsPrefix -->
                            <li>
                                <?php the_title(); ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <br>
                <div class="level-content">
                    <div class="normal-text">
                        <?php the_content(); ?>
                    </div>
                    <br>
                </div>

            </div>
        </section>
    </main>

<?php //}

get_footer();
?>