<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(' – ', true, 'right'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<meta name="theme-color" content="#ffcb23">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<div>
					<?php if( get_theme_mod( 'theme_logo' ) != '') { ?><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_theme_mod('theme_logo'); ?>"></a><?php } ?>
					
					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<?php if ( is_front_page() ) : ?>

					<h1 id="logo" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>

					<?php else : ?>

					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php endif; ?>
					</div>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
								 'container' => false,						   // remove nav container
								 'container_class' => 'menu cf',				 // class of container (should you choose to use it)
								 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
								 'menu_class' => 'nav top-nav cf',			   // adding custom nav class
								 'theme_location' => 'main-nav',				 // where it's located in the theme
								 'before' => '',								 // before the menu
								   'after' => '',								  // after the menu
								   'link_before' => '',							// before each link
								   'link_after' => '',							 // after each link
								   'depth' => 0,								   // limit the depth of the nav
								 'fallback_cb' => ''							 // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
