<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'components' => 
  array (
    'view' => 
    array (
      'theme' => 
      array (
        'pathMap' => 
        array (
          '@app/views' => 
          array (
            0 => '@codexten/yii/bootstrap3/views',
          ),
          '@app/widgets/views' => 
          array (
            0 => '@codexten/yii/bootstrap3/widgets/views',
          ),
        ),
      ),
    ),
  ),
  'container' => 
  array (
    'definitions' => 
    array (
      'yii\\grid\\GridView' => 
      array (
        'class' => 'yii\\grid\\GridView',
        'options' => 
        array (
          'class' => 'grid-view table-responsive',
        ),
      ),
    ),
  ),
);
