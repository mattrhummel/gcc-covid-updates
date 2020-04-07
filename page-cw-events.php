<?php
/**
* 
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: College Wide Events
*
*/
get_header(); ?>
<?php
  while ( have_posts() ) : the_post(); ?>
  
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row expanded content-area">
    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>
    <?php get_sidebar();?>

    <div class="columns small-12 large-9 float-left">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        
        <?php
        the_content();
        ?>

      <?php endwhile ?>

        <div class="row expanded">
        

<?php
/*
 * Loop through Categories and Display Posts within
 */
$post_type = 'cw_events';
 
// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type
 ) );
 
foreach( $taxonomies as $taxonomy ) :
 
    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );
 
    foreach( $terms as $term ) : ?>
        
        <?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'meta_key'      => 'event_date',
                'orderby'     => 'meta_value',
                'order'       => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )
 
            );
        
        $posts = new WP_Query($args);
 
        if( $posts->have_posts() ): ?> 
        
         <?php // echo $term->name; ?>
         
        <?php while( $posts->have_posts() ) : $posts->the_post(); ?>

               <?php if(has_post_thumbnail()) { ?>
                            <?php the_post_thumbnail(); ?>
                <?php } 

                 else { ?>
                           
                <?php } ?>
              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              <p style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>
              <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?>   
              <?php endif; ?> 
              <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                 <?php endif; ?> 
              </p>

              <p style="margin-bottom: 0;"><?php the_field( 'event_description' ); ?></p>


                          <?php if( get_field('event_details') ): ?>

              <ul class="accordion" data-accordion data-allow-all-closed="true">
                <li class="accordion-item" data-accordion-item>
               <!-- Accordion tab title -->
                  <a href="#" class="accordion-title">Event Details</a>
                
                    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                    <div class="accordion-content" data-tab-content>
              
                              <?php the_field( 'event_details'); ?>
                              

                      </div>
                  </li>
                  <!-- ... -->
                </ul>

                <?php endif; ?>

            <hr>  
      
        <?php endwhile; endif;?>
 
    <?php endforeach;
 
endforeach; ?>

      </div>

    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    </div>
  </div>

   <?php get_sidebar();?>

    </div><!--.pagecontent-->
  </article>
  <?php
  get_footer();