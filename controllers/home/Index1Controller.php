<?php
namespace app\controllers\home;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class Index1Controller extends Controller
{
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $session = Yii::$app->session;

        $session->set("name","谭勇");
        $session->set("age",24);
    }

    public function actionIndex1()
    {
        $session = Yii::$app->session;
        $info = [
            'name'  =>  $session->get('name'),
            'age'   =>  $session->get('age')
        ];

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return $info;
    }

    public function actionIndex2()
    {
        throw new NotFoundHttpException("不存在的内容",10003);
    }

    public function actionIndex3()
    {
        Yii::$app->response->format = \yii\web\response::FORMAT_HTML;

        return Yii::$app->test_component->info();
    }
}