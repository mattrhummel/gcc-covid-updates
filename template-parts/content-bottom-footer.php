<div class="site-footer-bottom hide-for-print">
  <div class="bottom-footer-content">
    <div class="row expanded">
      
      <div class="small-12 medium-only-12 large-7 columns">
        <?php
        gcc_wp_2018_footer_links_menu(); ?>
        <div class="tips">
          
          <a href="<?php echo get_field( 'tips_url', 'options' ); ?>" class="tips-logo" aria-hidden="true">
            
            <span><?php echo get_field( 'tips_text', 'options' ); ?><span class="hide-text"><?php _e('report an incident', 'gcc-wp-2018')?></span></span></a>
            
          </div>
        </div>
        
        <div class="small-12 medium-only-12 large-5 columns">
          <?php the_field('bottom_footer_text', 'option'); ?>
          <p class="copywrite"><?php _e('&copy;', 'gcc-wp-2018'); ?>
          <?php bloginfo( 'name' ); ?></p>
        </div>
      </div>
    </div>
</div>