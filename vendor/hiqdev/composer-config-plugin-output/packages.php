<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

defined('COMPOSER_CONFIG_PLUGIN_BASEDIR') or define('COMPOSER_CONFIG_PLUGIN_BASEDIR', $baseDir);

return array (
  'yiisoft/yii2-composer' => 
  array (
    'name' => 'yiisoft/yii2-composer',
    'version' => '9999999-dev',
    'reference' => '602673880e00bc2cc6d874b0714382775b372ac2',
    'aliases' => 
    array (
      '@yii/composer' => $baseDir . '/vendor/yiisoft/yii2-composer',
    ),
  ),
  'ezyang/htmlpurifier' => 
  array (
    'name' => 'ezyang/htmlpurifier',
    'version' => '4.11.0.0',
    'reference' => '83ab08bc1af7d808a9e0fbf024f1c24bfd73c0a7',
    'aliases' => 
    array (
      '@HTMLPurifier' => $baseDir . '/vendor/ezyang/htmlpurifier/library/HTMLPurifier',
    ),
  ),
  'cebe/markdown' => 
  array (
    'name' => 'cebe/markdown',
    'version' => '9999999-dev',
    'reference' => 'eeb1bf622e80f337479e00a5db94c56e7cf1326b',
    'aliases' => 
    array (
      '@cebe/markdown' => $baseDir . '/vendor/cebe/markdown',
    ),
  ),
  'bower-asset/jquery' => 
  array (
    'name' => 'bower-asset/jquery',
    'version' => '3.4.1.0',
    'reference' => '15bc73803f76bc53b654b9fdbbbc096f56d7c03d',
  ),
  'bower-asset/inputmask' => 
  array (
    'name' => 'bower-asset/inputmask',
    'version' => '3.3.11.0',
    'reference' => '5e670ad62f50c738388d4dcec78d2888505ad77b',
  ),
  'bower-asset/punycode' => 
  array (
    'name' => 'bower-asset/punycode',
    'version' => '1.3.2.0',
    'reference' => '38c8d3131a82567bfef18da09f7f4db68c84f8a3',
  ),
  'bower-asset/yii2-pjax' => 
  array (
    'name' => 'bower-asset/yii2-pjax',
    'version' => '2.0.7.1',
    'reference' => 'aef7b953107264f00234902a3880eb50dafc48be',
  ),
  'yiisoft/yii2' => 
  array (
    'name' => 'yiisoft/yii2',
    'version' => '9999999-dev',
    'reference' => '0063d304eae094c3f03acbf21981b9e2631608e3',
    'aliases' => 
    array (
      '@yii' => $baseDir . '/vendor/yiisoft/yii2',
    ),
  ),
  'vlucas/phpdotenv' => 
  array (
    'name' => 'vlucas/phpdotenv',
    'version' => '2.5.1.0',
    'reference' => '8abb4f9aa89ddea9d52112c65bbe8d0125e2fa8e',
    'aliases' => 
    array (
      '@Dotenv' => $baseDir . '/vendor/vlucas/phpdotenv/src',
    ),
  ),
  'codexten/docs' => 
  array (
    'name' => 'codexten/docs',
    'version' => '9999999-dev',
    'reference' => 'aace66c135f9684e95edbc2c3e629592eb4ba2dc',
  ),
  'kartik-v/yii2-krajee-base' => 
  array (
    'name' => 'kartik-v/yii2-krajee-base',
    'version' => '9999999-dev',
    'reference' => '8aa48bb2e7613db45b3c34f7a9346d7f43b1f4ec',
    'aliases' => 
    array (
      '@kartik/base' => $baseDir . '/vendor/kartik-v/yii2-krajee-base/src',
    ),
  ),
  'select2/select2' => 
  array (
    'name' => 'select2/select2',
    'version' => '9999999-dev',
    'reference' => 'a389a6da47f613ea9de3efc7a6dcf5cbda167608',
  ),
  'kartik-v/yii2-widget-select2' => 
  array (
    'name' => 'kartik-v/yii2-widget-select2',
    'version' => '9999999-dev',
    'reference' => '798dcea12997d806da14c5affde2f166338a6d54',
    'aliases' => 
    array (
      '@kartik/select2' => $baseDir . '/vendor/kartik-v/yii2-widget-select2/src',
    ),
  ),
  'codexten/yii-widget-select2' => 
  array (
    'name' => 'codexten/yii-widget-select2',
    'version' => '9999999-dev',
    'reference' => 'cc970ed76e7d7b37760078ef49e9ccf3075cccd9',
    'aliases' => 
    array (
      '@codexten/yii/widgets' => $baseDir . '/vendor/codexten/yii-widget-select2/src/widgets',
    ),
  ),
  'codexten/yii-core' => 
  array (
    'name' => 'codexten/yii-core',
    'version' => '9999999-dev',
    'reference' => 'b2deeda54001babea284cbf3ced49dde7685f6b9',
    'aliases' => 
    array (
      '@codexten/yii' => $baseDir . '/vendor/codexten/yii-core/src',
    ),
  ),
  'hiqdev/php-collection' => 
  array (
    'name' => 'hiqdev/php-collection',
    'version' => '9999999-dev',
    'reference' => '7f7fdacb62ff848147607a018ee889a4ae8fb010',
    'aliases' => 
    array (
      '@hiqdev/php/collection' => $baseDir . '/vendor/hiqdev/php-collection/src',
    ),
  ),
  'hiqdev/yii2-collection' => 
  array (
    'name' => 'hiqdev/yii2-collection',
    'version' => '9999999-dev',
    'reference' => '6d7c440849fcedf1160f77046fe5a75d497bdd48',
    'aliases' => 
    array (
      '@hiqdev/yii2/collection' => $baseDir . '/vendor/hiqdev/yii2-collection/src',
    ),
  ),
  'hiqdev/yii2-menus' => 
  array (
    'name' => 'hiqdev/yii2-menus',
    'version' => '9999999-dev',
    'reference' => '7586e2b82ca8406cf45d0341dcf7aebbb1361b3e',
    'aliases' => 
    array (
      '@hiqdev/yii2/menus' => $baseDir . '/vendor/hiqdev/yii2-menus/src',
    ),
  ),
  'rkr/wildcards' => 
  array (
    'name' => 'rkr/wildcards',
    'version' => '1.0.3.0',
    'reference' => '8c18d86be1c0ec270fb64b62b1cc37a9a80581fa',
    'aliases' => 
    array (
      '@Kir/StringUtils/Matching/Wildcards' => $baseDir . '/vendor/rkr/wildcards/src',
    ),
  ),
  'kartik-v/yii2-dialog' => 
  array (
    'name' => 'kartik-v/yii2-dialog',
    'version' => '9999999-dev',
    'reference' => '6106d070695897ed4cf7a4c69897167bc6a76268',
    'aliases' => 
    array (
      '@kartik/dialog' => $baseDir . '/vendor/kartik-v/yii2-dialog/src',
    ),
  ),
  'kartik-v/yii2-grid' => 
  array (
    'name' => 'kartik-v/yii2-grid',
    'version' => '9999999-dev',
    'reference' => 'e889dd77373961794b6aa2e1d748c8c1e1e83ea8',
    'aliases' => 
    array (
      '@kartik/grid' => $baseDir . '/vendor/kartik-v/yii2-grid/src',
    ),
  ),
  'bower-asset/toastr' => 
  array (
    'name' => 'bower-asset/toastr',
    'version' => '9999999-dev',
    'reference' => '169aa8e3021cbf1c64eaedec3b418c04313af95a',
  ),
  'odaialali/yii2-toastr' => 
  array (
    'name' => 'odaialali/yii2-toastr',
    'version' => '9999999-dev',
    'reference' => 'b5c18473b2ae46d417b9993fa37a12d341dbd1d1',
    'aliases' => 
    array (
      '@odaialali/yii2toastr' => $baseDir . '/vendor/odaialali/yii2-toastr',
    ),
  ),
  'codexten/yii-web' => 
  array (
    'name' => 'codexten/yii-web',
    'version' => '9999999-dev',
    'reference' => '49ad3981edcca2663bc4c6fa17f64cda25b36ae8',
    'aliases' => 
    array (
      '@codexten/yii/web' => $baseDir . '/vendor/codexten/yii-web/src',
    ),
  ),
  'codexten/app-admin-dev' => 
  array (
    'name' => 'codexten/app-admin-dev',
    'version' => '9999999-dev',
    'reference' => '09bcb82ce857b81bdcdcde76d3490acc5c55ba49',
    'aliases' => 
    array (
      '@codexten/admin/dev' => $baseDir . '/vendor/codexten/app-admin-dev/src',
    ),
  ),
  'codexten/yii-user' => 
  array (
    'name' => 'codexten/yii-user',
    'version' => '9999999-dev',
    'reference' => 'e74407378834347ae34dada1e59158954b4cb602',
    'aliases' => 
    array (
      '@codexten/yii/user' => $baseDir . '/vendor/codexten/yii-user/src',
      '@codexten/yii/models' => $baseDir . '/vendor/codexten/yii-user/src/models',
    ),
  ),
  'codexten/yii-settings' => 
  array (
    'name' => 'codexten/yii-settings',
    'version' => '9999999-dev',
    'reference' => '4fc02a31bb1145cb8bdb1580b4528d87d326aafc',
    'aliases' => 
    array (
      '@codexten/yii/settings' => $baseDir . '/vendor/codexten/yii-settings/src',
    ),
  ),
  'codexten/yii-user-settings' => 
  array (
    'name' => 'codexten/yii-user-settings',
    'version' => '9999999-dev',
    'reference' => '601ef16e7dbe2bdf7b3cc51645bab12f7c90d3dd',
    'aliases' => 
    array (
      '@codexten/yii/user/settings' => $baseDir . '/vendor/codexten/yii-user-settings/src',
      '@codexten/yii/user/settings/migrations' => $baseDir . '/vendor/codexten/yii-user-settings/src/migrations',
    ),
  ),
  'codexten/yii-admin-settings' => 
  array (
    'name' => 'codexten/yii-admin-settings',
    'version' => '9999999-dev',
    'reference' => 'bbdbfafdbee98c4285ab0873afd0e6f8dadfa69c',
    'aliases' => 
    array (
      '@codexten/yii/admin/settings' => $baseDir . '/vendor/codexten/yii-admin-settings/src',
    ),
  ),
  'codexten/yii-module-auth' => 
  array (
    'name' => 'codexten/yii-module-auth',
    'version' => '9999999-dev',
    'reference' => '647428c88c1ab89ef13c59cac116a194e808ff16',
    'aliases' => 
    array (
      '@codexten/yii/modules/auth' => $baseDir . '/vendor/codexten/yii-module-auth/src/modules/auth',
    ),
  ),
  'codexten/yii-module-my-account' => 
  array (
    'name' => 'codexten/yii-module-my-account',
    'version' => '9999999-dev',
    'reference' => '36595bdbee3cff58ee2028678014e3cac13d4a84',
    'aliases' => 
    array (
      '@codexten/yii/modules/my/account' => $baseDir . '/vendor/codexten/yii-module-my-account/src',
    ),
  ),
  'codexten/yii-app-admin' => 
  array (
    'name' => 'codexten/yii-app-admin',
    'version' => '9999999-dev',
    'reference' => '787fa45bbdde763b9c48a94a66119323f9fd6171',
    'aliases' => 
    array (
      '@codexten/yii/admin' => $baseDir . '/vendor/codexten/yii-app-admin/src',
    ),
  ),
  'ifsnop/mysqldump-php' => 
  array (
    'name' => 'ifsnop/mysqldump-php',
    'version' => '2.5.0.0',
    'reference' => '8d063449981e3f7bd28a3a083842e21a24d1f4af',
    'aliases' => 
    array (
      '@Ifsnop' => $baseDir . '/vendor/ifsnop/mysqldump-php/src/Ifsnop',
    ),
  ),
  'codexten/yii-app-console' => 
  array (
    'name' => 'codexten/yii-app-console',
    'version' => '9999999-dev',
    'reference' => '7ffa688a6696bd29e0fc2036f836340ebd2f1383',
    'aliases' => 
    array (
      '@codexten/yii/console' => $baseDir . '/vendor/codexten/yii-app-console/src',
    ),
  ),
  'bower-asset/jquery-ui' => 
  array (
    'name' => 'bower-asset/jquery-ui',
    'version' => '1.12.1.0',
    'reference' => '44ecf3794cc56b65954cc19737234a3119d036cc',
  ),
  'yiisoft/yii2-jui' => 
  array (
    'name' => 'yiisoft/yii2-jui',
    'version' => '9999999-dev',
    'reference' => '11263809ff5b7df1deb0e3b42e2488d3e2388f29',
    'aliases' => 
    array (
      '@yii/jui' => $baseDir . '/vendor/yiisoft/yii2-jui/src',
    ),
  ),
  'league/flysystem' => 
  array (
    'name' => 'league/flysystem',
    'version' => '9999999-dev',
    'reference' => '34ef189ac581339fa1f8338d110bccb968e0746d',
    'aliases' => 
    array (
      '@League/Flysystem' => $baseDir . '/vendor/league/flysystem/src',
    ),
  ),
  'bower-asset/blueimp-canvas-to-blob' => 
  array (
    'name' => 'bower-asset/blueimp-canvas-to-blob',
    'version' => '9999999-dev',
    'reference' => 'eab2845ebb03c9667ea6ade002ceadbef071c060',
  ),
  'bower-asset/blueimp-load-image' => 
  array (
    'name' => 'bower-asset/blueimp-load-image',
    'version' => '9999999-dev',
    'reference' => '1196b4ce3c56f01cacf90fc5527b324ecccdf3b0',
  ),
  'bower-asset/blueimp-tmpl' => 
  array (
    'name' => 'bower-asset/blueimp-tmpl',
    'version' => '9999999-dev',
    'reference' => '07b3dd455b971cf5d087fc86889fcadae48ab2fc',
  ),
  'bower-asset/blueimp-file-upload' => 
  array (
    'name' => 'bower-asset/blueimp-file-upload',
    'version' => '9.34.0.0',
    'reference' => 'bb52d3493d725175fcf5554da034a317aaaea0e2',
  ),
  'trntv/yii2-file-kit' => 
  array (
    'name' => 'trntv/yii2-file-kit',
    'version' => '9999999-dev',
    'reference' => '769c7b325cf3425f789437c5852c5806dba02cbe',
    'aliases' => 
    array (
      '@trntv/filekit' => $baseDir . '/vendor/trntv/yii2-file-kit/src',
    ),
  ),
  'studio-42/elfinder' => 
  array (
    'name' => 'studio-42/elfinder',
    'version' => '2.1.9999999.9999999-dev',
    'reference' => 'ae1a24001af2727ef7ef4e8f32c7dc1b49709062',
  ),
  'mihaildev/yii2-elfinder' => 
  array (
    'name' => 'mihaildev/yii2-elfinder',
    'version' => '1.3.0.0',
    'reference' => '3cc3001a84e3cc3841131a0a947d7917948a60b1',
    'aliases' => 
    array (
      '@mihaildev/elfinder' => $baseDir . '/vendor/mihaildev/yii2-elfinder',
    ),
  ),
  'psr/http-message' => 
  array (
    'name' => 'psr/http-message',
    'version' => '9999999-dev',
    'reference' => 'efd67d1dc14a7ef4fc4e518e7dee91c271d524e4',
    'aliases' => 
    array (
      '@Psr/Http/Message' => $baseDir . '/vendor/psr/http-message/src',
    ),
  ),
  'ralouphie/getallheaders' => 
  array (
    'name' => 'ralouphie/getallheaders',
    'version' => '3.0.3.0',
    'reference' => '120b605dfeb996808c31b6477290a714d356e822',
  ),
  'guzzlehttp/psr7' => 
  array (
    'name' => 'guzzlehttp/psr7',
    'version' => '1.9999999.9999999.9999999-dev',
    'reference' => '2595b33c1c924889b474d324f3d719fa40b6954e',
    'aliases' => 
    array (
      '@GuzzleHttp/Psr7' => $baseDir . '/vendor/guzzlehttp/psr7/src',
    ),
  ),
  'intervention/image' => 
  array (
    'name' => 'intervention/image',
    'version' => '2.5.0.0',
    'reference' => '39eaef720d082ecc54c64bf54541c55f10db546d',
    'aliases' => 
    array (
      '@Intervention/Image' => $baseDir . '/vendor/intervention/image/src/Intervention/Image',
    ),
  ),
  'league/glide' => 
  array (
    'name' => 'league/glide',
    'version' => '1.5.0.0',
    'reference' => 'a5477e9e822ed57b39861a17092b92553634932d',
    'aliases' => 
    array (
      '@League/Glide' => $baseDir . '/vendor/league/glide/src',
    ),
  ),
  'psr/simple-cache' => 
  array (
    'name' => 'psr/simple-cache',
    'version' => '9999999-dev',
    'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    'aliases' => 
    array (
      '@Psr/SimpleCache' => $baseDir . '/vendor/psr/simple-cache/src',
    ),
  ),
  'league/uri-hostname-parser' => 
  array (
    'name' => 'league/uri-hostname-parser',
    'version' => '1.1.1.0',
    'reference' => '7a6be3d06d0ed08dcb51f666aa60f3b66cd51325',
    'aliases' => 
    array (
      '@League/Uri' => $baseDir . '/vendor/league/uri-hostname-parser/src',
    ),
  ),
  'league/uri-components' => 
  array (
    'name' => 'league/uri-components',
    'version' => '1.9999999.9999999.9999999-dev',
    'reference' => 'd0412fd730a54a8284009664188cf239070eae64',
    'aliases' => 
    array (
      '@League/Uri' => $baseDir . '/vendor/league/uri-components/src',
    ),
  ),
  'league/uri-interfaces' => 
  array (
    'name' => 'league/uri-interfaces',
    'version' => '1.1.1.0',
    'reference' => '081760c53a4ce76c9935a755a21353610f5495f6',
    'aliases' => 
    array (
      '@League/Uri' => $baseDir . '/vendor/league/uri-interfaces/src',
    ),
  ),
  'league/uri-manipulations' => 
  array (
    'name' => 'league/uri-manipulations',
    'version' => '9999999-dev',
    'reference' => 'a9092d28abfca7db443871c84944f5e5c643c31b',
    'aliases' => 
    array (
      '@League/Uri' => $baseDir . '/vendor/league/uri-manipulations/src',
    ),
  ),
  'league/uri-parser' => 
  array (
    'name' => 'league/uri-parser',
    'version' => '1.4.1.0',
    'reference' => '671548427e4c932352d9b9279fdfa345bf63fa00',
    'aliases' => 
    array (
      '@League/Uri' => $baseDir . '/vendor/league/uri-parser/src',
    ),
  ),
  'league/uri-schemes' => 
  array (
    'name' => 'league/uri-schemes',
    'version' => '1.2.1.0',
    'reference' => 'f821a444785724bcc9bc244b1173b9d6ca4d71e6',
    'aliases' => 
    array (
      '@League/Uri' => $baseDir . '/vendor/league/uri-schemes/src',
    ),
  ),
  'league/uri' => 
  array (
    'name' => 'league/uri',
    'version' => '5.3.0.0',
    'reference' => 'f2bceb755f1108758cf4cf925e4cd7699ce686aa',
  ),
  'symfony/polyfill-mbstring' => 
  array (
    'name' => 'symfony/polyfill-mbstring',
    'version' => '9999999-dev',
    'reference' => 'b42a2f66e8f1b15ccf25652c3424265923eb4f17',
    'aliases' => 
    array (
      '@Symfony/Polyfill/Mbstring' => $baseDir . '/vendor/symfony/polyfill-mbstring',
    ),
  ),
  'paragonie/random_compat' => 
  array (
    'name' => 'paragonie/random_compat',
    'version' => '9.99.99.9999999-dev',
    'reference' => '0947f25b883d4172df340a0d95f1b7cdabc5368a',
  ),
  'symfony/polyfill-php70' => 
  array (
    'name' => 'symfony/polyfill-php70',
    'version' => '9999999-dev',
    'reference' => '54b4c428a0054e254223797d2713c31e08610831',
    'aliases' => 
    array (
      '@Symfony/Polyfill/Php70' => $baseDir . '/vendor/symfony/polyfill-php70',
    ),
  ),
  'symfony/http-foundation' => 
  array (
    'name' => 'symfony/http-foundation',
    'version' => '3.4.9999999.9999999-dev',
    'reference' => '089da40dfa1e5f0a89f29619a1337a64d88e08f9',
    'aliases' => 
    array (
      '@Symfony/Component/HttpFoundation' => $baseDir . '/vendor/symfony/http-foundation',
    ),
  ),
  'trntv/yii2-glide' => 
  array (
    'name' => 'trntv/yii2-glide',
    'version' => '1.2.2.0',
    'reference' => 'a2a0fed9d236ef274a8297d01d0124bf1afe1f91',
    'aliases' => 
    array (
      '@trntv/glide' => $baseDir . '/vendor/trntv/yii2-glide/src',
    ),
  ),
  'codexten/yii-app-storage' => 
  array (
    'name' => 'codexten/yii-app-storage',
    'version' => '9999999-dev',
    'reference' => '73fed9319b5ceae3cbd50bf7e25665fb120f12ff',
    'aliases' => 
    array (
      '@codexten/yii/storage' => $baseDir . '/vendor/codexten/yii-app-storage/src',
    ),
  ),
  'swiftmailer/swiftmailer' => 
  array (
    'name' => 'swiftmailer/swiftmailer',
    'version' => '5.9999999.9999999.9999999-dev',
    'reference' => '181b89f18a90f8925ef805f950d47a7190e9b950',
  ),
  'yiisoft/yii2-swiftmailer' => 
  array (
    'name' => 'yiisoft/yii2-swiftmailer',
    'version' => '2.0.7.0',
    'reference' => '8a03a62cbcb82e7697d3002eb43a8d2637f566ec',
    'aliases' => 
    array (
      '@yii/swiftmailer' => $baseDir . '/vendor/yiisoft/yii2-swiftmailer',
    ),
  ),
  'psr/log' => 
  array (
    'name' => 'psr/log',
    'version' => '9999999-dev',
    'reference' => 'c4421fcac1edd5a324fda73e589a5cf96e52ffd0',
    'aliases' => 
    array (
      '@Psr/Log' => $baseDir . '/vendor/psr/log/Psr/Log',
    ),
  ),
  'katzgrau/klogger' => 
  array (
    'name' => 'katzgrau/klogger',
    'version' => '1.2.1.0',
    'reference' => 'a4ed373fa8a214aa4ae7aa4f221fe2c6ce862ef1',
    'aliases' => 
    array (
      '@Katzgrau/KLogger' => $baseDir . '/vendor/katzgrau/klogger/src',
    ),
  ),
  'codexten/yii-mailqueue' => 
  array (
    'name' => 'codexten/yii-mailqueue',
    'version' => '9999999-dev',
    'reference' => '9ca3d2a69e84777efab61ea2437e648eed45d55c',
    'aliases' => 
    array (
      '@codexten/yii/mailqueue' => $baseDir . '/vendor/codexten/yii-mailqueue/src',
    ),
  ),
  'bower-asset/bootstrap' => 
  array (
    'name' => 'bower-asset/bootstrap',
    'version' => '3.4.1.0',
    'reference' => '68b0d231a13201eb14acd3dc84e51543d16e5f7e',
  ),
  'yiisoft/yii2-bootstrap' => 
  array (
    'name' => 'yiisoft/yii2-bootstrap',
    'version' => '9999999-dev',
    'reference' => '40a00e20b66057cd32d0c8bbc9377dc0223e541a',
    'aliases' => 
    array (
      '@yii/bootstrap' => $baseDir . '/vendor/yiisoft/yii2-bootstrap/src',
    ),
  ),
  'codexten/yii-bootstrap3' => 
  array (
    'name' => 'codexten/yii-bootstrap3',
    'version' => '9999999-dev',
    'reference' => '2cec10028f964f7a663154480ad2ee37c13224e2',
    'aliases' => 
    array (
      '@codexten/yii/bootstrap3' => $baseDir . '/vendor/codexten/yii-bootstrap3/src',
    ),
  ),
  'cebe/yii2-gravatar' => 
  array (
    'name' => 'cebe/yii2-gravatar',
    'version' => '1.1.0.0',
    'reference' => 'c9c01bd14c9bdee9e5ae1ef1aad23f80c182c057',
    'aliases' => 
    array (
      '@cebe/gravatar' => $baseDir . '/vendor/cebe/yii2-gravatar/cebe/gravatar',
    ),
  ),
  'almasaeed2010/adminlte' => 
  array (
    'name' => 'almasaeed2010/adminlte',
    'version' => '2.9999999.9999999.9999999-dev',
    'reference' => 'b1edd9eaf828928dd8bfea8607bfa66f0337aa7b',
  ),
  'rmrevin/yii2-fontawesome' => 
  array (
    'name' => 'rmrevin/yii2-fontawesome',
    'version' => '3.9999999.9999999.9999999-dev',
    'reference' => 'a1b448cef7e03a0b5a6286276bef004efa83f323',
    'aliases' => 
    array (
      '@rmrevin/yii/fontawesome' => $baseDir . '/vendor/rmrevin/yii2-fontawesome',
    ),
  ),
  'dmstr/yii2-adminlte-asset' => 
  array (
    'name' => 'dmstr/yii2-adminlte-asset',
    'version' => '2.7.0.0-beta1',
    'reference' => '789360570d53c88d446c0193947e269267bfbba8',
    'aliases' => 
    array (
      '@dmstr' => $baseDir . '/vendor/dmstr/yii2-adminlte-asset',
    ),
  ),
  'codexten/yii-adminlte2' => 
  array (
    'name' => 'codexten/yii-adminlte2',
    'version' => '9999999-dev',
    'reference' => '744ff10f1f992e67610e5b8ae9e6218fd446b9d3',
    'aliases' => 
    array (
      '@codexten/yii/adminlte2' => $baseDir . '/vendor/codexten/yii-adminlte2/src',
    ),
  ),
  'mtdowling/cron-expression' => 
  array (
    'name' => 'mtdowling/cron-expression',
    'version' => '1.2.1.9999999-dev',
    'reference' => '9504fa9ea681b586028adaaa0877db4aecf32bad',
    'aliases' => 
    array (
      '@Cron' => $baseDir . '/vendor/mtdowling/cron-expression/src/Cron',
    ),
  ),
  'mult1mate/cron-manager' => 
  array (
    'name' => 'mult1mate/cron-manager',
    'version' => '9999999-dev',
    'reference' => 'ccea814d338a0b5edf0e2008ebfe07038090ca5a',
    'aliases' => 
    array (
      '@mult1mate/crontab' => $baseDir . '/vendor/mult1mate/cron-manager/src',
      '@mult1mate/crontab_tests' => $baseDir . '/vendor/mult1mate/cron-manager/tests',
    ),
  ),
  'codexten/yii-cron' => 
  array (
    'name' => 'codexten/yii-cron',
    'version' => '9999999-dev',
    'reference' => 'ec67df05158a47c7db4e90d3365d470ad1d1ec22',
    'aliases' => 
    array (
      '@codexten/yii/cron' => $baseDir . '/vendor/codexten/yii-cron/src',
    ),
  ),
  'cocur/background-process' => 
  array (
    'name' => 'cocur/background-process',
    'version' => '9999999-dev',
    'reference' => '9ae2902922f02ec5544d723756758eb7304c6869',
    'aliases' => 
    array (
      '@Cocur/BackgroundProcess' => $baseDir . '/vendor/cocur/background-process/src',
    ),
  ),
  'codexten/yii-process' => 
  array (
    'name' => 'codexten/yii-process',
    'version' => '9999999-dev',
    'reference' => '20de36aebaf51e6b954a3b1361e2a9a49f5b79f6',
    'aliases' => 
    array (
      '@codexten/yii/process' => $baseDir . '/vendor/codexten/yii-process/src',
    ),
  ),
  'hiqdev/composer-config-plugin' => 
  array (
    'name' => 'hiqdev/composer-config-plugin',
    'version' => '0.3.0.0',
    'reference' => 'f8155eb6f5e3a6974dcd96f0bc6bce49e72b51ba',
    'aliases' => 
    array (
      '@hiqdev/composer/config' => $baseDir . '/vendor/hiqdev/composer-config-plugin/src',
    ),
  ),
  'phpspec/php-diff' => 
  array (
    'name' => 'phpspec/php-diff',
    'version' => '1.1.0.0',
    'reference' => '0464787bfa7cd13576c5a1e318709768798bec6a',
    'aliases' => 
    array (
      '@Diff' => $baseDir . '/vendor/phpspec/php-diff/lib/Diff',
    ),
  ),
  'yiisoft/yii2-gii' => 
  array (
    'name' => 'yiisoft/yii2-gii',
    'version' => '9999999-dev',
    'reference' => '005e117f7c5316cf0cdeff7e7745d8810ebc2f47',
    'aliases' => 
    array (
      '@yii/gii' => $baseDir . '/vendor/yiisoft/yii2-gii/src',
    ),
  ),
  'codexten/yii-gii' => 
  array (
    'name' => 'codexten/yii-gii',
    'version' => '9999999-dev',
    'reference' => '3ba434092d949cb95d12ae29d5f6afdb488e50a2',
    'aliases' => 
    array (
      '@codexten/yii/gii' => $baseDir . '/vendor/codexten/yii-gii/src',
    ),
  ),
  'opis/closure' => 
  array (
    'name' => 'opis/closure',
    'version' => '3.4.0.0',
    'reference' => '60a97fff133b1669a5b1776aa8ab06db3f3962b7',
    'aliases' => 
    array (
      '@Opis/Closure' => $baseDir . '/vendor/opis/closure/src',
    ),
  ),
  'yiisoft/yii2-debug' => 
  array (
    'name' => 'yiisoft/yii2-debug',
    'version' => '2.1.8.0',
    'reference' => '959bf8206a3ec64f8949f62024a2c58d9a02e78f',
    'aliases' => 
    array (
      '@yii/debug' => $baseDir . '/vendor/yiisoft/yii2-debug/src',
    ),
  ),
  'symfony/polyfill-ctype' => 
  array (
    'name' => 'symfony/polyfill-ctype',
    'version' => '9999999-dev',
    'reference' => '550ebaac289296ce228a706d0867afc34687e3f4',
    'aliases' => 
    array (
      '@Symfony/Polyfill/Ctype' => $baseDir . '/vendor/symfony/polyfill-ctype',
    ),
  ),
  'twig/twig' => 
  array (
    'name' => 'twig/twig',
    'version' => '2.9999999.9999999.9999999-dev',
    'reference' => '38341bbefdaf496e0752c90b053c54ed23d57f98',
    'aliases' => 
    array (
      '@Twig_' => $baseDir . '/vendor/twig/twig/lib/Twig_',
      '@Twig' => $baseDir . '/vendor/twig/twig/src',
    ),
  ),
  'yiisoft/yii2-twig' => 
  array (
    'name' => 'yiisoft/yii2-twig',
    'version' => '2.2.1.0',
    'reference' => 'f532e49b23d16206e99a912ad19963042d91f617',
    'aliases' => 
    array (
      '@yii/twig' => $baseDir . '/vendor/yiisoft/yii2-twig/src',
    ),
  ),
  'symfony/yaml' => 
  array (
    'name' => 'symfony/yaml',
    'version' => '3.4.9999999.9999999-dev',
    'reference' => '717182d370fe00bf9268f9cd13e492976fa851bb',
    'aliases' => 
    array (
      '@Symfony/Component/Yaml' => $baseDir . '/vendor/symfony/yaml',
    ),
  ),
  'hiqdev/hidev' => 
  array (
    'name' => 'hiqdev/hidev',
    'version' => '9999999-dev',
    'reference' => '4e971215be23106b7301cccc102599b4e70b2402',
    'aliases' => 
    array (
      '@hidev' => $baseDir . '/vendor/hiqdev/hidev/src',
      '@hidev/tests' => $baseDir . '/vendor/hiqdev/hidev/tests',
    ),
  ),
  'hiqdev/hidev-nginx' => 
  array (
    'name' => 'hiqdev/hidev-nginx',
    'version' => '9999999-dev',
    'reference' => '285ef28a56282acb263d380ecc5425c3a2a8e184',
    'aliases' => 
    array (
      '@hidev/nginx' => $baseDir . '/vendor/hiqdev/hidev-nginx/src',
    ),
  ),
  'codexten/php-hosts' => 
  array (
    'name' => 'codexten/php-hosts',
    'version' => '9999999-dev',
    'reference' => '7a8a6f7efbfc322b043538335fca62ef749d9ce3',
    'aliases' => 
    array (
      '@codexten/hosts' => $baseDir . '/vendor/codexten/php-hosts/src',
    ),
  ),
  'codexten/nginx' => 
  array (
    'name' => 'codexten/nginx',
    'version' => '9999999-dev',
    'reference' => '7cde8814de3d1a2b8e467c8eaf6eeb546e844e60',
    'aliases' => 
    array (
      '@codexten/nginx' => $baseDir . '/vendor/codexten/nginx/src',
    ),
  ),
  'symfony/process' => 
  array (
    'name' => 'symfony/process',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => '0c03768430b6df1828f59e3ede786e93fa49d03d',
    'aliases' => 
    array (
      '@Symfony/Component/Process' => $baseDir . '/vendor/symfony/process',
    ),
  ),
  'facebook/webdriver' => 
  array (
    'name' => 'facebook/webdriver',
    'version' => '1.7.1.0',
    'reference' => 'e43de70f3c7166169d0f14a374505392734160e5',
    'aliases' => 
    array (
      '@Facebook/WebDriver' => $baseDir . '/vendor/facebook/webdriver/lib',
    ),
  ),
  'guzzlehttp/promises' => 
  array (
    'name' => 'guzzlehttp/promises',
    'version' => '9999999-dev',
    'reference' => '17d36ed176c998839582c739ce0753381598edf0',
    'aliases' => 
    array (
      '@GuzzleHttp/Promise' => $baseDir . '/vendor/guzzlehttp/promises/src',
    ),
  ),
  'guzzlehttp/guzzle' => 
  array (
    'name' => 'guzzlehttp/guzzle',
    'version' => '9999999-dev',
    'reference' => 'a7010cc9b52ecfa00051bb26e4ae025958fe9851',
    'aliases' => 
    array (
      '@GuzzleHttp' => $baseDir . '/vendor/guzzlehttp/guzzle/src',
    ),
  ),
  'symfony/finder' => 
  array (
    'name' => 'symfony/finder',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => 'd25922bd68ee500038603c6c1995a156ce253eb1',
    'aliases' => 
    array (
      '@Symfony/Component/Finder' => $baseDir . '/vendor/symfony/finder',
    ),
  ),
  'symfony/polyfill-php73' => 
  array (
    'name' => 'symfony/polyfill-php73',
    'version' => '9999999-dev',
    'reference' => '2ceb49eaccb9352bff54d22570276bb75ba4a188',
    'aliases' => 
    array (
      '@Symfony/Polyfill/Php73' => $baseDir . '/vendor/symfony/polyfill-php73',
    ),
  ),
  'psr/container' => 
  array (
    'name' => 'psr/container',
    'version' => '9999999-dev',
    'reference' => '014d250daebff39eba15ba990eeb2a140798e77c',
    'aliases' => 
    array (
      '@Psr/Container' => $baseDir . '/vendor/psr/container/src',
    ),
  ),
  'symfony/service-contracts' => 
  array (
    'name' => 'symfony/service-contracts',
    'version' => '9999999-dev',
    'reference' => 'ea7263d6b6d5f798b56a45a5b8d686725f2719a3',
    'aliases' => 
    array (
      '@Symfony/Contracts/Service' => $baseDir . '/vendor/symfony/service-contracts',
    ),
  ),
  'symfony/console' => 
  array (
    'name' => 'symfony/console',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => 'bc32b73c0a31c724ce3acd13163ca8c74cde1078',
    'aliases' => 
    array (
      '@Symfony/Component/Console' => $baseDir . '/vendor/symfony/console',
    ),
  ),
  'symfony/event-dispatcher-contracts' => 
  array (
    'name' => 'symfony/event-dispatcher-contracts',
    'version' => '9999999-dev',
    'reference' => '6dd7d743cb4141e634a5ec6082ef8f59ad90e4bb',
    'aliases' => 
    array (
      '@Symfony/Contracts/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher-contracts',
    ),
  ),
  'symfony/event-dispatcher' => 
  array (
    'name' => 'symfony/event-dispatcher',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => '9b8fca87435658d01b57edd1f7d059a4ea4367ba',
    'aliases' => 
    array (
      '@Symfony/Component/EventDispatcher' => $baseDir . '/vendor/symfony/event-dispatcher',
    ),
  ),
  'symfony/dom-crawler' => 
  array (
    'name' => 'symfony/dom-crawler',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => 'acfe9e16ac51bec545e35e9a117200c9f77ca9d8',
    'aliases' => 
    array (
      '@Symfony/Component/DomCrawler' => $baseDir . '/vendor/symfony/dom-crawler',
    ),
  ),
  'symfony/browser-kit' => 
  array (
    'name' => 'symfony/browser-kit',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => '4a1a86a0a6210cc28fb106ddf13ef097b7230b20',
    'aliases' => 
    array (
      '@Symfony/Component/BrowserKit' => $baseDir . '/vendor/symfony/browser-kit',
    ),
  ),
  'symfony/css-selector' => 
  array (
    'name' => 'symfony/css-selector',
    'version' => '4.4.9999999.9999999-dev',
    'reference' => 'e90d19b3923606e3840435fbaaf5db1d07b6a5f9',
    'aliases' => 
    array (
      '@Symfony/Component/CssSelector' => $baseDir . '/vendor/symfony/css-selector',
    ),
  ),
  'behat/gherkin' => 
  array (
    'name' => 'behat/gherkin',
    'version' => '4.6.0.0',
    'reference' => 'ab0a02ea14893860bca00f225f5621d351a3ad07',
    'aliases' => 
    array (
      '@Behat/Gherkin' => $baseDir . '/vendor/behat/gherkin/src/Behat/Gherkin',
    ),
  ),
  'doctrine/instantiator' => 
  array (
    'name' => 'doctrine/instantiator',
    'version' => '9999999-dev',
    'reference' => '7c71fc2932158d00f24f10635bf3b3b8b6ee5b68',
    'aliases' => 
    array (
      '@Doctrine/Instantiator' => $baseDir . '/vendor/doctrine/instantiator/src/Doctrine/Instantiator',
    ),
  ),
  'myclabs/deep-copy' => 
  array (
    'name' => 'myclabs/deep-copy',
    'version' => '1.9999999.9999999.9999999-dev',
    'reference' => '9012edbd1604a93cee7e7422d07a2c5776c56e0c',
    'aliases' => 
    array (
      '@DeepCopy' => $baseDir . '/vendor/myclabs/deep-copy/src/DeepCopy',
    ),
  ),
  'phar-io/version' => 
  array (
    'name' => 'phar-io/version',
    'version' => '2.0.1.0',
    'reference' => '45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  ),
  'phar-io/manifest' => 
  array (
    'name' => 'phar-io/manifest',
    'version' => '1.0.3.0',
    'reference' => '7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  ),
  'phpdocumentor/reflection-common' => 
  array (
    'name' => 'phpdocumentor/reflection-common',
    'version' => '1.0.1.0',
    'reference' => '21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  ),
  'phpdocumentor/type-resolver' => 
  array (
    'name' => 'phpdocumentor/type-resolver',
    'version' => '0.4.0.0',
    'reference' => '9c977708995954784726e25d0cd1dddf4e65b0f7',
  ),
  'webmozart/assert' => 
  array (
    'name' => 'webmozart/assert',
    'version' => '1.5.0.0',
    'reference' => '88e6d84706d09a236046d686bbea96f07b3a34f4',
    'aliases' => 
    array (
      '@Webmozart/Assert' => $baseDir . '/vendor/webmozart/assert/src',
    ),
  ),
  'phpdocumentor/reflection-docblock' => 
  array (
    'name' => 'phpdocumentor/reflection-docblock',
    'version' => '4.3.1.0',
    'reference' => 'bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c',
  ),
  'sebastian/diff' => 
  array (
    'name' => 'sebastian/diff',
    'version' => '9999999-dev',
    'reference' => 'd7e7810940c78f3343420f76adf92dc437b7a557',
  ),
  'sebastian/recursion-context' => 
  array (
    'name' => 'sebastian/recursion-context',
    'version' => '9999999-dev',
    'reference' => 'a58220ae18565f6004bbe15321efc4470bfe02fd',
  ),
  'sebastian/exporter' => 
  array (
    'name' => 'sebastian/exporter',
    'version' => '9999999-dev',
    'reference' => '636773fb0b23bd70fff886ffe215ed47354af863',
  ),
  'sebastian/comparator' => 
  array (
    'name' => 'sebastian/comparator',
    'version' => '9999999-dev',
    'reference' => '9a1267ac19ecd74163989bcb3e01c5c9587f9e3b',
  ),
  'phpspec/prophecy' => 
  array (
    'name' => 'phpspec/prophecy',
    'version' => '9999999-dev',
    'reference' => '93d6a38116e46a885d13f5fb5db8e0a2cd52a62e',
    'aliases' => 
    array (
      '@Prophecy' => $baseDir . '/vendor/phpspec/prophecy/src/Prophecy',
    ),
  ),
  'phpunit/php-file-iterator' => 
  array (
    'name' => 'phpunit/php-file-iterator',
    'version' => '9999999-dev',
    'reference' => '7f0f29702170e2786b2df813af970135765de6fc',
  ),
  'phpunit/php-token-stream' => 
  array (
    'name' => 'phpunit/php-token-stream',
    'version' => '9999999-dev',
    'reference' => 'e899757bb3df5ff6e95089132f32cd59aac2220a',
  ),
  'phpunit/php-text-template' => 
  array (
    'name' => 'phpunit/php-text-template',
    'version' => '1.2.1.0',
    'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  ),
  'sebastian/code-unit-reverse-lookup' => 
  array (
    'name' => 'sebastian/code-unit-reverse-lookup',
    'version' => '9999999-dev',
    'reference' => '5e860800beea5ea4c8590df866338c09c20d3a48',
  ),
  'sebastian/environment' => 
  array (
    'name' => 'sebastian/environment',
    'version' => '9999999-dev',
    'reference' => '1c91ab3fb351373cf86ead6006ea9daa8e4ce027',
  ),
  'sebastian/version' => 
  array (
    'name' => 'sebastian/version',
    'version' => '2.0.1.0',
    'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
  ),
  'theseer/tokenizer' => 
  array (
    'name' => 'theseer/tokenizer',
    'version' => '1.1.3.0',
    'reference' => '11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  ),
  'phpunit/php-code-coverage' => 
  array (
    'name' => 'phpunit/php-code-coverage',
    'version' => '6.1.4.0',
    'reference' => '807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  ),
  'phpunit/php-timer' => 
  array (
    'name' => 'phpunit/php-timer',
    'version' => '9999999-dev',
    'reference' => '37d2894f3650acccb6e57207e63eb9699c1a82a6',
  ),
  'sebastian/global-state' => 
  array (
    'name' => 'sebastian/global-state',
    'version' => '2.0.0.0',
    'reference' => 'e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  ),
  'sebastian/object-reflector' => 
  array (
    'name' => 'sebastian/object-reflector',
    'version' => '9999999-dev',
    'reference' => '3053ae3e6286fdf98769f18ec10894dbc6260a34',
  ),
  'sebastian/object-enumerator' => 
  array (
    'name' => 'sebastian/object-enumerator',
    'version' => '9999999-dev',
    'reference' => '63e5a3e0881ebf28c9fbb2a2e12b77d373850c12',
  ),
  'sebastian/resource-operations' => 
  array (
    'name' => 'sebastian/resource-operations',
    'version' => '9999999-dev',
    'reference' => 'd67fc89d3107c396d161411b620619f3e7a7c270',
  ),
  'phpunit/phpunit' => 
  array (
    'name' => 'phpunit/phpunit',
    'version' => '7.5.9999999.9999999-dev',
    'reference' => '928b6e5476f86a3ddb71eb23005b560d5dd73a23',
  ),
  'codeception/phpunit-wrapper' => 
  array (
    'name' => 'codeception/phpunit-wrapper',
    'version' => '7.7.1.0',
    'reference' => 'ab04a956264291505ea84998f43cf91639b4575d',
    'aliases' => 
    array (
      '@Codeception/PHPUnit' => $baseDir . '/vendor/codeception/phpunit-wrapper/src',
    ),
  ),
  'codeception/stub' => 
  array (
    'name' => 'codeception/stub',
    'version' => '2.9999999.9999999.9999999-dev',
    'reference' => 'bf8c7903fa8b66fe184a076fc589d3afc7b32e82',
    'aliases' => 
    array (
      '@Codeception' => $baseDir . '/vendor/codeception/stub/src',
    ),
  ),
  'hoa/consistency' => 
  array (
    'name' => 'hoa/consistency',
    'version' => '9999999-dev',
    'reference' => '07b9e16b0714da4f7cc20f65079d97efffd7da09',
    'aliases' => 
    array (
      '@Hoa/Consistency' => $baseDir . '/vendor/hoa/consistency/Source',
      '@Hoa/Consistency/Test' => $baseDir . '/vendor/hoa/consistency/Test',
    ),
  ),
  'hoa/exception' => 
  array (
    'name' => 'hoa/exception',
    'version' => '9999999-dev',
    'reference' => 'c8dc4f4752182fb8d09ad791244b57d15ced0b3d',
    'aliases' => 
    array (
      '@Hoa/Exception' => $baseDir . '/vendor/hoa/exception/Source',
    ),
  ),
  'hoa/event' => 
  array (
    'name' => 'hoa/event',
    'version' => '9999999-dev',
    'reference' => '8cca1dcae3d1c85c915e94b97087ea37d41ddd49',
    'aliases' => 
    array (
      '@Hoa/Event' => $baseDir . '/vendor/hoa/event/Source',
    ),
  ),
  'hoa/protocol' => 
  array (
    'name' => 'hoa/protocol',
    'version' => '9999999-dev',
    'reference' => 'e2646429e37b757ef8c83503df6034030eafb4f5',
    'aliases' => 
    array (
      '@Hoa/Protocol' => $baseDir . '/vendor/hoa/protocol/Source',
      '@Hoa/Protocol/Bin' => $baseDir . '/vendor/hoa/protocol/Bin',
      '@Hoa/Protocol/Test' => $baseDir . '/vendor/hoa/protocol/Test',
    ),
  ),
  'hoa/stream' => 
  array (
    'name' => 'hoa/stream',
    'version' => '9999999-dev',
    'reference' => 'e9b5976822fe23454e02296c7a01faca4e4d7a04',
    'aliases' => 
    array (
      '@Hoa/Stream' => $baseDir . '/vendor/hoa/stream/Source',
      '@Hoa/Stream/Test' => $baseDir . '/vendor/hoa/stream/Test',
    ),
  ),
  'hoa/iterator' => 
  array (
    'name' => 'hoa/iterator',
    'version' => '9999999-dev',
    'reference' => 'b080748f8eb4d79b090be7c838686632ea3a709b',
    'aliases' => 
    array (
      '@Hoa/Iterator' => $baseDir . '/vendor/hoa/iterator/Source',
      '@Hoa/Iterator/Test' => $baseDir . '/vendor/hoa/iterator/Test',
    ),
  ),
  'hoa/file' => 
  array (
    'name' => 'hoa/file',
    'version' => '9999999-dev',
    'reference' => '2c8eaece14c9371518aa481baf4e784aae543524',
    'aliases' => 
    array (
      '@Hoa/File' => $baseDir . '/vendor/hoa/file/Source',
    ),
  ),
  'hoa/ustring' => 
  array (
    'name' => 'hoa/ustring',
    'version' => '9999999-dev',
    'reference' => '5e3c789956a5c5e98c62298f3351661e7d36de39',
    'aliases' => 
    array (
      '@Hoa/Ustring' => $baseDir . '/vendor/hoa/ustring/Source',
      '@Hoa/Ustring/Bin' => $baseDir . '/vendor/hoa/ustring/Bin',
    ),
  ),
  'hoa/console' => 
  array (
    'name' => 'hoa/console',
    'version' => '9999999-dev',
    'reference' => '61a38c24df0dd20cefcd6fee4a2bb7b76d55e18e',
    'aliases' => 
    array (
      '@Hoa/Console' => $baseDir . '/vendor/hoa/console/Source',
      '@Hoa/Console/Bin' => $baseDir . '/vendor/hoa/console/Bin',
      '@Hoa/Console/Test' => $baseDir . '/vendor/hoa/console/Test',
    ),
  ),
  'codeception/codeception' => 
  array (
    'name' => 'codeception/codeception',
    'version' => '2.6.9999999.9999999-dev',
    'reference' => '6df9679eb540a155bae7951752c535cb18aea95a',
    'aliases' => 
    array (
      '@Codeception' => $baseDir . '/vendor/codeception/codeception/src/Codeception',
      '@Codeception/Extension' => $baseDir . '/vendor/codeception/codeception/ext',
    ),
  ),
  'codexten/yii-dev' => 
  array (
    'name' => 'codexten/yii-dev',
    'version' => '9999999-dev',
    'reference' => 'd720265d535f35587951b8db9ca151465085301b',
    'aliases' => 
    array (
      '@codexten/yii/dev' => $baseDir . '/vendor/codexten/yii-dev/src',
    ),
  ),
  'symfony/thanks' => 
  array (
    'name' => 'symfony/thanks',
    'version' => '1.1.0.0',
    'reference' => '9474a631b52737c623b6aeba22f00bbc003251da',
    'aliases' => 
    array (
      '@Symfony/Thanks' => $baseDir . '/vendor/symfony/thanks/src',
    ),
  ),
  'codexten/yii-cpanel-app' => 
  array (
    'name' => 'codexten/yii-cpanel-app',
    'version' => '2.9999999.9999999.9999999-dev',
    'reference' => 'c82c1a825bae39ea7923224de7da77bb05e471b6',
    'aliases' => 
    array (
      '@core' => $baseDir . '/src/core',
      '@admin' => $baseDir . '/src/admin',
      '@console' => $baseDir . '/src/console',
      '@data' => $baseDir . '/src/data',
    ),
  ),
);
