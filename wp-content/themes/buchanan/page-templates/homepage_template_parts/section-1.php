<section id="section_one">
		
		<div class="section_one_inner">
			
			<span class="sec_one_subheader"><?php the_field( 'section_one_subheader' ); ?></span><!-- sec_one_subheader -->
			
			<span class="sec_one_large_header"><?php the_field( 'section_one_title' ); ?></span><!-- sec_one_large_header -->
			
			<ul class="sec_one_sp_list">
				
				<?php if(get_field('section_one_list')): ?>
				 
					<?php while(has_sub_field('section_one_list')): ?>
				 
						<li><?php the_sub_field( 'list_bullet' ); ?></li>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</ul><!-- sec_one_sp_list -->
			
			<div class="pa_input_wrapper">
				
				<div class="pa_input">
					
					<span class="pa_input_value desktop"><?php the_field( 'section_one_practice_areas_question' ); ?></span><!-- pa_input_value -->
					
					<span class="pa_input_value mobile"><?php the_field( 'section_one_practice_areas_select_verbiage' ); ?></span><!-- pa_input_value -->
					
				</div><!-- pa_input -->
				
				<div class="pa_submit">
					
					Next
					
				</div><!-- pa_submit -->
				
				<div class="step_two"></div><!-- step_two -->
				
				<div class="pa_dropdown">
					
					<ul>
						
						<?php if(get_field('section_one_pa_input_list')): ?>
						 
							<?php while(has_sub_field('section_one_pa_input_list')): ?>
						 
								<li><?php the_sub_field( 'list_item' ); ?></li>
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
					</ul>
					
				</div><!-- pa_dropdown -->
				
			</div><!-- pa_input_wrapper -->
			
			<div class="pa_sps_wrapper">
				
				<?php if(get_field('section_one_practice_area_lists')): ?>
				 
					<?php while(has_sub_field('section_one_practice_area_lists')): ?>
				 
						<div class="pa_sps">
				
							<span class="pa_sps_title"><?php the_sub_field( 'pa_title' ); ?></span><!-- pa_sps_title -->
				
							<span class="pa_sps_description"><?php the_sub_field( 'pa_description' ); ?></span><!-- pa_sps_description -->
				
							<a class="learn_more" href="<?php the_sub_field( 'pa_link' ); ?>">
						
								<span>Learn More</span>
						
								<?php echo file_get_contents("wp-content/themes/buchanan/images/graphic-squiggle.svg"); ?>
					
						</a><!-- learn_more -->
				
				</div><!-- pa_sps -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
								
			</div><!-- pa_sps_wrapper -->
			
		</div><!-- section_one_inner -->
		
		<div class="mobile_position_play">
		
		<div class="sec_one_play_wrapper">
			
				<div class="sec_one_wistia wistia_embed wistia_async_<?php the_field( 'section_one_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- sec_one_wistia -->
				
				<img class="play_button_dots" src="<?php bloginfo('template_directory');?>/images/hero-vid-thumb-dots.svg"/><!-- play_button_dots -->
				
				<div class="vid_img_wrapper">
					
					<?php $section_one_video_thumb = get_field( 'section_one_video_thumb' ); ?>

					<img src="<?php echo $section_one_video_thumb['url']; ?>" alt="<?php echo $section_one_video_thumb['alt']; ?>" />

				</div><!-- vid_img_wrapper -->
				
				<img class="play_verbiage" src="<?php bloginfo('template_directory');?>/images/hero-vid-playbutton.png"/><!-- play_verbiage -->
				
			</div><!-- sec_one_play_wrapper -->
			
		</div><!-- mobile_position -->
		
		<div class="parallax">
			

			<picture id="pic_one">
				
				<source media="(min-width: 1290px)" srcset="<?php bloginfo('template_directory');?>/images/layer-3.jpg">
					
				<img id="para_one" src="" alt=""/>
		
			</picture>
			
			<picture id="pic_two">
				
				<source media="(min-width: 1290px)" srcset="<?php bloginfo('template_directory');?>/images/layer-2.png">
					
				<img id="para_two" src="" alt=""/>
				
			</picture>
			
			<picture id="pic_three">
				
				<source media="(min-width: 1290px)" srcset="<?php bloginfo('template_directory');?>/images/layer-1.png">
					
				<img id="para_three" src="" alt=""/>
				
			</picture>

		
		</div><!-- parallax -->

		
		<picture>
				
			<source media="(max-width: 1290px)" srcset="<?php bloginfo('template_directory');?>/images/hero-tab.jpg">
					
			<img class="tab_hero" src="" alt=""/>
		
		</picture>
		
		<div class="sec_one_gradient"></div>
		
<!-- 		<div class="sec_one_cover"></div> -->

	</section><!-- section_one -->
	
	<div class="pa_overlay">
		
		<div class="pa_close"></div><!-- pa_close -->
				
		<div class="pa_overlay_inner">
			
			<div class="form_wrapper">
		
				<span class="large_header">Free Consultation</span><!-- large_header -->
		
				<span class="small_header">Information Required</span><!-- small_header -->
		
				<?php gravity_form(4, false, false, false, '', true, 132); ?>
		
			</div><!-- form_wrapper -->		
					
		</div><!-- pa_overlay_inner -->
				
	</div><!-- pa_overlay -->

