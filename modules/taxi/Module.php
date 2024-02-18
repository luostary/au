<?php

namespace app\modules\taxi;

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

        parent::init();
        // custom initialization code goes here
    }
}
