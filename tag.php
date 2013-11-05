<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */

get_header(); ?>

<div id="blog-wrapper"> 
	<div class="container_24">
		<div id="blog" class="grid_15 alpha left">

				<h5><?php
					printf( __( 'All posts tagged with: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
				?></h5>
                
                <hr />

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>

		</div>

<?php get_sidebar(); ?>

	</div>
</div>

<div class="clear">&nbsp;</div>

<?php get_footer(); ?>
