<?php

/**
 * Register and Enqueue the JavaScript which allows us to add the
 * block styles for the Heading block.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_editor_assets__heading_block_script() {
	wp_enqueue_script(
		'ubc-heading-block-script',
		plugins_url( 'js/block.js', __FILE__ ),
		array( 'wp-blocks' )
	);
}//end enqueue_block_editor_assets__heading_block_script()

add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets__heading_block_script' );

/**
 * Register and Enqueue the CSS for the different heading styles.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_assets__heading_block_style() {
	wp_enqueue_style(
		'ubc-heading-block-css',
		plugins_url( 'css/style.css', __FILE__ )
	);
}//end enqueue_block_assets__heading_block_style()

add_action( 'enqueue_block_assets', 'enqueue_block_assets__heading_block_style' );
