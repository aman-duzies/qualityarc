<?php
/*
Template Name: Single Blog Post
Template Post Type: post
*/

get_header();
?>

<!-- #Content -->
<div id="Content">
	<div class="content_wrapper clearfix">

		<!-- .sections_group -->
		<div class="sections_group">
			<?php 
				while ( have_posts() ){
					the_post();	
					get_template_part( 'includes/content', 'single-blog' );
				}
			?>
		</div>
		
		<!-- .four-columns - sidebar -->
		<?php get_sidebar(); ?>
			
	</div>
</div>

<?php get_footer();

// Omit Closing PHP Tags