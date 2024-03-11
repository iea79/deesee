<?php
if (!defined('WESITE_QUESTIONARY')) {
	define('WESITE_QUESTIONARY', 'website-questionnaire');
}

function questionary_page_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-1', 'Step 1');

		$Section->add_group(
			'first-step',
			false,
			array(
				array(
					'name'        => 'form__title',
					'label'       => 'Form title',
					'type'        => 'text',
					'default'     => 'Complete the survey and get the cost of the site'
				),
				array(
					'name'        => 'first__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => 'Which website do you need?'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_fields', 1, 5);

function questionary_page_2_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-2', 'Step 2');

		$Section->add_group(
			'seccond-step',
			false,
			array(
				array(
					'name'        => 'seccond__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '2. Do you have a corporate identity?'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_2_fields', 2, 5);

function questionary_page_3_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-3', 'Step 3');

		$Section->add_group(
			'three-step',
			false,
			array(
				array(
					'name'        => 'three__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '3. What is your target audience?'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_3_fields', 3, 5);

function questionary_page_4_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-4', 'Step 4');

		$Section->add_group(
			'four-step',
			false,
			array(
				array(
					'name'        => 'four__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '4. Which style do you like?'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_4_fields', 4, 5);

function questionary_page_5_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-5', 'Step 5');

		$Section->add_group(
			'five-step',
			false,
			array(
				array(
					'name'        => 'five__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '5. What color palette do you like?'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_5_fields', 5, 5);

function questionary_page_6_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-6', 'Step 6');

		$Section->add_group(
			'six-step',
			false,
			array(
				array(
					'name'        => 'six__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '6. Which emotions should the website evoke?'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_6_fields', 6, 5);

function questionary_page_7_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-7', 'Step 7');

		$Section->add_group(
			'seven-step',
			false,
			array(
				array(
					'name'        => 'seven__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '7. What websites do you like, regardless of industry?'
				),
				array(
					'name'        => 'seven__text',
					'label'       => 'Step sext',
					'type'        => 'text',
					'default'     => 'Two or three examples will be fine'
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_7_fields', 7, 5);

function questionary_page_8_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-8', 'Step 8');

		$Section->add_group(
			'eight-step',
			false,
			array(
				array(
					'name'        => 'eight__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '8. Your Comments'
				),
				array(
					'name'        => 'eight__text',
					'label'       => 'Step sext',
					'type'        => 'text',
					'default'     => "Tell us about your vision! Share what you'd love to see on your website"
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_8_fields', 8, 5);

function questionary_page_9_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-9', 'Step 9');

		$Section->add_group(
			'nine-step',
			false,
			array(
				array(
					'name'        => 'nine__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '9. Best desired launch date'
				),
				array(
					'name'        => 'nine__text',
					'label'       => 'Step sext',
					'type'        => 'text',
					'default'     => "Write the dates on which you want to launch the website"
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_9_fields', 9, 5);

function questionary_page_10_fields($settings, $type, $id, $meta_type, $types)
{

	if ($type == WESITE_QUESTIONARY) {

		$Section = SCF::add_setting('questionnaire-10', 'Step 10');

		$Section->add_group(
			'ten-step',
			false,
			array(
				array(
					'name'        => 'ten__title',
					'label'       => 'Step title',
					'type'        => 'text',
					'default'     => '10. Contact information'
				),
				array(
					'name'        => 'ten__text',
					'label'       => 'Step sext',
					'type'        => 'text',
					'default'     => "Leave your contact information so we can contact you"
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'questionary_page_10_fields', 10, 5);
