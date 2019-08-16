
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<div class="blog_feed">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog_post">
		
		<div class="blog_meta">
			
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date -->
			
		<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="blog_content">
		
			<?php echo wp_trim_words( get_the_content(), 54, '...' );?>
		
		</div><!-- blog_content -->
			
		<div><?php edit_post_link( __( 'Edit'), '', '' ); ?></div>
		
		<a class="read_more button" href="<?php the_permalink();?>">Read More</a>

	</div><!-- blog_post -->
		
<?php endwhile; // end of loop ?>

<?php endif; ?>

</div><!-- blog_feed -->

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div class="pagination">
		
		<div class="nav_next blog_page_link"><?php previous_posts_link( __( 'Prev') ); ?></div>
		
		<div class="nav_prev blog_page_link"><?php next_posts_link( __( 'Next' ) ); ?></div>
			
	</div><!-- pagination -->

<?php endif; ?>


