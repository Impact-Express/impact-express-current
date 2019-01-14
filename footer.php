<!-- [S] #main-footer -->
<footer id="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h4>Subscribe</h4>
                <form action="//impactexpress.us2.list-manage.com/subscribe/post?u=4d790aba1fda36ef88d81225e&amp;id=4f5fd23105" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="EMAIL" id="i-subscribe-email" placeholder="E-mail">
                            <input type="hidden" value="Subscribe" name="subscribe">
                            <div class="input-group-addon">
                                <button class="btn btn-link">
                                    Send <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <p>
                    We like to keep you up to date with our latest news so please subscribe to our newsletter.
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h4>Explore</h4>
                <div class="row">
                    <div class="col-xs-6">
                        <ul class="list-group footer-links">
                            <li class="list-group-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/portal/?method=login'); ?>">Get an Account</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/tracking'); ?>">Track My Parcel</a>
                            </li>
                            <li class="list-group-item"><a href="<?= site_url('/services'); ?>">Services</a></li>
                            <!-- <li class="list-group-item"><a href="<?= site_url('#'); ?>">Link</a></li> -->
                        </ul>
                    </div>
                    <div class="col-xs-6 footer-explore-right">
                        <ul class="list-group footer-links">
                            <li class="list-group-item"><a href="<?= site_url('/information'); ?>">Info</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/contact'); ?>">Contact Us</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/portal/?method=login'); ?>">Login</a></li>
                            <li class="list-group-item"><a href="<?= get_theme_file_uri('impact-express_terms-and-conditions.pdf'); ?>">Terms &amp; Conditions</a></li>
                            <!-- <li class="list-group-item"><a href="<?= site_url('#'); ?>">Link</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-services-col">
                <h4>Services</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="list-group footer-links">
                            <li class="list-group-item"><a href="<?= site_url('/services/international-shipping-destinations'); ?>">Worldwide Shipping Destinations</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/services/dangerous-goods-service'); ?>">Dangerous Goods Service</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/information/dry-ice-shipments'); ?>">Dry Ice</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/services/express-parcel-delivery'); ?>">Express Parcel Delivery</a></li>
                            <li class="list-group-item"><a href="<?= site_url('/services/economy-delivery'); ?>">Economy Delivery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <p class="copyrights">
                    &copy; 2018, Impact Express Wholesale Ltd. All&nbsp;Rights&nbsp;Reserved.
                </p>
                <div style="width:220px; margin-left:-20px;">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-GB" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="5bbe07f859bf6a0001d1e8b4" data-style-height="40px" data-style-width="100%">
                        <a href="https://uk.trustpilot.com/review/impactexpress.co.uk" target="_blank">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
                <nav class="social-links">
                    <ul>
                        <li><a href="https://twitter.com/impactexpress" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/ImpactExpress/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://linkedin.com/company/impactexpress" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://instagram.com/impactexpress" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <div style="clear: both; padding-top: 20px; text-align: left;">
                        <img src="<?= get_theme_file_uri('/images/sage_payments.jpg'); ?>" width="196" height="70" alt="SagePay - Visa and MasterCard accepted"/>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</footer>


<!-- <script>
    var google_conversion_id = 984014727;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
</script>
<script src="//www.googleadservices.com/pagead/conversion.js"></script> -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-88886441-1', 'impactexpress.co.uk');
    ga('send', 'pageview');
</script>

<?php wp_footer(); ?>
</body>
</html>