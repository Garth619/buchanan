<section id="section_two">
	
	<img class="circles" alt="Circles Image" data-src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="sec_two_top">
		
		<h1><span class="large_header"><?php the_field( 'section_two_large_header' ); ?></span> <span class="sub_header"><?php the_field( 'section_two_sub_header' ); ?></span></h1>
		
		<span class="sec_two_top_description"><?php the_field( 'section_two_intro' ); ?></span><!-- sec_two_top_description -->

				
	</div><!-- sec_two_top -->
	
	<div class="sec_two_bottom">
		
		<div id="sec_two_left_trigger" class="sec_two_left">
			
			<div class="sec_two_pic_wrapper">
				
				<?php $section_two_image = get_field( 'section_two_image' ); ?>

				<img class="pic" data-src="<?php echo $section_two_image['url']; ?>" alt="<?php echo $section_two_image['alt']; ?>" />

			</div><!-- sec_two_pic_wrapper -->
			
			<div class="sec_two_cta">
			
				<img class="sec_two_cta_img" data-src="<?php bloginfo('template_directory');?>/images/graphic-pullquote-dots.jpg" alt="Dots Image"/>
				
				<span class="sec_two_cta_description"><?php the_field( 'section_two_quote' ); ?></span><!-- sec_two_cta_description -->
				
				<a class="button sec_two_consult_button" href="#consultation">Schedule a Free Consultation</a><!-- consult_button -->
			
			</div><!-- sec_two_cta -->

			
		</div><!-- sec_two_left -->
		
		<div class="sec_two_right content">
			
			<?php the_field( 'section_two_content' ); ?>
			
		</div><!-- sec_two_right -->
		
	</div><!-- sec_two_bottom -->
	
</section><!-- section_two -->