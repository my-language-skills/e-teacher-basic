<?php
/**
 * Template Name: Contact Form
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 *
 * This file controls the contact form in the Footer section of the site. 
 *
 * Be sure the Contact Form 7 plugin is installed in the Plugins folder for it to function properly.
 * To create the form, go to your Plugins settings for Contact Form 7. Edit the default template
 * called "Contact form 1" by replacing the code with the following:
 *
 * <fieldset>
 * <p><label for=name>Name *</label>
 * [text* contact-name 30/]</p> 
 *
 * <p><label for=name>Email *</label>
 * [email* contact-email 30/]</p> 
 *                        	  
 * <p><label for=details>Message *</label>
 * [textarea* contact-message 30/]</p> 
 * </fieldset>
 *
 * <fieldset> 
 * <button class="button btn-contact" type=submit>Get in Touch</button>
 * </fieldset>
 *
 * Save the template, create a new Page and paste this into the new page:
 *
 * <div id="contact" class="grid_13 omega left">
 * <h1 class="myriad">We're Here for You</h1>
 * <div id="contact-blurb" class="left">Enter your own text here.</div>
 * <div id="contact-form" class="right">[contact-form 1 "Contact form 1"]</div>
 * </div>
 *
 * Publish your new page and use the ID# in the code below. Your new contact form will display in the footer of every page!
 *
 */

?>

<!--See the "page_id=32" part? Replace the 32 with the ID# of your page for the form to dislay properly.-->	
<?php $recent = new WP_Query("page_id=10"); while($recent->have_posts()) : $recent->the_post();?>
<?php the_content(); ?>
<?php endwhile; ?>
