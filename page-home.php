<?php get_header(); ?>
<main id="main-content">
    <section id="home-banner">
        <div id="home-banner-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="background" style="background-image:url('https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/new-york.jpeg');"></div>
                </div>
            </div>
        </div>
        <div class="service-block">
            <div class="row service-row">
                <div class="col-md-4 service-panel panel-1">
                    <div class="overlay"></div>
                    <div class="service-icon icon-1"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-web.png" alt="uk and international"></div>
                    <div class="service-text">
                        <div class="service-title">
                            <h4>Wholesale Courier Services</h4>
                        </div>
                        <div class="service-para">
                            <p>At Impact Express we provide an integrator based wholesale courier services to the logistics industry. We are an extension to your business offering a link to integrators to complete your deliveries with the best in class fully tracked services.</p>
                        </div>
                    </div>
                    <div class="service-button"><a href="/portal/?method=login" role="button" type="text/html" class="btn btn-inversed">Send a Parcel</a></div>
                </div>
                <div class="col-md-4 service-panel panel-2">
                    <div class="overlay"></div>
                    <div class="service-icon icon-2"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-page.png" alt="Onlin Booking Portal"></div>
                    <div class="service-text">
                        <div class="service-title">
                            <h4>Online Booking Portal</h4>
                        </div>
                        <div class="service-para">
                            <p>Our intuitive delivery portal available to all customers, easily compare services and products on offer from Impact Express via our chosen carrier services. You can book shipments, print carrier labels, customs paperwork, manage tracking and deliveries.</p>
                        </div>
                    </div>
                    <div class="service-button"><a href="/portal/?method=login" role="button" type="text/html" class="btn btn-inversed">Send a Parcel</a></div>
                </div>
                <div class="col-md-4 service-panel panel-3">
                    <div class="overlay"></div>
                    <div class="service-icon icon-3"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-direction.png" alt="express courier service"></div>
                    <div class="service-text">
                        <div class="service-title">
                            <h4>International Express & Economy Delivery Solutions</h4>
                        </div>
                        <div class="service-para">
                            <p>Express worldwide, European Economy and UK Overnight integrator based courier services. Connection to worldwide delivery to over 220 countries, with a wide range of express parcel and package services, from documents, small and large parcels or pallets.</p>
                        </div>
                    </div>
                    <div class="service-button"><a href="/services/express-parcel-delivery/" role="button" type="text/html" class="btn btn-inversed">More Info</a></div>
                </div>
            </div>
            <div class="row service-row">
                <div class="col-md-4 service-panel panel-4">
                    <div class="overlay"></div>
                    <div class="service-icon icon-4"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-cog.png" alt="Premium Express and Ecommerce solutions to USA"></div>
                    <div class="service-text">
                        <div class="service-title">
                            <h4>Premium Express and Ecommerce solutions to USA</h4>
                        </div>
                        <div class="service-para">
                            <p>Next Day Premium Express Courier delivery by 10:30am throughout the USA, express and more economical delivery services specifically designed for the e-commerce market to connect UK based SME and large retailers with a comprehensive package delivery solution at competitive rates.</p>
                        </div>
                    </div>
                    <div class="service-button"><a href="/services/e-commerce/" role="button" type="text/html" class="btn btn-inversed">More Info</a></div>
                </div>
                <div class="col-md-4 service-panel panel-5">
                    <div class="overlay"></div>
                    <div class="service-icon icon-5"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-dhl.png" alt="<?= get_field('services_icon_5')['alt']; ?>"></div>
                    <div class="service-text">
                        <div class="service-title">
                            <h4>DHL Authorised Service Partner</h4>
                        </div>
                        <div class="service-para">
                            <p>We are pleased to be an authorised sale partner with DHL. We offer access to DHL’s Express and Economy Select services for UK, European and Worldwide fully tracked delivery services available from our LHR warehouse, DHL depots, DHL Services points or for collection from your office.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-panel panel-6">
                    <div class="overlay"></div>
                    <div class="service-icon icon-6"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-target.png" alt="Lithium Batteries and Dangerous Goods"></div>
                    <div class="service-text">
                        <div class="service-title">
                            <h4>Lithium Batteries and Dangerous Goods</h4>
                        </div>
                        <div class="service-para">
                            <p>As a Dangerous Goods Certified Carrier we have the knowledge and clearance to send your items containing lithium batteries, mobile phones and other dangerous goods across our worldwide network.</p>
                        </div>
                    </div>
                    <div class="service-button"><a href="/services/dangerous-goods-service/" role="button" type="text/html" class="btn btn-inversed">More Info</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="container spacing">
            <h1>About Us</h1>
            <p>Impact Express have been a leading wholesale agent since 2005 providing cost effective Express Parcel Delivery solutions. We provide Next Day to the USA & Major European cities and Express delivery to over 220 destinations worldwide for the courier logistics industry , parcel comparison websites, SME's and e-commerce companies and private individuals across the UK. Based in Colnbrook near Heathrow, you can drop your parcels to us daily by 7:30pm. Book a collected service from your home or office within a 3 hour time window same day if booked by 12:00pm, across most of the UK or drop your parcel to any one of over 50 Main Depots or 1000 Drop off locations across the country.</p>
        </div>
    </section>
    <!-- [S] #twitter -->
    <section id="twitter">
        <div class="container spacing">
            <h2><a href="https://twitter.com/impactexpress"><i class="fab fa-twitter"></i></a></h2>
            <p class="twitter-text"><?= Twitter::latestTweet(); ?></p>
            <a href="https://twitter.com/impactexpress" class="btn btn-inversed btn-lg b-twitter-follow" target="_blank">Follow Us</a>
        </div>
    </section>
</main>
<?php if (date('n') == 12): ?>
    <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>