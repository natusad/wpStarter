<?php

add_action( 'add_meta_boxes', 'vebinars_add_custom_box' );
function vebinars_add_custom_box() {
	$screens = array( 'vebinars' );
	add_meta_box( 'vebinar_theme', 'Тема Вебинара', 'vebinar_theme_callback', $screens );
}

function vebinar_theme_callback( $post, $meta ) {
	$screens = $meta['args'];

	// Используем nonce для верификации
	wp_nonce_field( plugin_basename( __FILE__ ), 'theme_nonce' );

	// значение поля
	$value = get_post_meta( $post->ID, 'theme_meta_key', 1 );

	// Поля формы для введения данных
	echo '<label for="theme_field">' . __( "Ввведите тему", 'vebinar_theme' ) . '</label> ';
	echo '<input type="text" id="theme_field" name="theme_field" value="' . $value . '" size="25" />';

}

## Сохраняем данные, когда пост сохраняется
add_action( 'save_post_vebinars', 'theme_save_postdata' );
function theme_save_postdata( $post_id ) {

	// Убедимся что поле установлено.
	if ( ! isset( $_POST['theme_field'] ) ) {
		return;
	}

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['theme_nonce'], plugin_basename( __FILE__ ) ) ) {
		return;
	}

//	// если это автосохранение ничего не делаем
//	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
//		return;
//	}

	// проверяем права юзера
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Все ОК. Теперь, нужно найти и сохранить данные
	// Очищаем значение поля input.
	$theme_data = sanitize_text_field( $_POST['theme_field'] );


	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'theme_meta_key', $theme_data );
}
