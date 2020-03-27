<?php
function gcc_wp_2018_scripts() {
wp_enqueue_style( 'gcc-wp-2018-theme-styles' , get_template_directory_uri() . '/dist/css/style.min.css', array(), '2020323', 'all' );

wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );

wp_deregister_script( 'jquery-migrate' );

wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );

wp_enqueue_script( 'gcc-wp-2018-foundation', '//cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js', array(), '20191025', true );

wp_enqueue_script( 'gcc-wp-2018-scripts', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20191118', true );

wp_enqueue_script( 'gcc-wp-2018-lazy-load', get_template_directory_uri() . '/dist/scripts/jquery.lazy.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);

?>