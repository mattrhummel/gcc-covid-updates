<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package gccwp-2018
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gcc_wp_2018_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gcc_wp_2018_body_classes' );
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function gcc_wp_2018_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gcc_wp_2018_pingback_header' );
if ( ! function_exists( 'gcc_wp_2018_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function gcc_wp_2018_posted_on() {
  $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);
		$posted_on = sprintf (
			/* translators: %s: post date. */
			 esc_html_x( ' %s', 'post date', 'gcc-wp-2018' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
}
endif;
/**
* Removes or edits the 'Protected:' part from posts titles
*/
add_filter( 'protected_title_format', 'remove_protected_text' );
function remove_protected_text() {
return __('%s');
}
 add_filter( 'get_the_archive_title', function ($title) {    
        if ( is_category() ) {    
                $title = single_cat_title( '', false );    
            } elseif ( is_tag() ) {    
                $title = single_tag_title( '', false );    
            } elseif ( is_author() ) {    
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
            } elseif ( is_tax() ) { //for custom post types
                $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
            } elseif (is_post_type_archive()) {
                $title = post_type_archive_title( '', false );
            }
        return $title;    
    });
 //generated applicant id for pta application
 /*
 * Create a unique_id Smart Tag and assign it to each form submission.
 *
 * @link https://wpforms.com/developers/how-to-create-a-unique-id-for-each-form-entry/
 *
 */
///Generate Unique ID Smart Tag for WPForms
function wpf_dev_register_smarttag( $tags ) {
 
    // Key is the tag, item is the tag name.
    $tags['unique_id'] = 'Unique ID';
 
    return $tags;
}
add_filter( 'wpforms_smart_tags', 'wpf_dev_register_smarttag' );
 
function wpf_dev_process_smarttag( $content, $tag ) {
 
    // Only run if it is our desired tag.
    if ( 'unique_id' === $tag ) {
         
        // Replace the tag with value.
        $content = str_replace( '{unique_id}', uniqid(), $content );
    }
 
    return $content;
}
add_filter( 'wpforms_smart_tag_process', 'wpf_dev_process_smarttag', 10, 2 );
add_action( 'wp_head', function () { ?>
 
    <style>
 
    #wpforms-form-25133 .wpforms-submit-container .wpforms-submit {
            visibility:hidden;
        }
 
    #wpforms-form-25133 .wpforms-submit-container .wpforms-submit.show-submit {
            visibility:visible;
        }
 
    </style>
 
<?php } );
 
 
// Conditional logic for Submit button for rn application
function wpf_dev_form_redirect() {
    ?>
    <script>
        jQuery(function($){
            $("form#wpforms-form-25133").click(function(){
                var selectedval = $(".wpforms-form input[type='radio']:checked").val();
                if(selectedval == "No"){
                    window.location = "/";
                }
                if(selectedval == "Yes"){
                    $(".wpforms-submit").addClass("show-submit");
                }
            });
        });
    </script>
    <?php
}
add_action( 'wpforms_wp_footer', 'wpf_dev_form_redirect' );