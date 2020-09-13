<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'gmail' => 
  array (
    'class' => '\\codexten\\yii\\mailqueue\\MailQueue',
    'useFileTransport' => false,
    'htmlLayout' => false,
    'transport' => 
    array (
      'class' => 'Swift_SmtpTransport',
      'host' => 'smtp.gmail.com',
      'username' => '',
      'password' => '',
      'port' => 587,
      'encryption' => 'tls',
    ),
  ),
);
