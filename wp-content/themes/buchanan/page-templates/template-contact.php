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
			
				<span class="contact_info_title">Our Office</span><!-- contact_info_title -->
			
				<span class="address large_text">171 Monroe Ave. N.W. Suite 750<br/> Grand Rapids, MI 49503</span><!-- address -->
			
				<a class="get_directions contact_link" href="https://www.google.com/maps/place/Buchanan+%26+Buchanan/@42.9660429,-85.6747177,17z/data=!3m1!4b1!4m5!3m4!1s0x8819adc56eaae4b7:0xa15168f6732b1f98!8m2!3d42.966039!4d-85.672529" target="_blank" rel="noopener">
				
					<span>Get Directions</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow2.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- contact_single_info -->
			
		</div><!-- contact_info_left -->
		
		<div class="contact_info_right">
			
			<div class="contact_single_info">
			
				<span class="contact_info_title">Give Us a Call</span><!-- contact_info_title -->
				
				<span class="contact_info_subtitle">Toll Free</span><!-- contact_info_subtitle -->
			
				<a class="phone large_text" href="tel:18002724080">1(800) 272-4080</a><!-- address -->
				
				<span class="contact_info_subtitle">Fax</span><!-- contact_info_subtitle -->
			
				<a class="phone large_text">(616) 458-0608</a><!-- address -->
			
			</div><!-- contact_single_info -->
			
			<div class="contact_single_info">
			
				<span class="contact_info_title">Schedule an Appointment</span><!-- contact_info_title -->
			
				<span class="view_calendar large_text">View our calendar and contact a member of our team</span><!-- address -->
			
				<a class="get_directions contact_link" href="<?php the_permalink(56);?>">
				
					<span>Make Appointment</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow2.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- contact_single_info -->
			
		</div><!-- contact_info_right -->
		
		</div><!-- contact_wrapper -->
		
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	

			
<?php get_footer(); ?>