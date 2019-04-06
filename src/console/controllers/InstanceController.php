<?php

namespace console\controllers;


use console\components\Instance;
use yii\console\Controller;

class InstanceController extends Controller
{
    public function actionChangeVersion($code, $version)
    {
        $code = explode('/', $code);
        $instance = new Instance($code[0], $code[1]);
        $instance->changeVersion($version);
    }

    public function actionIndex()
    {

    }
}