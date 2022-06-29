<?php
// Регистрация метабоксов и произвольных полей.
function posts_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	// echo get_page_template_slug( $id );
	if ( $type === 'post' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'post-thumbs', 'Video thumbnail' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'post_video',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'name'        => 'post__video_file',
					'label'       => 'Video thumbnail file',
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
add_filter( 'smart-cf-register-fields', 'posts_fields', 10, 5 );
