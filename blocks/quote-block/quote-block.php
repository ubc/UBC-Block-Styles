<?php

/**
 * Register and Enqueue the JavaScript which allows us to add the
 * block styles for the Blockquote block.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_editor_assets__quote_block_script() {
	wp_enqueue_script(
		'ubc-quote-block-script',
		plugins_url( 'js/block.js', __FILE__ ),
		array( 'wp-blocks' )
	);
}//end enqueue_block_editor_assets__quote_block_script()

add_action( 'enqueue_block_editor_assets', 'enqueue_block_editor_assets__quote_block_script' );

/**
 * Register and Enqueue the CSS for the different quote styles.
 *
 * @return void
 *
 * @package UBC Block Styles
 */
function enqueue_block_assets__quote_block_style() {
	wp_enqueue_style(
		'ubc-quote-block-css',
		plugins_url( 'css/style.css', __FILE__ )
	);
}//end enqueue_block_assets__quote_block_style()

add_action( 'enqueue_block_assets', 'enqueue_block_assets__quote_block_style' );
