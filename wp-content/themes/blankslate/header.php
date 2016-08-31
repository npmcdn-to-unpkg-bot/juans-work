<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="https://fonts.googleapis.com/css?family=Teko:600|Khula:800|Wire+One" rel="stylesheet">
<script src="https://use.fontawesome.com/8465e8689d.js"></script>
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
			<ul>
				<li><a href="https://www.linkedin.com/in/juanarciniega" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
				<li><a href="https://github.com/arcinjuan" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a></li>
				<li><a href="/juans-work/wp-content/themes/blankslate/juan_arciniega.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Resume</a></li>
			</ul>
		</nav>
	</header>
	<div id="container">