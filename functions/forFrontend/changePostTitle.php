<?php
global $wpdb;
$titlePageChange = $wpdb->query( "UPDATE $wpdb->posts SET  post_title='Главная' WHERE ID=3" );
$titlePage       = $wpdb->get_results( "SELECT post_title FROM wp_posts WHERE ID=3 " );

