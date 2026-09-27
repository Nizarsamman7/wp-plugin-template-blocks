<?php
/**
 * Plugin Name:       Studio Blocks
 * Description:       Gutenberg starter with a blank page template and React-mounted hero and contact blocks.
 * Version:           1.0.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Studio
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       studio-blocks
 *
 * @package StudioBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'STUDIO_BLOCKS_VERSION', '1.0.0' );
define( 'STUDIO_BLOCKS_PATH', plugin_dir_path( __FILE__ ) );
define( 'STUDIO_BLOCKS_URL', plugin_dir_url( __FILE__ ) );

require_once STUDIO_BLOCKS_PATH . 'includes/class-studio-page-template.php';

Studio_Page_Template::init();

/**
 * Register blocks from the wp-scripts manifest. Skips quietly until the first build.
 */
function studio_blocks_block_init() {
	$manifest = __DIR__ . '/build/blocks-manifest.php';
	if ( ! file_exists( $manifest ) ) {
		return;
	}

	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', $manifest );
		return;
	}

	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', $manifest );
	}

	$manifest_data = require $manifest;
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
}
add_action( 'init', 'studio_blocks_block_init' );

/**
 * Remind an admin to compile blocks before the editor can insert them.
 */
function studio_blocks_missing_build_notice() {
	if ( ! current_user_can( 'activate_plugins' ) || file_exists( __DIR__ . '/build/blocks-manifest.php' ) ) {
		return;
	}
	echo '<div class="notice notice-warning"><p>' . esc_html__( 'Studio Blocks is active, but build/ is missing. Run npm install and npm run build inside the plugin folder.', 'studio-blocks' ) . '</p></div>';
}
add_action( 'admin_notices', 'studio_blocks_missing_build_notice' );

/**
 * Pass the plugin URL to front-end scripts.
 */
function studio_blocks_localize_scripts() {
	wp_add_inline_script(
		'wp-element',
		sprintf(
			'window.studioBlocksConfig = window.studioBlocksConfig || {}; window.studioBlocksConfig.pluginUrl = %s;',
			wp_json_encode( STUDIO_BLOCKS_URL )
		),
		'before'
	);
}
add_action( 'wp_enqueue_scripts', 'studio_blocks_localize_scripts' );
add_action( 'admin_enqueue_scripts', 'studio_blocks_localize_scripts' );
