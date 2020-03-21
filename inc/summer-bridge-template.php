<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Summer Bridge 2020 Application
 * Template for WPForms.
 */
class WPForms_Template_summer_bridge_2020_application extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Summer Bridge 2020 Application';

		// Template slug
		$this->slug = 'summer_bridge_2020_application';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 15,
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
			'placeholder' => 'Enter your middle name...',
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
		13 => array (
			'id' => '13',
			'type' => 'text',
			'label' => 'Date of Birth',
			'size' => 'medium',
			'placeholder' => 'Enter your date of birth',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		14 => array (
			'id' => '14',
			'type' => 'select',
			'label' => 'T-Shirt Size',
			'choices' => array (
				1 => array (
					'label' => 'Small',
				),
				2 => array (
					'label' => 'Medium',
				),
				3 => array (
					'label' => 'Large',
				),
				4 => array (
					'label' => 'Extra Large',
				),
				5 => array (
					'label' => '2X Large',
				),
			),
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Select a size',
		),
		11 => array (
			'id' => '11',
			'type' => 'radio',
			'label' => 'Have you already applied to Germanna?',
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
		12 => array (
			'id' => '12',
			'type' => 'radio',
			'label' => 'If no do require assistance applying to Germanna?',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'choices_images_style' => 'modern',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '11',
						'operator' => '==',
						'value' => '2',
					),
				),
			),
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Street Address',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your street address...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Zipcode',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your zipcode',
			'limit_count' => '1',
			'limit_mode' => 'characters',
			'input_mask' => '99999',
		),
		8 => array (
			'id' => '8',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your email address...',
		),
		7 => array (
			'id' => '7',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'size' => 'medium',
			'placeholder' => 'Enter your phone number...',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'High School Name',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your school name...',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
	),
	'settings' => array (
		'form_title' => 'Summer Bridge 2020 Application',
		'submit_text' => 'Submit Application',
		'submit_text_processing' => 'Sending Application...',
		'honeypot' => '1',
		'dynamic_population' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'wstevens@germanna.edu,disabilityservices@germanna.edu',
				'subject' => 'New Entry: Summer Bridge 2020 Application',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for submitting your application. You will be contacted within 48 hours to schedule your one on one entrance meeting for Summer Bridge 2020.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'summer_bridge_2020_application',
	),
);
	}
}
new WPForms_Template_summer_bridge_2020_application;
endif;
