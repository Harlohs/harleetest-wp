<?php
/**
*the main template file
*
* This is the most generic template file in a wordpress theme and one
* of the two required files for a theme (the other being style.css).
* It is used to idsplay a page when nothing more specific matches a query,
* e.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Harlee-Test
* @author Harlee Tholen
*/
get_header(); ?>

<section class="index-page">
  <div class="main-content">
    <?php if ( have_posts() ): ?>
      <?php while  ( have_posts() ): the_post(); ?>
        <?php get_template_part('content-blog', get_post_format()); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
</section>
<nav id="navigation" class="container">
  <div class="left">
    <?php next_posts_link('&larr; <span>Older Posts</span>'); ?>
  </div>
  <div class="pagination">
    <?php 'page '. $paged.' of ' .$wp_query->max_num_pages;
    ?>
  </div>
  <div class="right">
    <?php previous_posts_link('<span>Newer Posts</span> &rarr;'); ?>
  </div>
  <?php get_footer(); ?>
