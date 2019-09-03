<?php

/**
 * Test
 *
 * @package UBC Block Styles
 */

function enqueue_block_editor_assets__accordion_blocks_script() {
	wp_enqueue_script(
		'ubc-accordion-blocks-styles-script',
		plugins_url( 'js/block.js', __FILE__ ),
		array( 'wp-blocks' )
	);
}
add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets__accordion_blocks_script' );


function enqueue_block_assets__accordion_block_style() {
	wp_enqueue_style(
		'ubc-accordion-blocks-styles-css',
		plugins_url( 'css/style.css', __FILE__ )
	);
}
add_action( 'enqueue_block_assets', 'enqueue_block_assets__accordion_block_style' );
