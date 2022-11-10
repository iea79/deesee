<?php
// Регистрация метабоксов и произвольных полей.
function reviews_fields( $settings, $type, $id, $meta_type, $types ) {
	// Отображаем поля только на странице редактирования Записи
	// var_dump($type);
	// echo get_page_template_slug( $id );
	if ( $type === 'reviews' && get_page_template_slug( $id ) == '' ) {

		// Создаем блок настроек (метабокс).
		$Section = SCF::add_setting( 'review-1', 'Review user data' );

		// Добавляем в метабокс произвольные поля.
		$Section->add_group(
			// ID группы полей.
			'review-user',
			// Повторяемая группа полей? Да - true, Нет - false.
			false,
			// Массив полей.
			array(
				array(
					'name'        => 'review__video',
					'label'       => 'Yuoutube video ID',
					'type'        => 'text',
				),
				array(
					'name'        => 'review__video_file',
					'label'       => 'Video review file',
					'type'        => 'file',
				),
				array(
					'name'        => 'review__video_prev',
					'label'       => 'Video review thumbnails',
					'type'        => 'image',
					'size'        => 'medium',
					'notes'       => 'Can be used instead of a featured image without video'
				),
				// array(
				// 	'name'        => 'review__video_prev_vertical',
				// 	'label'       => 'Video review thumbnails vertical',
				// 	'type'        => 'image',
				// 	'size'        => 'medium',
				// ),
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
add_filter( 'smart-cf-register-fields', 'reviews_fields', 10, 5 );
