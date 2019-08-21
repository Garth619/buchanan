<div class="sidebar_wrapper bio">
	
	<div class="sidebar_bio_image desktop">
		
		<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
			
			<?php if($attorney_profile_image) : ?>

				<img class="bio_image" src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
			
				<?php else:?>
			
				<img class="bio_image" src="<?php bloginfo('template_directory'); ?>/images/placeholder.jpg" alt="<?php the_title();?>" />
			
			<?php endif;?>
				
	</div><!-- sidebar_bio_image -->
	
	<div class="sidebar_box_wrapper bio">
		
		<img class="internal_circles bio" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
		
		<?php if(get_field('sidebar_credentials')): ?>
		
		<div class="sidebar_box bio">
			
			<h3><?php the_field( 'sidebar_credentials_title' ); ?></h3>
			
			<ul>
		 
			<?php while(has_sub_field('sidebar_credentials')): ?>
		 
				<li><a><?php the_sub_field( 'list_item' ); ?></a></li>
		    
			<?php endwhile; ?>
			
			</ul>
			
		</div>
		 
		<?php endif; ?>
		
	</div><!-- sidebar_box_wrapper -->
	
</div><!-- sidebar_wrapper -->


