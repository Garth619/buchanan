<?php get_header(); ?>

<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_field( 'not_found_title','option'); ?></h1><!-- internal_header -->
		
		<div class="not_found_wrapper">
			
			<span class="not_found_content"><?php the_field( 'not_found_verbiage','option'); ?></span>

			<a class="button not_found_button" href="<?php bloginfo('url');?>">Return to Homepage</a>
			
		</div><!-- not_found_wrapper -->
		
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	


	
<?php get_footer(); ?>