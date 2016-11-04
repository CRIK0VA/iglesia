<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="top_header">
		<div class="wrapper cf">
			<div class="header_third search_section menu_buttom cf">
				<div class="menu_icon">
					<i class="fa fa-bars" aria-hidden="true"></i>
					<i class="fa fa-times" style="display: none;" aria-hidden="true"></i>
				</div>
				<div class="search_box"><?php echo get_search_form(); ?></div>
			</div>
			<div class="header_third logo_section">
				<a href="<?php echo home_url("/"); ?>" class="logo_link"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
			</div>
			<div class="header_third social_section">
				<?php if(ale_get_option('yt')){ ?><a href="<?php echo ale_get_option('yt') ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php } ?>
				<?php if(ale_get_option('insta')){ ?><a href="<?php echo ale_get_option('insta') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?>
				<?php if(ale_get_option('twi')){ ?><a href="<?php echo ale_get_option('twi') ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php } ?>
				<?php if(ale_get_option('fb')){ ?><a href="<?php echo ale_get_option('fb') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
			</div>
		</div>
		<nav class="top_navigation">
			<div class="wrapper">
				<?php
				if ( has_nav_menu( 'header_menu' ) ) {
					wp_nav_menu(array(
						'theme_location'=> 'header_menu',
						'menu'			=> 'Header Menu',
						'menu_class'	=> 'ale_headermenu cf',
						'walker'		=> new Aletheme_Nav_Walker(),
						'container'		=> '',
					));
				}
				?>
				<div class="donate_button">
					<a href="<?php //echo ale_get_option('donate_link'); ?>"><?php _e('Donate','iglesia'); ?></a>
				</div>
			</div>
		</nav>
	</header>
	<section class="home_slider">

	</section>


