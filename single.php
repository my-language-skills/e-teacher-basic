<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */

get_header(); ?>

<div id="blog-wrapper"> 
	<div class="container_24">
		<div id="blog" class="grid_15 alpha left">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

						<?php twentyten_posted_on(); ?>
                       <br /><br />

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
							</a>
<?php endif; ?>

				<p class="tags">
						<?php twentyten_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
                </p>
                        
                <div class="clear">&nbsp;</div>

				<p class="bottom-nav left"><?php previous_post_link( '%link', '' . _x( '« ', 'Older Post', 'twentyten' ) . 'Older Post' ); ?></p>
				<p class="bottom-nav right"><?php next_post_link( '%link', 'Newer Post ' . _x( ' »', 'Next post link', 'twentyten' ) . '' ); ?></p>
                
                <p><hr /></p>

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

		</div>

		<?php get_sidebar(); ?>

	</div>
</div>

<div class="clear">&nbsp;</div>


<?php get_footer(); ?>
