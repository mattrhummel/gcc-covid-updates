<div class="off-canvas position-right mobile-menu" id="popout-menu" data-off-canvas>
<div class="row expanded columns close-mobile">
<button class="close-button-menu" aria-label="<?php _e('Close menu', 'gcc-wp-2018' ); ?>" type="button" data-close>
          <?php esc_html_e('Close', 'gcc-wp-2018' ) ?><span class="fa fa-close" aria-hidden="true"></span>
</button>
</div>
       
  <div class="row expanded no-js mobile-nav">

    <div class="row mobile-search">
      
     <form class="float-right" role="search" method="get" id="searchform" action="<?php echo get_home_url(); ?>/search_gcse/">
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

    </div>

  	<div class="mobile-resources">

    <ul class="vertical menu accordion-menu"  data-accordion-menu>
      <li class="red-button">
        <a href="https://gcc.my.vccs.edu/">MYGCC</a>
      </li>
      <li class="green-button"><a href="/students/">ONLINE STUDENTS</a></li>
      <li  class="green-button"><a href="/faculty-staff/">FACTULY & STAFF</a></li>
      <li class="black-button"><a href="#" class="primary">RESOURCES</a>

        <ul class="menu">
          <li><a href="#">Item 1A</a></li>
          <!-- ... -->
        </ul>

      </li>
  </ul>

   <hr>

</div>
    
    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_mobile_offcanvas(); ?>

    <hr>

       <ul class="menu mobile-quicklinks">

      <li><a href="https://mysupport.germanna.edu/">24/7 student support</a></li>
      <li><a href="/contact-us/">contact us</a></li>

    </ul>


  </div>
</div>