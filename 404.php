<?php get_header(); ?>


<div class="container">
<section id="page-not-found" class="clear">
 
	<h1>404</h1>
	<h2>Oops! File not found!</h1>
	<h3>What Now?</h3>
	<p>For some reason the page you requested could not be found on our server.</p>
	<p>Go back to the <a href="javascript:history.go(-1)">previous page</a> or visit our <a href="<?= site_url(); ?>">homepage</a> or try one of the links below:</p>
	<ul>
	  <li><a href="services/international-shipping-prices/">International Shipping Prices</a></li>
	  <li><a href="tracking">Track My Parcel</a></li>
	  <li><a href="register">Get an Account</a></li>
	  <li><a href="contact-us">Contact Us</a></li>
	</ul>

</section>
</div>


<?php get_footer();