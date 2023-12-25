<?php

namespace app\modules\autobasebuy\controllers;

use app\modules\autobasebuy\models\CarType;
use app\modules\autobasebuy\models\CarCharacteristicValue;
use app\modules\autobasebuy\models\CarEquipment;
use app\modules\autobasebuy\models\CarGeneration;
use app\modules\autobasebuy\models\CarMark;
use app\modules\autobasebuy\models\CarModel;
use app\modules\autobasebuy\models\CarModification;
use app\modules\autobasebuy\models\CarOptionValue;
use app\modules\autobasebuy\models\CarSerie;

class AutoController extends \yii\web\Controller
{
    const VALID_HOST_NAME = 'api.basebuy.ru';

    public function actionIndex()
    {
        // http://autoparser.hm/autobasebuy/auto/index/

        $carTypeList   = null;
        $carMarkList   = null;
        $carModelList  = null;
        $carGenerationList   = null;
        $carSerieList  = null;
        $carModificationList = null;
        $carEquipmentList = null;
        $carCharacteristicValueList= null;
        $carOptionValueList = null;

        $base = null;
        $baseIdArray = [];
        if ( array_key_exists('base', $_GET) ){
            $base = $_GET['base'];
        }
        if ( $base == 'auto'){
            $baseIdArray = [1];
        } elseif ( $base == 'truck' ){
            $baseIdArray = [2, 3, 4, 5, 6];
        } elseif ( $base == 'moto' ){
            $baseIdArray = [20, 21, 22, 23, 24, 25, 26];
        } elseif ( $base == 'retro' ){
            $baseIdArray = [16];
        } elseif ( $base == 'spec' ){
            $baseIdArray = [8, 9, 10, 11, 12, 13, 14, 15];
        } elseif ( $base == 'velo' ){
            $baseIdArray = [34];
        } elseif ( $base == 'voda' ){
            $baseIdArray = [27, 28, 29, 30, 31];
        } elseif ( $base == 'armour' ){
            $baseIdArray = [7];
        } elseif ( $base == 'avia' ){
            $baseIdArray = [32, 33];
        } elseif ( $base == 'autodom' ){
            $baseIdArray = [17, 18, 19];
        }

        $carTypeList = null;
        if ( $base && count($baseIdArray) ) {
            $carTypeList = CarType::find()->all(
                'id_car_type IN ('.implode(',', $baseIdArray).')',
                []
            );
        } else {
//            $carTypeList = CarType::find()->all();
            $carTypeList = CarType::findAll([]);
        }

        return $this->render('index', array(
            'carTypeList'  => $carTypeList,
            'carMarkList'  => $carMarkList,
            'carModelList' => $carModelList,
            'carGenerationList'   => $carGenerationList,
            'carSerieList' => $carSerieList,
            'carModificationList' => $carModificationList,
            'carEquipmentList' => $carEquipmentList,
            'carCharacteristicValueList' => $carCharacteristicValueList,
            'carOptionValueList' => $carOptionValueList,
        ));
    }

    public function actionGetMarkList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost() ) {
            $idCarType = Yii::app()->request->getParam('id_car_type');

            if ($idCarType !== null) {
                $carMarkList = CarMark::model()->findAllByAttributes(array('id_car_type' => $idCarType));
                $result = CHtml::tag('option', ['value' => 0], CHtml::encode('Выберите Марку'), true);
                foreach ($carMarkList as $carMark) {
                    $result .= CHtml::tag('option', ['value' => $carMark->primaryKey], CHtml::encode($carMark->name), true);
                }
                echo $result;
            }
        }
    }

    public function actionGetModelList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarMark = Yii::app()->request->getParam('id_car_mark');
            if ($idCarMark !== null) {
                $carModelList = CarModel::model()->findAllByAttributes(array('id_car_mark' => $idCarMark));
                $result = CHtml::tag('option', ['value' => 0], CHtml::encode('Выберите Модель'), true);
                foreach ($carModelList as $carModel) {
                    $result .= CHtml::tag('option', ['value' => $carModel->primaryKey], CHtml::encode($carModel->name), true);
                }
                echo $result;
            }
        }
    }

    public function actionGetGenerationList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarModel = Yii::app()->request->getParam('id_car_model');
            if ($idCarModel !== null) {
                $carGenerationList = CarGeneration::model()->findAllByAttributes(array('id_car_model' => $idCarModel));
                $result = CHtml::tag('option', ['value' => 0], CHtml::encode('-'), true);
                if ( count($carGenerationList) ) $result = CHtml::tag('option', ['value' => 0], CHtml::encode('Выберите Поколение'), true);
                foreach ($carGenerationList as $carGeneration) {
                    $yearStr = '';
                    if ( $carGeneration->year_begin ){
                        $yearStr = " [".$carGeneration->year_begin." - ".( $carGeneration->year_end ? $carGeneration->year_end : "н.в." )."]";
                    }

                    $result .= CHtml::tag('option', ['value' => $carGeneration->primaryKey], CHtml::encode($carGeneration->name.$yearStr), true);
                }
                echo $result;
            }
        }
    }

    public function actionGetSerieList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarModel = Yii::app()->request->getParam('id_car_model');
            $idCarGeneration = Yii::app()->request->getParam('id_car_generation');

            if (( $idCarModel === null ) && ( $idCarGeneration === null )) return;

            $cr = new CDbCriteria;

            if ($idCarModel !== null) {
                $cr->addCondition('id_car_model = :ID_CAR_MODEL');
                $cr->params[':ID_CAR_MODEL'] = $idCarModel;
            }
            if ($idCarGeneration !== null) {
                $cr->addCondition('id_car_generation = :ID_CAR_GENERATION');
                $cr->params[':ID_CAR_GENERATION'] = $idCarGeneration;
            }

            $carSerieList = CarSerie::findAll($cr);

            $result = CHtml::tag('option', ['value' => 0], CHtml::encode('Выберите Серию'), true);
            foreach ($carSerieList as $carSerie) {
                $result .= CHtml::tag('option', ['value' => $carSerie->primaryKey], CHtml::encode($carSerie->name), true);
            }
            echo $result;
        }
    }

    public function actionGetModificationList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarSerie = Yii::app()->request->getParam('id_car_serie');
            if ($idCarSerie !== null) {
                $carModificationList = CarModification::model()->findAllByAttributes(array('id_car_serie' => $idCarSerie));
                $result = CHtml::tag('option', ['value' => 0], CHtml::encode('Выберите Модификацию'), true);
                foreach ($carModificationList as $carModification) {
                    $result .= CHtml::tag('option', ['value' => $carModification->primaryKey], CHtml::encode($carModification->name), true);
                }
                echo $result;
            }
        }
    }

    public function actionGetEquipmentList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarModification = Yii::app()->request->getParam('id_car_modification');
            if ($idCarModification !== null) {
                $carEquipmentList = CarEquipment::model()->findAllByAttributes(array('id_car_modification' => $idCarModification));
                $result = CHtml::tag('option', ['value' => 0], CHtml::encode('-'), true);
                if ( count($carEquipmentList) ) $result = CHtml::tag('option', ['value' => 0], CHtml::encode('Выберите Комлпектацию'), true);
                foreach ($carEquipmentList as $carEquipment) {
                    $result .= CHtml::tag('option', ['value' => $carEquipment->primaryKey], CHtml::encode($carEquipment->name), true);
                }
                echo $result;
            }
        }
    }

    public function actionGetCharacteristicValueList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarModification = Yii::app()->request->getParam('id_car_modification');
            if ($idCarModification !== null) {
                $carCharacteristicValueList = CarCharacteristicValue::model()->with('car_characteristic')->findAllByAttributes(array('id_car_modification' => $idCarModification));
                $result = '';
                foreach ($carCharacteristicValueList as $carCharacteristicValue) {
                    $charName = $carCharacteristicValue->car_characteristic->name;
                    $result .= '<div class="row"><div class="col-md-6">'.CHtml::encode($charName).'</div><div class="col-md-6">'.CHtml::encode($carCharacteristicValue->value).' '.CHtml::encode($carCharacteristicValue->unit).'</div></div>';
                }
                echo $result;
            }
        }
    }

    public function actionGetOptionValueList(){
        if (Yii::app()->request->isAjaxRequest && $this->checkHost()) {
            $idCarEquipment = Yii::app()->request->getParam('id_car_equipment');
            if ($idCarEquipment !== null) {
                $carOptionValueList = CarOptionValue::model()->with('car_option')->findAllByAttributes(array('id_car_equipment' => $idCarEquipment));
                $result = '';
                foreach ($carOptionValueList as $carOptionValue) {
                    $optionName = $carOptionValue->car_option->name;
                    $result .= '<div class="row"><div class="col-md-6">'.CHtml::encode($optionName).'</div><div class="col-md-6">'.CHtml::encode( $carOptionValue->is_base ? 'стандартная' : 'дополнительная').'</div></div>';
                }
                echo $result;
            }
        }
    }

    public function checkHost(){
        return true;
        if ( Yii::app()->request->getUserHost() == self::VALID_HOST_NAME ) return true;
        else return false;
    }

    public function actionSdk() {
        return $this->renderPartial('sdk', []);
    }
}