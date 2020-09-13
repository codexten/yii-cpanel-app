<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'app.id' => 'webApp',
  'app.name' => 'webApp',
  'app.language' => 'en',
  'app.env' => 'dev',
  'db.dsn' => 'mysql:host=db;port=3306;dbname=cpanel',
  'db.username' => 'admin',
  'db.password' => 'password',
  'cookieValidationKey' => '>@5mcjpM/ykdasdasd)WIvtxBV~H7um\'UD&2LoCo/4JO>.N!2\'s&XqS?y*$oi',
  'favicon' => '/favicon.ico',
  'app.admin.url' => 'http://admin.cpanel.yii',
  'db.emptyDb' => 'empty-db.sql',
  'db.initDb' => 'init-db.sql',
  'db.repo' => '',
  'app.storage.url' => 'http://s.cpanel.yii',
  'mailer' => 'gmail',
  'gmail.username' => '',
  'gmail.password' => '',
  'debug.enabled' => 'true',
  'debug.allowedIps' => '*',
  'debug.historySize' => 100,
  'bootswatch.theme' => 'cosmo',
);
