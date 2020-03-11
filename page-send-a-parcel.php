<?php
	/*
	 * Template Name: Send A Parcel
	 */
	get_header();

	$theParent = wp_get_post_parent_id(get_the_ID());

	//while(have_posts()) {
	the_post(); ?>
<main id="main-content">
	<!-- [S] #contact -->
	<section id="international-banner">
		<div class="container international-banner-image" style="width: 55%;">
			<img class="banner-image" src="<?= get_field('hero_image')['url']; ?>" alt="<?= get_field('hero_image')['alt']; ?>">
			<?php get_template_part('quick-quote'); ?>
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
					<!--suppress XmlUnboundNsPrefix -->
					<li>
						<?php the_title(); ?>
					</li>
				</ul>
			</div>
		<?php endif; ?>
	</section>
	<hr>
	<section class="container" id="imports-form">
		<div class="row" style="margin: 15px;">
			<?php the_content(); ?>
		</div>
	</section>
</main>
<?php //}
	get_footer();
?>









