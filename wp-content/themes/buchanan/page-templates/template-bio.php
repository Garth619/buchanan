<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main">

	<div class="container two_col">
		
		<div class="inner_content content">
			
			<h1 class="bio_header"><?php the_title();?></h1>
			
			<span class="att_postion"><?php the_field( 'att_position' ); ?></span><!-- att_postion -->
			
			<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
			
			<?php if($attorney_profile_image) : ?>

				<img class="bio_image mobile" src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
			
				<?php else:?>
			
				<img class="bio_image mobile" src="<?php bloginfo('template_directory'); ?>/images/placeholder.jpg" alt="<?php the_title();?>" />
			
			<?php endif;?>
				
				<?php the_field( 'attorney_bio_content' ); ?>
			
				<?php if(get_field('questions_and_answers')): ?>
				
					<h2 class="qa_title"><?php the_field( 'questions_and_answers_title' ); ?></h2><!-- qa_title -->
				
					<div class="qa_wrapper">
				 
					<?php while(has_sub_field('questions_and_answers')): ?>
				 
						<div class="qa_inner">

							<h3 class="question"><?php the_sub_field( 'question' ); ?></h3>
			
							<?php the_sub_field( 'answer' ); ?>

						</div><!-- qa_inner -->
				    
					<?php endwhile; ?>
					
					</div><!-- qa_wrapper -->
				 
				<?php endif; ?>
			
				<?php if(get_field('memberships_and_awards')): ?>
					
					<div class="memberships">
			
						<h2><?php the_field( 'memberships_and_awards_title' ); ?></h2>
						
						<ul>
				 
					<?php while(has_sub_field('memberships_and_awards')): ?>
				 
					<li><?php the_sub_field( 'list_item' ); ?></li>
				    
					<?php endwhile; ?>
					
						</ul>
					
					</div><!-- memberships -->
				 
				<?php endif; ?>
				
				<?php if(get_field('fun_facts')): ?>
				
					<div class="fun_facts">
			
						<h2><?php the_field( 'fun_facts_title' ); ?></h2>
						
						<ul>
				 
					<?php while(has_sub_field('fun_facts')): ?>
				 
						<li><?php the_sub_field( 'list_item' ); ?></li>
				    
					<?php endwhile; ?>
					
						</ul>
					
					</div><!-- fun_facts -->
				 
				<?php endif; ?>
							
		</div><!-- inner_content -->
		
		<?php get_sidebar('bio'); ?>
		
	</div><!-- container -->

</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
