<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarOption extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_option';
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
            array('id_parent, id_car_type', 'numerical', 'integerOnly' => true),
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
            'car_option_value_list' => array(self::HAS_MANY, 'CarOptionValue', 'id_car_type'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_option' => 'ID',
            'name' => 'Название',
            'id_parent' => 'Родитель',
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