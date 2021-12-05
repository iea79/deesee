<?php
if ( ! defined( 'ABOUT_TEMPL_NAME' ) ) {
	define( 'ABOUT_TEMPL_NAME', 'page-about-us.php' );
}

// Регистрация метабоксов и произвольных полей.
function about_first_section_template_fields( $settings, $type, $id, $meta_type, $types ) {

    // var_dump($type);

	// Отображаем поля только на странице редактирования Записи
    if ( get_page_template_slug( $id ) == ABOUT_TEMPL_NAME ) {

        // Создаем блок настроек (метабокс).
        $Section = SCF::add_setting( 'about-1', 'Page title' );

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
                    'label'       => 'Page colored title',
                    'type'        => 'wysiwyg',
                ),
            )
        );

        $settings[] = $Section;

    }

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'about_first_section_template_fields', 1, 5 );

// Регистрация метабоксов и произвольных полей.
function about_team_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    if ( get_page_template_slug( $id ) == ABOUT_TEMPL_NAME ) {

        // Создаем блок настроек (метабокс).
        $Section = SCF::add_setting( 'about-2', 'Team section' );

        // Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'team_top',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'name'        => 'top_member',
					'label'       => '2 member on top',
					'type'        => 'relation',
					'post-type'   => array('teams'),
					'limit'       => 2,
					'notes'       => 'max 2',
				),
			)
		);

        // Добавляем информацию о наших полях в общий массив.
        $settings[] = $Section;
    }

	return $settings;
}
add_filter( 'smart-cf-register-fields', 'about_team_template_fields', 2, 5 );

// Регистрация метабоксов и произвольных полей.
function about_sections_template_fields( $settings, $type, $id, $meta_type, $types ) {

	// Отображаем поля только на странице редактирования Записи
    if ( get_page_template_slug( $id ) == ABOUT_TEMPL_NAME ) {

        // Создаем блок настроек (метабокс).
        $Section = SCF::add_setting( 'about-3', 'Bottom sections' );

        // Добавляем в метабокс произвольные поля.
        $Section->add_group(
            // ID группы полей.
            'about_sections',
            // Повторяемая группа полей? Да - true, Нет - false.
            true,
            // Массив полей.
            array(
                array(
                    'name'        => 'sections__text',
                    'label'       => 'Section text',
                    'type'        => 'wysiwyg',
                ),
                array(
                    'name'        => 'sections__img',
                    'label'       => 'Section background image',
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
add_filter( 'smart-cf-register-fields', 'about_sections_template_fields', 2, 5 );
