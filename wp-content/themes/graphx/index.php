<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<!--lefttPart start!-->
<section id="lefttPart">

	<?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>

    <aside <?php post_class() ?> id="post-<?php the_ID(); ?>">
    
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

        <div class="entry">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>

        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
        
    </aside>

    <?php endwhile; ?>
    
    <nav class="navigation">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>
    
    <?php else : ?>
    
    <h2 class="center">Not Found</h2>
    
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    
	<?php get_search_form(); ?>
    
    <?php endif; ?>

</section>
<!--leftpart end!-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>