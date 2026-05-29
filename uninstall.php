<?php
/**
 * Uninstall DemoDeck: remove plugin options.
 *
 * Demo Site posts, their thumbnails, the "Example Sites" page, and category
 * terms are intentionally left in place. They are user content, not plugin
 * scaffolding, so deleting them on uninstall would be destructive.
 *
 * @package DemoDeck
 */

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

$demodeck_options = array(
	'demodeck_disable_seo',
	'demodeck_topbar_bg',
	'demodeck_topbar_text',
	'demodeck_button_bg',
	'demodeck_button_text',
	'demodeck_data_migrated',
);

foreach ( $demodeck_options as $demodeck_option ) {
	delete_option( $demodeck_option );
}
