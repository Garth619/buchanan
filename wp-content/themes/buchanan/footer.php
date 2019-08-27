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
			
				<a class="get_directions footer_link" href="https://www.google.com/maps/place/Buchanan+%26+Buchanan/@42.9660429,-85.6747177,17z/data=!3m1!4b1!4m5!3m4!1s0x8819adc56eaae4b7:0xa15168f6732b1f98!8m2!3d42.966039!4d-85.672529" target="_blank" rel="noopener">
				
					<span>Get Directions</span>
				
					<?php echo file_get_contents("wp-content/themes/buchanan/images/arrow.svg"); ?>
			
				</a><!-- get_directions -->
			
			</div><!-- footer_single_info -->
			
		</div><!-- footer_info_left -->
		
		<div class="footer_info_right">
			
			<div class="footer_single_info">
			
				<span class="footer_info_title">Give Us a Call</span><!-- footer_info_title -->
				
				<span class="footer_info_subtitle">Toll Free</span><!-- footer_info_subtitle -->
			
				<a class="phone large_text" href="tel:18002724080">1(800) 272-4080</a><!-- address -->
				
				<span class="footer_info_subtitle">Fax</span><!-- footer_info_subtitle -->
			
				<a class="phone large_text">(616) 458-0608</a><!-- address -->
			
			</div><!-- footer_single_info -->
			
			<div class="footer_single_info">
			
				<span class="footer_info_title">Schedule an Appointment</span><!-- footer_info_title -->
			
				<span class="view_calendar large_text">View our calendar and contact a member of our team</span><!-- address -->
			
				<a class="make_appointment footer_link" href="<?php the_permalink(56);?>">
				
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
			
			<a class="sm_icon facebook" href="http://www.facebook.com/pages/Buchanan-Buchanan-Law-Firm/537483316270169" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-facebook.svg"); ?>
				
			</a>
			
			<a class="sm_icon google" href="https://plus.google.com/110230520271339992184/" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer_icon-01.svg"); ?>
				
			</a>
			
			<a class="sm_icon youtube" href="http://www.youtube.com/user/BuchananLawFirm" target="_blank" rel="nopener">
				
				<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-social-youtube.svg"); ?>
				
			</a>
			
		</div><!-- social_media -->
		
		<div class="all_rights_reserved">
			
			<ul>
				<li>Copyright &copy; <?php echo date("Y"); ?> Buchanan & Buchanan. All Rights Reserved</li>
				<li><a href="<?php the_permalink(751);?>">Privacy Policy</a></li>
				<li><a href="<?php the_permalink(753);?>">Disclaimer</a></li>
			</ul>
			
		</div><!-- all_rights_reserved -->
		
		<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="nopener">
			
			<?php echo file_get_contents("wp-content/themes/buchanan/images/footer-logo-ilawyer.svg"); ?>
			
		</a><!-- ilawyer -->
		
	</div><!-- copyright_inner -->
	
</div><!-- copyright -->


<?php wp_footer();?>

<?php if(is_front_page()) { ?>


<script type="text/javascript">

jQuery(document).ready(function($){

function paraWidth() {
    
    if ($(window).width() > 1290) {
        
      window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          window.oRequestAnimationFrame      ||
          window.msRequestAnimationFrame     ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

(function(win, d) {

  var $ = d.querySelector.bind(d);
	
	var paraOne = $('#para_one');
 
  var paraTwo = $('#para_two');
  var paraThree = $('#para_three');


  

  var ticking = false;
  var lastScrollY = 0;

  function onResize () {
    updateElements(win.pageYOffset);
  }

  function onScroll (evt) {

    if(!ticking) {
      ticking = true;
      requestAnimFrame(updateElements);
      lastScrollY = win.pageYOffset;
    }
  }

  function updateElements () {

    var relativeY = lastScrollY / 1500;
    
    prefix(paraOne.style, "Transform", "translate3d(0px," +
      pos(0, 1300, relativeY, 0) + 'px, 0)');

		prefix(paraTwo.style, "Transform", "translate3d(0px," +
      pos(0, 800, relativeY, 0) + 'px, 0)');

    prefix(paraThree.style, "Transform", "translate3d(0px," +
      pos(0, 300, relativeY, 0) + 'px, 0)');


    ticking = false;
  }

  function pos(base, range, relY, offset) {
    return base + limit(0, 1, relY - offset) * range;
  }

  function prefix(obj, prop, value) {
    var prefs = ['webkit', 'Moz', 'o', 'ms'];
    for (var pref in prefs) {
      obj[prefs[pref] + prop] = value;
    }
  }

  function limit(min, max, value) {
    return Math.max(min, Math.min(max, value));
  }

  (function() {

    updateElements(win.pageYOffset);

    
   paraTwo.classList.add('force-show');
   paraThree.classList.add('force-show');

  })();

  //win.addEventListener('resize', onResize, false);
  win.addEventListener('scroll', onScroll, false);

})(window, document);
        	   		
    		
    } 
    
};

paraWidth();

}); // Document Ready

</script>


<?php } ?>

</body>
</html>
