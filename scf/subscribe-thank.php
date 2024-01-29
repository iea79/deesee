<?php
if (!defined('SUBSCRIBE_THANK_TEMPL_NAME')) {
	define('SUBSCRIBE_THANK_TEMPL_NAME', 'subscribe-thank-page.php');
}

// Регистрация метабоксов и произвольных полей.
function subscribe_thank_page_fields($settings, $type, $id, $meta_type, $types)
{

	if (get_page_template_slug($id) == SUBSCRIBE_THANK_TEMPL_NAME) {

		$Section = SCF::add_setting('subthank-1', 'Thank page settings');

		$Section->add_group(
			'first-section',
			false,
			array(
				array(
					'name'        => 'first__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__sub',
					'label'       => 'Section text 1',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__sub2',
					'label'       => 'Section text 2',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__btn',
					'label'       => 'Section button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'first__file',
					'label'       => 'Section file',
					'type'        => 'file',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'subscribe_thank_page_fields', 1, 5);
