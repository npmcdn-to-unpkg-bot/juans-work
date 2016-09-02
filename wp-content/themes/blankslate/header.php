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
		<div class="text-fade">
		<p>$(document).ready( function(){ <br />
		// Find the width of the images<br />
		 var imgWidth = $(&quot;.j-slider li img&quot;).width(); <br />
		 var imgHeight = $(&quot;.j-slider li img&quot;).height();  <br />
		 // Turn all li's into slides  <br />
		 $(&quot;.j-slider li&quot;).addClass(&quot;slider-image slides&quot;);  <br />
		 // Add the height and width to the gallery based in the image dimensions  <br />
		 // Add the proper classes to maintain order <br />
		 var properOrder = function(){ <br />
		 // Add a class of next slide to the next slide <br />
		 $(&quot;.active&quot;).next(&quot;li&quot;).addClass(&quot;next-slide&quot;); <br />
		 // Add a class of previous-slide slide to the previous slide <br />
		 $(&quot;.active&quot;).prev(&quot;li&quot;).addClass(&quot;previous-slide&quot;); } <br />
		 // Set prev to last li when first li is active <br />
		 var properRotate = function(){ <br />
		 // Locate the first image <br />
		 var firstImg = $(&quot;.j-slider li:first-of-type&quot;); <br />
		 // Locate last image var lastImg = $(&quot;.j-slider li:last-of-type&quot;); <br />
		 // Switch classes depending on direction of slide <br />
		 if ($(firstImg).hasClass(&quot;active&quot;)){ <br />
		 $(lastImg).addClass(&quot;previous-slide&quot;); <br />
		 } <br />
		 // Switch classes depending on direction of slide <br />
		 if ($(lastImg).hasClass(&quot;active&quot;)){ <br />
		 $(firstImg).addClass(&quot;next-slide&quot;); } <br />
		 } <br />
		 // Clear all inline styles <br />
		 var clearInline = function(){ <br />
		 $(&quot;.next-slide&quot;).css(&quot;left&quot;, &quot;auto&quot;); <br />
		 }</p>
		<div class="fade"></div>
		</div>
		<nav id="menu" role="navigation">
			<ul>
				<li><a href="https://www.linkedin.com/in/juanarciniega" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
				<li><a href="https://github.com/arcinjuan" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a></li>
				<li><a href="http://www.juans.work/wp-content/themes/blankslate/Juan_Arciniega.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Resume</a></li>
			</ul>
		</nav>
		<div id="decoration"></div>
		<div id="decoration2"></div>
	</header>
	<div id="container">