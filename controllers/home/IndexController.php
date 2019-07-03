<?php
namespace app\controllers\home;

use Yii;
use yii\web\Controller;

use app\models\Member;

/**
 * home test controller demo
 */
class IndexController extends Controller
{
    //@Override
    public $defaultAction = "main";

    public function behaviors()
    {
        $parent_behaviors = parent::behaviors();

        $behaviors = [
            [
                'class' =>  'app\components\test_filter\TestFilter',
                'only'  =>  ['main','index']
            ],
            [
                'class' =>  'app\components\test2_filter\Test2Filter',
                'only'  =>  ['main','index']
            ]
        ];

        return array_merge($parent_behaviors,$behaviors);
    }

    public function actionMain()
    {
        return "default action";
    }

    public function actionError()
    {
        return "error";
    }

    /**
     * @Override
     */
    public function actions()
    {
        return [
            'tanyong'   =>  [
                'class' =>  'app\controllers\home\actions\TanyongAction',
                'name'  =>  '谭勇',
                'age'   =>  24
            ]
        ];
    }

    /**
     * action index
     */
    public function actionIndex($name,$age)
    {
        return "name : {$name} || age : {$age}";
    }

    /**
     * request map index-tanyong
     */
    public function actionIndexTanyong()
    {
        return "request params index-tanyong";
    }

    /**
     * 模型的使用
     *
     */
    public function actionIndex1()
    {
        $member = new Member();

        /*
        $request = Yii::$app->request;

        $member->name   = $request->get('name');
        $member->tel    = $request->get('tel');
        $member->email  = $request->get('email');
        */
        if($member->load(Yii::$app->request->get()) && $member->validate())
        {
            return  $member->name;
        }else{
            return json_encode($member->errors);
        }

        //return empty($member->email)?'email empty':"email : {$member->email}";
    }

}