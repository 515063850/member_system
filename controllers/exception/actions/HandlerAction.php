<?php

namespace app\controllers\exception\actions;

use Yii;
use yii\base\Action;
class HandlerAction extends Action
{
    /**
     * @Override
     */
    public function run()
    {
        Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;

        $http_type = "get";
        if(Yii::$app->request->isAjax)
        {
            $http_type = "ajax";
        }

        $exception = Yii::$app->errorHandler->exception;
        return [
            'code'              =>  $exception->getCode(),
            'msg'               =>  $exception->getMessage(),
            'http_type'         =>  $http_type,
            'exception_type'    =>  "exception file : " . $exception->getFile() . "line : " . $exception->getLine()
        ];
    }
}