<div class="off-canvas position-right mobile-menu" id="popout-menu" data-off-canvas>
<div class="row expanded columns close-mobile">
<button class="close-button-menu" aria-label="<?php _e('Close menu', 'gcc-wp-2018' ); ?>" type="button" data-close>
          <?php esc_html_e('Close', 'gcc-wp-2018' ) ?><span class="fa fa-close" aria-hidden="true"></span>
</button>
  </div>
       

  <div class="row expanded no-js mobile-nav">

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


  </div>
</div>