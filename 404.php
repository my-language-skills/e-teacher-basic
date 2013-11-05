<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */

get_header(); ?>

<div id="blog-wrapper"> 
	<div class="container_24">
		<div id="blog" class="grid_15 alpha left">

				<h1><?php _e( 'Page Not Found', 'twentyten' ); ?></h1>
				<p><?php _e( 'We\'re so sorry, but the page you are looking for has either moved or does not exist. Maybe searching for soemthing else will help.', 'twentyten' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
    
    </div>
    
<?php get_sidebar(); ?>

	</div>
</div>

<div class="clear">&nbsp;</div>

<?php get_footer(); ?>
