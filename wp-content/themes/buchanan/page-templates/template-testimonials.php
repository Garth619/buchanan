<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="testimonials_wrapper">
						
			<?php if(get_field('testimonials')): ?>
			
					<?php while(has_sub_field('testimonials')): ?>
			 
				<div class="single_testi">
					
					<div class="single_testi_inner">
				
						<img class="stars" src="<?php bloginfo('template_directory');?>/images/test-stars.svg"/>
					
						<span class="single_testi_title"><?php the_sub_field( 'testimonial_intro' ); ?></span><!-- testi_title -->
					
						<div class="single_testi_description">
						
							<?php the_sub_field( 'testimonial_description' ); ?>
						
						</div><!-- single_testi_description -->
					
						<span class="single_testi_name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- single_testi_name -->
					
					</div><!-- single_testi_inner -->
				
				</div><!-- single_testi -->
			 
				<?php endwhile; ?>
			 
			<?php endif; ?>			
			
		</div><!-- testimonials_wrapper -->
				
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	

<?php get_footer(); ?>
