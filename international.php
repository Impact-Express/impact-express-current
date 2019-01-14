<?php
/*
 * Template Name: International Pricing Page
 */
get_header();

$theParent = wp_get_post_parent_id(get_the_ID());

//while(have_posts()) {
the_post(); ?>
dadsadasdas
    <main id="main-content">
        <section id="services" class="services">
            <div class="container" style="text-align: left;">

                <div class="country-image">
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
                                <a href='/services'>Sevices</a> >
                            </li>
                            <li>
                                <a href='<?= get_permalink($theParent); ?>'><?= get_the_title($theParent); ?></a> >
                            </li>
                            <!--suppress XmlUnboundNsPrefix -->
                            <li>
                                <?php the_title(); ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>

                <div id="country-top-text">
                    <?php if (get_field('top_text')): ?>
                    <br>
                        <?= get_field('top_text');?>
                    <?php endif;?>
                </div>
                <div id="country-left-text">
                    <?php if (get_field('left_text')): ?>
                        <br>
                        <?= get_field('left_text'); ?>
                        <br>
                    <?php endif;?>
                </div>
                <?php get_template_part('quick-quote'); ?>
                <div id="country-bottom-text">
                    <?php if (get_field('bottom_text')): ?>
                        <br>
                        <?= get_field('bottom_text'); ?>
                        <br>
                    <?php endif;?>
                </div>
            </div>
        </section>
    </main>

<?php //}

get_footer();
?>