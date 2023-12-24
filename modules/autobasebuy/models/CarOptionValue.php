<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarOptionValue extends ActiveRecord
{
    public static function tableName()
    {
        return 'car_option_value';
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
            array('id_car_option_value, id_car_option, id_car_equipment, id_car_type', 'numerical', 'integerOnly' => true),
            array('is_base', 'boolean'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'car_type' => array(self::BELONGS_TO, 'CarType', 'id_car_type'),
            'car_option' => array(self::BELONGS_TO, 'CarOption', 'id_car_option'),
            'car_equipment' => array(self::BELONGS_TO, 'CarEquipment', 'id_car_equipment'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_option_value' => 'ID',
            'is_base' => 'Стандартная',
            'id_car_option' => 'Опция',
            'id_car_equipment' => 'Комплектация',
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