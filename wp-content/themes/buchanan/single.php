<?php get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/template', 'banner'); ?>

	<div class="container two_col">
		
		<div class="inner_content content">
			
			<h1 class="blog"><?php the_title();?></h1><!-- blog -->
			
			<?php get_template_part( 'loop', 'single' ); ?>
							
		</div><!-- inner_content -->
		
		<?php get_sidebar('blog'); ?>
		
	</div><!-- container -->

</div><!-- internal_main -->
				
<?php get_footer(); ?>




