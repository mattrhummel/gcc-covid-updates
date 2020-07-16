<?php
/**
* The template for displaying all default page template.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Math Resources V2
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   <div class="row expanded content-area">

    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>

    <?php get_sidebar();?>

    <div class="columns small-12 large-9 float-left">
    
    <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_breadcrumb() ?> 
    </header>

      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="page-heading-image hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('alt' => false));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>
        <!--math resources tabs-->
        <ul class="tabs" data-tabs id="math-course-resources-tabs">
          <li class="tabs-title is-active"><a href="#math-course-resources">
          <?php _e('Math Course Resources', 'gcc-wp-2018'); ?></a></li>
          <li class="tabs-title"><a href="#virtual-math-center">
          <?php _e('Virtual Math Center ', 'gcc-wp-2018'); ?></a></li>      
          <li class="tabs-title"><a href="#academic-links">
          <?php _e('Academic Links ', 'gcc-wp-2018'); ?></a></li>
        </ul>
      <div class="tabs-content" data-tabs-content="math-course-resources-tabs">    
          <div class="tabs-panel is-active" id="math-course-resources">
            <h2><?php _e('Math Course Resources', 'gcc-wp-2018'); ?></h2>
            <p><strong><?php _e('Review Topics: ', 'gcc-wp-2018'); ?></strong><?php the_field( 'review_topics_blurb' ); ?></p>
            <p><strong><?php _e('Course Essentials: ', 'gcc-wp-2018'); ?></strong><?php the_field( 'course_essentials_blurb' ); ?></p>
            
            <?php if ( have_rows( 'accordion_item' ) ) : ?>
            <ul class="accordion"  data-accordion data-allow-all-closed="true">
              
              <?php while ( have_rows( 'accordion_item' ) ) : the_row(); ?>
              <li class="accordion-item" data-accordion-item>
                <!-- Accordion tab title -->
                <a href="#" class="accordion-title"><?php the_sub_field( 'accordion_item_title' ); ?></a>

                  <div class="accordion-content" data-tab-content>
                  
                  <h2><?php the_sub_field( 'accordion_item_title' ); ?></h2>
                  <div class="row">
                    
                    <ul class="tabs" data-tabs id="dropdown-tabs">
                      <?php if ( get_sub_field( 'review_handouts' ) ) : ?>
                      
                      <li class="tabs-title is-active"><a href="#review-<?php the_sub_field('course_number')?>" aria-selected="true"><?php _e('Review Topics', 'gcc-wp-2018'); ?></a></li>

                      <?php endif; ?>

                      <?php if ( get_sub_field( 'algebra_basics_handouts' ) ) : ?>

                      <li class="tabs-title"><a data-tabs-target="basics-<?php the_sub_field('course_number')?>" href="#basics-<?php the_sub_field('course_number')?>"><?php _e('Course Essentials', 'gcc-wp-2018'); ?></a></li>

                      <?php endif; ?>
                    </ul>

                    <div class="tabs-content" data-tabs-content="dropdown-tabs">

                      <?php if ( get_sub_field( 'review_handouts' ) ) : ?>
                        
                       <div class="tabs-panel is-active" id="review-<?php the_sub_field('course_number')?>">
                        
                        <h3><?php _e('Review Topics', 'gcc-wp-2018'); ?></h3>

                        <hr>

                        <style>
                        .accordion-content ul {
                        margin-bottom:  0;
                        }
                        </style>

                        <div class="callout primary small">
                          
                          <h3><?php _e('Handouts', 'gcc-wp-2018'); ?></h3>
                          
                          <?php the_sub_field( 'review_handouts' ); ?>
                          
                        </div>

                        <div class="callout primary small">

                          <h3><?php _e('Videos', 'gcc-wp-2018'); ?></h3>
                          
                          <?php the_sub_field( 'review_videos' ); ?>

                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if ( get_sub_field( 'algebra_basics_handouts' ) ) : ?>

                       </div>

                        <div class="tabs-panel" id="basics-<?php the_sub_field('course_number')?>">
                        
                        <h3><?php _e('Course Essentials', 'gcc-wp-2018'); ?></h3>

                        <hr>

                        <div class="callout primary small">
                          
                          <h3><?php _e('Handouts', 'gcc-wp-2018'); ?></h3>

                          <?php the_sub_field( 'algebra_basics_handouts' ); ?>
                          
                        </div>

                        <div class="callout primary small">
                          
                          <h3><?php _e('Videos', 'gcc-wp-2018'); ?></h3>
                          
                          <?php the_sub_field( 'algebra_basics_videos' ); ?>
                        
                        </div>
                        
                      </div>
                      <?php endif; ?>
                      </div><!-- .tabs-content -->
                      </div><!-- .tabs-row -->
                      </div><!-- .accordion-item-content -->
                      </li>  <!-- .accordion-item -->
                      <?php endwhile; ?>
                    </ul>

                    <?php endif; ?>

                  <div class="tabs-panel" id="virtual-math-center">
                    <?php the_field( 'virtual_math_center_content' ); ?>
                  </div>

                  <div class="tabs-panel" id="academic-links">
                    <?php the_field( 'academic_links_content' ); ?>
                  </div>

                </div>
                <?php the_field( 'additional_content' ); ?>
              </div>
              
            </div>

          </div>

</article>
            <?php
            get_footer();