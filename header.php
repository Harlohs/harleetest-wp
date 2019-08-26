<?php
/**
* the template for displaying the apache_request_headers
*
* Displays all of the <head> section and everything up til <div id="main">
*
* @package WordPress
* @subpackage Harlee-Test
* @author Harlee Tholen
*/
 ?>
 <!DOCTYPE html>
 <head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="A Wordpress portfolio project sitem built completely on my own.">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
   <div id="page" class="hfeed site">
     <header class="page-header container">
       <a href="<?php echo site_url(); ?>" class="top-logo">
         <span class="title"><?php bloginfo('name'); ?></span>
         <span class="sub-title"><?php bloginfo('description'); ?></span>
       </a>

       <nav class="top-nav">
          <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
       </nav>
     </header>

     <div id="main" class="site-main">
