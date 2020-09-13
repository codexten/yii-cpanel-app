<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'components' => 
  array (
    'settings' => 
    array (
      'class' => 'codexten\\yii\\settings\\components\\Settings',
    ),
    'adminSettings' => 
    array (
      'class' => 'codexten\\yii\\admin\\settings\\components\\AdminSettings',
    ),
  ),
  'modules' => 
  array (
    'settings' => 
    array (
      'class' => 'codexten\\yii\\admin\\settings\\SettingsModule',
      'sections' => 
      array (
        'auth' => 
        array (
          'modelClass' => 'codexten\\yii\\modules\\auth\\admin\\AuthModuleSettings',
          'label' => 'Auth Module',
          'icon' => 'key',
        ),
      ),
    ),
  ),
);
