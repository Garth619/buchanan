
<div class="sidebar_wrapper">
	
	<div class="sidebar_form">
				
		<span class="sidebar_form_title"><?php the_field( 'footer_form_title','option'); ?></span><!-- sidebar_form_title -->
				
		<span class="sidebar_form_required"><?php the_field( 'footer_form_required_verbiage','option'); ?></span><!-- sidebar_form_required -->
				
		<?php gravity_form(6, false, false, false, '', true, 12); ?>
				
	</div><!-- sidebar_form -->
	
	<div class="sidebar_box_wrapper">
	
	<div class="sidebar_box pa_box">
					
			<?php
				
				if ( get_field('sidebar_menu') ){ //use same classes as widgets ?>
    
   
        
        	<span class="sidebar_title">
            
            <?php if(get_field('sidebar_menu_title')){
                
                the_field('sidebar_menu_title');
            
            }
            
            else {
                
                echo 'Practice Areas';
            
            } ?>
	        
        	</span>

					<?php
            
            wp_nav_menu(array(
                'menu' => get_field('sidebar_menu'),
                'container' => 'ul',
                'depth' => 2
            ));
        	
        	?>
    	
    
			
			<?php
			
			}
			
			else {
			
			if(have_rows('sidebars','option')){
        
        $no_sidebar_yet = true;

        while(have_rows('sidebars','option')): the_row();
            
            if(is_descendant_of(get_sub_field('page')) &&  $no_sidebar_yet){
                
                echo '<!-- ancestor default -->';
                
                dynamic_sidebar( ilaw_id_friendly_text( get_sub_field( 'sidebar_name' ) ) );
                
                $no_sidebar_yet = false;
                
                break;
            }
        
        endwhile;

        if($no_sidebar_yet){
            
            echo '<!-- no ancestral sidebar -->';
            
            dynamic_sidebar( 'default_sidebar' );
            // break;
        }

    }
    	
    	else{
        
        echo '<!--  default -->';
        
        dynamic_sidebar( 'default_sidebar' );
    	
    	}
	
	};?>
	

</div><!-- sidebar_box -->

</div><!-- sidebar_box_wrapper -->
	
	
</div><!-- sidebar_wrapper -->