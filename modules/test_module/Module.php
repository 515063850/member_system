<?php
namespace app\modules\test_module;

use Yii;

class Module extends \yii\base\Module
{
    private $name,$age;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function init()
    {
        parent::init();

        $this->controllerNamespace = 'app\modules\test_module\controllers';

        $this->attachBehavior('behavior','app\modules\test_module\behaviors\Behavior');

        Yii::$app->attachBehavior("app_behavior",'app\modules\test_module\behaviors\AppBehavior');
    }
}