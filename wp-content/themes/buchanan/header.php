<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
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
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- <link rel="stylesheet" href="https://use.typekit.net/vvg8luc.css"> -->

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700,800&display=swap');

@import url("https://use.typekit.net/vvg8luc.css");

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<header id="header_trigger">
		
		<div class="header_left">
			
			<a href="<?php bloginfo('url');?>">
				
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.svg"/>
				
			</a>
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="consult_phone">
				
				<span class="free_consult">Free Consultation</span><!-- free_consult -->
				
				<a class="phone" href="">1(800)272-4080</a><!-- phone -->
				
			</div><!-- consult_phone -->
			
			<div class="menu_wrapper">
				
				<div class="menu_bars">
					
					<span class="menu_bar"></span><!-- menu_bar -->
					<span class="menu_bar"></span><!-- menu_bar -->
					<span class="menu_bar"></span><!-- menu_bar -->
					
					<span class="menu_title">Menu</span><!-- menu_title -->
					
				</div><!-- menu_bars -->
				
			</div><!-- menu_wrapper -->
			
			<div class="small_device_close_wrapper">
				
				<div class="small_device_close"></div><!-- small_device_close -->
				
			</div><!-- small_device_close_wrapper -->
			
			<div class="small_device_back_wrapper">
				
				<div class="small_device_back">Back</div><!-- small_device_back -->
				
			</div><!-- small_device_back_wrapper -->
			
		</div><!-- header_right -->
		
		
		
		<nav>
			
			<div class="mobile_header"></div><!-- mobile_header -->
			
			<div class="nav_left">
				
				<div class="nav_col nav_col_left">
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
					
				</div><!-- nav_col_left -->
				
				<div class="nav_col nav_col_right">
					
					<div class="nav_col_right_inner">
						
						
					</div><!-- nav_col_right_inner -->
					
				</div><!-- nav_col_right -->
				
			</div><!-- nav_left -->
			
			<div class="nav_right">
				
				<div class="nav_close"></div><!-- nav_close -->
			
				<div class="nav_right_inner">
					
					<span class="nav_right_header">Contact</span><!-- nav_right_header -->
					
					<span class="nav_right_sub_header">Information Required</span><!-- nav_right_sub_header -->
					
					<?php gravity_form(5, false, false, false, '', true, 1492); ?>
					
				</div><!-- nav_right_inner -->
				
			</div><!-- nav_right -->
			
		</nav>
		
	</header>
	
	<div class="sticky_mobile_header closed">
		
		<div class="sticky_header_left">
			
			<span class="call_now">Call Now</span><!-- call_now -->
			
			<a class="sticky_phone" href="">1(800)272-4080</a><!-- call_now -->
			
		</div><!-- sticky_header_left -->
		
		<div class="sticky_header_right">
			
			<div class="sticky_menu_bars">
				
				<span class="sticky_menu_bar"></span><!-- sticky_menu_bar -->
				<span class="sticky_menu_bar"></span><!-- sticky_menu_bar -->
				<span class="sticky_menu_bar"></span><!-- sticky_menu_bar -->
				
			</div><!-- sticky_menu_bars -->
			
		</div><!-- sticky_header_right -->
		
	</div><!-- sticky_mobile_header -->
				


			