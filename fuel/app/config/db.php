<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => Fuel::$env,
	'development' => array(
		'type' => 'mysql',
		'connection' => array(
			'hostname' => '127.0.0.1',
			'database' => 'fuel_blog',
			'username' => 'root',
			'password' => 'admin',
			'persistent' => false,
		),
	'table_prefix' => '',
	'charset' => 'utf8',
	'caching' => false,
	'profiling' => false,
	)
);
