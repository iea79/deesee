<?php
// Регистрация метабоксов и произвольных полей.
function blog_page_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	if ( $id == 249 ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'blog-page', 'Blog page setting' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'blog_top',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'name'        => 'blog_top_post',
					'label'       => 'Post on top',
					'type'        => 'relation',
                    'post-type'   => array('post'), // Типы записей.
	                'limit'       => 1,
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
add_filter( 'smart-cf-register-fields', 'blog_page_fields', 10, 5 );
