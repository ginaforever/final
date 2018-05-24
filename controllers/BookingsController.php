<?php

namespace app\controllers;
use yii;
use app\models\Bookings;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class BookingsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Bookings;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['bookings/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Bookings::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('bookings','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/bookings/index']);
    }

    public function actionIndex()
    {
        $pro = Bookings::find()->orderBy('id')->all();
        
        return $this->render('index',['pro'=>$pro]);

    }

    public function actionUpdate($id)
    {
        $model = Bookings::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/bookings/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Bookings::findOne($id);

        return $this->render('view',compact('model'));
    }

}