<?php
add_action( 'wp_enqueue_scripts', 'start_project_script' );

/**
 * Display errors
 */
if ( ! function_exists('debug_wpmail') ) {

	function debug_wpmail( $result = false ) {

		if ( $result ) {
			return;
		}

		global $ts_mail_errors, $phpmailer;

		if ( ! isset($ts_mail_errors) ) {
			$ts_mail_errors = array();
		}

		if ( isset($phpmailer) ) {
			$ts_mail_errors[] = $phpmailer->ErrorInfo;
		}

		// print_r('<pre>');
		return $ts_mail_errors;
		// print_r('</pre>');
	}
}

// add_action( 'wp_ajax_questiondatahtml', 'questiondatahtml_update' );
// add_action( 'wp_ajax_nopriv_questiondatahtml', 'questiondatahtml_update' );

// function questiondatahtml_update() {
//     if ( $_FILES ) {
//         require_once(ABSPATH . 'wp-admin' . '/includes/image.php');
//         require_once(ABSPATH . 'wp-admin' . '/includes/file.php');
//         require_once(ABSPATH . 'wp-admin' . '/includes/media.php');
//         $file_handler = 'updoc';
//         $attach_id = media_handle_upload($file_handler,$pid );
//     }
//
//     echo 'You are done!!';
//     wp_die();
// }

/**
 * Подключение файлов скрипта формы обратной связи
 *
 * @see https://wpruse.ru/?p=3224
 */
function start_project_script() {

    // Обрабтка полей формы
	wp_enqueue_script( 'jquery-form' );

	// Подключаем файл скрипта
	wp_enqueue_script(
		'start_project',
		get_stylesheet_directory_uri() . '/js/start-project.js',
		array(),
		_S_VERSION,
		true
	);

	// Задаем данные обьекта ajax
	wp_localize_script(
		'start_project',
		'start_project_object',
		array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'start_project-nonce' ),
		)
	);

};

add_action( 'wp_ajax_start_project_form', 'start_project_form' );
add_action( 'wp_ajax_nopriv_start_project_form', 'start_project_form' );
/**
 * Обработка скрипта
 *
 * @see https://wpruse.ru/?p=3224
 */
function start_project_form() {

	// Массив ошибок
	$err_message = array();

	// Проверяем nonce. Если проверкане прошла, то блокируем отправку
	if ( ! wp_verify_nonce( $_POST['nonce'], 'start_project-nonce' ) ) {
		wp_die( 'Submit brake' );
	}

	// Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
	// if ( false === $_POST['form_anticheck'] || ! empty( $_POST['form_submitted'] ) ) {
	// 	wp_die( 'Spam, spam, param-pam-pam!' );
	// }

	// // Проверяем полей имени, если пустое, то пишем сообщение в массив ошибок
	// if ( empty( $_POST['art_name'] ) || ! isset( $_POST['art_name'] ) ) {
	// 	$err_message['name'] = 'Пожалуйста, введите ваше имя.';
	// } else {
	// 	$art_name = sanitize_text_field( $_POST['art_name'] );
	// }

    // $genderAge = $_POST['ages'];
	$clientName = $_POST["first-name"] . ' ' . $_POST["last-name"];

	// Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
	if ( $err_message ) {

		wp_send_json_error( $err_message );

	} else {

		// Указываем адресата
        $subject = $_POST['subject'];
		// $email_to = 'busforward@gmail.com';
		$email_to = '';

		// Если адресат не указан, то берем данные из настроек сайта
		if ( ! $email_to ) {
			$email_to = get_option( 'admin_email' );
		}

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: DeesseMedia <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $email_to;

        $body = '<html><body>';
        $body .= '<p><b>Order from page - ' . $_POST['page_name'] . '</b></p>';
        $body .= '<p><b>Which website do you need?:</b> '. $_POST['step1'] .'</p>';
        $body .= '<p><b>Do you have a corporate identity?:</b> '. $_POST['uploaded'] .'</p>';
        $body .= '<p><b>What is your target audience?:</b> '. $_POST['ages'] .'</p>';
        $body .= '<p><b>Which style do you like?:</b> '. $_POST['step4'] .'</p>';
        $body .= '<p><b>What color palette do you like?:</b> '. $_POST['step5'] .'</p>';
        $body .= '<p><b>Which emotions should the website evoke?:</b> '. $_POST['emotions'] .'</p>';
        $body .= '<p><b>Who are your main competitors?:</b> '. $_POST['step7'] .'</p>';
        $body .= '<p><b>Comments & Wishes:</b> '. $_POST['step8'] .'</p>';
        $body .= '<p><b>Best desired launch date:</b> '. $_POST['step9'] .'</p>';
        $body .= '<p><b>Name:</b> '. $clientName .'</p>';
        $body .= '<p><b>Email:</b> '. $_POST['email'] .'</p>';
        $body .= '<p><b>Phone:</b> '. $_POST['phone'] .'</p>';
        $body .= '</body></html>';

		$res = wp_mail($email_to, $subject, $body, $headers);
		if ($res) {
			$message_success['body'] = $body;
			$message_success['name'] = $_POST["fname"] .' '. $_POST["lname"];
			$message_success['phone'] = $_POST['phone'];
			$message_success['email'] = $_POST['email'];
			wp_send_json_success( $message_success );
		} else {
			// $err_message['debug'] = debug_wpmail($res);
			wp_send_json_error( debug_wpmail($res) );
			// wp_send_json_error( $err_message );
		}

		// // Отправляем письмо
		// if (wp_mail( $email_to, $subject, $body, $headers )) {
		// 	// Отправляем сообщение об успешной отправке
		// 	// $message_success = 'Success';
		// } else {
		// 	wp_send_json_error( $err_message );
		// }

		// wp_mail( $email_to, $subject, $body, $headers );

	}

	// На всякий случай убиваем еще раз процесс ajax
	wp_die();

}


add_action( 'wp_ajax_file_upload', 'file_upload' );
add_action( 'wp_ajax_nopriv_file_upload', 'file_upload' );
function file_upload() {
	// check_ajax_referer( 'uplfile', 'nonce' ); // защита

	if( empty($_FILES) )
		wp_send_json_error( 'Файлов нет...' );

	$post_id = (int) $_POST['post_id'];

	// ограничим размер загружаемой картинки
	$sizedata = getimagesize( $_FILES['upfile']['tmp_name'] );
	$max_size = 2000;
	if( $sizedata[0]/*width*/ > $max_size || $sizedata[1]/*height*/ > $max_size )
		wp_send_json_error( __('Картинка не может быть больше чем '. $max_size .'px в ширину или высоту...','km') );

	// обрабатываем загрузку файла
	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';

	// фильтр допустимых типов файлов - разрешим только картинки
	add_filter( 'upload_mimes', function( $mimes ){
		return [
			'jpg|jpeg|jpe' => 'image/jpeg',
			'gif'          => 'image/gif',
			'png'          => 'image/png',
		];
	} );

	$uploaded_imgs = array();

	foreach( $_FILES as $file_id => $data ){
		$attach_id = media_handle_upload( $file_id, $post_id );

		// ошибка
		if( is_wp_error( $attach_id ) )
			$uploaded_imgs[] = 'Ошибка загрузки файла `'. $data['name'] .'`: '. $attach_id->get_error_message();
		else
			$uploaded_imgs[] = wp_get_attachment_url( $attach_id );
	}

	wp_send_json_success( $uploaded_imgs );
}
