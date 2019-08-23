<div class="sidebar_wrapper blog">
	
	<div class="sidebar_form">
				
		<span class="sidebar_form_title">Free Consultation</span><!-- sidebar_form_title -->
				
		<span class="sidebar_form_required">Information Required</span><!-- sidebar_form_required -->
				
		<?php gravity_form(6, false, false, false, '', true, 12); ?>
				
	</div><!-- sidebar_form -->
	
	<div class="sidebar_box_wrapper">
	
		<div class="sidebar_box blog recent_posts">
			
			<?php dynamic_sidebar( 'recent_posts' ); ?>
			
		</div><!-- sidebar_box -->
		
		<div class="sidebar_box blog categories">
			
			<?php dynamic_sidebar( 'category_sidebar' ); ?>
			
		</div><!-- sidebar_box -->
		
		<div class="sidebar_box blog archives">
			
			<?php dynamic_sidebar( 'archive_sidebar' ); ?>
			
		</div><!-- sidebar_box -->
	
	</div><!-- sidebar_box_wrapper -->
	
</div><!-- sidebar_wrapper -->


