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
use yii\helpers\Html;
use Yii;

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
            $carTypeList = CarType::find()->andWhere([
                'IN', 'id_car_type', $baseIdArray
            ])->all();
        } else {
            $carTypeList = CarType::find()->all();
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

    public function actionGetMarkList($id_car_type){
        if (Yii::$app->request->isAjax && $this->checkHost() ) {
            $idCarType = $id_car_type;

            if ($idCarType !== null) {
                $carMarkList = CarMark::find()->andWhere(array('id_car_type' => $idCarType))->all();
                $result = Html::tag('option', Html::encode('Выберите Марку'), ['value' => '']);
                foreach ($carMarkList as $carMark) {
                    $result .= Html::tag('option', Html::encode($carMark->name), ['value' => $carMark->primaryKey]);
                }
                echo $result;
            }
        }
    }

    public function actionGetModelList($id_car_mark){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarMark = $id_car_mark;
            if ($idCarMark !== null) {
                $carModelList = CarModel::find()->andWhere(array('id_car_mark' => $idCarMark))->all();
                $result = Html::tag('option', Html::encode('Выберите Модель'), ['value' => '']);
                foreach ($carModelList as $carModel) {
                    $result .= Html::tag('option', Html::encode($carModel->name), ['value' => $carModel->primaryKey]);
                }
                echo $result;
            }
        }
    }

    public function actionGetGenerationList($id_car_model){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarModel = $id_car_model;
            if ($idCarModel !== null) {
                $carGenerationList = CarGeneration::find()->andWhere(array('id_car_model' => $idCarModel))->all();
                $result = Html::tag('option', Html::encode('-'), ['value' => '']);
                if ( count($carGenerationList) ) $result = Html::tag('option', Html::encode('Выберите Поколение'), ['value' => '']);
                foreach ($carGenerationList as $carGeneration) {
                    $yearStr = '';
                    if ( $carGeneration->year_begin ){
                        $yearStr = " [".$carGeneration->year_begin." - ".( $carGeneration->year_end ? $carGeneration->year_end : "н.в." )."]";
                    }

                    $result .= Html::tag('option', Html::encode($carGeneration->name.$yearStr), ['value' => $carGeneration->primaryKey]);
                }
                echo $result;
            }
        }
    }

    public function actionGetSerieList($id_car_model = null, $id_car_generation = null){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarModel = $id_car_model;
            $idCarGeneration = $id_car_generation;

            if (( $idCarModel === null ) && ( $idCarGeneration === null )) return;

            $cr = [];

            if ($idCarModel !== null) {
                $cr['id_car_model'] = $idCarModel;
            }
            if ($idCarGeneration !== null) {
                $cr['id_car_generation'] = $idCarGeneration;
            }

            $carSerieList = CarSerie::findAll($cr);

            $result = Html::tag('option', Html::encode('Выберите Серию'), ['value' => '']);
            foreach ($carSerieList as $carSerie) {
                $result .= Html::tag('option', Html::encode($carSerie->name), ['value' => $carSerie->primaryKey]);
            }
            echo $result;
        }
    }

    public function actionGetModificationList($id_car_serie){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarSerie = $id_car_serie;
            if ($idCarSerie !== null) {
                $carModificationList = CarModification::find()->andWhere(['id_car_serie' => $idCarSerie])->all();
                $result = Html::tag('option', Html::encode('Выберите Модификацию'), ['value' => '']);
                foreach ($carModificationList as $carModification) {
                    $result .= Html::tag('option', Html::encode($carModification->name), ['value' => $carModification->primaryKey]);
                }
                echo $result;
            }
        }
    }

    public function actionGetEquipmentList($id_car_modification){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarModification = $id_car_modification;
            if ($idCarModification !== null) {
                $carEquipmentList = CarEquipment::find()->where(['id_car_modification' => $idCarModification])->all();
                $result = Html::tag('option', Html::encode('-'), ['value' => '']);
                if ( count($carEquipmentList) ) $result = Html::tag('option', Html::encode('Выберите Комплектацию'), ['value' => '']);
                foreach ($carEquipmentList as $carEquipment) {
                    $result .= Html::tag('option', Html::encode($carEquipment->name), ['value' => $carEquipment->primaryKey]);
                }
                return $result;
            }
        }
    }

    public function actionGetCharacteristicValueList($id_car_modification){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarModification = $id_car_modification;
            if ($idCarModification !== null) {
                /** @var CarCharacteristicValue[] $carCharacteristicValueList */
                $carCharacteristicValueList = CarCharacteristicValue::find()
                    ->joinWith(['carCharacteristic'])
                    ->andWhere(['id_car_modification' => $idCarModification])->all();
                $result = '';
                foreach ($carCharacteristicValueList as $carCharacteristicValue) {
                    $charName = $carCharacteristicValue->carCharacteristic->name;
                    $result .= '<div class="row"><div class="col-md-6">'.Html::encode($charName).'</div><div class="col-md-6">'.Html::encode($carCharacteristicValue->value).' '.Html::encode($carCharacteristicValue->unit).'</div></div>';
                }
                return $result;
            }
        }
    }

    public function actionGetOptionValueList($id_car_equipment){
        if (Yii::$app->request->isAjax && $this->checkHost()) {
            $idCarEquipment = $id_car_equipment;
            if ($idCarEquipment !== null) {
                $carOptionValueList = CarOptionValue::find()->with('carOption')->andWhere(['id_car_equipment' => $idCarEquipment])->all();
                $result = '';
                foreach ($carOptionValueList as $carOptionValue) {
                    $optionName = $carOptionValue->car_option->name;
                    $result .= '<div class="row"><div class="col-md-6">'.Html::encode($optionName).'</div><div class="col-md-6">'.Html::encode( $carOptionValue->is_base ? 'стандартная' : 'дополнительная').'</div></div>';
                }
                return $result;
            }
        }
    }

    public function checkHost(){
        return true;
        if ( Yii::$app->request->getUserHost() == self::VALID_HOST_NAME ) return true;
        else return false;
    }

    public function actionSdk() {
        return $this->renderPartial('sdk', []);
    }
}
