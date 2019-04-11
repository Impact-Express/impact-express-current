<?php
	/*
	 * Template Name: Courier Navigator Pages
	 */
?>
<!DOCTYPE html>
<html>
<head>
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PB9CB6J');</script>

<!-- End Google Tag Manager -->
<?php
	wp_head();
	the_post();
?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB9CB6J"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<div id="ie-logo">
	<a href="/">
		<img src="<?= get_theme_file_uri('images/navbar-logo.png'); ?>" alt="Impact Express Wholesale Ltd Logo">
	</a>
</div>
<style type="text/css">
	#ie-logo {
		text-align: center;
		margin-top: 250px;
	}

	#ie-logo img {
		width: 295px;
	}

	#ie-logo h4 {
		font-size:16px;
		margin-top:0;
	}

	/*.img-responsive.center-block {
		content:url("http://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-dhl.png");
		margin-bottom:10px;
	}*/

</style>

<div class="container spacing" style="text-align: left;">
<?php
	the_content();
	wp_footer();
?>
</div>
</body>
</html>