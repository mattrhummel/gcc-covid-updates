<?php
/**
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Covid Updates
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php
  while ( have_posts() ) : the_post(); ?>

   <div class="row expanded content-area">

    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>

      <aside class="columns small-12 large-3 float-right page-nav hide-for-print" id="section-menu">
        <?php dynamic_sidebar( 'covid-widgets' ); ?>
      </aside>

      <div class="columns small-12 large-9 float-left">
      
       <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-heading' );
       ?>


        </div>
      
      </div>

      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();