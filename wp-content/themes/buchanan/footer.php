<footer id="consultation">
	
	<div class="form_wrapper">
		
		<span class="large_header"><?php the_field( 'footer_form_title','option'); ?></span><!-- large_header -->
		
		<span class="small_header"><?php the_field( 'footer_form_required_verbiage','option'); ?></span><!-- small_header -->
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- form_wrapper -->
	
	<div class="footer_info">
		
		<div class="footer_info_left">
			
			<div class="footer_single_info">
			
				<span class="footer_info_title"><?php the_field( 'footer_our_office_title','option'); ?></span><!-- footer_info_title -->
			
				<span class="address large_text"><?php the_field( 'address','option'); ?></span><!-- address -->
			
				<a class="get_directions footer_link" href="<?php the_field( 'address_link','option'); ?>" target="_blank" rel="noopener">
				
					<span>Get Directions</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- footer_single_info -->
			
		</div><!-- footer_info_left -->
		
		<div class="footer_info_right">
			
			<div class="footer_single_info">
			
				<span class="footer_info_title"><?php the_field( 'footer_give_us_a_call_title','option'); ?></span><!-- footer_info_title -->
				
				<span class="footer_info_subtitle">Toll Free</span><!-- footer_info_subtitle -->
			
				<a class="phone large_text" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone_number', 'option')); ?>"><?php the_field( 'firm_phone_number','option'); ?></a><!-- address -->
				
				<span class="footer_info_subtitle">Fax</span><!-- footer_info_subtitle -->
			
				<a class="phone large_text"><?php the_field( 'footer_fax','option'); ?></a><!-- address -->
			
			</div><!-- footer_single_info -->
			
			<div class="footer_single_info">
			
				<span class="footer_info_title"><?php the_field( 'footer_schedule_an_appointment_title','option'); ?></span><!-- footer_info_title -->
			
				<span class="view_calendar large_text"><?php the_field( 'footer_appointment_verbiage','option'); ?></span><!-- address -->
			
				<a class="make_appointment footer_link" href="<?php the_field( 'footer_make_an_appointment_link','option'); ?>">
				
					<span>Make Appointment</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- footer_single_info -->
			
		</div><!-- footer_info_right -->
		
	</div><!-- footer_info -->
	
	<?php $footer_background_image = get_field( 'footer_background_image','option'); ?>

	<img class="bridge desktop" data-src="<?php echo $footer_background_image['url']; ?>" alt="<?php echo $footer_background_image['alt']; ?>" />

</footer>

<div class="copyright">
	
	<div class="copyright_inner">
		
		<div class="social_media">
			
			<a class="sm_icon facebook" href="<?php the_field( 'facebook_link','option'); ?>" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-facebook.svg"); ?>
				
			</a>
			
			<a class="sm_icon linkedin" href="<?php the_field( 'linkedin_link','option'); ?>" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-linkedin.svg"); ?>
				
			</a>
			
			<a class="sm_icon instagram" href="<?php the_field( 'instagram_link','option'); ?>" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-insta.svg"); ?>
				
			</a>
			
			<a class="sm_icon youtube" href="<?php the_field( 'youtube_link','option'); ?>" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-youtube.svg"); ?>
				
			</a>
			
		</div><!-- social_media -->
		
		<div class="all_rights_reserved">
			
			<ul>
				<li>Copyright &copy; <?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
				<?php if(get_field('privacy_policy','option')) { ?>
				<li><a href="<?php the_field( 'privacy_policy','option'); ?>">Privacy Policy</a></li>
				<?php } ?>
				<?php if(get_field('disclaimer','option')) { ?>
				<li><a href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
				<?php } ?>
			</ul>
			
		</div><!-- all_rights_reserved -->
		
		<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="nopener">
			
			<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-logo-ilawyer.svg"); ?>
			
		</a><!-- ilawyer -->
		
	</div><!-- copyright_inner -->
	
</div><!-- copyright -->


<?php wp_footer();?>



</body>
</html>
