<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 20/3/19
 * Time: 10:17 PM
 */

namespace core\models;


class DomainModel extends \yii2tech\filedb\ActiveRecord
{
    public static function fileName()
    {
        return 'Domain';
    }
}