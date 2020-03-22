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

        <li><button class="float-right" type="button" data-toggle="popout-menu" data-open="offCanvasLeft"><span class="fa fa-bars" aria-hidden="true"></span>Menu</button></li>

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
        <li class="black-button"><a href="#" class="primary">resources</a>

        <ul class="menu">
        <a href="https://www.germanna.edu/class-schedule">Class Schedule</a>
        <li><a href="https://m.sis.vccs.edu/index.php/app/catalog/listSubjects?institution=GC297">Browse Courses</a></li>
        <li><a href="/academic-calendar/">Academic Calendar</a></li>
        <li><a href="/bookstore/">Bookstore</a></li>
        <li><a href="/admissions/admissions-forms/">Admissions Forms</a></li>
        <li><a href="/academic-center-for-excellence/brainfuse-online-tutoring/">Brainfuse Online Tutoring</a></li>
        <li><a href="/graduation/">Graduation</a></li>
        <li><a href="/bookstore/included-course-material-information/">IncludeED Program</a></li>
        <li><a href="/printing/">Printing</a></li>
        <li><a href="/admissions/transcript-request/">Transcripts</a>
        <li><a href="/student-activities/">Student Activities</a></li>
        <li><a href="https://calendar.activedatax.com/germanna/default.aspx?type=&view=Summary">Calendar</a></li>
        <li><a href="/library/">Libraries</a></li>
        <li><a href="/veterans/">Military & Families</a>
        <li><a href="/educational-foundation/alumni/">Alumni</a>
        </li>
        <li><a href="https://www.vawizard.org/wizard/home">Virginia Education Wizard</a></li>
          <!-- ... -->
        </ul>

      </li>
    </ul>

  </div>

  <div class="top-bar-right">
    
     <?php 
      gcc_wp_2018_top_bar_right_menu(); ?>

<!--       <ul class="menu">

        <li class="black-button"><a href="https://www.apply.vccs.edu/applications/vccs/apply.html?application_id=4084">apply</a></li>
        <li class="red-button"><a href="/admissions/request-information/">get info</a></li>
        <li class="yellow-button"><a href="/educational-foundation/donate/" class="primary">give</a></li>

    </ul> -->

  </div>

</div>

<div class="row expanded search-container clearfix hide-for-medium-only hide-for-large-only show-for-xlarge">

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

    <ul class="menu float-right">

      <li><a href="https://mysupport.germanna.edu/">24/7 student support</a></li>
      <li><a href="/contact-us/">contact us</a></li>

    </ul>

  </div>

</div>

