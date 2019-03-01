<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
        <div class="container-fluid">
            <div class="row">
                <!-- Toolbar top
                <div class="background-dark toolbar">
                    <div class="container">
                        <div class="row align-items-center">
                            <a href="#maincontent" class="sr-only sr-only-focusable">Hoppa till huvudinnehållet</a>
                            <div class="col-auto">
                                <a href="https://www.uu.se" title="Till Uppsala universitets startsida" class="uu-link">Till uu.se</a>
                            </div>
                            <?php /* <div class="col-auto">
                                <div class="header-tools">
                                    <a href="#">Språk</a>
                                    <a href="#">Lyssna</a>
                                    <a href="#">Logga in</a>
                                </div>
                            </div> */ ?>
                        </div>
                    </div>
                </div>
                -->
                
                <!-- Left column -->
                <div class="col-md-3 background-dark column-left">
                    <!-- Header -->
                    <header id="top">
                        <a href="https://www.uu.se" class="uu-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/UU-logo-white.svg" class="uu-link-img" alt="Uppsala universitet">
                        </a>
                        <div class="site-header">
                            <a href="<?php get_home_url() ?>" class="site-header-text"><?php echo get_bloginfo( 'name' ); ?></a>
                        </div>
                        <!-- Search is removed until needed -->
                        <?php /*<div role="search">
                                <?php get_template_part('searchform'); ?>
                            </div>

                            <nav  aria-label="Huvudmeny">
                                <a href="#">Meny ett</a>
                                <a href="#">Meny två</a>
                                <a href="#">Meny tre</a>
                                <a href="#">Meny fyra</a>
                                <a href="#">Meny fem</a>
                            </nav> 
                        </div>*/ ?>
                    </header>
                    <!-- Navigation -->
                    <button class="js-button-toggle button-icon icon-menu d-md-none mb-3" type="button" aria-controls="nav-main" aria-expanded="false">
                        Meny
                    </button>
                    <nav id="nav-main" class="nav d-none d-md-block d-lg-block d-xl-block" aria-label="Huvudmeny">
                        <?php html5blank_nav(); ?>
                    </nav>
                </div>