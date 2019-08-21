// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	

	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    // createWaypoint('section_two', null, null, '100%', loadImages, false);







     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
     // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });

   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		createWaypoint('header_trigger', '.sticky_mobile_header, nav', 'trigger', -89, null, true);

		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
		--------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



/*
$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:true,
	prevArrow:".arrow_left",
	nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
     }
   },
   {
      breakpoint: 1100,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:true,
     }
   }
	]
 });
 
*/



$('.pa_sps_wrapper').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:true,
	fade:true,
	mobileFirst:true,
	responsive: [
    {
      breakpoint: 768,
      settings: "unslick",
   }
	]
 });
 

$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
	arrows:true,
	dots:true,
	prevArrow:".sec_three_arrow_left",
	nextArrow:".sec_three_arrow_right",
	responsive: [
    {
      breakpoint: 1815,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 1165,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
			centerMode: false
			//fade:true
     }
   }
	]
 });

 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");




	// form styles
  
  $('footer textarea, .pa_overlay textarea').parent().parent().addClass('textarea_wrap');
  
  
  $(document).bind('gform_post_render', function(){
  		
  	 $('footer textarea, .pa_overlay textarea').parent().parent().addClass('textarea_wrap');
    	
  });
  
  
  // section one injury input
  
  
  
  $('.pa_input, .pa_submit').on('click', function(e) {
    
  	$('.pa_dropdown').slideToggle(300);
  
  });
  
  
  $('.pa_dropdown ul li').on('click', function(e) {
	  
	 	var injury = $(this).text();
    
  	$('span.pa_input_value.desktop').replaceWith('<span class="pa_input_value desktop">' + injury + '</span>');
  	
  	$('span.pa_input_value.mobile').replaceWith('<span class="pa_input_value mobile">' + injury + '</span>');
  	
  	$('.pa_dropdown').slideUp(300);
  	
  	$('.step_two').addClass('open');
  	
  	$('input#input_4_7').val(injury);
  	
  
  });
  
  
  $('.step_two').on('click', function(e) {
    
   	$('.pa_overlay').addClass('open');
    
  });
  
  
  $('.step_two').on('mouseover', function(e) {
    
  	$('.pa_submit').addClass('hover');
  
  });
  
  
  $('.step_two').on('mouseout', function(e) {
    
  	$('.pa_submit').removeClass('hover');
  
  });
  
  
  $('.pa_close').on('click', function(e) {
	  
	  $('.pa_overlay').removeClass('open');
    
  });
  

  
  $(document).click(function (e){

		var container = $(".pa_input_wrapper");

		if (!container.is(e.target) && container.has(e.target).length === 0){

			$('.pa_dropdown').slideUp(250);
		
		}

	}); 
	
	
	// nav
	
	
	function navMediaquery() {
	    
	    if ($(window).width() >= 1230) {
	        
	      
	    	$('nav').addClass('desktop');
	    	
	    	$('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
		    	
		    		$('.nav_col_right_inner').empty();
		    		
		    		$(this).next('ul.sub-menu').clone().appendTo('.nav_col_right_inner').hide().fadeIn(400);
		    		
		    });
		    
		    
		    $('.menu_wrapper').on('click', function(e) {
		      
		    	$('nav').addClass('open_desktop');
		    
		    });
		    
		    $('.nav_close').on('click', function(e) {
			    
			    $('nav').addClass('close_desktop');
		      
		    	$('nav').delay(1500).queue(function(){
	     
						$(this).removeClass('open_desktop close_desktop').dequeue();
	  
					});
		    
		    });
	    		
	    }
	    
	     if ($(window).width() < 1230) {
		     
		     
		     $('.menu_wrapper, .sticky_menu_bars').on('click', function(e) {
		      
		    	$('nav').slideDown(400);
		    	
		    	$('.small_device_close_wrapper').fadeIn();
		    	
		    	$('.sticky_mobile_header').addClass('open');
		    	
		    	$('.sticky_mobile_header').removeClass('closed');
		    	
		    	$('.sticky_menu_bars').fadeOut(300);
		    	
		    	$('.sticky_close').delay(300).fadeIn(300);
		    
		    
		    });
		    
		    $('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
		    	
		    		$('.nav_col_right_inner').empty();
		    		
		    		$(this).next('ul.sub-menu').clone().appendTo('.nav_col_right_inner').show();
		    		
		    		$('.nav_col_left').fadeOut(300);
		    		
		    		$('.nav_col_right').delay(300).fadeIn(300);
		    		
		    		$('.small_device_back_wrapper').delay(300).fadeIn(300);
		    		
		    		$('.sticky_close').fadeOut(300);
		    	
						$('.sticky_back').delay(300).fadeIn(300);
		    		
		    		
		    		
		    });
		    
		    $('.small_device_close_wrapper, .sticky_close').on('click', function(e) {
		      
		    	$('nav').slideUp(400);
		    	
		    	$('.small_device_close_wrapper').fadeOut(300);
		    	
		    	$('.sticky_close').fadeOut(300);
		    	
		    	$('.sticky_menu_bars').delay(300).fadeIn(300);
		    	
		    	$('.sticky_mobile_header').removeClass('open');
		    
		    });
		    
		    
		    $('.small_device_back_wrapper, .sticky_back').on('click', function(e) {
		    	
		    	$('.small_device_back_wrapper').fadeOut(300);
		    	
		    	$('.small_device_close_wrapper').delay(300).fadeIn(300);
		    	
		    	$('.nav_col_right').fadeOut(300);
		    		
		    	$('.nav_col_left').delay(300).fadeIn(300);
		    	
		    	$('.sticky_back').fadeOut(300);
		    	
		    	$('.sticky_close').delay(300).fadeIn(300);
		    
		    });
		     
		     
	     } 
	    
		};
		
	
	navMediaquery();
	
	
	
	// sidebar
	
	$('.sidebar_box ul > li.current-menu-ancestor > a').addClass('active');
	
	$('.sidebar_box ul > li > a').on('click', function(e) {
	  
		$(this).next('ul').slideToggle(300);
		
		$(this).toggleClass('active');
	
	});
	
	
		var pgurl = window.location.href;
		
		$(".sidebar_box.blog ul li").each(function(){
	  
	  if($(this).find('a').attr("href") == pgurl)
	    
	    $(this).addClass("active");
		
		})
	
		
	
// macy

if($('.testimonials_wrapper').length >0 ){

	var macyInstance = Macy({
  	container: '.testimonials_wrapper',
		columns: 3,
		margin:49,
		breakAt: {
        1450: 2,
        1066:1
  	}	
	});
}
	

  
}); // document ready