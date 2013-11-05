<?php
/**
 * The Sidebar for all subpages.
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
	if ( ! dynamic_sidebar( 'subpage-widget-area' ) ) : ?>
	
					<li>
            	<h3 id="searchhead">Search For</h3>
				<?php get_search_form(); ?>
			</li>

<?php endif; // end subpage widget area ?>

</div>

<?php
	// A secondary subpage sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-subpage-widget-area' ) ) : ?>
    
    <div id="sidebar-page" class="grid_8 alpha right">

			<ul>
				<?php dynamic_sidebar( 'secondary-subpage-widget-area' ); ?>
			</ul>
            
    </div>

<?php endif; ?>
