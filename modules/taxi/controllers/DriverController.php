<?php

namespace app\modules\taxi\controllers;

use yii\web\Controller;
use app\models\Driver;
use yii\base\Exception;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * Default controller for the `Taxi` module
 */
class DriverController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function beforeAction($action)
    {

        return parent::beforeAction($action);
    }

    /**
     * Lists all Driver models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Driver::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Driver model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    // http://localhost:8085/taxi/driver/photo-driver?id=79209798
    public function actionPhotoDriver($id)
    {
        $fileName = $id . '.jpg';
        $img = \Yii::$app->params['pathToTaxiBot'] . '/drivers/' . $fileName;
        $f = fopen($img, 'r');
        \Yii::$app->response->sendStreamAsFile($f, $fileName);
    }

    public function actionPhotoCar($id)
    {
        // http://localhost:8085/taxi/driver/photo-car?id=79209798
        $fileName = $id . '.jpg';
        $img = \Yii::$app->params['pathToTaxiBot'] . '/cars/' . $fileName;
        if (!file_exists($img)) {
            throw new Exception('File not found');
        }
        $f = fopen($img, 'r');
        \Yii::$app->response->sendStreamAsFile($f, $fileName);
    }

    /**
     * Finds the Driver model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Driver the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Driver::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
