<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  0 => 'codexten\\yii\\migrations',
  1 => 'codexten\\yii\\user\\migrations',
  2 => 'codexten\\yii\\user\\settings\\migrations',
  3 => 'codexten\\yii\\modules\\auth\\migrations',
  4 => 'codexten\\yii\\mailqueue\\migrations',
  5 => 'codexten\\yii\\cron\\migrations',
  6 => 'codexten\\yii\\process\\migrations',
);
