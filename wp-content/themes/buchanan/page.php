<?php get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/template', 'banner'); ?>

	<div class="container two_col">
		
		<div class="inner_content content">
			
			<h1><?php the_title();?></h1>
			
			<?php get_template_part( 'loop', 'page' ); ?>
							
		</div><!-- inner_content -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- container -->

</div><!-- internal_main -->

<?php get_footer(); ?>
