<?php
/**
* 
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Student Events
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
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
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>
        <div class="row expanded" data-equalizer data-equalize-on="medium" id="sa-events">
          <?php
          $args =  array (
          'post_type' => 'sa_events',
          'meta_key'      => 'event_date',
          'orderby'     => 'meta_value',
          'order'       => 'ASC',
          'posts_per_page'=> -1,
          );
          ?>
          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          <div class="small-12 medium-12 large-6 columns">
            <div class="callout primary small"  data-equalizer-watch>
              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              <p  style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>

              <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?>   <?php endif; ?> 
              <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                 <?php endif; ?> 
              </p>

              <p style="margin-bottom: 0;"><?php the_field( 'event_description' ); ?></p>

              <?php if( get_field('event_details') ): ?>
              <a href="<?php echo the_permalink(); ?>" class="button primary"><?php _e('Learn more', 'gcc-wp-2018'); ?></a>
              <?php endif; ?>
            </div>
            
          </div>
          
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
        <?php endif; ?>
      </div>
        <footer class="entry-footer">
    <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    </div>
  </div>

   <?php get_sidebar();?>

    </div><!--.pagecontent-->
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();