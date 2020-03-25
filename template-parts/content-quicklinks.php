<div class="title-bar hide-for-xlarge expanded hide-for-print clearfix">
  <div class="title-bar-left">
    <?php if ( get_theme_mod( 'gcc_wp_2018_mobile_logo' ) ) : ?> 
    <a href="<?php echo esc_url( home_url() ); ?>" class="mobile-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" itemprop="url">
      <img src="<?php echo get_theme_mod( 'gcc_wp_2018_mobile_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="logo">
    </a>
    <?php else : ?>
    <hgroup>
    <h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </hgroup>
    <?php endif; ?>
  </div>
  <div class="title-bar-right">
    <ul class="menu float-right">
      <li>
        <button class="float-right" type="button" data-toggle="popout-menu" data-open="offCanvasLeft"><span class="fa fa-bars" aria-hidden="true"></span><?php _e('Menu', 'gcc-wp-2018'); ?></button></li>
      </ul>
    </div>
  </div>
  <div class="top-banner" id="top-menu" data-toggler="hide">
    <div class="top-bar">
      <div class="top-bar-left ">
        <?php gcc_wp_2018_resources_desktop(); ?>
      </div>
      <div class="top-bar-right">  
        <div class="search-container show-for-xlarge">
          
          <?php gcc_wp_2018_search_desktop(); ?>

          <?php gcc_wp_2018_resource_menu(); ?>
        </div>
      </div>
    </div>
    <div class="row expanded banner-bottom clearfix  hide-for-xlarge">     
      <?php gcc_wp_2018_callto_buttons_mobile(); ?>
    </div>
  </div>