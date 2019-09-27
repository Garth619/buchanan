<section id="section_four">
	
	<img class="circles desktop" data-src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg" alt="Circles Image"/>
	
	<img class="circles tablet" data-src="<?php bloginfo('template_directory');?>/images/graphic-dots-tablet.svg" alt="Circles Image"/>
	
	
	
	<div class="sec_four_top">
		
		<h2><span class="large_header"><?php the_field( 'section_four_header' ); ?></span><span class="sub_header"><?php the_field( 'section_four_sub_header' ); ?></span></h2>
		
		<span class="sec_four_description"><?php the_field( 'section_four_intro' ); ?></span><!-- sec_four_description -->
		
		<a class="button sec_four_button" href="#consultation">Schedule a Free Consultation</a><!-- button -->
		
	</div><!-- sec_four_top -->
	
	<div class="sec_four_bottom content">
		
		<div class="sec_four_col">
			
			<?php the_field( 'section_four_column_one' ); ?>
			
		</div><!-- sec_four_col -->
		
		<div class="sec_four_col">
			
			<?php the_field( 'section_four_column_two' ); ?>
			
		</div><!-- sec_four_col -->
		
	</div><!-- sec_four_bottom -->
	
</section><!-- section_four -->