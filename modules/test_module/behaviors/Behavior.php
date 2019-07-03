<?php
namespace app\modules\test_module\behaviors;

use Yii;
use yii\base\ActionFilter;

class Behavior extends ActionFilter
{
    public function beforeAction($action)
    {
        echo "module before action <br />";
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        echo "module after action <br />";
        return parent::afterAction($action, $result); // TODO: Change the autogenerated stub
    }
}