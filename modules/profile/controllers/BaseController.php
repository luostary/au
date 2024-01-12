<?php

namespace app\modules\profile\controllers;

use yii\web\Controller;

/**
 * Default controller for the `profile` module
 */
class BaseController extends Controller
{

    public function beforeAction($action)
    {
        $result = !\Yii::$app->user->isGuest;

        if (!$result) {
            $this->redirect('/user/login');
        }

        return $result;
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
