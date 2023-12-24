<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarType extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_type';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 255),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'car_mark_list' => array(self::HAS_MANY, 'CarMark', 'id_car_type'),
            'car_model_list' => array(self::HAS_MANY, 'CarModel', 'id_car_type'),
            'car_serie_list' => array(self::HAS_MANY, 'CarSerie', 'id_car_type'),
            'car_generation_list' => array(self::HAS_MANY, 'CarGeneration', 'id_car_type'),
            'car_modification_list' => array(self::HAS_MANY, 'CarModification', 'id_car_type'),
            'car_equipment_list' => array(self::HAS_MANY, 'CarEquipment', 'id_car_type'),
            'car_characteristic_list' => array(self::HAS_MANY, 'CarCharacteristic', 'id_car_type'),
            'car_characteristic_value_list' => array(self::HAS_MANY, 'CarCharacteristicValue', 'id_car_type'),
            'car_option_list' => array(self::HAS_MANY, 'CarOption', 'id_car_type'),
            'car_option_value_list' => array(self::HAS_MANY, 'CarOptionValue', 'id_car_type'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_type' => 'ID',
            'name' => 'Название',
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