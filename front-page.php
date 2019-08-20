<?php
/**
* The template for the homepage
*
* @package WordPress
* @subpackage Harlee-Test
* @author Harlee Tholen
*/

get_header(); ?>

<section class="home-page">
  <div class="main-content">
    <div class="content">
      <?php while ( have_posts() ): the_post(); ?>
        <h1><?php the_title(); ?> </h1>
        <?php the_content(); ?>
        <div class="social-btns">
          <a href="https://github.com/Harlohs" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://www.linkedin.com/in/harlee-tholen-8325a911a/" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
        </div>
        <a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
