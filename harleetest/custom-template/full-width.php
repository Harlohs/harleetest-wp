<?php
/**
* Template name: Full Width PAGE
*
* The template for displaying a full width page without a sidebar.
*
* @package WordPress
* @subpackage Harlee-Test
* @author Harlee Tholen
*/
get_header(); ?>

<section class="default-page">
  <div class="main-content">
    <?php while ( have_posts() ) ; the_post(); ?>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <article class="post-entry">
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(): ?>
