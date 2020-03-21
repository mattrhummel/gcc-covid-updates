<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Autism Support Group Application
 * Template for WPForms.
 */
class WPForms_Template_autism_support_group_application extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Autism Support Group Application';

		// Template slug
		$this->slug = 'autism_support_group_application';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 18,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your first name...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Middle Name',
			'size' => 'medium',
			'placeholder' => 'Enter your middle initial...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your last name...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Date of Birth',
			'size' => 'medium',
			'placeholder' => 'Enter your date of birth...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		6 => array (
			'id' => '6',
			'type' => 'radio',
			'label' => 'Are you currently a Germanna student?',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'choices_images_style' => 'modern',
		),
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'What is your Germanna student email',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your Germanna student email...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '6',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
		),
		15 => array (
			'id' => '15',
			'type' => 'email',
			'label' => 'Your personal email',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your personal email...',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '6',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		17 => array (
			'id' => '17',
			'type' => 'radio',
			'label' => 'Do you need help applying to Germanna (you do not have to be a current Germanna student to be a part of this group)',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '6',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		10 => array (
			'id' => '10',
			'type' => 'text',
			'label' => 'Street Address',
			'size' => 'medium',
			'placeholder' => 'Enter your street address...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'Zipcode',
			'size' => 'medium',
			'placeholder' => 'Enter your zipcode...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		13 => array (
			'id' => '13',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your phone number...',
		),
		16 => array (
			'id' => '16',
			'type' => 'text',
			'label' => 'Highschool Name',
			'size' => 'medium',
			'placeholder' => 'Enter the name of your highschool...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
	),
	'settings' => array (
		'form_title' => 'Autism Support Group Application',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => '{admin_email}',
				'subject' => 'New Entry: Autism Support Group Application',
				'sender_name' => 'Germanna Community College',
				'sender_address' => '{admin_email}',
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
		'template' => 'autism_support_group_application',
	),
);
	}
}
new WPForms_Template_autism_support_group_application;
endif; 