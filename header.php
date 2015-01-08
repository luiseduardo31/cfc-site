<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Bharat
 * @since Bharat 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
		<!-- Magnific Popup -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" rel="stylesheet">
		<!-- Owl carousel -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
		
		<!-- CSS for this page -->
		<!-- Revolution Slider -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/settings.css" rel="stylesheet">
		
		<!-- Base style -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/styles/style.css" rel="stylesheet">
		<!-- Skin CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/styles/skin-lblue.css" rel="stylesheet" id="color_theme">
		
		<!-- Custom CSS. Type your CSS code in custom.css file -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
</head>

	<!-- Add class "boxed" along with body for boxed layout. -->
	<!-- Add "pattern-x" (1 to 5) for background patterns. -->
	<!-- Add "img-x" (1 to 5) for background images. -->
	<body>
			
			<!-- Top bar starts -->
			<div class="top-bar">
				<div class="container">
				
					<!-- Contact starts -->
					<div class="tb-contact pull-left">
						<!-- Email -->
						<i class="fa fa-envelope color"></i> &nbsp; contato@cfc.cfc-es.com.br
						&nbsp;&nbsp;  
						<!-- Phone -->
						<i class="fa fa-phone color"></i> &nbsp; (27) 2020-3030
					</div>
					<!-- Contact ends -->
					
					
					<!-- Search section for responsive design -->
					<div class="tb-search pull-left">
						<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
						<div class="b-dropdown-block">
							<form role="form">
								<!-- Input Group -->
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Type Something">
									<span class="input-group-btn">
										<button class="btn btn-color" type="button">Search</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<!-- Search section ends -->
					
					<!-- Social media starts -->
					<div class="tb-social pull-right">
						<div class="brand-bg text-right" style="margin-right: -13px !important;">
							<!-- Brand Icons -->
							<a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
						</div>
					</div>
					<!-- Social media ends -->
					
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Top bar ends -->
			
			<!-- Header two Starts -->
			<div class="header-2">
			
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<!-- Logo section -->
							<div class="logo">
								<h1><a href="#"><i class="fa fa-laptop"></i> Logo</a></h1>
							</div>
						</div>
						<div class="col-md-9">
						
							<!-- Navigation starts.  -->
							<div class="navy">			
								<ul>
									<!-- Main menu -->
									<li><a href="#">Home</a></li>
                                    <li><a href="#">A Empresa</a></li>
                                    <li><a href="#">Frota</a></li>
                                    <li><a href="#">Cursos</a></li>
                                    <li><a href="#">Pr&eacute;-Matricula</a></li>
                                    <li><a href="#">Contato</a></li>	
								</ul>
							</div>							
							<!-- Navigation ends -->
							
						</div>
						
						<div class="col-md-1">
							
							<!-- Search section -->
							<div class="head-search pull-right">
								<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
								<div class="b-dropdown-block">
									<form role="form">
										<!-- Input Group -->
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Type Something">
											<span class="input-group-btn">
												<button class="btn btn-color" type="button">Search</button>
											</span>
										</div>
									</form>
								</div>
							</div>
							<!-- Search section ends -->
							<div class="clearfix"></div>
							
						</div>
						
					</div>
				</div>
			</div>
	
			<!-- Header two ends -->