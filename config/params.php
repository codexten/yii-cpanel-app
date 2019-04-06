<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:38 PM
 */

return [
    //app
    'app.env' => @$_ENV['CP_ENV'],
    'app.admin.url' => @$_ENV['CP_ADMIN_URL'],
    'app.storage.url' => @$_ENV['CP_STORAGE_URL'],

    //bootswatch
    'bootswatch.theme' => 'cosmo',

    'debug.enabled' => $_ENV['CP_DEBUG'],
    'debug.allowedIps' => $_ENV['CP_DEBUG_ALLOWED_IPS'],
    'debug.historySize' => 100,

    //db
    'db.dsn' => $_ENV['CP_DB_DSN'],
    'db.username' => $_ENV['CP_DB_USERNAME'],
    'db.password' => $_ENV['CP_DB_PASSWORD'],

    'cookieValidationKey' => $_ENV['CP_COOKIE_VALIDATION_KEY'],
];