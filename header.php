<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package next-me
 */

global $redux_demo;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="row">
		<div class="col-2">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $redux_demo['logo']['url']; ?>" alt="logo"></a>
		</div>
		<div class="col-8 text-right">
			<nav>
				<!-- <ul>
					<li class="link-menu"><a href="#">Функционал</a></li>
					<li class="link-menu"><a href="#">О команде</a></li>
					<li class="link-menu"><a href="#">Стоимость</a></li>
					<li class="link-menu"><a href="#">Контакты</a></li>
				</ul> -->
			</nav>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_id'        => 'header-menu',
				) );
			?>
		</div>
		<div class="col-2">
			<a href="tel:88004444444" class="header-phone"><?php echo $redux_demo['phone']; ?></a>
		</div>
	</div>
	</div>
</header>
