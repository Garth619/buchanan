<?php 

/* Template Name: Make Appointment */

get_header(); ?>


<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="make_appointment_wrapper">
		
			<?php echo do_shortcode("[ea_standard]"); ?>
		
		</div><!-- make_appointment_wrapper -->
		
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	
		
<?php get_footer(); ?>
