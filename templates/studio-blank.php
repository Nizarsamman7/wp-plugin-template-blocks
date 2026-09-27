<?php
/**
 * Blank canvas. Select "Studio — Blank (no theme header/footer)" on the page.
 *
 * @package StudioBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'studio-blank-template' ); ?>>
<?php wp_body_open(); ?>
<main class="studio-blank-main">
	<?php
	while ( have_posts() ) {
		the_post();
		the_content();
	}
	?>
</main>
<?php wp_footer(); ?>
</body>
</html>
