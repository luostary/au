<?php

namespace app\controllers;

use app\models\Car;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\VerbFilter;

class CarController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $cars = Car::find()->andWhere(['is_active' => 1]);

        $dataProvider = new ActiveDataProvider([
            'query' => $cars
        ]);

        if (\Yii::$app->request->isPost) {
            $data = \Yii::$app->request->post();
            $car = Car::findOne((int)$data['id']);
            $reservedPeriod = 30;
            $car->updateAttributes(['dt_reserved_until' => date('Y-m-d H:i:s', time() + $reservedPeriod)]);
            $this->redirect('');
        }

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}
