<?php
/**
* The template for displaying pages
*
* @package WordPress
* @subpackage Harlee-Test
* @author Harlee Tholen
*/

get_header(); ?>

<section class="fefault-page">
  <div class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <article class="post-entry">
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  </div>

  <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
