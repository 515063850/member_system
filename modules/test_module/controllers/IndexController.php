<?php
namespace app\modules\test_module\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public $defaultAction = "index";

    public function behaviors()
    {
        $parent_behaviors = parent::behaviors();

        $behaviors = [
            'index_behaviors'   =>  [
                'class' =>  'app\modules\test_module\behaviors\IndexBehavior'
            ]
        ];

        return array_merge($behaviors,$parent_behaviors);
    }

    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_HTML;

        return [
            'code'  =>  'ok',
            'msg'   =>  'handler success'
        ];
    }
}