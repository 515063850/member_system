<?php
namespace app\components\test_component;

use Yii;
use yii\base\BaseObject;

class TestComponent extends BaseObject
{
    private $name;
    private $age;

    public function info()
    {
        return "name : {$this->name} ; age : {$this->age}";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

}