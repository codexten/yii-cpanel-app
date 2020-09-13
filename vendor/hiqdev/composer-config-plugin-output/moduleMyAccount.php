<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'aliases' => 
  array (
    '@moduleMyAccount' => '@codexten/yii/modules/my/account',
  ),
  'modules' => 
  array (
    'myaccount' => 
    array (
      'class' => 'yii\\base\\Module',
      'controllerNamespace' => 'codexten\\yii\\modules\\my\\account\\controllers',
    ),
  ),
);
