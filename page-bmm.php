<?php
//Names the page template for each section
/*
Template Name: Black Minds Matter
*/
get_header( 'bmm' ); ?>
<?php
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
      <div class="row expanded" id="main">

        <div class="columns small-10">

          <div class="row expanded" style="margin-top: 60px;">

            <div class="columns large-3">

              <?php dynamic_sidebar('black-minds-matter-widgets'); ?>

            </div>

            <div class="columns large-9">
                   
          <?php
          $args =  array (
          'post_type' => 'post',
          'category_name' => 'black minds matter',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page'=> -1,
          );
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>

          <h2>Resources</h2>

          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <div class="card" style="padding: 1rem;">
            
            <?php the_title('<h3 style="margin-bottom: 0; padding-bottom: 0;">', '</h3>', 'gcc-wp-2018'); ?>
            <p><?php echo get_the_date(); ?></p>
            
            <?php the_content(); ?>

           </div>
          
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no resources to display', 'gcc-wp-2018'); ?></p>
          <?php endif; ?>

          <?php the_content(); ?>
        
         </div>

          </div>

        </div>
      
    </div>

</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer( 'bmm' );