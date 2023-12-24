<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarModification extends ActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return CarModification the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_modification';
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
            array('name, id_car_serie', 'required'),
            array('id_car_model, id_car_serie, id_car_type', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'car_type' => array(self::BELONGS_TO, 'CarType', 'id_car_type'),
            'car_model' => array(self::BELONGS_TO, 'CarModel', 'id_car_model'),
            'car_serie' => array(self::BELONGS_TO, 'CarSerie', 'id_car_serie'),
            'car_equipment_list' => array(self::HAS_MANY, 'CarEquipment', 'id_car_modification'),
            'car_characteristic_value_list' => array(self::HAS_MANY, 'CarCharacteristicValue', 'id_car_modification'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_modification' => 'ID',
            'id_car_model' => 'Модель',
            'id_car_serie' => 'Серия',
            'name' => 'Название модификации',
            'description' => 'Описание',
            'id_car_type' => 'Тип транспортного средства',
        );
    }

    public function defaultScope()
    {
        return array(
            'order' => 'name ASC',
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