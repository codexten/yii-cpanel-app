<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:35 PM
 */

return [
    'name' => 'Starter App',
    'components' => [
        'filedb' => [
            'class' => 'yii2tech\filedb\Connection',
            'path' => '@app/data/static',
        ],
    ],
];