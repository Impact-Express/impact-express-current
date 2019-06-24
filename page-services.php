<?php get_header(); ?>
    <main id="main-content">
        <section id="services" class="services spacing">
            <div class="container spacing crazy-container">
			    <div id="crazy">
			        <div class="paving" id="pave-1">
			            <a href="<?= get_field('grid_1_url'); ?>"><img src="<?= get_field('grid_1')['url']; ?>" alt="<?= get_field('grid_1')['alt']; ?>"></a>
			        </div>
			        <div class="paving" id="pave-2">
			            <a href="<?= get_field('grid_2_url'); ?>"><img src="<?= get_field('grid_2')['url']; ?>" alt="<?= get_field('grid_2')['alt']; ?>"></a>
			        </div>
			        <div class="paving" id="pave-3">
			            <a href="<?= get_field('grid_3_url'); ?>"><img src="<?= get_field('grid_3')['url']; ?>" alt="<?= get_field('grid_3')['alt']; ?>"></a>
			        </div>
			        <div class="paving" id="pave-4">
			            <a href="<?= get_field('grid_4_url'); ?>"><img src="<?= get_field('grid_4')['url']; ?>" alt="<?= get_field('grid_4')['alt']; ?>"></a>
			        </div>
			        <div class="paving" id="pave-5">
			            <a href="<?= get_field('grid_5_url'); ?>"><img src="<?= get_field('grid_5')['url']; ?>" alt="<?= get_field('grid_5')['alt']; ?>"></a>
			        </div>
			        <div class="paving" id="pave-6">
			            <a href="<?= get_field('grid_6_url'); ?>"><img src="<?= get_field('grid_6')['url']; ?>" alt="<?= get_field('grid_6')['alt']; ?>"></a>
			        </div>
			        <div class="paving" id="pave-7">
			            <a href="<?= get_field('grid_7_url'); ?>"><img src="<?= get_field('grid_7')['url']; ?>" alt="<?= get_field('grid_7')['alt']; ?>"></a>
			        </div>
			    </div>
			</div>
        </section>
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