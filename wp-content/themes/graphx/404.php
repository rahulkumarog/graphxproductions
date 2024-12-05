<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<!--Banner Section-->
<section class="banner_outer inner_banner error">
    <div class="inner_layout">
        <h1 class="error-icon"> <?php echo of_get_option('tile_error'); ?></h1>
    </div>
</section>
<section class="body_container">
    <section class="copy_container">
        <div class="inner_layout">
          <?php if (of_get_option('errot_content') ) { ?>
                <?php echo  of_get_option('errot_content'); ?>
                
           <?php } ?>
        </div>
    </section>
   
    
    <section class="contact_btn_sec">
    	 
	</section>
    
</section> 



<?php get_footer(); ?>