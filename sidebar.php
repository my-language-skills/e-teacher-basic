<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */
?>

<div id="sidebar-page" class="grid_8 alpha right">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li>
            	<h3 id="searchhead">Search For</h3>
				<?php get_search_form(); ?>
			</li>

<?php endif; // end primary widget area ?>
        
</div>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

	<div id="sidebar-page" class="grid_8 alpha right">
		<ul>
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</ul>
	</div>

<?php endif; // end secondary widget area ?>

<?php
	// A third sidebar for widgets, because we're nice like that.
	if ( is_active_sidebar( 'third-widget-area' ) ) : ?>
    
    <div id="sidebar-page" class="grid_8 alpha right">
		<ul>
			<?php dynamic_sidebar( 'third-widget-area' ); ?>
		</ul> 
	</div>

<?php endif; ?>

<?php
	// What? A third sidebar for widgets? That's just crazy, but cool.
	if ( is_active_sidebar( 'fourth-widget-area' ) ) : ?>
    
    <div id="sidebar-page" class="grid_8 alpha right">
		<ul>
			<?php dynamic_sidebar( 'fourth-widget-area' ); ?>
		</ul> 
	</div>

<?php endif; ?>
