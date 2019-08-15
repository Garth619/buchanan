<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main">

	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="pa_directory">
		
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
		</div><!-- pa_directory -->
		
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	
		
<?php get_footer(); ?>
