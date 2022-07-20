<?php
if ( ! defined( 'SEO_TEMPL_NEW' ) ) {
	define( 'SEO_TEMPL_NEW', 'page-seo-template-new.php' );
}

function seonew_first_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
					'name'        => 'first__sub',
					'label'       => 'First section title right',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__text',
					'label'       => 'First section text',
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
add_filter( 'smart-cf-register-fields', 'seonew_first_section_template_fields', 1, 5 );

function seonew_portfolio_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
					'name'        => 'portfolio__text',
					'label'       => 'Portfolio section text',
					'type'        => 'wysiwyg',
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
add_filter( 'smart-cf-register-fields', 'seonew_portfolio_section_template_fields', 2, 5 );

function seonew_why_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
					'name'        => 'why__video',
					'label'       => 'Why section video',
					'type'        => 'file',
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
add_filter( 'smart-cf-register-fields', 'seonew_why_section_template_fields', 3, 5 );

function seonew_marketing_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

		$Section = SCF::add_setting( 'dev-4', 'Marketing section' );

		$Section->add_group(
			'marketing-section',
			false,
			array(
				array(
					'name'        => 'marketing__anchor_name',
					'label'       => 'Marketing section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'marketing__anchor',
					'label'       => 'Marketing section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'marketing__title',
					'label'       => 'Marketing section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'marketing__text',
					'label'       => 'Marketing section text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'marketing_list',
			true,
			array(
				array(
					'name'        => 'marketing__abbr',
					'label'       => 'First letters',
					'type'        => 'text',
				),
				array(
					'name'        => 'marketing__name',
					'label'       => 'Title',
					'type'        => 'text',
				),
				array(
					'name'        => 'marketing__sub',
					'label'       => 'Text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'marketing__link',
					'label'       => 'More link',
					'type'        => 'text',
				),
			)
		);
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seonew_marketing_section_template_fields', 4, 5 );

function seonew_faq_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

		$Section = SCF::add_setting( 'dev-5', 'FAQ section' );

		$Section->add_group(
			'faq_section',
			false,
			array(
				array(
					'name'        => 'faq__anchor_name',
					'label'       => 'FAQ section anchor name',
					'type'        => 'text',
				),
				array(
					'name'        => 'faq__anchor',
					'label'       => 'FAQ section anchor',
					'type'        => 'text',
				),
				array(
					'name'        => 'faq__title',
					'label'       => 'FAQ section title',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'faq_list',
			true,
			array(
				array(
					'name'        => 'faq__text',
					'label'       => 'FAQ section text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'faq_counter',
			false,
			array(
				array(
					'type'            => 'check', // Тип поля. Обязательный.
					'name'            => 'counter__toggle', // Ключ поля. Обязательный.
					'label'           => 'Enable counter', // Заголовок поля.
					'choices'         => array( // Массив с вариантами выбора.
						'enabled' => 'Enabled',
					),
					'check_direction' => 'horizontal', // или vertical. Вариант отображения пунктов.
				),
				array(
					'name'        => 'counter__title',
					'label'       => 'Counter title',
					'type'        => 'text',
				),
				array(
					'name'        => 'counter__sub',
					'label'       => 'Counter bottom text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'faq_form',
			false,
			array(
				array(
					'name'        => 'faq__counter',
					'label'       => 'FAQ form script',
					'type'        => 'textarea',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seonew_faq_section_template_fields', 5, 5 );

function seonew_services_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
			)
		);

		$Section->add_group(
			'services_list',
			true,
			array(
				array(
					'name'        => 'services__img',
					'label'       => 'Services item image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'services__item_title',
					'label'       => 'Service item name',
					'type'        => 'text',
				),
				array(
					'name'        => 'services__item_text',
					'label'       => 'Service item text',
					'type'        => 'textarea',
				),
				array(
					'name'        => 'services__item_price_link',
					'label'       => 'Service item price',
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
add_filter( 'smart-cf-register-fields', 'seonew_services_section_template_fields', 6, 5 );

function seonew_choose_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
				array(
					'name'        => 'choose__link',
					'label'       => 'Why choose link',
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
add_filter( 'smart-cf-register-fields', 'seonew_choose_section_template_fields', 7, 5 );

function seonew_reiew_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
add_filter( 'smart-cf-register-fields', 'seonew_reiew_section_template_fields', 8, 5 );

function seonew_process_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    if ( get_page_template_slug( $id ) == SEO_TEMPL_NEW ) {

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
add_filter( 'smart-cf-register-fields', 'seonew_process_section_template_fields', 9, 5 );
