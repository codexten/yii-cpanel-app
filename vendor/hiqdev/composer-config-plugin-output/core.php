<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

$_ENV = array_merge((array) require __DIR__ . '/dotenv.php', (array) $_ENV);

require_once $baseDir . '/vendor/codexten/yii-core/src/config/defines.php';

return array (
  'id' => 'webApp',
  'basePath' => $baseDir . '/vendor/codexten/yii-core/src',
  'aliases' => 
  array (
    '@yii/composer' => $baseDir . '/vendor/yiisoft/yii2-composer',
    '@HTMLPurifier' => $baseDir . '/vendor/ezyang/htmlpurifier/library/HTMLPurifier',
    '@cebe/markdown' => $baseDir . '/vendor/cebe/markdown',
    '@yii' => $baseDir . '/vendor/yiisoft/yii2',
    '@Dotenv' => $baseDir . '/vendor/vlucas/phpdotenv/src',
    '@kartik/base' => $baseDir . '/vendor/kartik-v/yii2-krajee-base/src',
    '@kartik/select2' => $baseDir . '/vendor/kartik-v/yii2-widget-select2/src',
    '@codexten/yii/widgets' => $baseDir . '/vendor/codexten/yii-widget-select2/src/widgets',
    '@codexten/yii' => $baseDir . '/vendor/codexten/yii-core/src',
    '@hiqdev/php/collection' => $baseDir . '/vendor/hiqdev/php-collection/src',
    '@hiqdev/yii2/collection' => $baseDir . '/vendor/hiqdev/yii2-collection/src',
    '@hiqdev/yii2/menus' => $baseDir . '/vendor/hiqdev/yii2-menus/src',
    '@Kir/StringUtils/Matching/Wildcards' => $baseDir . '/vendor/rkr/wildcards/src',
    '@kartik/dialog' => $baseDir . '/vendor/kartik-v/yii2-dialog/src',
    '@kartik/grid' => $baseDir . '/vendor/kartik-v/yii2-grid/src',
    '@odaialali/yii2toastr' => $baseDir . '/vendor/odaialali/yii2-toastr',
    '@codexten/yii/web' => $baseDir . '/vendor/codexten/yii-web/src',
    '@codexten/admin/dev' => $baseDir . '/vendor/codexten/app-admin-dev/src',
    '@codexten/yii/user' => $baseDir . '/vendor/codexten/yii-user/src',
    '@codexten/yii/models' => $baseDir . '/vendor/codexten/yii-user/src/models',
    '@codexten/yii/settings' => $baseDir . '/vendor/codexten/yii-settings/src',
    '@codexten/yii/user/settings' => $baseDir . '/vendor/codexten/yii-user-settings/src',
    '@codexten/yii/user/settings/migrations' => $baseDir . '/vendor/codexten/yii-user-settings/src/migrations',
    '@codexten/yii/admin/settings' => $baseDir . '/vendor/codexten/yii-admin-settings/src',
    '@codexten/yii/modules/auth' => $baseDir . '/vendor/codexten/yii-module-auth/src/modules/auth',
    '@codexten/yii/modules/my/account' => $baseDir . '/vendor/codexten/yii-module-my-account/src',
    '@codexten/yii/admin' => $baseDir . '/vendor/codexten/yii-app-admin/src',
    '@Ifsnop' => $baseDir . '/vendor/ifsnop/mysqldump-php/src/Ifsnop',
    '@codexten/yii/console' => $baseDir . '/vendor/codexten/yii-app-console/src',
    '@yii/jui' => $baseDir . '/vendor/yiisoft/yii2-jui/src',
    '@League/Flysystem' => $baseDir . '/vendor/league/flysystem/src',
    '@trntv/filekit' => $baseDir . '/vendor/trntv/yii2-file-kit/src',
    '@mihaildev/elfinder' => $baseDir . '/vendor/mihaildev/yii2-elfinder',
    '@Psr/Http/Message' => $baseDir . '/vendor/psr/http-message/src',
    '@GuzzleHttp/Psr7' => $baseDir . '/vendor/guzzlehttp/psr7/src',
    '@Intervention/Image' => $baseDir . '/vendor/intervention/image/src/Intervention/Image',
    '@League/Glide' => $baseDir . '/vendor/league/glide/src',
    '@Psr/SimpleCache' => $baseDir . '/vendor/psr/simple-cache/src',
    '@League/Uri' => $baseDir . '/vendor/league/uri-schemes/src',
    '@Symfony/Polyfill/Mbstring' => $baseDir . '/vendor/symfony/polyfill-mbstring',
    '@Symfony/Polyfill/Php70' => $baseDir . '/vendor/symfony/polyfill-php70',
    '@Symfony/Component/HttpFoundation' => $baseDir . '/vendor/symfony/http-foundation',
    '@trntv/glide' => $baseDir . '/vendor/trntv/yii2-glide/src',
    '@codexten/yii/storage' => $baseDir . '/vendor/codexten/yii-app-storage/src',
    '@yii/swiftmailer' => $baseDir . '/vendor/yiisoft/yii2-swiftmailer',
    '@Psr/Log' => $baseDir . '/vendor/psr/log/Psr/Log',
    '@Katzgrau/KLogger' => $baseDir . '/vendor/katzgrau/klogger/src',
    '@codexten/yii/mailqueue' => $baseDir . '/vendor/codexten/yii-mailqueue/src',
    '@yii/bootstrap' => $baseDir . '/vendor/yiisoft/yii2-bootstrap/src',
    '@codexten/yii/bootstrap3' => $baseDir . '/vendor/codexten/yii-bootstrap3/src',
    '@cebe/gravatar' => $baseDir . '/vendor/cebe/yii2-gravatar/cebe/gravatar',
    '@rmrevin/yii/fontawesome' => $baseDir . '/vendor/rmrevin/yii2-fontawesome',
    '@dmstr' => $baseDir . '/vendor/dmstr/yii2-adminlte-asset',
    '@codexten/yii/adminlte2' => $baseDir . '/vendor/codexten/yii-adminlte2/src',
    '@Cron' => $baseDir . '/vendor/mtdowling/cron-expression/src/Cron',
    '@mult1mate/crontab' => $baseDir . '/vendor/mult1mate/cron-manager/src',
    '@mult1mate/crontab_tests' => $baseDir . '/vendor/mult1mate/cron-manager/tests',
    '@codexten/yii/cron' => $baseDir . '/vendor/codexten/yii-cron/src',
    '@Cocur/BackgroundProcess' => $baseDir . '/vendor/cocur/background-process/src',
    '@codexten/yii/process' => $baseDir . '/vendor/codexten/yii-process/src',
    '@hiqdev/composer/config' => $baseDir . '/vendor/hiqdev/composer-config-plugin/src',
    '@Diff' => $baseDir . '/vendor/phpspec/php-diff/lib/Diff',
    '@yii/gii' => $baseDir . '/vendor/yiisoft/yii2-gii/src',
    '@codexten/yii/gii' => $baseDir . '/vendor/codexten/yii-gii/src',
    '@Opis/Closure' => $baseDir . '/vendor/opis/closure/src',
    '@yii/debug' => $baseDir . '/vendor/yiisoft/yii2-debug/src',
    '@Symfony/Polyfill/Ctype' => $baseDir . '/vendor/symfony/polyfill-ctype',
    '@Twig_' => $baseDir . '/vendor/twig/twig/lib/Twig_',
    '@Twig' => $baseDir . '/vendor/twig/twig/src',
    '@yii/twig' => $baseDir . '/vendor/yiisoft/yii2-twig/src',
    '@Symfony/Component/Yaml' => $baseDir . '/vendor/symfony/yaml',
    '@hidev' => $baseDir . '/vendor/hiqdev/hidev/src',
    '@hidev/tests' => $baseDir . '/vendor/hiqdev/hidev/tests',
    '@hidev/nginx' => $baseDir . '/vendor/hiqdev/hidev-nginx/src',
    '@codexten/hosts' => $baseDir . '/vendor/codexten/php-hosts/src',
    '@codexten/nginx' => $baseDir . '/vendor/codexten/nginx/src',
    '@Symfony/Component/Process' => $baseDir . '/vendor/symfony/process',
    '@Facebook/WebDriver' => $baseDir . '/vendor/facebook/webdriver/lib',
    '@GuzzleHttp/Promise' => $baseDir . '/vendor/guzzlehttp/promises/src',
    '@GuzzleHttp' => $baseDir . '/vendor/guzzlehttp/guzzle/src',
    '@Symfony/Component/Finder' => $baseDir . '/vendor/symfony/finder',
    '@Symfony/Polyfill/Php73' => $baseDir . '/vendor/symfony/polyfill-php73',
    '@Psr/Container' => $baseDir . '/vendor/psr/container/src',
    '@Symfony/Contracts/Service' => $baseDir . '/vendor/symfony/service-contracts',
    '@Symfony/Component/Console' => $baseDir . '/vendor/symfony/console',
    '@Symfony/Contracts/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher-contracts',
    '@Symfony/Component/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher',
    '@Symfony/Component/DomCrawler' => $baseDir . '/vendor/symfony/dom-crawler',
    '@Symfony/Component/BrowserKit' => $baseDir . '/vendor/symfony/browser-kit',
    '@Symfony/Component/CssSelector' => $baseDir . '/vendor/symfony/css-selector',
    '@Behat/Gherkin' => $baseDir . '/vendor/behat/gherkin/src/Behat/Gherkin',
    '@Doctrine/Instantiator' => $baseDir . '/vendor/doctrine/instantiator/src/Doctrine/Instantiator',
    '@DeepCopy' => $baseDir . '/vendor/myclabs/deep-copy/src/DeepCopy',
    '@Webmozart/Assert' => $baseDir . '/vendor/webmozart/assert/src',
    '@Prophecy' => $baseDir . '/vendor/phpspec/prophecy/src/Prophecy',
    '@Codeception/PHPUnit' => $baseDir . '/vendor/codeception/phpunit-wrapper/src',
    '@Codeception' => $baseDir . '/vendor/codeception/codeception/src/Codeception',
    '@Hoa/Consistency' => $baseDir . '/vendor/hoa/consistency/Source',
    '@Hoa/Consistency/Test' => $baseDir . '/vendor/hoa/consistency/Test',
    '@Hoa/Exception' => $baseDir . '/vendor/hoa/exception/Source',
    '@Hoa/Event' => $baseDir . '/vendor/hoa/event/Source',
    '@Hoa/Protocol' => $baseDir . '/vendor/hoa/protocol/Source',
    '@Hoa/Protocol/Bin' => $baseDir . '/vendor/hoa/protocol/Bin',
    '@Hoa/Protocol/Test' => $baseDir . '/vendor/hoa/protocol/Test',
    '@Hoa/Stream' => $baseDir . '/vendor/hoa/stream/Source',
    '@Hoa/Stream/Test' => $baseDir . '/vendor/hoa/stream/Test',
    '@Hoa/Iterator' => $baseDir . '/vendor/hoa/iterator/Source',
    '@Hoa/Iterator/Test' => $baseDir . '/vendor/hoa/iterator/Test',
    '@Hoa/File' => $baseDir . '/vendor/hoa/file/Source',
    '@Hoa/Ustring' => $baseDir . '/vendor/hoa/ustring/Source',
    '@Hoa/Ustring/Bin' => $baseDir . '/vendor/hoa/ustring/Bin',
    '@Hoa/Console' => $baseDir . '/vendor/hoa/console/Source',
    '@Hoa/Console/Bin' => $baseDir . '/vendor/hoa/console/Bin',
    '@Hoa/Console/Test' => $baseDir . '/vendor/hoa/console/Test',
    '@Codeception/Extension' => $baseDir . '/vendor/codeception/codeception/ext',
    '@codexten/yii/dev' => $baseDir . '/vendor/codexten/yii-dev/src',
    '@Symfony/Thanks' => $baseDir . '/vendor/symfony/thanks/src',
    '@core' => $baseDir . '/src/core',
    '@admin' => $baseDir . '/src/admin',
    '@console' => $baseDir . '/src/console',
    '@data' => $baseDir . '/src/data',
    '@bower' => '@vendor/bower-asset',
    '@npm' => '@vendor/npm-asset',
    '@vendor/bower' => '@vendor/bower-asset',
    '@vendor/npm' => '@vendor/npm-asset',
    '@_runtime' => '@root/runtime',
    '@adminUrl' => 'http://admin.cpanel.yii',
    '@storageUrl' => 'http://s.cpanel.yii',
    '@storage' => '@root/public/storage',
  ),
  'name' => 'Cpanel',
  'language' => 'en',
  'vendorPath' => '@root/vendor',
  'bootstrap' => 
  array (
    'log' => 'log',
    0 => 'eventManager',
  ),
  'viewPath' => '@app/views',
  'layoutPath' => '@app/views/layouts',
  'params' => 
  array (
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
  ),
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=db;port=3306;dbname=cpanel',
      'username' => 'admin',
      'password' => 'password',
      'tablePrefix' => 'tbl_',
      'charset' => 'utf8',
      'enableSchemaCache' => false,
    ),
    'eventManager' => 
    array (
      'class' => 'codexten\\yii\\components\\EventManager',
    ),
    'i18n' => 
    array (
      'class' => 'yii\\i18n\\I18N',
      'translations' => 
      array (
        'codexten' => 
        array (
          'class' => 'yii\\i18n\\PhpMessageSource',
          'basePath' => '@codexten/yii/messages',
        ),
        '*' => 
        array (
          'class' => 'yii\\i18n\\PhpMessageSource',
          'basePath' => '@codexten/yii/messages',
        ),
        'codexten:user' => 
        array (
          'class' => 'yii\\i18n\\PhpMessageSource',
          'basePath' => '@codexten/yii/modules/auth/messages',
        ),
      ),
    ),
    'authManager' => 
    array (
      'class' => 'yii\\rbac\\DbManager',
      'itemTable' => '{{%rbac_auth_item}}',
      'itemChildTable' => '{{%rbac_auth_item_child}}',
      'assignmentTable' => '{{%rbac_auth_assignment}}',
      'ruleTable' => '{{%rbac_auth_rule}}',
    ),
    'fileStorage' => 
    array (
      'class' => '\\trntv\\filekit\\Storage',
      'baseUrl' => '@storageUrl/source',
      'filesystem' => 
      array (
        'class' => 'codexten\\yii\\storage\\components\\LocalFilesystemBuilder',
        'path' => '@storage/source',
      ),
      'as log' => 
      array (
        'class' => 'codexten\\yii\\storage\\behaviors\\FileStorageLogBehavior',
        'component' => 'fileStorage',
      ),
    ),
    'urlManagerStorage' => 
    array (
      'class' => 'codexten\\yii\\storage\\web\\UrlManager',
      'baseUrl' => '@storageUrl',
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => 
      array (
        0 => 
        array (
          'pattern' => 'cache/<path:(.*)>',
          'route' => 'glide/index',
          'encodeParams' => false,
        ),
      ),
    ),
    'glide' => 
    array (
      'class' => 'trntv\\glide\\components\\Glide',
      'sourcePath' => '@root/public/storage/source',
      'cachePath' => '@root/runtime/storage/cache',
      'urlManager' => 'urlManagerStorage',
      'maxImageSize' => '4000000',
      'signKey' => false,
    ),
    'mailer' => 
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
    'mailqueue' => 
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
  ),
  'container' => 
  array (
    'definitions' => 
    array (
      'yii\\db\\ActiveRecord' => 
      array (
        'class' => 'codexten\\yii\\db\\ActiveRecord',
      ),
    ),
  ),
  'modules' => 
  array (
    'debug' => 
    array (
      'class' => 'yii\\debug\\Module',
      'allowedIPs' => 
      array (
        0 => '*',
      ),
      'historySize' => 100,
    ),
  ),
);
