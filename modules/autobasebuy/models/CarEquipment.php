<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarEquipment extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_equipment';
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
            array('name', 'required'),
            array('id_car_modification, id_car_type', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('price_min, year', 'length', 'max' => 10),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'car_type' => array(self::BELONGS_TO, 'CarType', 'id_car_type'),
            'car_modification' => array(self::BELONGS_TO, 'CarModification', 'id_car_modification'),
            'car_option_value_list' => array(self::HAS_MANY, 'CarOptionValue', 'id_car_equipment'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_equipment' => 'ID',
            'id_car_modification' => 'Модификация',
            'name' => 'Название модификации',
            'price_min' => 'Минимальная цена',
            'year' => 'Год комплектации',
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