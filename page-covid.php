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

    <?php get_sidebar();?>

    <div class="columns small-12 large-9 float-left">
    
    <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-heading' );
        ?>

  
        <div class="row expanded">

          <?php
          $args =  array (
          'post_type' => 'covid_19',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page'=> -1,
          $args2['tax_query'] = array(

      array(
        'taxonomy' => 'covid_resources_categories',
        'terms' => array( 'top-resources' ),
          'field' => 'slug',
          ),
          ));
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
        <h2>Top Resources</h2>
         <ul class="accordion" data-accordion data-allow-all-closed="true" style="margin-bottom: 15px;">
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <li class="accordion-item" data-accordion-item>
         
         <a href="#" class="accordion-title"><?php the_title(); ?></a>

        <div class="accordion-content" data-tab-content>

          <h3><?php the_title(); ?></h3>
                   <p><?php echo get_the_date(); ?></p>
      
          <?php the_content(); ?>
              
        </div>

         </li>
          
          <?php endwhile; ?>
        </ul>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
          <?php endif; ?>
        </div>

                <div class="row expanded">

          <?php
          $args =  array (
          'post_type' => 'covid_19',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page'=> -1,
          $args2['tax_query'] = array(

      array(
        'taxonomy' => 'covid_resources_categories',
        'terms' => array( 'student-resources' ),
          'field' => 'slug',
          ),
          ));
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
        <h2>Student Resources</h2>
         <ul class="accordion" data-accordion data-allow-all-closed="true" style="margin-bottom: 15px;">
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <li class="accordion-item" data-accordion-item>
         
         <a href="#" class="accordion-title"><?php the_title(); ?></a>

        <div class="accordion-content" data-tab-content>

          <h3><?php the_title(); ?></h3>
                   <p><?php echo get_the_date(); ?></p>
      
          <?php the_content(); ?>
              
        </div>

         </li>
          
          <?php endwhile; ?>
        </ul>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
          <?php endif; ?>
        </div>

                <div class="row expanded">

          <?php
          $args =  array (
          'post_type' => 'covid_19',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page'=> -1,
          $args2['tax_query'] = array(

      array(
        'taxonomy' => 'covid_resources_categories',
        'terms' => array( 'employee_resources' ),
          'field' => 'slug',
          ),
          ));
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
        <h2>Employee Resources</h2>
         <ul class="accordion" data-accordion data-allow-all-closed="true" style="margin-bottom: 15px;">
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <li class="accordion-item" data-accordion-item>
         
         <a href="#" class="accordion-title"><?php the_title(); ?></a>

        <div class="accordion-content" data-tab-content>

          <h3><?php the_title(); ?></h3>
                   <p><?php echo get_the_date(); ?></p>
      
          <?php the_content(); ?>
              
        </div>

         </li>
          
          <?php endwhile; ?>
        </ul>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
          <?php endif; ?>
        </div>
        
        </div>
      </div>

      

      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();