<div class="off-canvas position-right mobile-menu" id="popout-menu" data-off-canvas>
  <div class="row expanded columns close-mobile">
    <button class="close-button-menu" aria-label="<?php _e('Close menu', 'gcc-wp-2018' ); ?>" type="button" data-close>
    <?php esc_html_e('Close', 'gcc-wp-2018' ) ?><span class="fa fa-close" aria-hidden="true"></span>
    </button>
  </div>
  
  <div class="row expanded no-js mobile-nav">
    <div class="row mobile-search">
      <?php gcc_wp_2018_search_mobile(); ?>
    </div>
    <?php gcc_wp_2018_resources_mobile(); ?>
    
    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_mobile_offcanvas(); ?>
    <hr>
    <?php
   gcc_wp_2018_resource_menu_mobile(); ?>
  </div>
</div>