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
          );
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <div class="card" style="padding: 1rem;">
            
            <?php the_title('<h2 style="margin-bottom: 0; padding-bottom: 0;">', '</h2>', 'gcc-wp-2018'); ?>
            <p><?php echo get_the_date(); ?></p>
            
            <?php the_content(); ?>

          </div>
          
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
          <?php endif; ?>
        </div>
        
        </div>
      </div>

 <div id="request-info-form" class="reveal" data-reveal="" style="z-index: 9999999999999;">
    <h2>Request Information</h2>
    <p>Tell us more about yourself and your goals. Fill out our form below to receive more information about our programs, the cost of attendance and how to get started.</p>

    [wpforms id="27548" title="false" description="false"]

    <p><small>By submitting this form, you are granting Germanna Community College permission to email you. You may unsubscribe at any time by clicking on a link included at the bottom of every email.</small></p>
    <button class="close-button" type="button" data-close="" aria-label="Close reveal"><span aria-hidden="true">×</span></button>
</div>

      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();