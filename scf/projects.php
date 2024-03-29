<?php
if ( ! defined( 'PROJ_TYPE_NAME' ) ) {
	define( 'PROJ_TYPE_NAME', 'projects' );
}
// if ( ! defined( 'SEO_TEMPL_NAME' ) ) {
// 	define( 'SEO_TEMPL_NAME', 'seo-template.php' );
// }

// Регистрация метабоксов и произвольных полей.
function project_first_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	// echo get_page_template_slug( $id );
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-1', 'First section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'first-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'colorpicker',
					'name'        => 'project_bg_color',
					'label'       => 'Project background color',
					'default'     => '#202020',
				),
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
					'name'        => 'first__video',
					'label'       => 'Youtube video ID',
					'type'        => 'file',
					'notes'       => ''
				),
				array(
					'name'        => 'first__img',
					'label'       => 'First section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'first__bg',
					'label'       => 'First section background',
					'type'        => 'image',
					'size'        => 'medium',
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
add_filter( 'smart-cf-register-fields', 'project_first_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_dev_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-2', 'Development section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'dev-section-1',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'dev_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'dev__title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
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
add_filter( 'smart-cf-register-fields', 'project_dev_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_benchmark_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-3', 'Benchmarking section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'benchmark-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'benchmark_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'benchmark__name',
					'label'       => 'Benchmarking title',
					'type'        => 'text',
				),
				array(
					'name'        => 'benchmark__text',
					'label'       => 'Benchmarking text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'benchmark__img',
					'label'       => 'Benchmarking image',
					'type'        => 'image',
					'size'        => 'small',
					'notes'       => 'either video or image'
				),
				array(
					'name'        => 'benchmark__video',
					'label'       => 'Benchmarking video',
					'type'        => 'file',
					'notes'       => 'Video ID from YouTube'
				),
				array(
					'name'        => 'benchmark__json',
					'label'       => 'Benchmarking svg animation',
					'type'        => 'file',
					'notes'       => 'Json file from After Effect'
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
add_filter( 'smart-cf-register-fields', 'project_benchmark_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_structure_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-4', 'Site structure section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'structure-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'structure_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'structure__name',
					'label'       => 'Site structure title',
					'type'        => 'text',
				),
				array(
					'name'        => 'structure__text',
					'label'       => 'Site structure text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'structure__img',
					'label'       => 'Site structure image',
					'type'        => 'image',
					'size'        => 'small',
					'notes'       => 'either video or image'
				),
				array(
					'name'        => 'structure__video',
					'label'       => 'Site structure video',
					'type'        => 'file',
					'notes'       => 'Video ID from YouTube'
				),
				array(
					'name'        => 'structure__json',
					'label'       => 'Site structure svg animation',
					'type'        => 'file',
					'notes'       => 'Json file from After Effect'
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
add_filter( 'smart-cf-register-fields', 'project_structure_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_content_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-5', 'Content creation section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'content-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'content_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'content__name',
					'label'       => 'Content title',
					'type'        => 'text',
				),
				array(
					'name'        => 'content__text',
					'label'       => 'Content text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'content__img',
					'label'       => 'Content image',
					'type'        => 'image',
					'size'        => 'small',
				),
				array(
					'name'        => 'content__decor',
					'label'       => 'Content decoration image',
					'type'        => 'image',
					'size'        => 'small',
				),
				array(
					'name'        => 'content__json',
					'label'       => 'Content decoration json animation',
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
add_filter( 'smart-cf-register-fields', 'project_content_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_visual_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-6', 'Visuals section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'visual-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'visual_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'visual__title',
					'label'       => 'Visuals title',
					'type'        => 'text',
				),
				array(
					'name'        => 'visual__text',
					'label'       => 'Visuals text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'visual__img',
					'label'       => 'Visuals image',
					'type'        => 'image',
					'size'        => 'small',
					'notes'       => 'either video or image'
				),
				array(
					'name'        => 'visual__json',
					'label'       => 'Visuals json animation',
					'type'        => 'file',
				),
				// array(
				// 	'name'        => 'visual__bg',
				// 	'label'       => 'Visuals decor image',
				// 	'type'        => 'image',
				// 	'size'        => 'small',
				// ),
			)
		);

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'visual_options',
			// Повторяемая группа полей? Да - true, Нет - false.
			true,
			// Массив полей.
			array(
				array(
					'name'        => 'visual__name',
					'label'       => 'Visuals option name',
					'type'        => 'text',
				),
				array(
					'name'        => 'visual__sub',
					'label'       => 'Visuals option subtitle',
					'type'        => 'text',
				),
				array(
					'name'        => 'visual__opt_img',
					'label'       => 'Visuals option image',
					'type'        => 'image',
					'size'        => 'small',
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
add_filter( 'smart-cf-register-fields', 'project_visual_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_moodboard_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-7', 'Moodboard section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'moodboard-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'moodboard_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'moodboard__title',
					'label'       => 'Moodboard title',
					'type'        => 'text',
				),
				array(
					'name'        => 'moodboard__text',
					'label'       => 'Moodboard text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'moodboard__video',
					'label'       => 'Moodboard video',
					'type'        => 'file',
				),
				array(
					'name'        => 'moodboard__image',
					'label'       => 'Moodboard image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		// Добавляем в метабокс произвольные поля.
		// $Section->add_group(
		// 	// ID группы полей.
		// 	'moodboard-gallery',
		// 	// Повторяемая группа полей? Да - true, Нет - false.
		// 	true,
		// 	// Массив полей.
		// 	array(
		// 		array(
		// 			'name'        => 'moodboard__img',
		// 			'label'       => 'Moodboard gallery image',
		// 			'type'        => 'image',
		// 			'size'        => 'small',
		// 		),
		// 	)
		// );

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'project_moodboard_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_concept_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-8', 'Concepts section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'concept-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'concept_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'concept__title',
					'label'       => 'Concepts title',
					'type'        => 'text',
				),
				array(
					'name'        => 'concept__text',
					'label'       => 'Concepts text',
					'type'        => 'wysiwyg',
				),
			)
		);

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'concept-gallery',
			// Повторяемая группа полей? Да - true, Нет - false.
			true,
			// Массив полей.
			array(
				array(
					'name'        => 'concept__img',
					'label'       => 'Concepts gallery image',
					'type'        => 'image',
					'size'        => 'small',
					'notes'       => 'either video or image'
				),
				array(
					'name'        => 'concept__file',
					'label'       => 'Concepts gallery video',
					'type'        => 'file',
					// 'notes'       => 'video id from YouTube'
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
add_filter( 'smart-cf-register-fields', 'project_concept_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_details_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-9', 'Details section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'details-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'details_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'details__title',
					'label'       => 'Details title',
					'type'        => 'text',
				),
			)
		);

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'details-gallery',
			// Повторяемая группа полей? Да - true, Нет - false.
			true,
			// Массив полей.
			array(
				array(
					'name'        => 'details__img',
					'label'       => 'Details gallery image',
					'type'        => 'image',
					'size'        => 'small',
					'notes'       => 'either video or image'
				),
				array(
					'name'        => 'details__file',
					'label'       => 'Details gallery video',
					'type'        => 'file',
					'notes'       => 'video id from YouTube'
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
add_filter( 'smart-cf-register-fields', 'project_details_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_frontend_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-10', 'Frontend section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'frontend-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'frontend_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'frontend__title',
					'label'       => 'Frontend title',
					'type'        => 'text',
				),
				array(
					'name'        => 'frontend__text',
					'label'       => 'Frontend text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'frontend__img',
					'label'       => 'Frontend image',
					'type'        => 'image',
					'size'        => 'small',
				),
				array(
					'name'        => 'frontend__video',
					'label'       => 'Frontend video',
					'type'        => 'file',
				),
				array(
					'name'        => 'frontend__bg',
					'label'       => 'Frontend background',
					'type'        => 'image',
					'size'        => 'small',
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
add_filter( 'smart-cf-register-fields', 'project_frontend_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_mobile_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-11', 'Adaptation section' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'mobile-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'mobile_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'mobile__title',
					'label'       => 'Adaptation title',
					'type'        => 'text',
				),
				array(
					'name'        => 'mobile__text',
					'label'       => 'Adaptation text',
					'type'        => 'wysiwyg',
				),
			)
		);

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'mobile_list',
			// Повторяемая группа полей? Да - true, Нет - false.
			true,
			// Массив полей.
			array(
				array(
					'name'        => 'mobile__img',
					'label'       => 'Mobile image',
					'type'        => 'image',
					'size'        => 'small',
					'notes'       => 'either video or image'
				),
				array(
					'name'        => 'mobile__video',
					'label'       => 'Mobile background',
					'type'        => 'file',
					'notes'       => 'video id from YouTube'
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
add_filter( 'smart-cf-register-fields', 'project_mobile_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_seo_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-12', 'Seo otimization section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'seo-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'seo_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'seo__title',
					'label'       => 'Seo otimization title',
					'type'        => 'text',
				),
				array(
					'name'        => 'seo__text',
					'label'       => 'Seo otimization text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'seo__img',
					'label'       => 'Seo otimization image',
					'type'        => 'image',
					'size'        => 'small',
				),
				array(
					'name'        => 'seo__json',
					'label'       => 'Seo otimization json animation',
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
add_filter( 'smart-cf-register-fields', 'project_seo_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_qa_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-13', 'QA section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'qa-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'qa_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'qa__title',
					'label'       => 'QA title',
					'type'        => 'text',
				),
				array(
					'name'        => 'qa__text',
					'label'       => 'QA text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'qa__img',
					'label'       => 'QA image',
					'type'        => 'image',
					'size'        => 'small',
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
add_filter( 'smart-cf-register-fields', 'project_qa_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_team_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

        // Создаем блок настроек (метабокс).
        $Section = SCF::add_setting( 'project-13-5', 'Team section' );

        // Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'team_top',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'team_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'team__title',
					'label'       => 'Team title',
					'type'        => 'wysiwyg',
					'default'     => '<p>Worked on the <span style="color: #DDC181">project</span></p>',
				),
				array(
					'name'        => 'top_member',
					'label'       => 'Team members',
					'type'        => 'relation',
					'post-type'   => array('teams'),
					'limit'       => -1,
					'notes'       => 'no limits',
				),
				array(
					'type'        => 'colorpicker',
					'name'        => 'team_color',
					'label'       => 'Photo background color',
					'default'     => '#262626',
				),
			)
		);

        // Добавляем информацию о наших полях в общий массив.
        $settings[] = $Section;
    }

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'project_team_template_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_started_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-14', 'Get started section' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'started-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'type'        => 'boolean',
					'name'        => 'started_show',
					'label'       => 'Show section',
					'default'     => true,
					'true_label'  => 'Yes',
					'false_label' => 'No',
				),
				array(
					'name'        => 'started__title',
					'label'       => 'Get started title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'started__text',
					'label'       => 'Get started text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'started__btn',
					'label'       => 'Get started button text',
					'type'        => 'text',
				),
				array(
					'name'        => 'started__link',
					'label'       => 'Get started button link',
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
add_filter( 'smart-cf-register-fields', 'project_started_section_fields', 10, 5 );

// Регистрация метабоксов и произвольных полей.
function project_map_section_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $type === PROJ_TYPE_NAME && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'project-15', 'Map image' );


		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'map-section',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'name'        => 'map_image',
					'label'       => 'Map image if needed',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		// Добавляем информацию о наших полях в общий массив.
		$settings[] = $Section;
	}

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'project_map_section_fields', 10, 5 );
