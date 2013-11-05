<?php
/**
 * Template Name: Home
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */

get_header(); ?>

<div id="content" class="container_24">
	<div id="banner" class="grid_16 alpha left">
    	<!--Homepage Banner, Uncomment this to enable banner feature. Be sure to comment out the "Homepage Slider" PHP snippet below if you do!-->
			<!--
			<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>
             -->
             <!--End Homepage Banner-->
                    
        	<!--This is the start of the Homepage slider. Be sure this plugin is installed in the Plugins folder for it to work properly.-->   
        	<?php if (function_exists('easing_slider')){ easing_slider(); }; ?>
       		<!--End Homepage slider-->                    
    </div>
    
    <!--This is the start of the tabbed content that sits to the right of the Homepage Slider. Be sure the "postpage-content-anchor-tabset" plugin is installed in the Plugins folder for this to work properly. 
    Then create a new page using the Home template and the shortcodes specified here: http://w4dev.com/w4-plugin/post-page-custom-tabset-shortcode/ --> 
    <div id="feeds" class="grid_7 omega right">
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
		<?php endwhile; ?>
    </div>
    <!--End Tabbed Content-->
</div>

<div class="clear">&nbsp;</div>

	<!--This is the start of the Homepage Bucket content. Create a new page entry called using the Home Buckets template and enter the ID# of that entry into the home-buckets.php file.-->
	<?php include ('home-buckets.php'); ?>
    <!--End Homepage Buckets-->

<div class="clear">&nbsp;</div>

<?php get_footer(); ?>
