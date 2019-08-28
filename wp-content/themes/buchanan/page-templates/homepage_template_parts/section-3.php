<section id="section_three">
	
	<div class="sec_three_inner">
		
		<div class="sec_three_slider">
			
			<?php if(get_field('section_three_testimonials')): ?>
			 
				<?php while(has_sub_field('section_three_testimonials')): ?>
			 
					<div class="sec_three_slide <?php the_sub_field( 'class' ); ?>">
				
				<div class="sec_three_slide_inner">
				
					<img class="stars" src="<?php bloginfo('template_directory');?>/images/test-stars.svg"/>
				
					<span class="large_quote"><?php the_sub_field( 'testimonial_header_quote' ); ?></span><!-- large_quote -->
				
					<img class="quote_line" src="<?php bloginfo('template_directory');?>/images/graphic-squiggle.svg"/>
					
					<span class="small_quote"><?php the_sub_field( 'testimonial_description_quote' ); ?></span><!-- small_quote -->
					
					<span class="name"><?php the_sub_field( 'testimonial_name' ); ?></span>
				
				</div><!-- sec_three_slide_inner -->
				
			</div><!-- sec_three_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>			
						
		</div><!-- sec_three_slider -->
		
		<div class="sec_three_arrow_wrapper">
			
			<div class="sec_three_arrow sec_three_arrow_left">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
				
			</div><!-- sec_three_arrow -->
			
			<div class="sec_three_arrow sec_three_arrow_right">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
				
			</div><!-- sec_three_arrow -->
			
		</div><!-- sec_three_arrow_wrapper -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->