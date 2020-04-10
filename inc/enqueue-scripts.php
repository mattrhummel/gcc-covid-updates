<?php
function gcc_wp_2018_scripts() {
wp_enqueue_style( 'gcc-wp-2018-theme-styles' , get_template_directory_uri() . '/dist/css/style.min.css', array(), '2020323', 'all' );

if (is_page('germanna-quick-facts')) wp_enqueue_script( 'gcc-wp-2018-chartjs', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js', array(), '2.9.3', true );

if (is_page('germanna-quick-facts')) wp_enqueue_script( 'gcc-wp-2018-chartjs-labels', '//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0', array(), '0.7.0', true );

if (is_page('germanna-quick-facts')) wp_enqueue_script( 'gcc-wp-2018-chartjs-scripts', get_template_directory_uri() . '/dist/scripts/quickfact-charts.js', array(), '2.9.3', true );

wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );

wp_deregister_script( 'jquery-migrate' );

wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );

wp_enqueue_script( 'gcc-wp-2018-lazy-load', get_template_directory_uri() . '/dist/scripts/jquery.lazy.min.js', array(), '', true );

wp_enqueue_script( 'gcc-wp-2018-foundation', '//cdnjs.cloudflare.com/ajax/libs/foundation/6.6.1/js/foundation.min.js', array(), '20191025', true );

//wp_enqueue_script( 'gcc-wp-2018-scripts', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20191118', true );
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);
?>