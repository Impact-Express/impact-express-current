<?php

    get_header();

    $theParent = wp_get_post_parent_id(get_the_ID());

    //while(have_posts()) {
    the_post(); ?>

    <main id="main-content">
        <section id="services" class="services">
            <header class="page-header">
                <h1><?php the_title(); ?></h1>
            </header>

            <div class="container spacing" style="text-align: left;">
                <div class="level-content">
                    <div class="normal-text">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
        </section>
        
    </main>

<?php //}

get_footer();
?>