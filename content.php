<?php
/**
* The default template for displaying content
*
*
*
* @package WordPress
* @subpackage Harlee-Test
* @author Harlee Tholen
*/
 ?>

<article id="post0<?php the_ID(); ?>" class="post-entry">
  <div class="entry-wrap">
    <header class="entry-header">
      <div class="entry-meta">
        <span class="entry-terms author">
          Written by <?php the_author(); ?>
          /
        <span class="entry-time"><?php echo get_the_date(); ?></span>
        </span>
      </div>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php if ( has_post_thumbnail() ) : ?>
        <figure><?php the_post_thumbnail ('full'); ?></figure>
      <?php endif; ?>
      <div class="entry-summary">
        <?php the_content(); ?>
      </div>
      <footer class="entry-footer">
        <div class="entry-meta">
          <span class="entry-terms comments">
            Posted in <?php the_category() ?>
            <a href="<?php comments_link(); ?>"><?php comments_number( '<span> No Comments</span>', '1 comment', '% comments'); ?></a>
          </span>
        </div>
      </footer>
    </div>
  </article>
