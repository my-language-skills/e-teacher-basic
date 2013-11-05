<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 */
?>

<div id="fold">
	<div class="blue-bg">
		<div id="footer" class="container_24">
        
        	<!--Start of the contact form. Be sure that the Contact Form 7 plugin is installed in the Plugins folder or this won't work. More instructions on how to set this up in the contact.php file. -->
			<?php include ('contact.php'); ?>
            <!--End contact form-->
          
            	<!--Start We Are your School box. -->
                <div id="about-e-Teacher" class="grid_10 omega right">
                	<h1 class="blue myriad">We Are your School</h1>
                    	<p>To know is to know that you know nothing. That is the meaning of true knowledge!</p>
                        <p>&nbsp;</p>
                        <p class="btn btn-about"><a href="/wp-content/themes/e-Teacher 1.0/pagex.php">Visit your School</a></p>
                </div>
                <!--End We Are your School box. -->
        </div>
        
        <div class="clear">&nbsp;</div>
            
		<div id="foot">
        	<div class="container_24">
        	<div id="foot-left" class="left">

				&copy; 
					<script type="text/javascript"> 
						now = new Date
						theYear=now.getYear()
						if (theYear < 1900)
						theYear=theYear+1900
						document.write(theYear)
            		</script>
           		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div id="foot-right" class="right">
            	<a href="http://www.on-lingua.com">e-Teacher</a>
            </div>
        </div>
        </div>
	</div>
</div>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
