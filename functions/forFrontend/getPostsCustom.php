<?php
function getPostsCustom( $num, $type ) {

	// параметры по умолчанию для получения постов
	$posts = get_posts( [
		'numberposts'   => $num,
		'post_type'     => $type,
		'orderby'       => 'title'
	] );

//$args= [ 'posts_per_page' => $num,
//         'post_type'     => $type,
//         'orderby'       => 'title'
//		];
//
//

		foreach ( $posts as $post ) {
			setup_postdata( $post ); ?>
			<div class="uk-panel uk-panel-box">
				<h2>
					<?php echo get_the_title( $post->ID ); ?>
				</h2>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
			<?php
		}





}