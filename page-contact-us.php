<?php
/*
 * Template Name: Contact Us
 */
get_header();

$theParent = wp_get_post_parent_id(get_the_ID());

//while(have_posts()) {
the_post(); ?>

    <main id="main-content">
        <!-- [S] #contact -->
        <section id="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4970.38558599879!2d-0.513928529403414!3d51.472975398255564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717ed361a2033074!2sImpact+Express+Wholesale+Ltd!5e0!3m2!1sen!2suk!4v1493885695105" width="100%" height="400" frameborder="0" style="border:0; margin-top:20px;" allowfullscreen></iframe>    <div class="container spacing">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 address">
                        <h4>Impact Express Ltd</h4>
                        <p>Unit 13 Blackthorne Crescent<br>
                            Poyle, Berkshire<br>
                            SL3 0QR</p>

                        <p>Opening Hours </p>

                        <p>09:30am - 20:00pm </p>

                        <p>Monday - Friday</p>          <p>
                            <i class="fa fa-phone"></i>
                            <span>01753 683 700</span>
                            <br>
                            <i class="fa fa-location-arrow"></i>
                            <a href="mailto:office@impactexpress.co.uk">office@impactexpress.co.uk</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        </main>
<?php //}

get_footer();
?>