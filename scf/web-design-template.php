<?php
if ( ! defined( 'WEB_DESIGN_TEMPL_NAME' ) ) {
	define( 'WEB_DESIGN_TEMPL_NAME', 'page-web-design-template.php' );
}

// Регистрация метабоксов и произвольных полей.
function webdesign_first_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-1', 'First section' );

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
					'name'        => 'first__btn',
					'label'       => 'Section button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'first__link',
					'label'       => 'Section button link',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'first-slider',
			true,
			array(
				array(
					'name'        => 'slider__title',
					'label'       => 'First slide text',
					'type'        => 'text',
				),
				array(
					'name'        => 'slider__img',
					'label'       => 'First slide image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdesign_first_section_template_fields', 1, 5 );

function webdesign_promo_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-2', 'Seccond section' );

		$Section->add_group(
			'promo-section',
			false,
			array(
				array(
					'name'        => 'promo__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'promo__text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'promo__btn',
					'label'       => 'Section button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'promo__link',
					'label'       => 'Section button link',
					'type'        => 'text',
				),
                array(
					'name'        => 'promo__img',
					'label'       => 'First slide image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdesign_promo_section_template_fields', 1, 5 );

function webdesign_why_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-3', 'Why section' );

		$Section->add_group(
			'why-section',
			false,
			array(
				array(
					'name'        => 'why__anchor_name',
					'label'       => 'Section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__anchor',
					'label'       => 'Section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'why__text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'why__note',
					'label'       => 'Section note',
					'type'        => 'text',
				),
                array(
					'name'        => 'why__img',
					'label'       => 'First slide image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdesign_why_section_template_fields', 1, 5 );

function webdesign_necessit_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-4', 'Necessities section' );

		$Section->add_group(
			'necessit-section',
			false,
			array(
				array(
					'name'        => 'necessit__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'necessit_list',
			true,
			array(
				array(
					'name'        => 'necessit__img',
					'label'       => 'Section list item img',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'necessit__descr',
					'label'       => 'Section list item text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdesign_necessit_section_template_fields', 1, 5 );

function webdis_cons_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-5', 'Builder section' );

		$Section->add_group(
			'cons-section',
			false,
			array(
				array(
					'name'        => 'cons__anchor_name',
					'label'       => 'Section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'cons__anchor',
					'label'       => 'Section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'cons__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'cons__text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'cons-builder',
			false,
			array(
				array(
					'name'        => 'cons__builder_title',
					'label'       => 'Builder list title',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'cons_builder_plus_list',
			true,
			array(
				array(
					'name'        => 'cons__builder_plus',
					'label'       => 'Builder list plus',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'cons_builder_minus_list',
			true,
			array(
				array(
					'name'        => 'cons__builder_minus',
					'label'       => 'Builder list minus',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'cons-custom',
			false,
			array(
				array(
					'name'        => 'cons__custom_title',
					'label'       => 'Custom list title',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'cons_custom_plus_list',
			true,
			array(
				array(
					'name'        => 'cons__custom_plus',
					'label'       => 'Custom list plus',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'cons_custom_minus_list',
			true,
			array(
				array(
					'name'        => 'cons__custom_minus',
					'label'       => 'Custom list minus',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdis_cons_section_template_fields', 5, 5 );

function webdis_choose_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-6', 'Best function section' );

		$Section->add_group(
			'choose-section',
			false,
			array(
				array(
					'name'        => 'choose__anchor_name',
					'label'       => 'Why choose section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'choose__anchor',
					'label'       => 'Why choose section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'choose__title',
					'label'       => 'Why choose section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'choose__img',
					'label'       => 'Why choose image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'choose__text',
					'label'       => 'Why choose text',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'choose_list',
			true,
			array(
				array(
					'name'        => 'choose__item',
					'label'       => 'Why choose list item',
					'type'        => 'wysiwyg',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdis_choose_section_template_fields', 6, 5 );

function webdis_process_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-7', 'Process section' );

		$Section->add_group(
			'process-section',
			false,
			array(
				array(
					'name'        => 'process__anchor_name',
					'label'       => 'Section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'process__anchor',
					'label'       => 'Section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'process__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'process__sub',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'process_list',
			true,
			array(
				array(
					'name'        => 'process__name',
					'label'       => 'Process list name',
					'type'        => 'text',
				),
				array(
					'name'        => 'process__text',
					'label'       => 'Process list text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'process__img',
					'label'       => 'Process list image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdis_process_section_template_fields', 7, 5 );

function webdesign_why2_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-8', 'Why dark section' );

		$Section->add_group(
			'why-section',
			false,
			array(
				array(
					'name'        => 'why2__anchor_name',
					'label'       => 'Section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'why2__anchor',
					'label'       => 'Section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'why2__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'why2__text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'why2__note',
					'label'       => 'Section note',
					'type'        => 'text',
				),
                array(
					'name'        => 'why2__img',
					'label'       => 'First slide image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'webdesign_why2_section_template_fields', 8, 5 );

function faq_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'wd-9', 'FAQ section' );

		$Section->add_group(
			'faq-section',
			false,
			array(
				array(
					'name'        => 'faq__anchor_name',
					'label'       => 'Section anchor name',
					'type'        => 'text',
                    'default'     => 'FAQ'
				),
				array(
					'name'        => 'faq__anchor',
					'label'       => 'Section anchor',
					'type'        => 'text',
                    'default'     => 'FAQ'
				),
				array(
					'name'        => 'faq__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
                    'default'     => 'FAQ'
				),
				array(
					'name'        => 'faq__img',
					'label'       => 'Section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$Section->add_group(
			'faq_list',
			true,
			array(
                array(
                    'name'        => 'faq__name',
                    'label'       => 'Question',
                    'type'        => 'text',
                ),
                array(
					'name'        => 'faq__text',
					'label'       => 'Answer text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'faq_section_template_fields', 9, 5 );
