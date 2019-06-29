<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Favicons -->
		<?php $tdu = get_template_directory_uri(); ?>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $tdu; ?>/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $tdu; ?>/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $tdu; ?>/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $tdu; ?>/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $tdu; ?>/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $tdu; ?>/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $tdu; ?>/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $tdu; ?>/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $tdu; ?>/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $tdu; ?>/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $tdu; ?>/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $tdu; ?>/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $tdu; ?>/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>




            <nav>
                <div class="container">
                    <a href="#" id="menu_button">Menu</a>
                  <ul id="menu_navigation">
                        <?php chilly_nav('header-menu'); ?>
                        <?php if(is_user_logged_in()) : ?>
                            <?php chilly_nav('loggedin-menu'); ?>
                            <li><a href="<?php echo wp_logout_url( site_url('/')  ); ?>">Déconnexion</a></li>
                        <?php endif; ?>
                    	<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-377"><a target="_blank" href="https://www.facebook.com/jazzcontreband"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> -->
                    </ul>
                </div>
								<div class="stripes_top"></div>
            </nav>
