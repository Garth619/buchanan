<footer id="consultation">
	
	<div class="form_wrapper">
		
		<span class="large_header">Free Consultation</span><!-- large_header -->
		
		<span class="small_header">Information Required</span><!-- small_header -->
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- form_wrapper -->
	
	<div class="footer_info">
		
		<div class="footer_info_left">
			
			<div class="footer_single_info">
			
				<span class="footer_info_title">Our Office</span><!-- footer_info_title -->
			
				<span class="address large_text">171 Monroe Ave. N.W. Suite 750<br/> Grand Rapids, MI 49503</span><!-- address -->
			
				<a class="get_directions footer_link" href="">
				
					<span>Get Directions</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- footer_single_info -->
			
		</div><!-- footer_info_left -->
		
		<div class="footer_info_right">
			
			<div class="footer_single_info">
			
				<span class="footer_info_title">Give Us a Call</span><!-- footer_info_title -->
				
				<span class="footer_info_subtitle">Toll Free</span><!-- footer_info_subtitle -->
			
				<a class="phone large_text" href="">1(800) 272-4080</a><!-- address -->
				
				<span class="footer_info_subtitle">Fax</span><!-- footer_info_subtitle -->
			
				<a class="phone large_text" href="">(616) 458-0608</a><!-- address -->
			
			</div><!-- footer_single_info -->
			
			<div class="footer_single_info">
			
				<span class="footer_info_title">Schedule an Appointment</span><!-- footer_info_title -->
			
				<span class="view_calendar large_text">View our calendar and contact a member of our team</span><!-- address -->
			
				<a class="get_directions footer_link" href="">
				
					<span>Make Appointment</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- footer_single_info -->
			
		</div><!-- footer_info_right -->
		
	</div><!-- footer_info -->
	
	<img class="bridge desktop" src="<?php bloginfo('template_directory');?>/images/bridge-desktop.jpg"/><!-- bridge -->
		
</footer>

<div class="copyright">
	
	<div class="copyright_inner">
		
		<div class="social_media">
			
			<a class="sm_icon facebook" href="">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-facebook.svg"); ?>
				
			</a>
			
			<a class="sm_icon google" href="">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-google.svg"); ?>
				
			</a>
			
			<a class="sm_icon youtube" href="">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-youtube.svg"); ?>
				
			</a>
			
		<div><!-- social_media -->
		
		<div class="all_rights_reserved">
			
			<ul>
				<li>Copyright &copy; <?php echo date("Y"); ?> Buchanan & Buchanan. All Rights Reserved</li>
				<li><a href="">Privacy Policy</a></li>
				<li><a href="">Disclaimer</a></li>
			</ul>
			
		</div><!-- all_rights_reserved -->
		
		<a class="ilawyer" href="">
			
			<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-logo-ilawyer.svg"); ?>
			
		</a>
		
	</div><!-- copyright_inner -->
	
</div><!-- copyright -->


<?php wp_footer();?>


</body>
</html>
