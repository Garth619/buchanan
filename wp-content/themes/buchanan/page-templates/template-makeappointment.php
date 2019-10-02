<?php 

/* Template Name: Make Appointment */

get_header(); ?>


<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<span class="about_firm_subtitle">SELECT A DATE ON THE CALENDAR TO START</span><!-- about_firm_subtitle -->
		
		<div class="make_appointment_wrapper">
			
			<?php $make_appointment_image = get_field( 'make_appointment_image' ); ?>
			
			<?php if ( $make_appointment_image ) { ?>
			
			<img class="make_appointment_image" src="<?php echo $make_appointment_image['url']; ?>" alt="<?php echo $make_appointment_image['alt']; ?>" />
			
			<?php } ?>
		
			<?php echo do_shortcode("[ea_standard]"); ?>
		
		</div><!-- make_appointment_wrapper -->
		
	</div><!-- internal_main -->	
		
<?php get_footer(); ?>
