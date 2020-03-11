<?php get_header(); ?>
    <main id="main-content">
        <section id="services" class="services srv-spacing">
            <div class="container-fluid seperator services-content">
			<!-- EXPRESS SECTION -->
			    <div class="express-delivery-image">
					<a href="<?= get_field('express_image_url');?>">
					<img src="<?= get_field('express_image')['url']; ?>" 
							alt="<?= get_field('express_image')['alt']; ?>">
					</a>
					</div>
					<h3 class="express-delivery-title">
						<a href="<?= get_field('express_image_url');?>">
							EXPRESS - Worldwide Tracked Delivery
						</a>
					</h3>
						<div class="express-delivery-description">
							<?= get_field('express_description'); ?>
						</div>
				<!-- END EXPRESS -->
			</div>
			<div class="container-fluid seperator services-content">
			<!-- ECONOMY SECTION -->
				<div class="economy-delivery-image">
				<a href="<?= get_field('economy_image_url');?>">
					<img src="<?= get_field('economy_image')['url']; ?>" 
							alt="<?= get_field('economy_image')['alt']; ?>">
				</a>
				</div>
					<h3 class="economy-delivery-title">
						<a href="<?= get_field('economy_image_url');?>">
							ECONOMY - Euro Road and Worldwide
						</a>
					</h3>
				<div class="economy-delivery-description">
						<?= get_field('economy_description'); ?>
				</div>
			<!-- END ECONOMY -->
			</div>

			<div class="container-fluid seperator services-content">
			<!-- IMPORTS SECTION -->
				<div class="imports-image">
				<a href="<?= get_field('imports_image_url');?>"> 
					<img src="<?= get_field('imports_image')['url']; ?>" 
							="<?= get_field('imports_image')['alt']; ?>">
				</a>
					</div>
						<h3 class="imports-title">
							<a href="<?= get_field('imports_image_url');?>">
								IMPORTS - Worldwide Import Service
							</a>
						</h3>
					<div class="imports-description">
							<?= get_field('imports_description'); ?>
					</div>
			<!-- END IMPORTS -->
			</div>
			
			<div class="container-fluid seperator services-content">
			<!-- DOMESTIC SECTION -->
				<div class="domestic-image">
				<a href="<?= get_field('domestic_image_url'); ?>">
				<img src="<?= get_field('domestic_image')['url']; ?>" 
						alt="<?= get_field('domestic_image')['alt']; ?>">
				</a>
					</div>
						<h3 class="domestic-title">
							<a href="<?= get_field('domestic_image_url'); ?>">
								UK DOMESTIC - Express & Economy
							</a>
						</h3>
					<div class="domestic-description">
							<?= get_field('domestic_description'); ?>
					</div>
			<!-- END DOMESTIC -->
			</div>

			<div class="container-fluid services-content">
			<!-- IE-TRAX SECTION -->
				<div class="ietrax-image">
				<a href="<?= get_field('ietrax_image_url');?>">
					<img src="<?= get_field('ietrax_image')['url']; ?>" 
						alt="<?= get_field('ietrax_image')['alt']; ?>">
				</a>
					</div>
						<h3 class="ietrax-title">
							<a href="<?= get_field('ietrax_image_url');?>">
								IE-TRAX - Global Tracked Mail
							</a>
						</h3>
					<div class="ietrax-description">
							<?= get_field('ietrax_description'); ?>
					</div>
			<!-- END IE-TRAX -->
			</div>
		</section>
		<?php get_template_part('request-consultation'); ?>
        <section class="mobile-menu container">
        	<?php
		        wp_nav_menu(array(
		            'menu_class' => 'services-submenu-content list-group',
		            'theme_location' => 'header-services-menu',
		        ));
		    ?>
        </section>
    </main>
<?php get_footer(); ?>