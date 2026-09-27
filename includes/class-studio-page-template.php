<?php
/**
 * Blank page template so a block can own the whole viewport.
 *
 * @package StudioBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers Studio — Blank in the page template dropdown.
 */
class Studio_Page_Template {

	const TEMPLATE_SLUG  = 'studio-blank.php';
	const TEMPLATE_LABEL = 'Studio — Blank (no theme header/footer)';

	/**
	 * Bootstrap hooks.
	 */
	public static function init() {
		add_filter( 'theme_page_templates', array( __CLASS__, 'register_template_label' ) );
		add_filter( 'template_include', array( __CLASS__, 'load_template' ) );
	}

	/**
	 * @param array $templates Existing templates.
	 * @return array
	 */
	public static function register_template_label( $templates ) {
		$templates[ self::TEMPLATE_SLUG ] = self::TEMPLATE_LABEL;
		return $templates;
	}

	/**
	 * @param string $template Current template path.
	 * @return string
	 */
	public static function load_template( $template ) {
		if ( ! is_page() ) {
			return $template;
		}

		$slug = get_page_template_slug( get_queried_object_id() );
		if ( self::TEMPLATE_SLUG !== $slug ) {
			return $template;
		}

		$file = STUDIO_BLOCKS_PATH . 'templates/studio-blank.php';
		return file_exists( $file ) ? $file : $template;
	}
}
