<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Community First Scholarship Interest Form
 * Template for WPForms.
 */
class WPForms_Template_community_first_scholarship_interest_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Community First Scholarship Interest Form';

		// Template slug
		$this->slug = 'community_first_scholarship_interest_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 7,
	'fields' => array (
		0 => array (
			'id' => '0',
			'type' => 'name',
			'label' => 'Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'medium',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'medium',
		),
		3 => array (
			'id' => '3',
			'type' => 'address',
			'label' => 'Address',
			'scheme' => 'us',
			'required' => '1',
			'size' => 'medium',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'Career Path of Interest',
			'choices' => array (
				1 => array (
					'label' => 'Automotive',
				),
				2 => array (
					'label' => 'Business',
				),
				3 => array (
					'label' => 'Education',
				),
				6 => array (
					'label' => 'Engineering',
				),
				4 => array (
					'label' => 'Healthcare',
				),
				5 => array (
					'label' => 'Cybersecurity/I.T.',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		5 => array (
			'id' => '5',
			'type' => 'date-time',
			'label' => 'Date of Birth',
			'format' => 'date',
			'required' => '1',
			'size' => 'medium',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
		),
		6 => array (
			'id' => '6',
			'type' => 'radio',
			'label' => 'How did you hear about this scholarship?',
			'choices' => array (
				5 => array (
					'label' => 'Email',
				),
				4 => array (
					'label' => 'Newspaper Ad',
				),
				3 => array (
					'label' => 'Radio',
				),
				2 => array (
					'label' => 'Social Media (Facebook, Instagram)',
				),
				1 => array (
					'label' => 'Germanna\'s Website',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
	),
	'settings' => array (
		'form_title' => 'Community First Scholarship Interest Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => '{admin_email}',
				'subject' => 'New Entry: Community First Scholarship Interest Form',
				'sender_name' => 'Germanna Community College',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'community_first_scholarship_interest_form',
	),
);
	}
}
new WPForms_Template_community_first_scholarship_interest_form;
endif; ?>