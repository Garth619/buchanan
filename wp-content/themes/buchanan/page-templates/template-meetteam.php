<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="meet_team_wrapper">
			
			<?php $attorney_bios = get_field( 'attorney_bios' ); ?>
			
			<?php if ( $attorney_bios ): ?>
				
				<?php foreach ( $attorney_bios as $post ):  ?>
				
				<?php setup_postdata ( $post ); ?>
				
					<div class="single_att">
				
						<a href="<?php the_permalink();?>">
				
							<div class="att_img_wrapper">
								
								<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
			
								<?php if($attorney_profile_image) : ?>

									<img class="att_img" src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
			
									<?php else:?>
			
									<img class="att_img" src="<?php bloginfo('template_directory'); ?>/images/placeholder.jpg" alt="<?php the_title();?>" />
			
								<?php endif;?>
						
								<div class="att_overlay">
						
									<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
						
									<span>View Profile</span>
						
								</div><!-- att_overlay -->
					
							</div><!-- att_img_wrapper -->
					
							<span class="att_name"><?php the_title();?></span>
					
							<span class="att_position"><?php the_field( 'att_position' ); ?></span><!-- att_position -->
				
						</a>
				
					</div><!-- single_att -->
				
				<?php endforeach; ?>
				
				<?php wp_reset_postdata(); ?>
				
			<?php endif; ?>
			
		</div><!-- meet_team_wrapper -->
				
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	


<?php get_footer(); ?>
