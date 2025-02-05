<?php get_header();
the_post();
?>
<main id="main-content">
    <div class="international-top-banner">
        <div class="container-fluid international-top-banner-image">
            <img class="top-banner-image" src="<?= get_field('hero_image')['url']; ?>" alt="<?= get_field('hero_image')['alt']; ?>">
            <div class="row top-country-text">
            <h3>Delivery Destinations</h3>
            <?= get_field('page_text'); ?>
        </div>
        </div>
    </div>
    <div class="container">
        <div id="country-grid">
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_1')); ?>"><img src="<?= get_field('grid_image_1')['url']; ?>" alt="<?= get_field('grid_image_1')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_2')); ?>"><img src="<?= get_field('grid_image_2')['url']; ?>" alt="<?= get_field('grid_image_2')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_3')); ?>"><img src="<?= get_field('grid_image_3')['url']; ?>" alt="<?= get_field('grid_image_3')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_4')); ?>"><img src="<?= get_field('grid_image_4')['url']; ?>" alt="<?= get_field('grid_image_4')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_5')); ?>"><img src="<?= get_field('grid_image_5')['url']; ?>" alt="<?= get_field('grid_image_5')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_6')); ?>"><img src="<?= get_field('grid_image_6')['url']; ?>" alt="<?= get_field('grid_image_6')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_7')); ?>"><img src="<?= get_field('grid_image_7')['url']; ?>" alt="<?= get_field('grid_image_7')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_8')); ?>"><img src="<?= get_field('grid_image_8')['url']; ?>" alt="<?= get_field('grid_image_8')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_9')); ?>"><img src="<?= get_field('grid_image_9')['url']; ?>" alt="<?= get_field('grid_image_9')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_10')); ?>"><img src="<?= get_field('grid_image_10')['url']; ?>" alt="<?= get_field('grid_image_10')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_11')); ?>"><img src="<?= get_field('grid_image_11')['url']; ?>" alt="<?= get_field('grid_image_11')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_12')); ?>"><img src="<?= get_field('grid_image_12')['url']; ?>" alt="<?= get_field('grid_image_12')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_13')); ?>"><img src="<?= get_field('grid_image_13')['url']; ?>" alt="<?= get_field('grid_image_13')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_14')); ?>"><img src="<?= get_field('grid_image_14')['url']; ?>" alt="<?= get_field('grid_image_14')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_15')); ?>"><img src="<?= get_field('grid_image_15')['url']; ?>" alt="<?= get_field('grid_image_15')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_16')); ?>"><img src="<?= get_field('grid_image_16')['url']; ?>" alt="<?= get_field('grid_image_16')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_17')); ?>"><img src="<?= get_field('grid_image_17')['url']; ?>" alt="<?= get_field('grid_image_17')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_18')); ?>"><img src="<?= get_field('grid_image_18')['url']; ?>" alt="<?= get_field('grid_image_18')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_19')); ?>"><img src="<?= get_field('grid_image_19')['url']; ?>" alt="<?= get_field('grid_image_19')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_20')); ?>"><img src="<?= get_field('grid_image_20')['url']; ?>" alt="<?= get_field('grid_image_20')['alt']; ?>"></a>
                    </div>
                </div>
                <div class="col-md-4 country-box">
                    <div class="country-img">
                        <a href="<?= site_url('services/international-shipping-destinations/'.get_field('grid_url_21')); ?>"><img src="<?= get_field('grid_image_21')['url']; ?>" alt="<?= get_field('grid_image_21')['alt']; ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('request-consultation'); ?>
</main>

<?php get_footer(); ?>
