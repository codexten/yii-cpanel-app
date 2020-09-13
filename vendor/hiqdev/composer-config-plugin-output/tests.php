<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'id' => 'hidev-nginx-tests',
  'basePath' => $baseDir . '/vendor/hiqdev/hidev-nginx/src',
  'components' => 
  array (
    'binaries' => 
    array (
      'class' => 'hidev\\components\\Binaries',
    ),
  ),
);
