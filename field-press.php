<?php
/**
 * Plugin Name: FieldPress
 * Description: Cross-Link project
 * Requires at least: 6.1
 * Requires PHP: 8.1
 * Version: 1.0.0
 * Author: Cross-Link
 * Text Domain: field-press
 */

define( 'FIELDPRESS_PLUGIN_FILE', __FILE__ );

require 'vendor/autoload.php';

function field_press_init() {
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
}

field_press_init();
