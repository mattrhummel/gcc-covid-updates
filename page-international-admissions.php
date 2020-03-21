<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: International Students
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row expanded content-area">
    <div class="row">
      
    <div class="small-12 medium-12 large-9 float-left columns" >
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      <div class="entry-content" id="main" tabindex="0">
      
    
        <?php
        the_content();
        ?>

      </div>
    </div>

    </div>
    
     <?php get_sidebar();?>
    

      </div><!--.pagecontent-->

  
    </article>

    <div class="row expanded entry-footer" style="text-align: left; background-color: #f9f9f9; font-size: .95rem; padding: .5rem 1.4rem;">
   <footer>
       <?php $u_time = get_the_time('U'); 
      $u_modified_time = get_the_modified_time('U'); 
      if ($u_modified_time >= $u_time + 86400) { 
      echo "<p>Last modified on "; 
      the_modified_time('F j, Y'); 
      "</p> "; }  ?>
      <?php gcc_wp_2018_entry_footer(); ?>
  <footer>
    </div>
    
   <?php endwhile; // End of the loop. ?>

    <?php
    get_footer();