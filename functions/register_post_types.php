<?php

// хук для регистрации post
add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'vebinars', [
		'label'         => 'vebinars',
		'labels'        => [
			'name'               => 'vebinars', // основное название для типа записи
			'singular_name'      => 'Вебинар', // название для одной записи этого типа
			'add_new'            => 'Добавить Вебинар', // для добавления новой записи
			'add_new_item'       => 'Добавление Вебинара', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Вебинара', // для редактирования типа записи
			'new_item'           => 'Новый Вебинар', // текст новой записи
			'view_item'          => 'Смотреть Вебинар', // для просмотра записи этого типа.
			'search_items'       => 'Искать Вебинар', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Вебинары!', // название меню
		],
		'description'   => 'новый тип',
		'public'        => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'  => true,
		//null,
		// показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'  => null,
		// добавить в REST API
		'rest_base'     => null,
		// $post_type.
		'menu_position' => null,
		'menu_icon'     => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'  => null,
		'supports'      => [ 'title', 'editor', 'custom-fields' ],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'    => [ "custom Vebs" ],
		'has_archive'   => null,
		'rewrite'       => null,
		'query_var'     => true,
	] );
}
