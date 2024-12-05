<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 * Template Name: Contact Us Page
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
      $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
?>
<!--Banner Section-->
<section class="banner_outer inner_banner" style="background: url(<?php echo $featured_img_url; ?>) left center no-repeat;">
    <div class="inner_layout">
        <h1 class="contact-icon"> <?php the_title(); ?></h1>
    </div>
</section>
<div class="body_container">
    <div class="copy_container">
        <div class="inner_layout">
          <?php the_content(); ?>
        </div>
    </div>
   
	    
    <div class="contact_btn_sec">
    	 
	</div>
    
</div> 
<?php endwhile; endif; ?>

<?php get_footer(); ?>