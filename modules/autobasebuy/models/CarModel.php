<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarModel extends ActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return CarModel the static model class
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
        return 'car_model';
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
            array('id_car_mark, id_car_type', 'numerical', 'integerOnly' => true),
            array('name, description', 'length', 'max' => 255),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'car_type' => array(self::BELONGS_TO, 'CarType', 'id_car_type'),
            'car_mark' => array(self::BELONGS_TO, 'CarMark', 'id_car_mark'),
            'car_serie' => array(self::HAS_MANY, 'CarSerie', 'id_car_model'),
            'car_generation' => array(self::HAS_MANY, 'CarGeneration', 'id_car_model'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_model' => 'ID',
            'id_car_mark' => 'Марка автомобиля',
            'name' => 'Название модели',
            'description' => 'Описание модели',
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