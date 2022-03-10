<?php
if ( ! defined( 'SEO_TEMPL_NAME' ) ) {
	define( 'SEO_TEMPL_NAME', 'page-seo-template.php' );
}

// Регистрация метабоксов и произвольных полей.
function seo_first_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-1', 'First section SEO' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'first-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'name'        => 'first__title',
					'label'       => 'First section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__text',
					'label'       => 'First section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first__bg',
					'label'       => 'First section background image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'first__img',
					'label'       => 'First section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'first__video',
					'label'       => 'First section video',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_first_section_template_fields', 1, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_problems_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-2', 'Problems section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'problems-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'problems_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'problems__title',
					'label'       => 'Problems section title',
					'type'        => 'wysiwyg',
				),
			)
		);

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'problems_list',
			// Повторяемая группа полей? Да - true, Нет - false.
			true,
			// Массив полей.
			array(
				array(
					'name'        => 'problems__list_item',
					'label'       => 'Problems list item',
					'type'        => 'wysiwyg',
				),
			)
		);

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'problems_rezult',
			// Повторяемая группа полей? Да - true, Нет - false.
			true,
			// Массив полей.
			array(
				array(
					'name'        => 'problems__rezult_json',
					'label'       => 'Problems rezult animation',
					'type'        => 'file',
					'notes'       => 'If selected, no text is shown',
				),
				array(
					'name'        => 'problems__rezult_percent',
					'label'       => 'Problems rezult percent',
					'type'        => 'text',
				),
				array(
					'name'        => 'problems__rezult_label',
					'label'       => 'Problems rezult label',
					'type'        => 'text',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_problems_section_template_fields', 2, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_research_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-3', 'Research section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'research-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'research_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'research__text',
					'label'       => 'Research section text',
					'type'        => 'wysiwyg',
                    'notes'      => 'Use H2 tag for title',
				),
				array(
					'name'        => 'research__img',
					'label'       => 'Research section image',
					'type'        => 'image',
                    'size'        => 'medium',
				),
				array(
					'name'        => 'research__video',
					'label'       => 'Research section video',
					'type'        => 'file',
				),
				array(
					'name'        => 'research__file',
					'label'       => 'Research section json animation',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_research_section_template_fields', 3, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_semantic_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-3_1', 'Semantic core section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'semantic-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'semantic_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'semantic__text',
					'label'       => 'Semantic section text',
					'type'        => 'wysiwyg',
                    'notes'      => 'Use H2 tag for title',
				),
				array(
					'name'        => 'semantic__img',
					'label'       => 'Semantic section image',
					'type'        => 'image',
                    'size'        => 'medium',
				),
				array(
					'name'        => 'semantic__video',
					'label'       => 'Semantic section video',
					'type'        => 'file',
				),
				array(
					'name'        => 'semantic__file',
					'label'       => 'Semantic section json animation',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_semantic_section_template_fields', 3, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_optimization_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-4', 'On-site optimization section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'optimization-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'optimization_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'optimization__text',
					'label'       => 'On-site section text',
					'type'        => 'wysiwyg',
					'notes'      => 'Use H2 tag for title',
				),
				array(
					'name'        => 'optimization__img',
					'label'       => 'On-site section image',
					'type'        => 'image',
                    'size'        => 'medium',
				),
				array(
					'name'        => 'optimization__video',
					'label'       => 'On-site section video',
					'type'        => 'file',
				),
				array(
					'name'        => 'optimization__file',
					'label'       => 'On-site section json animation',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_optimization_section_template_fields', 4, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_indexation_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-5', 'Indexation section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'indexation-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'indexation_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'indexation__text',
					'label'       => 'Indexation section text',
					'type'        => 'wysiwyg',
					'notes'      => 'Use H2 tag for title',
				),
				array(
					'name'        => 'indexation__img',
					'label'       => 'Indexation section image',
					'type'        => 'image',
                    'size'        => 'medium',
				),
				array(
					'name'        => 'indexation__video',
					'label'       => 'Indexation section video',
					'type'        => 'file',
				),
				array(
					'name'        => 'indexation__file',
					'label'       => 'Indexation section json animation',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_indexation_section_template_fields', 5, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_analytics_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-6', 'Google analytics section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'analytics-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'analytics_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'analytics__text',
					'label'       => 'Analytics section text',
					'type'        => 'wysiwyg',
					'notes'      => 'Use H2 tag for title',
				),
				array(
					'name'        => 'analytics__img',
					'label'       => 'Analytics section image',
					'type'        => 'image',
                    'size'        => 'medium',
				),
				array(
					'name'        => 'analytics__video',
					'label'       => 'Analytics section video',
					'type'        => 'file',
				),
				array(
					'name'        => 'analytics__file',
					'label'       => 'Analytics section json animation',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_analytics_section_template_fields', 6, 5 );

// Регистрация метабоксов и произвольных полей.
function seo_off_site_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    // var_dump($type);
	// var_dump(get_page_template_slug( $id ));
    if ( get_page_template_slug( $id ) == SEO_TEMPL_NAME ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'seo-7', 'Off-site optimization section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'off_site-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'off_site_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'off_site__text',
					'label'       => 'Off-site section text',
					'type'        => 'wysiwyg',
					'notes'      => 'Use H2 tag for title',
				),
				array(
					'name'        => 'off_site__img',
					'label'       => 'Off-site section image',
					'type'        => 'image',
                    'size'        => 'medium',
				),
				array(
					'name'        => 'off_site__video',
					'label'       => 'Off-site section video',
					'type'        => 'file',
				),
				array(
					'name'        => 'off_site__file',
					'label'       => 'Off-site section json animation',
					'type'        => 'file',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'seo_off_site_section_template_fields', 7, 5 );
