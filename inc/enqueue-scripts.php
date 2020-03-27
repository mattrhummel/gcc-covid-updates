<?php
function gcc_wp_2018_scripts() {
wp_enqueue_style( 'gcc-wp-2018-theme-styles' , get_template_directory_uri() . '/dist/css/style.min.css', array(), '2020323', 'all' );

if (is_page('germanna-quick-facts')) wp_enqueue_style( 'gcc-wp-2018-chart-styles', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css', array(), '202036', 'all' );


// Deregister the jquery version bundled with WordPress.
wp_deregister_script( 'jquery' );

// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );

// Deregister the jquery-migrate version bundled with WordPress.
wp_deregister_script( 'jquery-migrate' );

// CDN hosted jQuery migrate for compatibility with jQuery 3.x
wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );

wp_enqueue_script( 'gcc-wp-2018-foundation', '//cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js', array(), '20191025', true );

wp_enqueue_script( 'gcc-wp-2018-scripts', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20191118', true );

wp_enqueue_script( 'gcc-wp-2018-lazy-load', get_template_directory_uri() . '/dist/scripts/jquery.lazy.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);

//remove type tag from css and javascript
//add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
//add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
// function myplugin_remove_type_attr($tag, $handle) {
//   return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
// }

?>
