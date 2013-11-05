<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="colorbar"></div>
	
<div id="header" class="container_24">
	<div id="branding">
		<div id="logo" class="grid_2 alpha"></div>
    	<div id="site-mame" class="grid_11 omega left">
       		<h1 class="myriad">
        		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        	</h1>
    	</div>
    </div>
    <div id="hebrews" class="grid_11 omega blue right myriad-italic">
    	To know is to know that you know nothing. That is the meaning of true .<br>knowledge!
    </div>
</div>

<div class="clear">&nbsp;</div>

	<div id="navigation" class="container_24" role="navigation">

		<!--Start Main Menu. Create your custom menu in the Appearance > Menus section of your admin page. The menu you create that is assigned as the Primary Menu will be used here.-->
		<div class="grid_17 alpha left myriad-light">
        
        <?php
          wp_nav_menu( array(
			'theme_location' => 'primary', // Setting up the location for the main-menu, Main Navigation.
			'menu_class' => 'dropdown', //Adding the class for dropdowns
			'container_id' => 'navigation', //Add CSS ID to the container that wraps the menu.
			)
			);
		?>
        
   		</div>
    	<!--End Main Menu.-->

    
    <!--Ths is the RSS icon in the top right corner of the header. This would also be a great spot for your Facebook, Twitter or any other social networking links, if you have them. We have included Facebook and Twitter icons in the /images folder if you would like to use them.-->
    <div id="rss" class="grid_1 omega">
        <a href="<?php bloginfo('rss_url'); ?>">RSS</a>
    </div>
    <!--End RSS icon-->
    
    <!--Here are the Twitter and Facebook icons if you want to use them.-->
    
    <!--
    <div id="twitter" class="grid_1 omega">
        <a href="http://twitter.com/YOUR_TWITTER_URL">Twitter</a>
    </div>
    <div id="facebook" class="grid_1 omega">
        <a href="http://facebook.com/YOUR_FACEBOOK_URL">Facebook</a>
    </div>
    -->
    
    <!--End Twitter and Facebook-->
    
</div>

<div class="clear">&nbsp;</div>
