<?php
if ( ! defined( 'POST_TYPE_NAME' ) ) {
	define( 'POST_TYPE_NAME', 'page' );
}
if ( ! defined( 'POST_TEMPL_NAME' ) ) {
	define( 'POST_TEMPL_NAME', 'cases.php' );
}
// Регистрация метабоксов и произвольных полей.

function case_first_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-1', 'First section' );

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
						'type'        => 'textarea',
					),
					array(
						'name'        => 'first__btn',
						'label'       => 'First section button',
						'type'        => 'text',
					),
					array(
						'name'        => 'first__btn_link',
						'label'       => 'First section button link',
						'type'        => 'text',
					),
					array(
						'name'        => 'first__img',
						'label'       => 'First section image',
						'type'        => 'image',
						'size'        => 'medium',
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// var_dump($Section);
	// var_dump($settings);
	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_first_section_template_fields', 10, 5 );

function case_step_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-2', 'Steps section' );

			// Добавляем в метабокс произвольные поля.
			$Section->add_group(
				// ID группы полей.
				'case__steps',
				// Повторяемая группа полей? Да - true, Нет - false.
				true,
				// Массив полей.
				array(
					array(
						'name'        => 'steps__text',
						'label'       => 'Steps section item',
						'type'        => 'wysiwyg',
					),
				)
			);

			$Section->add_group(
				// ID группы полей.
				'case__banner',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'name'        => 'steps__banner_bg',
						'label'       => 'Steps section banner background',
                        'type'        => 'image',
						'size'        => 'medium',
					),
					array(
						'name'        => 'steps__banner_text',
						'label'       => 'Steps section banner text',
						'type'        => 'wysiwyg',
					),
					array(
						'name'        => 'steps__last',
						'label'       => 'Steps section last text',
						'type'        => 'text',
					),
				)
			);

            // var_dump($Section);
			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_step_section_template_fields', 10, 5 );

function case_process_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-3', 'Process section' );

            // Добавляем в метабокс произвольные поля.
            $Section->add_group(
				// ID группы полей.
				'case__process_head',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'name'        => 'process__head_title',
						'label'       => 'Process section title',
						'type'        => 'wysiwyg',
					),
					array(
						'name'        => 'process__head_subtitle',
						'label'       => 'Process section subtitle',
						'type'        => 'textarea',
					),
				)
			);

			$Section->add_group(
				// ID группы полей.
				'case__process',
				// Повторяемая группа полей? Да - true, Нет - false.
				true,
				// Массив полей.
				array(
					array(
						'name'        => 'process__title',
						'label'       => 'Process section tab name',
						'type'        => 'text',
					),
					array(
						'name'        => 'process__text',
						'label'       => 'Process section tab text',
						'type'        => 'wysiwyg',
					),
					array(
						'name'        => 'process__img',
						'label'       => 'Process section tab image',
                        'type'        => 'image',
						'size'        => 'medium',
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_process_section_template_fields', 10, 5 );

function case_cost_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-4', 'Cost section' );

            // Добавляем в метабокс произвольные поля.
            $Section->add_group(
				// ID группы полей.
				'case__cost',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'name'        => 'cost__title',
						'label'       => 'Cost section title',
						'type'        => 'wysiwyg',
					),
					array(
						'name'        => 'cost__content',
						'label'       => 'Cost section content',
						'type'        => 'wysiwyg',
					),
                    array(
						'name'        => 'cost__img',
						'label'       => 'Cost section image',
                        'type'        => 'image',
						'size'        => 'medium',
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_cost_section_template_fields', 10, 5 );

function case_order_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-5', 'Order section' );

            // Добавляем в метабокс произвольные поля.
            $Section->add_group(
				// ID группы полей.
				'case__order',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'name'        => 'order__title',
						'label'       => 'Order section title',
						'type'        => 'wysiwyg',
					),
					array(
						'name'        => 'order__sub',
						'label'       => 'Order section subtitle',
						'type'        => 'wysiwyg',
					),
                    array(
						'name'        => 'order__btn',
						'label'       => 'Order section button',
                        'type'        => 'text',
					),
                    array(
						'name'        => 'order__btn_link',
						'label'       => 'Order section button link',
                        'type'        => 'text',
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_order_section_template_fields', 10, 5 );

function case_price_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-6', 'Price section' );

            // Добавляем в метабокс произвольные поля.
            $Section->add_group(
				// ID группы полей.
				'case__price',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'name'        => 'price__title',
						'label'       => 'Price section title',
						'type'        => 'wysiwyg',
                        'default'     => 'Our <span style="color: #DDC181;">Price</span>',
					),
				)
			);

            $Section->add_group(
				// ID группы полей.
				'case__price__list',
				// Повторяемая группа полей? Да - true, Нет - false.
				true,
				// Массив полей.
				array(
					array(
						'name'        => 'price__letter',
						'label'       => 'Price section abbreviation',
						'type'        => 'text',
					),
					array(
						'name'        => 'price__city',
						'label'       => 'Price section name',
						'type'        => 'text',
					),
					array(
						'name'        => 'price__price',
						'label'       => 'Price section item price',
						'type'        => 'text',
					),
					array(
						'name'        => 'price__list',
						'label'       => 'Price section item list',
						'type'        => 'wysiwyg',
					),
					array(
						'name'        => 'price__descr',
						'label'       => 'Price section item description',
						'type'        => 'wysiwyg',
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_price_section_template_fields', 10, 5 );


function case_ideas_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-7', 'Ideas section' );

            // Добавляем в метабокс произвольные поля.
            $Section->add_group(
				// ID группы полей.
				'ideas_section',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'type'        => 'relation',
						'name'        => 'ideas_post',
						'label'       => 'Ideas & advice',
						'post-type'   => array('post'),
						'limit'       => 10,
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_ideas_section_template_fields', 10, 5 );



function case_projects_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
	if ( $type === POST_TYPE_NAME ) {

		if ( get_page_template_slug( $id ) == POST_TEMPL_NAME ) {

			// Создаем блок настроек (метабокс).
			$Section = SCF::add_setting( 'case-dev-8', 'Projects' );

            // Добавляем в метабокс произвольные поля.
            $Section->add_group(
				// ID группы полей.
				'projects_section',
				// Повторяемая группа полей? Да - true, Нет - false.
				false,
				// Массив полей.
				array(
					array(
						'type'        => 'relation',
						'name'        => 'speaks',
						'label'       => 'Select project',
						'post-type'   => array('projects'),
						'limit'       => 10,
					),
				)
			);

			// Добавляем информацию о наших полях в общий массив.
			$settings[] = $Section;
		}
	}

	// Обязательно возвращаем данные.
	return $settings;
}
add_filter( 'smart-cf-register-fields', 'case_projects_section_template_fields', 10, 5 );
