<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarCharacteristic extends ActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return CarCharacteristic the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'car_characteristic';
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
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_characteristic' => 'ID',
            'name' => 'Название',
            'id_parent' => 'Родитель',
            'id_car_type' => 'Тип транспортного средства',
        );
    }

    public function limit($limit, $offset = null)
    {
        //$alias = $this->getTableAlias();
        if ($offset) {
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