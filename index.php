<?php get_header(); ?>
<main>

<?php
    require_once( get_template_directory() . '/functions/forFrontend/changePostTitle.php' );
    require_once( get_template_directory() . '/functions/forFrontend/getPostsCustom.php' );
    require_once( get_template_directory() . '/template/main.php' );//get template
?>

</main>
<?php get_footer(); ?>



