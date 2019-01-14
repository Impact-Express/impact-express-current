<?php
	/*
	 * Template Name: Courier Navigator Pages
	 */
?>
<!DOCTYPE html>
<html>
<head>

<?php
	wp_head();
	the_post();
?>
</head>
<body>
<div id="ie-logo">
	<a href="/">
		<img src="<?= get_theme_file_uri('images/navbar-logo.png'); ?>" alt="Impact Express Wholesale Ltd Logo">
	</a>
	<h4>Online Booking Portal</h4>
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
</body>
</html>