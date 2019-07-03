<?php
namespace app\components\test_filter;

use Yii;
use yii\base\ActionFilter;
use yii\helpers\Url;

class TestFilter extends ActionFilter
{

    public function beforeAction($action)
    {
        $request = Yii::$app->request;

        $test_data = json_encode($request->get(),JSON_UNESCAPED_UNICODE);

        //http://www.tanyong.com/index.php?r=home/index/index&name=%E8%B0%AD%E5%8B%87&age=24
        $content = Url::to(['/home/index/index','name'=>'谭勇','age'=>24],true);
        echo $content;
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {


        return parent::afterAction($action, $result);
    }

}