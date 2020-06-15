<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Community Feedback
 * Template for WPForms.
 */
class WPForms_Template_community_feedback extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Community Feedback';

		// Template slug
		$this->slug = 'community_feedback';

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
			'description' => 'Please enter your email, so we can follow up with you.',
			'required' => '1',
			'size' => 'medium',
		),
		6 => array (
			'id' => '6',
			'type' => 'radio',
			'label' => 'I\'m a',
			'choices' => array (
				1 => array (
					'label' => 'Current Student',
				),
				2 => array (
					'label' => 'Germanna Employee',
				),
				3 => array (
					'label' => 'Community Member',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
		4 => array (
			'id' => '4',
			'type' => 'textarea',
			'label' => 'Message',
			'required' => '1',
			'size' => 'medium',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		5 => array (
			'id' => '5',
			'type' => 'radio',
			'label' => 'Would you like us to publish your message?',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'description' => 'Germanna will review all messages received and does not guarantee messages will be published. ',
			'required' => '1',
			'choices_images_style' => 'modern',
		),
	),
	'settings' => array (
		'form_title' => 'Community Feedback',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'lpendleton@germanna.edu',
				'subject' => 'Black Minds Matter Feedback',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for sharing your message.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'community_feedback',
	),
);
	}
}
new WPForms_Template_community_feedback;
endif; ?>