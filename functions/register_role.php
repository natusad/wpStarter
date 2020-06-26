<?php

//Создание новой роли при активации темы и удаление роли при деактивации темы
add_action( 'switch_theme', 'deactivate_testTheme' );
function deactivate_testTheme() {
	remove_role( 'teacher' );
}

// Добавляем роль при активации нашей темы
add_action( 'after_switch_theme', 'activate_testTheme' );
function activate_testTheme() {
	add_role( 'teacher', 'Преподаватель',
		[
			'read'         => true,  // true разрешает эту возможность
			'edit_posts'   => false,  // true разрешает редактировать посты
			'upload_files' => false,  // может загружать файлы
		]
	);
}

