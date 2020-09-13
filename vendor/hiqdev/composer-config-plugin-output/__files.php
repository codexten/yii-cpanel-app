<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

return array (
  'dotenv' => 
  array (
    0 => $baseDir . '/.env',
  ),
  'aliases' => 
  array (
  ),
  'defines' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/defines.php',
  ),
  'params' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/params.php',
    1 => $baseDir . '/vendor/codexten/yii-web/src/config/params.php',
    2 => $baseDir . '/vendor/codexten/app-admin-dev/config/params.php',
    3 => $baseDir . '/vendor/codexten/yii-app-console/src/config/params.php',
    4 => $baseDir . '/vendor/codexten/yii-app-storage/config/params.php',
    5 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/params.php',
    6 => $baseDir . '/vendor/codexten/yii-dev/src/config/params.php',
    7 => $baseDir . '/config/params.php',
  ),
  'required' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/required.php',
  ),
  'i18n' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/i18n.php',
    1 => $baseDir . '/vendor/codexten/yii-module-auth/config/i18n.php',
  ),
  'mailer' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/mailer.php',
    1 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/mailer.php',
  ),
  'base' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
  ),
  'core' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    3 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    5 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    6 => $baseDir . '/config/core.php',
  ),
  'migrationNamespaces' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/migrationNamespaces.php',
    1 => $baseDir . '/vendor/codexten/yii-user/src/config/migrationNamespaces.php',
    2 => $baseDir . '/vendor/codexten/yii-user-settings/config/migrationNamespaces.php',
    3 => $baseDir . '/vendor/codexten/yii-module-auth/config/migrationNamespaces.php',
    4 => $baseDir . '/vendor/codexten/yii-app-console/src/config/migrationNamespaces.php',
    5 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/migrationNamespaces.php',
    6 => $baseDir . '/vendor/codexten/yii-cron/config/migrationNamespaces.php',
    7 => $baseDir . '/vendor/codexten/yii-process/config/migrationNamespaces.php',
  ),
  'console' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/yii-core/src/config/console.php',
    3 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-app-admin/src/config/console.php',
    5 => $baseDir . '/vendor/codexten/yii-app-console/src/config/console.php',
    6 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    7 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    8 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/console.php',
    9 => $baseDir . '/vendor/codexten/yii-cron/config/console.php',
    10 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    11 => $baseDir . '/config/core.php',
    12 => $baseDir . '/config/console.php',
  ),
  'grid' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/grid/config/grid.php',
  ),
  'web' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/yii-web/src/config/web.php',
    3 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    5 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    6 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    7 => $baseDir . '/config/core.php',
  ),
  'hidev' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/app-admin-dev/config/hidev.php',
    3 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-app-console/src/config/hidev.php',
    5 => $baseDir . '/vendor/codexten/yii-app-storage/src/hidev/config.php',
    6 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    7 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    8 => $baseDir . '/vendor/codexten/yii-gii/config/hidev.php',
    9 => $baseDir . '/vendor/hiqdev/hidev/src/config/hidev.php',
    10 => $baseDir . '/vendor/hiqdev/hidev-nginx/src/config/hidev.php',
    11 => $baseDir . '/vendor/codexten/php-hosts/src/config/hosts.php',
    12 => $baseDir . '/vendor/codexten/nginx/src/config/nginx.php',
    13 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    14 => $baseDir . '/vendor/codexten/yii-dev/src/config/hidev.php',
    15 => $baseDir . '/config/core.php',
  ),
  'settings' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-settings/config/settings.php',
  ),
  'userSettings' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-user-settings/config/userSettings.php',
  ),
  'adminSettings' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-settings/config/settings.php',
    1 => $baseDir . '/vendor/codexten/yii-admin-settings/config/adminSettings.php',
    2 => $baseDir . '/vendor/codexten/yii-module-auth/config/adminSettings.php',
  ),
  'admin' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/yii-web/src/config/web.php',
    3 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-settings/config/settings.php',
    5 => $baseDir . '/vendor/codexten/yii-user-settings/config/userSettings.php',
    6 => $baseDir . '/vendor/codexten/yii-admin-settings/config/adminSettings.php',
    7 => $baseDir . '/vendor/codexten/yii-admin-settings/config/admin.php',
    8 => $baseDir . '/vendor/codexten/yii-module-auth/config/adminSettings.php',
    9 => $baseDir . '/vendor/codexten/yii-module-auth/config/moduleAuth.php',
    10 => $baseDir . '/vendor/codexten/yii-module-my-account/config/moduleMyAccount.php',
    11 => $baseDir . '/vendor/codexten/yii-app-admin/src/config/admin.php',
    12 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    13 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    14 => $baseDir . '/vendor/codexten/yii-bootstrap3/config/bootstrap3.php',
    15 => $baseDir . '/vendor/codexten/yii-adminlte2/config/adminlte2.php',
    16 => $baseDir . '/vendor/codexten/yii-cron/config/cron.php',
    17 => $baseDir . '/vendor/codexten/yii-process/config/moduleProcess.php',
    18 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    19 => $baseDir . '/config/core.php',
    20 => $baseDir . '/config/admin.php',
  ),
  'moduleAuth' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/yii-web/src/config/web.php',
    3 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-user-settings/config/userSettings.php',
    5 => $baseDir . '/vendor/codexten/yii-module-auth/config/moduleAuth.php',
    6 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    7 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    8 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    9 => $baseDir . '/config/core.php',
  ),
  'moduleMyAccount' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-module-my-account/config/moduleMyAccount.php',
  ),
  'storage' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    3 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-app-storage/config/storage.php',
    5 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    6 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    7 => $baseDir . '/config/core.php',
  ),
  'bootstrap3' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-bootstrap3/config/bootstrap3.php',
  ),
  'adminlte2' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-core/src/config/base.php',
    1 => $baseDir . '/vendor/codexten/yii-core/src/config/core.php',
    2 => $baseDir . '/vendor/codexten/yii-web/src/config/web.php',
    3 => $baseDir . '/vendor/codexten/app-admin-dev/config/core.php',
    4 => $baseDir . '/vendor/codexten/yii-app-storage/config/core.php',
    5 => $baseDir . '/vendor/codexten/yii-mailqueue/src/config/core.php',
    6 => $baseDir . '/vendor/codexten/yii-bootstrap3/config/bootstrap3.php',
    7 => $baseDir . '/vendor/codexten/yii-adminlte2/config/adminlte2.php',
    8 => $baseDir . '/vendor/codexten/yii-dev/src/config/core.php',
    9 => $baseDir . '/config/core.php',
  ),
  'cron' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-cron/config/cron.php',
  ),
  'moduleProcess' => 
  array (
    0 => $baseDir . '/vendor/codexten/yii-process/config/moduleProcess.php',
  ),
  'tests' => 
  array (
    0 => $baseDir . '/vendor/hiqdev/hidev/src/config/tests.php',
    1 => $baseDir . '/vendor/hiqdev/hidev-nginx/src/config/tests.php',
  ),
  'hosts' => 
  array (
    0 => $baseDir . '/vendor/codexten/php-hosts/src/config/hosts.php',
  ),
  'nginx' => 
  array (
    0 => $baseDir . '/vendor/codexten/php-hosts/src/config/hosts.php',
    1 => $baseDir . '/vendor/codexten/nginx/src/config/nginx.php',
  ),
);
