<?php
/**
* Start cleanup functions
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_wp_2018_start_cleanup' ) ) :
function gcc_wp_2018_start_cleanup() {
// launching operation cleanup
add_action( 'init', 'gcc_wp_2018_cleanup_head' );
}
add_action( 'after_setup_theme','gcc_wp_2018_start_cleanup' );
endif;
/**
* Clean up head
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_wp_2018_cleanup_head' ) ) :
function gcc_wp_2018_cleanup_head() {
// remove WP 4.9+ dns-prefetch nonsense
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
endif;
//remove plugin scripts
if ( ! function_exists( 'gcc_wp_2018_deregister_style' ) ) :
function gcc_wp_2018_deregister_style() {

    wp_deregister_style('dashicons');
    wp_deregister_style('admin-bar');
    wp_deregister_style('wp-block-library');
    wp_deregister_style('ctct_form_styles');
    wp_deregister_style('aioseop-toolbar-menu');
    wp_deregister_style('wp-mediaelement');
    wp_deregister_style('mediaelement');
    wp_deregister_style('media-views');
    wp_deregister_style('imgareaselect');
}
add_action( 'wp_enqueue_scripts','gcc_wp_2018_deregister_style' );
endif;
//do not remove the below functions, required for foundation shortcodes
if ( ! function_exists( 'gcc_wp_2018_clean_shortcodes' ) ) :
function gcc_wp_2018_clean_shortcodes( $content ) {
$array = array (
'<p>[' => '[',
']</p>' => ']',
']<br />' => ']'
);
$content = strtr( $content, $array );
return $content;
}
add_filter('the_content', 'gcc_wp_2018_clean_shortcodes');
endif;
/**Stop stripping html**/
// stop wp removing div tags
// paste everything below this line in your WP functions.php file below everything else. 
// always backup your data
function allow_all_tinymce_elements_attributes( $init ) {

    // Allow all elements and all attributes
    $ext = '*[*]';

    // Add to extended_valid_elements if it already exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // return value
    return $init;
}
add_filter('tiny_mce_before_init', 'allow_all_tinymce_elements_attributes');
/**
* Remove [All in One SEO Pack] HTML Comments
* @link //gist.github.com/llgruff/a7ab776167aa0ed307ec445df54e5fdb
*/
if (defined('AIOSEOP_VERSION')) {
add_action('get_header', function() {
	ob_start(
		function($o) {
return preg_replace('/\n?<.*?One SEO Pack.*?>/mi','',$o);
}
);
});
add_action('wp_head', function() {
ob_end_flush();
}, 999);
}