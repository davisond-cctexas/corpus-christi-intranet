<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

$config_directories[CONFIG_SYNC_DIRECTORY] = 'sites/default/config/sync';
$databases['default']['default'] = array (
  'database' => 'cctx_intranet_db',
  'username' => 'root',
  'password' => 'velu12',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'vB87jupmX0BkzW_MxuNLEosLWNLKzcfX4QWIsJ82TeekXcCi9NDigAmEUA2N3UNK2ixG99S3qw';
$settings['install_profile'] = 'standard';
