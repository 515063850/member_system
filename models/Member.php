<?php

namespace app\models;

use yii\base\Model;

class Member extends Model
{
    public $id;

    public $name;

    public $tel;

    public $email;

    public $update;

    public function rules()
    {
        return [
            [['name','tel','email'],'required'],
            ['email','email']
        ];
    }


}