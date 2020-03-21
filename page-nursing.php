<?php
/**
* Template: Nursing.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>

<?php
  while ( have_posts() ) : the_post(); ?>

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
       
          <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-alert' );
          ?>

          <?php
          the_content();
          ?>

        <?php if (is_page('40255')) : ; ?>

        <div class="row expanded" data-equalizer data-equalize-on="medium" id="sa-events">
          <?php
          $args =  array (
          'post_type' => 'bhm_events',
          'order'       => 'ASC',
          'posts_per_page'=> -1,
          );
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>

          <div class="small-12 columns">
              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

                <p>
                  <?php the_field( 'event_date' ); ?>, <?php if( get_field('event_start_time') ): ?>
                  <?php the_field('event_start_time'); ?>  <?php endif; ?> 
                  <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                  <?php endif; ?> 
                </p>

                <p>
                  <?php the_field( 'event_location' ); ?>
                  <?php if( get_field('event_details') ): ?>
                  <?php the_field( 'event_details' ); ?>
                  <?php endif; ?>
                </p>

              <hr/>

          </div>
          
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
        <?php endif; ?>

      </div>

        <?php endif; ?>

        <?php if (is_page('56') ) : ; ?>

        <script src="https://studyinthestates.dhs.gov/assets/widget/sits-widget.js" type="text/javascript"></script>

        <?php endif; ?>
      
      </div>
    </div>
    
    <?php get_sidebar();?>
    
      </div><!--.pagecontent-->
  
    </article>

  <div class="row expanded entry-footer">
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