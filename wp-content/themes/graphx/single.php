<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<!--lefttPart start!-->
<section id="lefttPart">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <nav class="navigation">
        <div class="alignleft"><?php previous_post_link('%link') ?></div>
        <div class="alignright"><?php next_post_link('%link') ?></div>
    </nav>
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    
        <h1><?php the_title(); ?></h1>
    
        <div class="entry">
    
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?> 
    
        </div>
    
    </div>
    
    <?php comments_template(); ?>
    
    <?php endwhile; else: ?>
    
    <p>Sorry, no posts matched your criteria.</p>
    
    <?php endif; ?>

</section>
<!--leftpart end!-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>