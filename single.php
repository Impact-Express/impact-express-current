<?php get_header();?>
	<?php
		if ( have_posts() )
		{
			while ( have_posts() )
			{
				the_post();
				?>
				<!-- main page content -->
				<div class="main-content post-content">
					<div class="container-fluid col-md-8">
                        <?php if (has_post_thumbnail()){ ?>
                        <div class="post-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php } ?>
						<div class="col-md-12">
							<!-- start of post -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4><?= get_the_title(); ?></h4>
									</div>
									<div class="panel-body">
										<p>
											<?php the_content(); wp_link_pages(); ?>
										</p>
										<div class="pull-right">
											<a class="btn btn-default btn-sm" href="<?= site_url('/blog'); ?>">Back Home</a>
										</div>
									</div>
								</div>
							<!-- end of post -->
						</div>
                    </div>
                         <!-- sidebar content -->
                         <?php get_sidebar() ?>
                        <!-- end of sidebar content -->
                    <!-- end of main page content -->
                <!-- pagination -->
                <div class=" is-centered">
                    <nav class="pagination">
                        <div class="pagination-fields">
                            <div class="btn btn-previous_next btn-sm" href=""><?php previous_post_link('&larr; %link'); ?></div>
                            <div class="btn btn-previous_next btn-sm"><?php next_post_link('%link &rarr;'); ?></div>
                        </div>
                    </nav>
                </div>
                <!-- end of pagination -->
                <?php
            }
        }
    ?>
<?php get_footer();?>
