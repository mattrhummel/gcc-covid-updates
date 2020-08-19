<?phpif ( class_exists( 'WPForms_Template', false ) ) :
/**
 * College Wide Mentorship Program Application
 * Template for WPForms.
 */
class WPForms_Template_college_wide_mentorship_program_application extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'College Wide Mentorship Program Application';

		// Template slug
		$this->slug = 'college_wide_mentorship_program_application';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 8,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'medium',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'medium',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Job Title',
			'required' => '1',
			'size' => 'medium',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		3 => array (
			'id' => '3',
			'type' => 'email',
			'label' => 'Germanna Email',
			'required' => '1',
			'size' => 'medium',
		),
		4 => array (
			'id' => '4',
			'type' => 'phone',
			'label' => 'Germanna Phone',
			'format' => 'smart',
			'required' => '1',
			'size' => 'medium',
		),
		5 => array (
			'id' => '5',
			'type' => 'phone',
			'label' => 'Additional Phone Contact (optional)',
			'format' => 'smart',
			'size' => 'medium',
		),
		6 => array (
			'id' => '6',
			'type' => 'textarea',
			'label' => 'Comments',
			'size' => 'medium',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
	),
	'settings' => array (
		'form_title' => 'College Wide Mentorship Program Application',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'vcurry@germanna.edu, mhummel@germanna.edu',
				'subject' => 'New Entry: College-Wide Mentorship Program Application',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for your interest in becoming a Germanna Mentor! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '46193',
			),
		),
	),
	'meta' => array (
		'template' => 'college_wide_mentorship_program_application',
	),
);
	}
}
new WPForms_Template_college_wide_mentorship_program_application;
endif;
?>