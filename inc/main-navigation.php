<?php /*
http://codex.wordpress.org/Function_Reference/wp_nav_menu
*/
function gcc_wp_2018_mobile_offcanvas() {
         wp_nav_menu(array(
        'container' => false,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '<map name="MobileNav"><nav>
        <ul class="vertical menu accordion-menu" data-accordion-menu>%3$s</ul></nav></map>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'mobile-offcanvas',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	  'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}
function gcc_wp_2018_main_navigation() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '<map name="PrimaryNavigation"><nav><ul id="%1$s" class="vertical dropdown menu gcc-main-nav" data-dropdown-menu>%3$s</ul></nav></map>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'main-navigation',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	   'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}
function gcc_wp_2018_top_bar_left_menu () {
        wp_nav_menu(array(  
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '<ul id="%1$s" class="dropdown menu align-center hide-for-medium-only hide-for-large-only show-for-xlarge" data-dropdown-menu>%3$s</ul>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'top-bar-left-menu',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
        'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
    ));
}
function gcc_wp_2018_top_bar_right_menu () {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<ul class="menu expanded" aria-labelledby="menu_action_buttons">%3$s</ul>' ,                  // menu name
        'theme_location' => 'top-bar-right-menu',  // where it's located in the theme
        'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
    ));
}
function gcc_wp_2018_information_menu () {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul class="menu" aria-labelledby="menu_information">%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'information-menu',  // where it's located in the theme
        'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
    ));
}
function gcc_wp_2018_resource_menu() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<ul class="menu resource-links float-right"  aria-labelledby="menu_resource">%3$s</ul>' ,                  // menu name
        'theme_location' => 'resource-menu',  // where it's located in the theme
        'depth' => 0,                     // limit the depth of the nav
    ));
}
function gcc_wp_2018_quicklinks_bar() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '<map name="QuicklinksNav"><nav><ul class="menu" data-dropdown-menu >%3$s</ul></nav></map>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'quicklinks-bar',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	   'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}
function gcc_wp_2018_footer_links_menu() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'items_wrap' => '<div><ul class="vertical menu large-horizontal">%3$s</ul></div>' ,                  // menu name
        'theme_location' => 'footer-links-menu',  // where it's located in the theme
        'depth' => 0,                     // limit the depth of the nav
    ));
}
function gcc_wp_2018_calltos() {
         wp_nav_menu(array(
        'container' => true,             // remove menu container
        'container_class' => '',          // class of container
        'menu' => '',
        'items_wrap' => '<ul class="vertical dropdown menu mobile-nav" data-dropdown-menu>%3$s</ul>' ,                  // menu name
        'menu_class' => '',        // adding custom nav class
        'theme_location' => 'callto-buttons',  // where it's located in the theme
        'before' => '',                   // before each link <a>
        'after' => '',                    // after each link </a>
        'link_before' => '',              // before each link text
        'link_after' => '',               // after each link text
        'depth' => 0,                     // limit the depth of the nav
    	   'fallback_cb' => 'main_nav_fb',   // fallback function (see below)
        'walker' => ''      // walker to customize menu (see foundation-nav-walker)
	));
}
//change submenu class
function change_submenu_class($menu) {
  $menu = preg_replace('/ class="sub-menu"/',' class="vertical menu nested" ',$menu);
  return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');

//highlights sidebar active page menu
function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
?>
