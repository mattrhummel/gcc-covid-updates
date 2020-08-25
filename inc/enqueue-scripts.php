<?php
function gcc_wp_2018_scripts() {

wp_enqueue_style( 'gcc-wp-2018-theme-styles' , get_template_directory_uri() . '/dist/css/style.min.css', array(), '20200825', 'all' );

wp_enqueue_style('gcc-wp-2018-motion-ui', '//cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css', array(), '2020605', 'all');

wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.10.2', true );

wp_deregister_script( 'jquery-migrate' );

wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );

wp_enqueue_script( 'gcc-wp-2018-foundation', '//cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js', array(), '20191025', true );

wp_enqueue_script( 'gcc-wp-2018-isotope', '//unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), '20200723', true );

wp_enqueue_script( 'gcc-wp-2018-isotopejs', get_template_directory_uri() . '/dist/scripts/isotope.js', array(), '', true );


wp_enqueue_script( 'gcc-wp-2018-main', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);
function prefix_add_footer_styles() {
    wp_enqueue_style( 'gcc-wp-2018-theme-fonts', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );
?>