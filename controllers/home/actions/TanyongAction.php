<?php
namespace app\controllers\home\actions;

use yii\base\Action;
class TanyongAction extends Action
{

    private $name;
    private $age;

    public function run()
    {
        return "action tanyong run || name : ".$this->getName()." age : ".$this->getAge();
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