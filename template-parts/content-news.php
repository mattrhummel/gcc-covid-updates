    <div class="row expanded" id="4080701046" data-equalizer>
      <h2 class="text-center"><?php _e('News from Germanna', 'gcc-wp-2018'); ?></h2>
      <?php
      $args =  array (
      'post_type' => 'post',
      'post_status' => 'publish',
      'orderby' => 'publish_date',
      'order' => 'DESC',
      'posts_per_page'=>6,
      'category__not_in' => 1863
      );
      ?>
      <?php
      $query = new WP_Query( $args ); ?>
      <?php if ( $query->have_posts() ) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post();?>
      <div class="column medium-4">
        <div class="callout" data-equalizer-watch>
          
          <h4 class="post-title"><a href="<?php the_permalink(); ?>" style="line-height: 1.2; display: block; width: 100%;">
          <?php the_title(); ?></a></h4>
          <p><?php echo get_the_date(); ?></p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
      <?php endif; ?>
    </div>
    <div class="row text-center">
      <a href="<?php esc_html_e('/blog/', 'gcc-wp-2018' ); ?>" class="button float-center" style="width: 200px; margin-top: 20px;"><?php esc_html_e('View all Highlights', 'gcc-wp-2018' ); ?></a>
    </div>