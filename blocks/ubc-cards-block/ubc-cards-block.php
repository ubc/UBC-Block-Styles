<?php

/**
 * Register and Enqueue the JavaScript which allows us to add the
 * block styles for the UBC Cards Block block.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_editor_assets__ubc_cards_blocks_script() {
	wp_enqueue_script(
		'ubc-cards-blocks-styles-script',
		plugins_url( 'js/block.js', __FILE__ ),
		array( 'wp-blocks' )
	);
}//end enqueue_block_editor_assets__ubc_cards_blocks_script()

add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets__ubc_cards_blocks_script' );

/**
 * Register and Enqueue the CSS for the different UBC Cards block styles.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_assets__ubc_cards_block_style() {
	wp_enqueue_style(
		'ubc-cards-blocks-styles-css',
		plugins_url( 'css/style.css', __FILE__ )
	);
}//end enqueue_block_assets__ubc_cards_block_style()

add_action( 'enqueue_block_assets', 'enqueue_block_assets__ubc_cards_block_style' );
