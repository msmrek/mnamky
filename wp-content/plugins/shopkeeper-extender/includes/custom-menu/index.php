<?php

//Custom Menu
include_once( dirname( __FILE__ ) . '/class/class-sk-ext-navwalker-image.php' );
include_once( dirname( __FILE__ ) . '/class/class-sk-ext-navwalker-image-output.php' );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'sk-extender-custom-menu-styles', plugins_url( 'assets/css/custom-menu'.SK_EXT_ENQUEUE_SUFFIX.'.css', __FILE__ ), NULL );
    wp_enqueue_script( 'sk-extender-custom-menu-scripts', plugins_url( 'assets/js/custom-menu'.SK_EXT_ENQUEUE_SUFFIX.'.js', __FILE__ ), array('jquery'), false, false );
    wp_enqueue_script( 'tweenmax', plugins_url( 'assets/js/TweenMax.min.js', __FILE__ ), array('jquery'), false, true );
});

?>
