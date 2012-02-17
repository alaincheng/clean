<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<!-- IMPORTING STYLES -->
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/colorpicker/css/layout.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/reset.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/grid.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/tipTip.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/jquery-ui-1.8.6.custom.css" />
<link rel="stylesheet" type="text/css"
	href="/wp-content/themes/clean/css/style.css" />

<!-- IMPORTING SCRIPTS -->
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/cufon-yui.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.easing.1.3.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.nivo.slider.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/ddsmoothmenu.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/css_browser_selector.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.carouFredSel-2.5.6.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.vticker.1.4.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.tweet.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.overlabel.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.validate.min.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/contactForm.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.tipTip.minified.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.masonry.min.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.hoverIntent.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.preloader.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/video.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.roundabout.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.kwicks-1.5.1.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.roundabout.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/jquery.kwicks-1.5.1.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/colorpicker/js/eye.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/colorpicker/js/utils.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/colorpicker/js/colorpicker.js"></script>
<script type="text/javascript"
	src="/wp-content/themes/clean/js/scripts.js"></script>
<!--[if IE]>
        <script type="text/javascript" src="/wp-content/themes/clean/js/PIE.js"></script>
        <![endif]-->
<!-- IMPORTING FONT -->
<script type="text/javascript"
	src="/wp-content/themes/clean/js/fonts/titillium-text.cufonfonts.js"></script>
<?php
wp_head();
?>
</head>
<body>
	<div class="schemas" style="display: none;">
		<a class="styleswitch head-pat1" rel="head-pat1" href="#"><span></span>
		</a> <a class="styleswitch head-pat6" rel="head-pat6" href="#"><span></span>
		</a> <a class="styleswitch head-pat8" rel="head-pat8" href="#"><span></span>
		</a> <a class="styleswitch head-pat9" rel="head-pat9" href="#"><span></span>
		</a> <a class="styleswitch head-pat11" rel="head-pat11" href="#"><span></span>
		</a> <a class="styleswitch head-pat2" rel="head-pat2" href="#"><span></span>
		</a> <a class="styleswitch head-pat3" rel="head-pat3" href="#"><span></span>
		</a> <a class="styleswitch head-pat4" rel="head-pat4" href="#"><span></span>
		</a> <a class="styleswitch head-pat5" rel="head-pat5" href="#"><span></span>
		</a> <a class="styleswitch head-pat7" rel="head-pat7" href="#"><span></span>
		</a> <a class="styleswitch head-pat10" rel="head-pat10" href="#"><span></span>
		</a> <a class="styleswitch head-pat12" rel="head-pat12" href="#"><span></span>
		</a> <a style="text-indent: 0px;" class="styleswitch colors tiptip"
			title="Click and choose our favorite color" id="schema-colorpicker"
			rel="header-trans" href="#"></a>
		<!-- color picker-->
	</div>
	<!-- START HEADER -->
	<div class="header head-pat6">
		<div class="container_12">
			<!-- START HEADING -->
			<div class="heading">
				<!-- START LOGO -->
				<div class="logo">
					<a href="/"><img src="/wp-content/themes/clean/images/logo.png"
						alt="" /> </a>
				</div>
				<!-- END LOGO -->
				<!-- START NAVIGATION -->
				<div class="navigation">
				<?php //wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<?php wp_nav_menu( array( 'menu_class' => 'ddsmoothmenu',
												'theme_location' => 'primary' ) ); ?>



					<br style="clear: left" />
					<!-- </div> -->
				</div>
				<!-- END NAVIGATION -->
			</div>
			<!-- END HEADING -->
		</div>
		<?php if(is_home()):?>
		<!-- START SLIDER -->
		<div class="container_12">
			<div class="jcycle">
				<div class="jcycle-slider-item">
					<div class="grid_7 jcycle-slider-item-text">
						<h1>Integer aenean nisi aliquet! Integer tristique non.</h1>
						<span>Nisi urna scelerisque, vel penatibus turpis, natoque dapibus
							turpis adipiscing! Tortor dapibus. Duis urna lectus pulvinar
							scelerisque scelerisque, facilisis scelerisque, purus, ridiculus,
							montes in, ac rhoncus in, ultrices. Odio? Scelerisque. <a
							href="#" class="slider-readmore">Read More »</a> </span>
					</div>
					<div class="grid_5 jcycle-slider-item-image ">
						<img src="/wp-content/themes/clean/images/content/jcycle/1.png"
							alt="" />
					</div>
				</div>
				<div class="jcycle-slider-item">
					<div class="grid_7 jcycle-slider-item-text">
						<h1>Lundium rhoncus. Mauris sed porta est.</h1>
						<span>Etiam platea urna vel scelerisque nec vut lorem non tortor
							eu purus elit augue! Ultrices sit aliquet a tincidunt purus nunc,
							rhoncus, tempor dignissim cras porttitor, rhoncus. Turpis, ut ut.<a
							href="#" class="slider-readmore">Read More »</a> </span>
					</div>
					<div class="grid_5 jcycle-slider-item-image ">
						<img
							src="/wp-content/themes/clean/images/content/jcycle/iphone4.png"
							alt="" />
					</div>
				</div>
				<div class="jcycle-slider-item">
					<div class="grid_7 jcycle-slider-item-text">
						<h1>Phasellus, tempor cum sed nec! Eros.</h1>
						<span>Diam, sed, turpis ac rhoncus aliquet risus arcu habitasse!
							Dignissim cum? Est rhoncus? Turpis massa, tincidunt nunc enim
							mauris enim aliquam? Non nisi urna placerat ultrices enim porta
							tristique.<a href="#" class="slider-readmore">Read More »</a> </span>
					</div>
					<div class="grid_5 jcycle-slider-item-image ">
						<img
							src="/wp-content/themes/clean/images/content/jcycle/iphone42.png"
							alt="" />
					</div>
				</div>
			</div>
		</div>
		<!-- END SLIDER -->
		<?php endif;?>
	</div>
	<!-- END HEADER -->

	<!-- START TOP -->
	<div class="top-single">
		<div class="container_12">
			<div class="teaser">
				<div class="grid_9">
					<span class="teaser-text">Ac vel diam tristique pellentesque sit in
						parturient dolor lorem arcu sit, platea! Pid ultricies massa velit
						natoque a, sagittis turpis integer placerat. Tristique ultricies
						elementum aliquam.</span>
				</div>
				<div class="grid_3">
					<a class="teaser-button">YOUR TEXT HERE</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END TOP -->
	<!-- START MAIN -->
	<div class="main">
		<div class="container_12">
			<div class="main-continer continer-left">
				<div class="grid_8">