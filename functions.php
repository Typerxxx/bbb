<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('style.css', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('icon', get_template_directory_uri() . '/assets/images/fevicon.png');
	wp_enqueue_style('scroll', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('tweaks', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style('screen', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );


    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('jquery-3', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('plugin', get_template_directory_uri() . '/assets/js/plugin.js', array('jquery'), 'null', true);
    wp_enqueue_script('mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 'null', true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), 'null', true);
    wp_enqueue_script('fancybox', 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js');



}


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');



// <!-- Javascript files-->
// <script src="js/jquery.min.js"></script>
// <script src="js/popper.min.js"></script>
// <script src="js/bootstrap.bundle.min.js"></script>
// <script src="js/jquery-3.0.0.min.js"></script>
// <script src="js/plugin.js"></script>
// <!-- sidebar -->
// <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
// <script src="js/custom.js"></script>
// <!-- javascript --> 
// <script src="js/owl.carousel.js"></script>
// <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 


// <!-- bootstrap css -->
// <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
// <!-- style css -->
// <link rel="stylesheet" type="text/css" href="css/style.css">
// <!-- Responsive-->
// <link rel="stylesheet" href="css/responsive.css">
// <!-- fevicon -->
// <link rel="icon" href="images/fevicon.png" type="image/gif" />
// <!-- Scrollbar Custom CSS -->
// <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
// <!-- Tweaks for older IEs-->
// <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
// <!-- owl stylesheets --> 
// <link rel="stylesheet" href="css/owl.carousel.min.css">
// <link rel="stylesheet" href="css/owl.theme.default.min.css">
// <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

?>