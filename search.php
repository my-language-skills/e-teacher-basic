<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */

get_header(); ?>

<div id="blog-wrapper"> 
	<div class="container_24">
		<div id="blog" class="grid_15 alpha left">

<?php if ( have_posts() ) : ?>
				<h5><?php printf( __( 'Search Results for: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h5>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
<?php endif; ?>

		</div>

<?php get_sidebar(); ?>

	</div>
</div>

<div class="clear">&nbsp;</div>

<?php get_footer(); ?>
