<?php
/**
 * The template for displaying Category Archive pages.
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
					printf( __( 'All posts filed under: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' );
				?></h5>
                
                <hr />
                
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
               
                
		</div>

<?php get_sidebar(); ?>

	</div>
</div>

<div class="clear">&nbsp;</div>

<?php get_footer(); ?>
