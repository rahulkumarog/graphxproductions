<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
      $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
?>
<!--Banner Section-->
<section class="banner_outer inner_banner" <?php if($featured_img_url != '') { ?>style="background: url(<?php echo $featured_img_url; ?>) left center no-repeat;" <?php } ?>>
    <div class="inner_layout">
        <h1 style="padding-left: 0"> <?php the_title(); ?></h1>
    </div>
</section>
<div class="body_container">
    <div class="copy_container">
        <div class="inner_layout">
          <?php the_content(); ?>
        </div>
    </div>
   
	<!--List Section-->
	<ul class="list_item">

		<?php 
		$services = get_field('services');
		$i = 1;
		foreach( $services as $service): ?> 
		<li>
			<a href="<?php echo get_permalink($service->ID); ?>" class="gray_bg<?php echo $i; ?>">
				<figure><?php if(get_field('icon', $service->ID)) { ?><img src=" <?php echo get_field('icon', $service->ID); ?>" alt=""/><?php } ?> </figure>
				<span><?php echo get_the_title($service->ID); ?></span>
			</a>
		</li>
		<?php $i++; endforeach; ?>
	</ul>
    <!--End List Section-->
    
    <div class="contact_btn_sec">
    	<?php dynamic_sidebar('button-area'); ?> 
	</div>
    
</div> 
<?php endwhile; endif; ?>

<?php get_footer(); ?>