<?php

// хук для регистрации taxonomy
add_action( 'init', 'create_custom_taxonomies' );
function create_custom_taxonomies() {


	register_taxonomy( 'taxVebs', [ 'vebinars' ], [
		'label'        => '',
		// определяется параметром $labels->name
		'labels'       => [
			'name'              => 'Категории вебинаров',
			'singular_name'     => 'Категория вебинаров',
			'search_items'      => 'Поиск в категории',
			'all_items'         => 'Все из Категорий Вебинаров',
			'view_item '        => 'Просмотреть Категории',
			'parent_item'       => 'Родитеская Категория',
			'parent_item_colon' => 'Родителская Категория:',
			'edit_item'         => 'Редактировать Категорию',
			'update_item'       => 'обновить Категорию',
			'add_new_item'      => 'Добавить Категорию',
			'new_item_name'     => 'Новая Категория',
			'menu_name'         => 'Категории',
		],
		'description'  => 'Категории вебинаров',
		// описание таксономии
		'public'       => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical' => true,

		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       =>  `post_categories_meta_box`,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => false,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}
