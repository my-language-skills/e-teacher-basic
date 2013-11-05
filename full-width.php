<?php
/**
 * Template Name: Full-Width Page
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 *
 * This file is a plain page template that utlizes the full body width. It's basically the same thing
 * as the Default Page template (page.php), minus the sidebar.
 *
 * Some plugins require using a full width, so that's what this template would be good for.
 *
 */

get_header(); ?>

<div id="page-wrapper"> 
	<div class="container_24">
		<div id="page" class="grid_24">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php if ( is_front_page() ) { ?>
					<h2><?php the_title(); ?></h2>
				<?php } else { ?>	
					<h1><?php the_title(); ?></h1>
			<?php } ?>				

			<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

			<?php endwhile; ?>
		</div>
	</div>
</div>
</div>

<div class="clear">&nbsp;</div>

<?php get_footer(); ?>
