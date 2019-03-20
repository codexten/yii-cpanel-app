<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 22/2/19
 * Time: 10:34 PM
 */

namespace admin\controllers;


use codexten\yii\web\Controller;
use codexten\yii\web\CrudController;
use core\models\DomainModel;

class DomainController extends Controller
{
    public $modelClass = DomainModel::class;

    public function actionIndex()
    {
        $model = new DomainModel();
        $model->doamin = 'Test';
       echo '<pre>';
       var_dump( $model->save() );
       echo '</pre>';
       exit;
    }

}