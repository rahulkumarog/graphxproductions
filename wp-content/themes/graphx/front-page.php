<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--Banner Section-->
<div class="main_container">
        <!--Banner Section-->
        <section class="banner_outer">
            <figure class="banner_fig"><?php the_post_thumbnail(); ?></figure>
        </section>
        
        <section class="body_container">
            <!--Top Section-->
            <section class="top_container">
                <div class="inner_layout">
                   <?php the_content(); ?>
                   
                </div>
            </section>
            
            <!--List Section-->
            <ul class="list_item">
                
                 <?php 
				  $services = get_field('sevices');
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
            <!--Slider Section-->
            <?php if( have_rows('testimonial') ): ?>
            <section class="slider_outer" data-type="parallax_section" data-speed="3">
                <div class="slider_bg1">
                    <div class="slider_bg2">
                        <div class="layout">
                            <div class="slider_sec owl-carousel">
                                <?php  while ( have_rows('testimonial') ) : the_row(); ?>
                                <div class="item">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <h3><span><?php the_sub_field('company_name'); ?></span></h3>
                                    <?php the_sub_field('content'); ?>
                                </div>
                                <?php  endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            
            <!--Thumbs Section-->
            <?php 
			$images = get_field('gallery');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			
			if( $images ): ?>
				  <ul class="thumb_sec gallery">
					<?php foreach( $images as $image ): ?>
						<li>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
  
        </section>
        </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>