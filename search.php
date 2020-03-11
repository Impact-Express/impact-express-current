<?php get_header();?>
<div class="col-md-8 main-content">
    <div  class="container-fluid">
		<?php 
			$s=get_search_query();
			$args = array(
				's' =>$s,
				'post_type' => 'post'
			);
		// The Query
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			_e('<h2 class="posts-title">Search Results for: '.get_query_var('s').'</h2>');
		} ?>
    </div>
</div>
<!-- main page content -->
<div style="margin-top: 10px;">
    <div class="container-fluid">
        <div class="nothing-found">
            <div class="col-md-8">
				<?php 
					// The Query
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
						$the_query->the_post();
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
					<?php }?>
					<?php } else {?>
				<h2>Nothing Found</h2>
					<div class="alert alert-info">
						<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>	
					</div>
				<?php } ?>
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
