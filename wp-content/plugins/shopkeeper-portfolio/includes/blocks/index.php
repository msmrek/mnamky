<?php

//==============================================================================
//	Main Editor Styles
//==============================================================================
add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_style(
		'getbowtied-sk-blocks-editor-styles',
		plugins_url( 'assets/css/editor'.SK_PORTFOLIO_ENQUEUE_SUFFIX.'.css', __FILE__ ),
		array( 'wp-edit-blocks' )
	);
});

//==============================================================================
//	Main JS
//==============================================================================
add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_script(
	'getbowtied-sk-blocks-editor-scripts',
		plugins_url( 'assets/js/main'.SK_PORTFOLIO_ENQUEUE_SUFFIX.'.js', __FILE__ ),
		array( 'wp-blocks', 'jquery' )
	);
});

//==============================================================================
//	Blocks
//==============================================================================

include_once( dirname(__FILE__) . '/portfolio/block.php' );
