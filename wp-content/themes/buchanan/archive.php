<?php get_header(); ?>



<div id="internal_main">

	<?php get_template_part('page-templates/template', 'banner'); ?>

	<div class="container two_col">
		
		<div class="inner_content content">
			
			<?php
	
	if ( have_posts() )
		the_post();
?>

			<h1>
<?php if ( is_day() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>
			
				<?php rewind_posts(); ?>

			
			<?php get_template_part( 'loop', 'index' ); ?>
							
		</div><!-- inner_content -->
		
		<?php get_sidebar('blog'); ?>
		
	</div><!-- container -->

</div><!-- internal_main -->

				
			


<?php get_footer(); ?>


		




