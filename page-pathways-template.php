<?php
/**
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Programs of Study List
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


        <?php the_content(); ?>

        <div class="row expanded">

          <?php
          $args =  array (
          'post_type' => 'gcc_programs',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page'=> -1,
          );
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
              <ul>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

          <?php endwhile; ?>

               </ul>

          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
          <?php endif; ?>
        </div>
        
        </div>
      </div>

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
    </article>
    <?php
    get_footer();