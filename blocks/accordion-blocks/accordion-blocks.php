<?php

/**
 * Register and Enqueue the JavaScript which allows us to add the
 * block styles for the accordion block.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_editor_assets__accordion_blocks_script() {
	wp_enqueue_script(
		'ubc-accordion-blocks-styles-script',
		plugins_url( 'js/block.js', __FILE__ ),
		array( 'wp-blocks' )
	);
}//end enqueue_block_editor_assets__accordion_blocks_script()

add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets__accordion_blocks_script' );

/**
 * Register and Enqueue the CSS for the different accordion block styles.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_assets__accordion_block_style() {
	wp_enqueue_style(
		'ubc-accordion-blocks-styles-css',
		plugins_url( 'css/style.css', __FILE__ )
	);
}//end enqueue_block_assets__accordion_block_style()

add_action( 'enqueue_block_assets', 'enqueue_block_assets__accordion_block_style' );
