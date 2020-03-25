<div class="off-canvas position-right mobile-menu" id="popout-menu" data-off-canvas>
<div class="row expanded columns close-mobile">
<button class="close-button-menu" aria-label="<?php _e('Close menu', 'gcc-wp-2018' ); ?>" type="button" data-close>
          <?php esc_html_e('Close', 'gcc-wp-2018' ) ?><span class="fa fa-close" aria-hidden="true"></span>
</button>
</div>
       
  <div class="row expanded no-js mobile-nav">

    <div class="row mobile-search">
      
     <form class="float-right" role="search" method="get" id="searchform-mobile" action="<?php echo get_home_url(); ?>/search_gcse/">
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
        <a href="https://gcc.my.vccs.edu/"><span class="fa fa-lock"></span>mygcc</a>
      </li>
      <li class="green-button"><a href="/students/">online students</a></li>
      <li  class="green-button"><a href="/faculty-staff/">faculty &amp; staff</a></li>
       <li class="black-button"><a href="#" class="primary">resources  <span class="fa fa-caret-down"></span></a>

    <ul class="menu">
            <li><a href="/educational-foundation/alumni/">Alumni</a>
          </li>
          <li><a href="/bookstore/">Bookstore</a></li>
          <li><a href="https://calendar.activedatax.com/germanna/default.aspx?type=&view=Summary">Calendar</a></li>
          <li><a href="/library/">Libraries</a></li>
          <li><a href="/veterans/">Military & Families</a>
          <li><a href="/admissions/transcript-request/">Transcripts</a>
          <!-- ... -->
        </ul>

      </li>
      <li  class="yellow-button"><a href="/donate/">give</a></li>
  </ul>

   <hr>

</div>
    
    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_mobile_offcanvas(); ?>

    <hr>

  <?php 
      gcc_wp_2018_resource_menu(); ?>
  </div>
</div>