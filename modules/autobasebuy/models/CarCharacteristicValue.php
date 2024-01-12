<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarCharacteristicValue extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_characteristic_value';
    }
    public function getDbConnection()
    {
        return Yii::app()->dbAuto;
    }
    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('id_car_characteristic_value, id_car_modification, id_car_type', 'numerical', 'integerOnly' => true),
            array('value, unit', 'length', 'max' => 255),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'car_type' => array(self::BELONGS_TO, 'CarType', 'id_car_type'),
            'car_modification'   => array(self::BELONGS_TO, 'CarModification', 'id_car_modification'),
        );
    }

    public function getCarCharacteristic()
    {
        return $this->hasOne(CarCharacteristic::class, ['id_car_characteristic' => 'id_car_characteristic']);
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_characteristic' => 'ID',
            'value' => 'Значение',
            'unit' =>  'Еденица измерения',
            'id_characteristic' =>   'Характеристика',
            'id_car_modification' => 'Модификация',
            'id_car_type' => 'Тип транспортного средства',
        );
    }

    public function limit($limit, $offset = null) {
        //$alias = $this->getTableAlias();
        if ( $offset ){
            $this->getDbCriteria()->mergeWith(array(
                'limit' => $limit,
                'offset' => $offset,
            ));
        } else {
            $this->getDbCriteria()->mergeWith(array(
                'limit' => $limit,
            ));
        }
        return $this;
    }
}