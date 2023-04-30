<?php
/**
 * Plugin Name: FieldPress
 * Description: Cross-Link project
 * Requires at least: 6.1
 * Requires PHP: 8.1
 * Version: 1.0.1
 * Author: Cross-Link
 * Text Domain: field-press
 */

define( 'FIELDPRESS_PLUGIN_FILE', __FILE__ );

require 'vendor/autoload.php';

// Get the object to interact with FieldPress
function fieldpress() {
	return field_press_init();
}

function field_press_init() {
	static $wputm;

	if ( ! empty( $wputm ) ) {
		return $wputm;
	}

	$wputm = new \WpUtm\Main(
		array(
			'definitions' => array(
				\WpUtm\Interfaces\IDynamicCss::class => \DI\create( \FieldPress\DynamicCss::class ),
				\WpUtm\Interfaces\IDynamicJs::class  => \DI\create( \FieldPress\DynamicJs::class ),
				'main_file'                          => FIELDPRESS_PLUGIN_FILE,
				'type'                               => 'plugin',
				'prefix'                             => 'field-press',
			),
		)
	);

	$wputm->get( \FieldPress\Main::class )->init();

	return $wputm;
}

field_press_init();
