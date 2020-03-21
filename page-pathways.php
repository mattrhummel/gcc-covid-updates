<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Pathways List
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>

  <div class="row expanded content-area">
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

         <?php the_content(); ?>
         


      </div>
    
    </div>

    <?php get_sidebar();?>
    
    </div><!--.pagecontent-->
 
 
    </article>
    <?php
    get_footer();