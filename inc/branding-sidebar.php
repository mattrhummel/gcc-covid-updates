<?php
//The main branding and navigations section of the website on the left side, shows on desktops, hidden for mobile.
function main_menu() {
?>
<div class="off-canvas position-left reveal-for-xlarge" id="branding-menu" data-toggler="hide">
  <button class="close-button" aria-label="<?php _e('Close menu', 'gcc-wp-2018'); ?>" type="button" data-close>
  <span aria-hidden="true">&times;</span>
  </button>
  
  <div class="row column">
    <header id="menu-container" class="off-canvas position-left reveal-for-large" data-off-canvas>
      
      <div class="row branding">
        
        <?php  //germanna logo
        if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
        ?>
        <div class="callout small" style="padding: .5rem 2.7rem;">

         <a href="/50-2/" class="button hollow text-center expanded"><?php _e('Support Germanna', 'gcc-wp-2018') ?></a>

         </div>

        <?php gcc_wp_2018_callto_buttons_main_menu();?>
        
        </div><!--.branding-->
        <?php
        //primary navigation function located in inc/main-navigation.php
        gcc_wp_2018_main_navigation(); ?>
      </header>
      </div><!--.row-->
      </div><!--.offcanvas main menu-->
      <?php
      } ?>