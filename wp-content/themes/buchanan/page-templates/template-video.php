<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">
	
	<img class="internal_circles" src="<?php bloginfo('template_directory');?>/images/graphic-dots.svg"/>
	
	<div class="internal_wrapper">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="video_wrapper">
			
			<?php if(get_field('video_library')): ?>
			 
				<?php while(has_sub_field('video_library')): ?>
			 
						<div class="single_video">
				
							<a href="//player.vimeo.com/video/<?php the_sub_field( 'vimeo_id' ); ?>?portrait=0&autoplay=1" data-lity>
					
								<div class="single_video_img_wrapper">
						
									<div class="click_play_wrapper">
							
										<div class="click_play_inner">
							
											<img class="click_play" src="<?php bloginfo('template_directory');?>/images/test.png"/>
							
										</div><!-- click_play_inner -->
							
								</div><!-- click_play_wrapper -->
								
								<?php $video_thumbnail = get_sub_field( 'video_thumbnail' ); 
								
									if ( $video_thumbnail ) : ?>
								
									<img class="vimeo_thumb" src="<?php echo $video_thumbnail['url']; ?>" alt="<?php echo $video_thumbnail['alt']; ?>" />
								
									<?php else:
									
										$url = "https://player.vimeo.com/video/" . get_sub_field('vimeo_id');
                
										if(function_exists('grab_vimeo_thumbnail')){
                                    
											$thumb = grab_vimeo_thumbnail($url);
                 
             				} else {
                  	
						 					$thumb = "grab vimeo didn't work";
                 
             				}
                                
           				?>
						
					 				<img class="vimeo_thumb" src="<?php echo $thumb; ?>"/>
									
								<?php endif; ?>
						
								<div class="video_overlay"></div><!-- video_overlay -->
						
							</div><!-- single_video_img_wrapper -->
					
							<div class="video_content">
						
								<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
						
								<span class="video_description"><?php the_sub_field( 'video_description' ); ?></span><!-- video_description -->
						
							</div><!-- video_content -->
					
						</a>
				
					</div><!-- single_video -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
							
		</div><!-- video_wrapper -->
				
	</div><!-- internal_wrapper -->

</div><!-- internal_main -->	


<?php get_footer(); ?>
