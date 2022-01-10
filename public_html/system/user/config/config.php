<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['site_license_key'] = '';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '6.1.6';
$config['encryption_key'] = '0b6aff138ed870715606f34b6a21f3a0190a3f36';
$config['session_crypt_key'] = '1b49026f6d426c38b5b3bf5d6c7b1eb3077353bd';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'database',
		'database' => 'blog_db_name',
		'username' => 'root',
		'password' => 'blog_db_password',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';

// EOF