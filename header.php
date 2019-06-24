<!DOCTYPE html>
<!--suppress ALL -->
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PB9CB6J');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?= get_field('keywords'); ?>" />
    <meta name="globalsign-domain-verification" content="zxu2jH7OTq3adw7GX3IAM0UZy2ijRFRdCPyIvgbVU_"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-72x72.png') ?>">    
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_theme_file_uri('images/icons/apple-touch-icon-152x152.png') ?>">
    <link rel="icon" type="image/png" href="<?= get_theme_file_uri('images/icons/favicon-16x16.png') ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= get_theme_file_uri('images/icons/favicon-32x32.png') ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= get_theme_file_uri('images/icons/favicon-96x96.png') ?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?= get_theme_file_uri('images/icons/favicon-160x160.png') ?>" sizes="160x160">
    <link rel="icon" type="image/png" href="<?= get_theme_file_uri('images/icons/favicon-196x196.png') ?>" sizes="196x196">
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        var html = document.documentElement;
        html.classList.remove("no-js");
        html.classList.add("js");
        if (document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {
            html.classList.add("svg");
        }
    </script>
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End Trustbox script -->
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '414237339116988'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=414237339116988&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB9CB6J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- [S] #main-navigation -->
    <nav id="main-navigation" class="navbar navbar-default navbar-fixed-top slim">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('home'); ?>">ImpactExpress</a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Get Account -->
                    <li class="nav-get-account">
                        <a href="<?= site_url('/portal/?method=login'); ?>">Send a Parcel</a>
                        <!-- <a href="https://impact-online.couriernavigator.com/createAccount.html">Get an Account</a> -->
                    </li>
                    <!-- Track -->
                    <li>
                        <a href="<?= site_url('/tracking'); ?>">Track My Parcel</a>
                        <!-- <a href="http://impact.couriernavigator.com/tracking">Track My Parcel</a> -->
                    </li>
                    <!-- Services -->
                    <li class="dropdown">
                        <a href="/services">Services</a>
                        <div class="dropdown-content">
                            <?php
                                wp_nav_menu(array(
                                    'menu_class' => 'dropdown-submenu-content',
                                    'theme_location' => 'header-services-menu',
                                ));
                            ?>
                        </div>
                    </li>
                    <!-- News -->
                    <li class="dropdown">
                        <a href="/information">Info</a>
                        <div class="dropdown-content">
                            <?php
                                wp_nav_menu(array(
                                    'menu_class' => 'dropdown-submenu-content',
                                    'theme_location' => 'header-news-menu',
                                ));
                            ?>
                        </div>
                    </li>
                    <!-- Contact -->
                    <li>
                        <a href="<?= site_url('/contact-us'); ?>">Contact Us</a>
                    </li>
                    <li class="nav-login" id="login-btn">
                        <a href="<?= site_url('/portal/?method=login'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>