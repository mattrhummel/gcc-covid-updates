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

      <?php  //function located in inc/main-navigation.php
      //gcc_wp_2018_resource_menu(); ?>

    <ul class="dropdown menu align-center hide-for-medium-only hide-for-large-only show-for-xlarge" data-dropdown-menu>
      <li class="red-button">
        <a href="https://gcc.my.vccs.edu/"><span class="fa fa-lock"></span>mygcc</a>
      </li>
        <li class="green-button"><a href="/students/">online students</a></li>
        <li  class="green-button"><a href="/faculty-staff/">faculty & staff</a></li>
        <li class="black-button"><a href="#" class="primary">resources <span class="fa fa-caret-down"></span></a>

        <ul class="menu">
        <li><a href="/bookstore/">Bookstore</a></li>
        <li><a href="/admissions/transcript-request/">Transcripts</a>
        <li><a href="https://calendar.activedatax.com/germanna/default.aspx?type=&view=Summary">Calendar</a></li>
        <li><a href="/library/">Libraries</a></li>
        <li><a href="/veterans/">Military & Families</a>
        <li><a href="/educational-foundation/alumni/">Alumni</a>
        </li>
          <!-- ... -->
        </ul>

      </li>
    </ul>

  </div>

  <div class="top-bar-right">
   
<div class="search-container show-for-xlarge">

<form class="float-right" role="search" method="get" id="searchform-desktop" action="<?php echo get_home_url(); ?>/search_gcse/">
        <div class="input-group">
          <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
          <input type="hidden" name="ie" value="utf8" title="hidden" />
          <input type="hidden" name="oe" value="utf8" title="hidden" />
          <input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
          <input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
          
          <input type="text" name="q" id="search-field" class="input-group-field">
          
          <div class="input-group-button">
            <button id="searchsubmit-mobile" type="submit" class="button" value="" aria-label="<?php _e('fa fa-eyeglass', 'gcc-wp-2018')?>"><span class="fa fa-search"></span></button>
          </div>
        </div>
    </form>

    <?php 
      gcc_wp_2018_resource_menu(); ?>


      </div>

  </div>

</div>

<div class="row expanded banner-bottom clearfix hide-for-medium-only hide-for-medium hide-for-large">
      
     <?php 
      gcc_wp_2018_top_bar_right_menu(); ?>


  </div>

</div>

