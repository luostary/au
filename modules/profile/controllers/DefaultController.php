<?php

namespace app\modules\profile\controllers;

use yii\web\Controller;

/**
 * Default controller for the `profile` module
 */
class DefaultController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
