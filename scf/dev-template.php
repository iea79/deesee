<?php
if ( ! defined( 'DEV_TEMPL_NAME' ) ) {
	define( 'DEV_TEMPL_NAME', 'page-development-template.php' );
}

function dev_first_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-1', 'First section' );

		$Section->add_group(
			'first-section',
			false,
			array(
				array(
					'name'        => 'first__title',
					'label'       => 'First section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__text',
					'label'       => 'First section title right',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__img',
					'label'       => 'First section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'first__btn',
					'label'       => 'First section button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'first__btn_link',
					'label'       => 'First section button link',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_first_section_template_fields', 1, 5 );

function dev_portfolio_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-2', 'Portfolio section' );

		$Section->add_group(
			'portfolio-section',
			false,
			array(
				array(
					'name'        => 'portfolio__anchor_name',
					'label'       => 'Portfolio section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'portfolio__anchor',
					'label'       => 'Portfolio section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'portfolio__title',
					'label'       => 'Portfolio section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'portfolio__btn',
					'label'       => 'Portfolio section button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'portfolio__btn_link',
					'label'       => 'Portfolio section button link',
					'type'        => 'text',
				),
			)
		);

		$Section->add_group(
			'portfolio-project',
			true,
			array(
				array(
					'name'        => 'portfolio__tags',
					'label'       => 'Project tags',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'portfolio__img',
					'label'       => 'Project image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'portfolio__name',
					'label'       => 'Project title',
					'type'        => 'text',
				),
				array(
					'name'        => 'portfolio__cat',
					'label'       => 'Project type name',
					'type'        => 'text',
				),
				array(
					'name'        => 'portfolio__link',
					'label'       => 'Project link',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_portfolio_section_template_fields', 2, 5 );

function dev_why_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-3', 'Why section' );

		$Section->add_group(
			'why-section',
			false,
			array(
				array(
					'name'        => 'why__anchor_name',
					'label'       => 'Why section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__anchor',
					'label'       => 'Why section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__title',
					'label'       => 'Why section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'why__text',
					'label'       => 'Why section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'why__btn',
					'label'       => 'Why section button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__btn_link',
					'label'       => 'Why section button link',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__img',
					'label'       => 'Why section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$Section->add_group(
			'why_points',
			true,
			array(
				array(
					'name'        => 'why__percent',
					'label'       => 'Percent',
					'type'        => 'text',
				),
				array(
					'name'        => 'why__row_text',
					'label'       => 'Percent text',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_why_section_template_fields', 3, 5 );

function dev_noticed_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-4', 'Noticed section' );

		$Section->add_group(
			'noticed-section',
			false,
			array(
				array(
					'name'        => 'noticed__anchor_name',
					'label'       => 'Noticed section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'noticed__anchor',
					'label'       => 'Noticed section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'noticed__title',
					'label'       => 'Noticed section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'noticed__text',
					'label'       => 'Noticed section text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'noticed_list',
			true,
			array(
				array(
					'name'        => 'noticed__img',
					'label'       => 'Image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'noticed__name',
					'label'       => 'Text',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_noticed_section_template_fields', 4, 5 );

function dev_cons_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-5', 'Pros&cons section' );

		$Section->add_group(
			'cons-section',
			false,
			array(
				array(
					'name'        => 'cons__anchor_name',
					'label'       => 'Pros&cons section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'cons__anchor',
					'label'       => 'Pros&cons section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'cons__title',
					'label'       => 'Pros&cons section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'cons__text',
					'label'       => 'Pros&cons section text',
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
add_filter( 'smart-cf-register-fields', 'dev_cons_section_template_fields', 5, 5 );

function dev_services_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-6', 'Services section' );

		$Section->add_group(
			'services-section',
			false,
			array(
				array(
					'name'        => 'services__anchor_name',
					'label'       => 'Services section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'services__anchor',
					'label'       => 'Services section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'services__title',
					'label'       => 'Services section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'services__img',
					'label'       => 'Services section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$Section->add_group(
			'services_list',
			true,
			array(
				array(
					'name'        => 'services__item_title',
					'label'       => 'Service item name',
					'type'        => 'text',
				),
				array(
					'name'        => 'services__item_text',
					'label'       => 'Service item text',
					'type'        => 'text',
				),
				array(
					'name'        => 'services__item_btn',
					'label'       => 'Service item button',
					'type'        => 'text',
				),
				array(
					'name'        => 'services__item_link',
					'label'       => 'Service item link',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_services_section_template_fields', 6, 5 );

function dev_choose_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-7', 'Why choose section' );

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
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_choose_section_template_fields', 7, 5 );

function dev_reiew_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-8', 'Review section' );

		$Section->add_group(
			'reiew-section',
			false,
			array(
				array(
					'name'        => 'reiew__anchor_name',
					'label'       => 'Review section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'reiew__anchor',
					'label'       => 'Review section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'reiew__title',
					'label'       => 'Review section title',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'reiew_list',
			false,
			array(
				array(
					'name'        => 'reiew__name',
					'label'       => 'Review list item',
					'type'        => 'relation',
					'post-type'   => array('reviews'),
					'limit'       => 0,
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_reiew_section_template_fields', 8, 5 );

function dev_process_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-9', 'Process section' );

		$Section->add_group(
			'process-section',
			false,
			array(
				array(
					'name'        => 'process__anchor_name',
					'label'       => 'Process section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'process__anchor',
					'label'       => 'Process section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'process__title',
					'label'       => 'Process section title',
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
add_filter( 'smart-cf-register-fields', 'dev_process_section_template_fields', 10, 5 );


function dev_price_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == DEV_TEMPL_NAME ) {

		$Section = SCF::add_setting( 'dev-10', 'Price section' );

		$Section->add_group(
			'price-section',
			false,
			array(
				array(
					'name'        => 'price__anchor_name',
					'label'       => 'Section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'price__anchor',
					'label'       => 'Section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'price__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'price_list',
			true,
			array(
				array(
					'name'        => 'price__name',
					'label'       => 'Price column name',
					'type'        => 'text',
				),
				array(
					'name'        => 'price__summ',
					'label'       => 'Price column price',
					'type'        => 'text',
				),
				array(
					'name'        => 'price__text',
					'label'       => 'Price column text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'price__link',
					'label'       => 'Process column link text',
					'type'        => 'text',
					'default'     => 'GET STARTED',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'dev_price_section_template_fields', 9, 5 );
