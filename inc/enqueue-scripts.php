<?php
function gcc_wp_2018_scripts() {

wp_enqueue_style( 'gcc-wp-2018-theme-styles' , get_template_directory_uri() . '/dist/css/style.min.css', array(), '20200730', 'all' );

wp_enqueue_style('gcc-wp-2018-motion-ui', '//cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css', array(), '2020605', 'all');

if (is_page('germanna-at-a-glance')) wp_enqueue_script( 'gcc-wp-2018-chartjs', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js', array(), '2.9.3', true );

if (is_page('germanna-at-a-glance')) wp_enqueue_script( 'gcc-wp-2018-chartjs-labels', '//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0', array(), '0.7.0', true );

if (is_page('germanna-at-a-glance')) wp_enqueue_script( 'gcc-wp-2018-chartjs-scripts', get_template_directory_uri() . '/dist/scripts/quickfact-charts.js', array(), '2.9.3', true );

wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.10.2', true );

wp_deregister_script( 'jquery-migrate' );

wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );

wp_enqueue_script( 'gcc-wp-2018-lazy-load', get_template_directory_uri() . '/dist/scripts/jquery.lazy.min.js', array(), '', true );

wp_enqueue_script( 'gcc-wp-2018-foundation', '//cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js', array(), '20191025', true );

wp_enqueue_script( 'gcc-wp-2018-isotope', '//unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), '20200723', true );

wp_enqueue_script( 'gcc-wp-2018-isotopejs', get_template_directory_uri() . '/dist/scripts/isotope.js', array(), '', true );

//wp_enqueue_script( 'gcc-wp-2018-scripts', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20191118', true );
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);
function prefix_add_footer_styles() {
    wp_enqueue_style( 'gcc-wp-2018-theme-fonts', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );
?>