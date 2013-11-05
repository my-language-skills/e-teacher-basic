<?php
/**
 * Template Name: Home Buckets
 *
 * @package WordPress
 * @subpackage e-Teacher
 * @since e-Teacher 1.0
 *
 *
 * This file controls the three buckets below the main banner on the homepage. 
 *
 * To get this going, create a new page and paste in the following code in your HTML editor. All that Greek text is placeholder content for you to replace with your own. We also added 
 * some defualt icons in each one (Bucket 1=Staff, Bucket 2=Calendar, Bucket 3=Map) to get you started, but you can remove those in the style.css file.
 * 
 * <div id="buckets" class="container_24">
 * <div id="bucket" class="grid_7 omega left">
 * <h1 class="blue myriad">Welcome to Our Church!</h1>
 * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet mi felis, non elementum massa. Mauris nec arcu mi, id tempor massa. Class aptent taciti sociosqu ad litora.
 * <p class="bucket-1"><a href="#">Meet Our Staff</a></p>
 * 
 * </div>
 * <div id="bucket" class="grid_7 omega left">
 * <h1 class="blue myriad">Worship With Us</h1>
 * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet mi felis, non elementum massa. Mauris nec arcu mi, id tempor massa. Class aptent taciti sociosqu ad litora.
 * <p class="bucket-2"><a href="#">See Our Calendar</a></p>
 * 
 * </div>
 * <div id="bucket" class="grid_7 omega left">
 * <h1 class="blue myriad">Come Visit Us!</h1>
 * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet mi felis, non elementum massa. Mauris nec arcu mi, id tempor massa. Class aptent taciti sociosqu ad litora.
 * <p class="bucket-3"><a href="#">Get Driving Directions</a></p>
 * 
 * </div>
 * </div>
 * 
 * Once you've published your new page, take the ID# and use it in the code below, where indocated.
 * 
 * That's it! You now have three bucket on the homepage to communicate anything you'd like.
 *
 */

?>

<!--See the "page_id=40"? Replace the number 40 with the ID# of your new page for the buckets to display on your site.-->
<?php $recent = new WP_Query("page_id=40"); while($recent->have_posts()) : $recent->the_post();?>
<?php the_content(); ?>
<?php endwhile; ?>
