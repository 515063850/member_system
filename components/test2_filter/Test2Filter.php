<?php
namespace app\components\test2_filter;

use Yii;
use yii\base\ActionFilter;
class Test2Filter extends ActionFilter
{
    public function beforeAction($action)
    {
        var_dump("current filter test2");
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        return parent::afterAction($action, $result);
    }
}