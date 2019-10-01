<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="contact_info">
		
			<div class="contact_info_left">
			
			<div class="contact_single_info">
			
				<span class="contact_info_title"><?php the_field( 'footer_our_office_title','option'); ?></span><!-- contact_info_title -->
			
				<span class="address large_text"><?php the_field( 'address','option'); ?></span><!-- address -->
			
				<a class="get_directions contact_link" href="<?php the_field( 'address_link','option'); ?>" target="_blank" rel="noopener">
				
					<span>Get Directions</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow2.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- contact_single_info -->
			
		</div><!-- contact_info_left -->
		
		<div class="contact_info_right">
			
			<div class="contact_single_info">
			
				<span class="contact_info_title"><?php the_field( 'footer_give_us_a_call_title','option'); ?></span><!-- contact_info_title -->
				
				<span class="contact_info_subtitle">Toll Free</span><!-- contact_info_subtitle -->
			
				<a class="phone large_text" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone_number', 'option')); ?>"><?php the_field( 'firm_phone_number','option'); ?></a><!-- address -->
				
				<span class="contact_info_subtitle">Fax</span><!-- contact_info_subtitle -->
			
				<a class="phone large_text"><?php the_field( 'footer_fax','option'); ?></a><!-- address -->
			
			</div><!-- contact_single_info -->
			
			<div class="contact_single_info">
			
				<span class="contact_info_title"><?php the_field( 'footer_schedule_an_appointment_title','option'); ?></span><!-- contact_info_title -->
			
				<span class="view_calendar large_text"><?php the_field( 'footer_appointment_verbiage','option'); ?></span><!-- address -->
			
				<a class="make_appointment contact_link" href="<?php the_field( 'footer_make_an_appointment_link','option'); ?>">
				
					<span>Make Appointment</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow2.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- contact_single_info -->
			
		</div><!-- contact_info_right -->
		
		</div><!-- contact_wrapper -->
		
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	

<div class="contact_map">
	
	<?php the_field( 'iframe_map' ); ?>
	
</div><!-- contact_map -->
			
<?php get_footer(); ?>