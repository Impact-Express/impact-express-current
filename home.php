<?php get_header();?>
<div class="col-md-8 main-content">
    <div  class="container-fluid">
        <h1 class="posts-title">
        Recent Blog Posts:
        </h1>
    </div>
</div>
<!-- main page content -->
<div style="margin-top: 10px;">
    <div class="container-fluid">
        <div class="columns is-multiline">
            <div class="col-md-8">
                <?php
                    if ( have_posts() )
                    {
                        while ( have_posts() ) {
                            the_post();
                            ?>
                            <!-- start of post -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><?= get_the_title(); ?></h4>
                                </div>
                                <div class="column col-md-4 post_thumb_img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        <?= get_the_excerpt(); ?>
                                    </p>
                                    <hr>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-sm" href="<?= get_the_permalink(); ?>">Read More</a>
                                    </div>
                                    <small>Posted by <a><?= get_the_author(); ?></a> at <?= get_the_time(); ?>, <?= get_the_date(); ?></small>
                                </div>
                            </div>
                            <!-- end of post -->
                        <?php
                        }
                    }
                ?>

                <!-- pagination -->
                <nav class="pagination">
                    <div class="pagination-fields">
                        <a class="btn btn-previous_next" href="<?= previous_posts_link(); ?>">&larr; Previous Page</a>
                        <a class="btn btn-previous_next" href="<?= next_posts_link(); ?>">Next Page &rarr;</a>
                    </div>
                </nav>
                <!-- end of pagination -->
            </div>
            <!-- sidebar content -->
            <?php get_sidebar() ?>
            <!-- end of sidebar content -->
        </div>
    </div>
</div>
<!-- end of main page content -->
<br><br><br>


<?php get_footer();?>
