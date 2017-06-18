<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">


	<header class="full">
        <div id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="wrapper-main center">
            <div class="nav-top inline">                
                <?php wp_nav_menu(array(
	                    'container' => false,
	                    'menu' => __('Menu Nav Top', 'birding'),
	                    'menu_class' => 'mainTop',
	                    'theme_location' => 'nav-top',
	            )); ?>
            </div>
            <div class="nav-redes inline right">
                
                <?php wp_nav_menu(array(
                    'container' => false,
                    'menu' => __('Redes Links', 'birding'),
                    'menu_class' => 'redes',
                    'theme_location' => 'redes-birding',
            		));
            	?>
            </div>
            <div class="cont-search inline right">
                <div id="sb-search" class="sb-search">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" id="s" class="sb-search-input"  name="s" value="" placeholder="Buscar..." />
                            <button type="submit" id="searchsubmit" class="sb-search-submit">Buscar...</button>
                            <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div>
            <div class="clr"></div>
            <figure class="logo-birding inline">
            	<a href="/">
                	<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-birding-for-living.png" alt="">
                </a>
            </figure>
            <nav class="main-menu inline">                
                <?php wp_nav_menu(array(
	                    'container' => false,
	                    'menu' => __('The Main Menu', 'birding'),
	                    'menu_class' => 'main-nav cf',
	                    'theme_location' => 'main-nav',
	            )); ?>
            </nav>                
            <a href="#" class="cart inline"></a>
        </div>
        <div class="clr"></div>
    </header>
	
	