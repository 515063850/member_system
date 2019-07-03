<?php

namespace app\controllers\exception;

use Yii;
use yii\web\Controller;

class ExceptionController extends Controller
{

    public function actions()
    {
        return [
            'index' =>  [
                'class' =>  'app\controllers\exception\actions\HandlerAction'
            ]
        ];
    }

}