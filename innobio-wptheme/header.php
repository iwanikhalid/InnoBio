<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favico.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/adxmenu.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!--[if lt IE 7 ]> 
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ADxMenu.js"></script>
	<![endif]-->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<!--[if IE]><div id="IEroot"><![endif]--> 
	<div class="wrap">
		<div id="header">
			<div class="clearfix">
				<h1 class="floatl logo"><a href="<?php echo get_option('home'); ?>/"><span>Innobio Ventures</span></a></h1>
				<img class="floatl mosti" src="<?php bloginfo('template_url'); ?>/images/mosti.gif" alt="" />
				<div class="floatl" id="nav">
					<ul class="menu adxm">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About Us</a>
							<ul>
								<li><a href="#">Board of Directors</a></li>
								<li><a href="#">Management Team</a></li>
								<li><a href="#">Organization Structure</a></li>
							</ul>						
						</li>
						<li><a href="#">News &amp; Events</a>
							<ul>
								<li><a href="#">News</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Press Release</a></li>
							</ul>						
						</li>
						<li><a href="#">Career</a>
							<ul>
								<li><a href="#">Jobs Listing</a></li>
								<li><a href="#">Deposit Resume</a></li>
							</ul>						
						</li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="page-banner">
				<img src="<?php bloginfo('template_url'); ?>/images/pgbanner-home.jpg" alt="" />
				<p class="page-quote">We Drive and Advance Bio Business Ventures for Nation's Economic Growth</p>
			</div>
		</div>

		<div id="banner">
			<div id="slideshow">
				<div id="slides">
					<div class="slides_container">
						<div class="slide">
							<img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" />
							<div class="caption">
								<h1>Perfect Solutions</h1>
								<p>INNO Biologics offers complete services from upstream to downstream operation for the development of your therapeutic proteins </p>
								<a href="">Explore Our Technology &raquo;</a>
							</div>
						</div>
						<div class="slide">
							<a href="http://www.google.com"><img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" /></a>
							<div class="caption">
								<h1>Center of Excellence</h1>
								<p>Inno Bio Diagnostics is the center of excellence for R&amp;D of stem cell based technology for cell based diagnostics, cell based therapy and regenerative medicine. </p>
								<a href="">Explore Our Technology &raquo;</a>
							</div>
						</div>
						<div class="slide">
							<img src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" />
							<div class="caption">
								<h1>Great Location</h1>
								<p>Bio Innovation Center (BIC) is the location of choice for bio-technology companies. We aspire to be your partner for bio-tech R&D and manufacturing. </p>
								<a href="">Explore Our Technology &raquo;</a>
							</div>
						</div>
					</div>
					<a href="#" class="prev"><img src="<?php bloginfo('template_url'); ?>/images/arrow-prev.png" alt="Arrow Prev"></a>
					<a href="#" class="next"><img src="<?php bloginfo('template_url'); ?>/images/arrow-next.png" alt="Arrow Next"></a>
				</div>	
			</div>		
		</div>
		<div id="content">