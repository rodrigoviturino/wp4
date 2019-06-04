<!doctype html>
<html <?php language_attributes();?> >

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<title><?php wp_title('-', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--  if you want activate pingbacks uncomment the line below
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> -->
	<?php
	wp_head();

	if (is_search())
		echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<!-- Speed up pages by pre-resolving DNS -->
	<link rel="dns-prefetch" href="//facebook.com">
	<link rel="dns-prefetch" href="//fbcdn-profile-a.akamaihd.net">
	<link rel="dns-prefetch" href="//google-analytics.com">
	<link rel="dns-prefetch" href="//googletagmanager.com">
	<link rel="dns-prefetch" href="//googleadservices.com">

	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body <?php body_class(); ?> >

	<header id="header" class="header">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<?php if (has_custom_logo()) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
					?>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
						<img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>" classs="img-fluid">
					</a>
				<?php } else { ?>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
						<?php bloginfo('name'); ?>
					</a>
				<?php } ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
				wp_nav_menu(array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav ml-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback'
				));
				?>
			</div>
		</nav>
	</header>

	<?php 
		if(is_front_page())
		get_template_part('partials/home', 'banner')
	?>