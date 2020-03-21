
  <?php

  $args =  array (

  'post_type' => 'covid_19',
  'posts_per_page'=>6

  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>

    <?php if ( has_post_thumbnail() ) : ?>

      <div class="row latest-post"  data-equalizer-watch>
      <div class="medium-12 columns">
      
       <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

       <p><?php the_date(); ?></p>

      </div>
      </div>

    <?php else: ?>

      <div class="row latest-post" data-equalizer-watch>
      <div class="medium-12 columns">
      <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <p><?php the_date(); ?></p>

      </div>
      </div>

<?php endif; ?>

<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>
