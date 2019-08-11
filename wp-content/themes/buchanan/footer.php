<footer id="consultation">
	
	<div class="form_wrapper">
		
		<span class="large_header">Free Consultation</span><!-- large_header -->
		
		<span class="small_header">Information Required</span><!-- small_header -->
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- form_wrapper -->
	
	<div class="footer_info">
		
		<div class="footer_info_left">
			
			<span class="footer_info_title">Our Office</span><!-- footer_info_title -->
			
			<span class="address large_text">171 Monroe Ave. N.W. Suite 750<br/> Grand Rapids, MI 49503</span><!-- address -->
			
			<a class="get_directions footer_link" href="">
				
				<span>Get Directions</span>
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
			
			</a><!-- get_directions -->
			
		</div><!-- footer_info_left -->
		
		<div class="footer_info_right"></div><!-- footer_info_right -->
		
	</div><!-- footer_info -->
	
	<img class="bridge desktop"src="<?php bloginfo('template_directory');?>/images/bridge-desktop.jpg"/><!-- bridge -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
