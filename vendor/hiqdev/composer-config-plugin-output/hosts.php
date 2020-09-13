<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'components' => 
  array (
    'hosts' => 
    array (
      'class' => 'codexten\\hosts\\Hosts',
      'hostsFile' => '/host-machine/hosts',
    ),
  ),
);
