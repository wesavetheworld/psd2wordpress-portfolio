<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Adi Purdila">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link href="http://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- HEADER -->
	<header class="main-header section-content align-center">
		<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		
		<nav class="main-nav">
			<?php 
			wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'container' => '',
				'menu_class' => 'inline'
			));
			?>
		</nav>
	</header>
