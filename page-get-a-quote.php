<?php
	/*
	 * Template Name: Get a Quote
	 */
	get_header();

	$theParent = wp_get_post_parent_id(get_the_ID());

	//while(have_posts()) {
	the_post(); ?>
<main id="main-content" style="margin-bottom: 50px;">
	<!-- [S] #contact -->
    <div class="container" style="padding-top: 50px">
		<section class="col-sm-4" id="get-a-guote-left">
				<i class="fas fa-pencil-alt fa-3x"></i>
		<div class="row">
			<h2 style="font-weight: 500; display: inline-block">Get a</h2><h2 style="display: inline;"> Quote</h2>
            <h5>Please fill out the form and a member of the team will be in touch</h5>
		</div>
		</section>
		<section class="col-sm-7" id="get-a-quote-right">
			<div class="row">
				<?php the_content() ?>
			</div>
		</section>
	</div>
</main>
<?php //}
	get_footer();
?>
