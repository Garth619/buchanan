<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<div class="about_intro_wrapper">
		
			<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
			<span class="about_firm_subtitle"><?php the_field( 'about_subtitle' ); ?></span><!-- about_firm_subtitle -->
		
			<div class="about_firm_intro">
			
				<?php the_field( 'about_intro' ); ?>
			
			</div><!-- about_firm_intro -->
		
		</div><!-- about_intro_wrapper -->
		
		<div id="about_trigger" class="about_top_content">
			
			<div class="about_top_left content">
				
				<?php the_field( 'about_top_content' ); ?>
				
			</div><!-- about_top_left -->
			
			<div class="about_top_right">
				
				<div class="about_top_video">
					
					<div class="about_wistia wistia_embed wistia_async_<?php the_field( 'about_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- about_wistia -->
					
					<?php $video_thumb = get_field( 'video_thumb' ); ?>

					<img class="about_video_thumb" src="<?php echo $video_thumb['url']; ?>" alt="<?php echo $video_thumb['alt']; ?>" />

					<div class="about_play_wrapper">
					
						<img class="about_play" src="<?php bloginfo('template_directory');?>/images/hero-vid-playbutton.png"/>
					
					</div><!-- about_play_wrapper -->
					
				</div><!-- about_top_video -->
				
			</div><!-- about_top_right -->
			
		</div><!-- about_top_content -->
		
		<div class="about_middle_content">
			
			<?php echo file_get_contents("wp-content/themes/buchanan/images/int-about-icon.svg"); ?>
			
			<div class="about_middle_quote">
				
				<?php the_field( 'about_middle_content' ); ?>
				
				<a class="button" href="#consultation">Schedule a Free Consultation</a>
				
			</div><!-- about_middle_quote -->
			
		</div><!-- about_middle_content -->
		
		<div class="about_bottom_content content">
			
			<div class="about_bottom_col">
				
				<?php the_field( 'about_bottom_column_one' ); ?>
				
			</div><!-- about_bottom_col -->
			
			<div class="about_bottom_col">
				
				<?php the_field( 'about_bottom_column_two' ); ?>
				
			</div><!-- about_bottom_col -->
			
		</div><!-- about_bottom_content -->
				
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	

<?php get_footer(); ?>
