<?php

namespace app\modules\taxi;

use yii\base\Exception;
use Yii;

/**
 * Taxi module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\taxi\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if (!\Yii::$app->params['enableTaxiModule']) {
            throw new \yii\db\Exception('Module TaxiBot is disabled');
        }

        if (empty(Yii::$app->params['pathToTaxiBot'])) {
            throw new Exception('Parameter pathToTaxiBot is empty');
        }

        parent::init();
        // custom initialization code goes here
    }
}
