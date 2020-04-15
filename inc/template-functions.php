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
if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * PTA Application 2019
 * Template for WPForms.
 */
class WPForms_Template_pta_application_2019 extends WPForms_Template {

    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function init() {

        // Template name
        $this->name = 'PTA Application 2019';

        // Template slug
        $this->slug = 'pta_application_2019';

        // Template description
        $this->description = '';

        // Template field and settings
        $this->data = array (
    'field_id' => 39,
    'fields' => array (
        18 => array (
            'id' => '18',
            'type' => 'divider',
            'label' => 'Applicant information',
            'label_disable' => '1',
        ),
        1 => array (
            'id' => '1',
            'type' => 'text',
            'label' => 'First name',
            'required' => '1',
            'size' => 'medium',
            'placeholder' => 'Enter your first name...',
            'limit_count' => '1',
            'limit_mode' => 'characters',
        ),
        2 => array (
            'id' => '2',
            'type' => 'text',
            'label' => 'Last name',
            'required' => '1',
            'size' => 'medium',
            'placeholder' => 'Enter your last name...',
            'limit_count' => '1',
            'limit_mode' => 'characters',
        ),
        3 => array (
            'id' => '3',
            'type' => 'address',
            'label' => 'Address',
            'scheme' => 'us',
            'size' => 'medium',
            'address2_hide' => '1',
        ),
        4 => array (
            'id' => '4',
            'type' => 'phone',
            'label' => 'Phone',
            'format' => 'us',
            'size' => 'medium',
            'placeholder' => 'Enter your phone number...',
        ),
        5 => array (
            'id' => '5',
            'type' => 'email',
            'label' => 'VCCS email',
            'size' => 'medium',
            'placeholder' => 'Enter your email address...',
        ),
        19 => array (
            'id' => '19',
            'type' => 'divider',
            'label' => 'Information session',
            'label_disable' => '1',
        ),
        28 => array (
            'id' => '28',
            'type' => 'radio',
            'label' => 'Did you attend an information session?',
            'choices' => array (
                1 => array (
                    'label' => 'Yes',
                ),
                2 => array (
                    'label' => 'No',
                ),
            ),
            'choices_images_style' => 'none',
        ),
        20 => array (
            'id' => '20',
            'type' => 'html',
            'code' => 'Please attend a PTA information session before completing the application.',
            'label_disable' => '1',
            'conditional_logic' => '1',
            'conditional_type' => 'show',
            'conditionals' => array (
                0 => array (
                    0 => array (
                        'field' => '28',
                        'operator' => '==',
                        'value' => '2',
                    ),
                ),
            ),
        ),
        7 => array (
            'id' => '7',
            'type' => 'select',
            'label' => 'Month attended',
            'choices' => array (
                1 => array (
                    'label' => 'January',
                ),
                2 => array (
                    'label' => 'February',
                ),
                3 => array (
                    'label' => 'March',
                ),
                4 => array (
                    'label' => 'April',
                ),
                5 => array (
                    'label' => 'May',
                ),
                6 => array (
                    'label' => 'June',
                ),
                7 => array (
                    'label' => 'July',
                ),
                8 => array (
                    'label' => 'August',
                ),
                9 => array (
                    'label' => 'September',
                ),
                10 => array (
                    'label' => 'October',
                ),
                11 => array (
                    'label' => 'November',
                ),
                12 => array (
                    'label' => 'December',
                ),
            ),
            'size' => 'medium',
            'placeholder' => 'Select month attended...',
            'conditional_logic' => '1',
            'conditional_type' => 'show',
            'conditionals' => array (
                0 => array (
                    0 => array (
                        'field' => '28',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
        ),
        8 => array (
            'id' => '8',
            'type' => 'select',
            'label' => 'Year attended',
            'choices' => array (
                1 => array (
                    'label' => '2019',
                ),
                2 => array (
                    'label' => '2018',
                ),
                3 => array (
                    'label' => '2017',
                ),
                4 => array (
                    'label' => '2016',
                ),
                5 => array (
                    'label' => '2015',
                ),
                6 => array (
                    'label' => '2014',
                ),
            ),
            'size' => 'medium',
            'placeholder' => 'Select year attended...',
            'conditional_logic' => '1',
            'conditional_type' => 'show',
            'conditionals' => array (
                0 => array (
                    0 => array (
                        'field' => '28',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
        ),
        35 => array (
            'id' => '35',
            'type' => 'divider',
            'label' => 'Drug Screen',
            'label_disable' => '1',
        ),
        30 => array (
            'id' => '30',
            'type' => 'radio',
            'label' => 'Did you complete a drug screening?',
            'choices' => array (
                1 => array (
                    'label' => 'Yes',
                ),
                2 => array (
                    'label' => 'No',
                ),
            ),
            'required' => '1',
            'choices_images_style' => 'none',
        ),
        38 => array (
            'id' => '38',
            'type' => 'html',
            'code' => '<p>I was unable to complete the drug screen due to COVID-19 restrictions. I understand my acceptance to the PTA program will be conditional upon completing the drug screen by August 1, 2020.</p>',
            'label_disable' => '1',
            'conditional_logic' => '1',
            'conditional_type' => 'show',
            'conditionals' => array (
                0 => array (
                    0 => array (
                        'field' => '30',
                        'operator' => '==',
                        'value' => '2',
                    ),
                ),
            ),
        ),
        21 => array (
            'id' => '21',
            'type' => 'divider',
            'label' => 'Background checks',
            'label_disable' => '1',
        ),
        36 => array (
            'id' => '36',
            'type' => 'radio',
            'label' => 'Did you complete a background check through Castle Branch? (copy)',
            'choices' => array (
                1 => array (
                    'label' => 'Yes',
                ),
                2 => array (
                    'label' => 'No',
                ),
            ),
            'required' => '1',
            'choices_images_style' => 'none',
        ),
        32 => array (
            'id' => '32',
            'type' => 'html',
            'code' => 'You must complete a background check and drug screening through Castle Branch before finishing the application. Visit our background check webpage for more details.',
            'label_disable' => '1',
            'conditional_logic' => '1',
            'conditional_type' => 'show',
            'conditionals' => array (
                1 => array (
                    0 => array (
                        'field' => '36',
                        'operator' => '==',
                        'value' => '2',
                    ),
                ),
            ),
        ),
        22 => array (
            'id' => '22',
            'type' => 'divider',
            'label' => 'Volunteer or observation hours',
            'label_disable' => '1',
        ),
        11 => array (
            'id' => '11',
            'type' => 'text',
            'label' => 'Observation Location ',
            'size' => 'medium',
            'placeholder' => 'Please provide your observation location if any...',
            'limit_count' => '1',
            'limit_mode' => 'characters',
        ),
        12 => array (
            'id' => '12',
            'type' => 'text',
            'label' => '# of hours',
            'size' => 'medium',
            'placeholder' => 'Please provide your observation hours...',
            'limit_count' => '1',
            'limit_mode' => 'characters',
        ),
        23 => array (
            'id' => '23',
            'type' => 'divider',
            'label' => 'Essential functions',
            'label_disable' => '1',
        ),
        26 => array (
            'id' => '26',
            'type' => 'html',
            'code' => 'In the course of the PTA curriculum, students are required to demonstrate certain physical, behavioral and cognitive functions related to those expected in physical therapy practice, as well as specific factors related to the classroom experience. Germanna Community College has adopted standards that students of the program are expected to possess. A list of the Essential Functions is available in the complete PTA Application Packet found online. Qualified individuals with a disability who can perform these essential functions with reasonable accommodations may be considered for admission to the program; however, they must contact a college disabilities counselor to determine what reasonable accommodations are appropriate to this setting. Provisions for accommodations will be made in compliance with Section 504 of the Rehabilitation Act of 1973 and the Americans with Disabilities Act of 1990.

*I have read and understand the Essential Functions for the PTA student. (Check "I can comply" if you are able to meet all these expectations. Check "I will need to consult with disability services" if you feel you need accommodations for any of the expectations.)',
            'label_disable' => '1',
        ),
        27 => array (
            'id' => '27',
            'type' => 'radio',
            'label' => 'Essential functions',
            'choices' => array (
                1 => array (
                    'label' => 'I can comply',
                ),
                2 => array (
                    'label' => 'I will need to consult with disability services',
                ),
            ),
            'choices_images_style' => 'none',
        ),
        24 => array (
            'id' => '24',
            'type' => 'divider',
            'label' => 'Personal statement essay',
            'description' => '*Copy and paste your Personal Statement essay here (600 words max)',
            'label_disable' => '1',
        ),
        16 => array (
            'id' => '16',
            'type' => 'textarea',
            'label' => 'Personal statement',
            'required' => '1',
            'size' => 'medium',
            'placeholder' => 'Paste your 600 word essay here...',
            'limit_count' => '1',
            'limit_mode' => 'characters',
            'css' => 'wpf-char-limit-pta',
        ),
        25 => array (
            'id' => '25',
            'type' => 'divider',
            'label' => 'Signature',
            'label_disable' => '1',
        ),
        17 => array (
            'id' => '17',
            'type' => 'text',
            'label' => 'Signature',
            'required' => '1',
            'size' => 'large',
            'placeholder' => 'Re-enter your full name to use as your signature...',
            'limit_count' => '1',
            'limit_mode' => 'characters',
        ),
        34 => array (
            'id' => '34',
            'type' => 'hidden',
            'label' => 'Generated Applicant#',
            'label_disable' => '1',
            'default_value' => '{unique_id}',
        ),
    ),
    'settings' => array (
        'form_title' => 'PTA Application 2019',
        'submit_text' => 'Submit application',
        'submit_text_processing' => 'Sending application...',
        'honeypot' => '1',
        'notification_enable' => '1',
        'notifications' => array (
            2 => array (
                'notification_name' => 'Student Email Notification',
                'email' => '{field_id="7"}',
                'carboncopy' => 'jhamilton@germanna.edu,kclark@germanna.edu, rhetrick@germanna.edu',
                'subject' => 'PTA Application Submission Confirmation',
                'sender_name' => 'Germanna PTA Program Admissions',
                'sender_address' => 'No_Reply_Germanna@germanna.edu',
                'replyto' => 'ptassistant@germanna.edu',
                'message' => 'Thank you for your application to the PTA program at Germanna Community College. Notification of application standing in Phase I and invitation to interview is expected to go out no later than June 11. 

Please check your student email regularly during this time, in the event we need clarification on any portion of your application. Interviews are scheduled for June 17 and 18, and you will need to be available for a half-day of activities. More information will be provided with the invitation to interview.

All applicants are invited to a PTA Program Interview Preparation Workshop on Tuesday, June 11, 5:00 p.m. - 7:30 p.m. in room 305 of the Locust Grove campus. 

Please RSVP to mhawley@germanna.edu with the subject line PTA Interview Workshop. Attendance at the workshop is optional.

Generated Applicant #
{field_id="34"}',
            ),
            1 => array (
                'notification_name' => 'PTA App Results for Admissions',
                'email' => 'jhamilton@germanna.edu,kclark@germanna.edu, rhetrick@germanna.edu',
                'subject' => 'New Entry: PTA Application 2019',
                'sender_name' => 'Germanna PTA Program Application',
                'sender_address' => 'No_Reply_Germanna@germanna.edu',
                'replyto' => 'ptassistant@germanna.edu',
                'message' => '{all_fields}

',
            ),
        ),
        'confirmations' => array (
            1 => array (
                'name' => 'Default Confirmation',
                'type' => 'redirect',
                'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
                'message_scroll' => '1',
                'page' => '25',
                'redirect' => 'https://germannacc.staging.wpengine.com/physical-therapist-assistant/application-confirmation/',
            ),
        ),
    ),
    'meta' => array (
        'entry_columns' => array (
            0 => 1,
            1 => 2,
            2 => 5,
            3 => 34,
        ),
        'template' => 'pta_application_2019',
    ),
);
    }
}
new WPForms_Template_pta_application_2019;
endif;