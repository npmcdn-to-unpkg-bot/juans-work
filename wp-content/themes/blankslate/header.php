<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="https://fonts.googleapis.com/css?family=Khula:800|Wire+One" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<section id="branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
				<div id="logo">
					<div id="site-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?><span>'</span></div>
					<div id="site-description"><?php bloginfo( 'description' ); ?></div>
				</div>
			</a>
		</section>
		<nav id="menu" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<div class="header-footer">
			<ul class="tech-logos">
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/html.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/css.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/jquery.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/angular.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/react.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/wordpress.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/zurb.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/drupal.png"></li>
				<li><img src="http://localhost:8000/juans-work/wp-content/themes/blankslate/img/tech-logos/github.png"></li>
			</ul>
		</div>
	</header>
	<div id="container">