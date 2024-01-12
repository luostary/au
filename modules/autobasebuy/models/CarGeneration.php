<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarGeneration extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_generation';
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
            array('id_car_model', 'numerical', 'integerOnly' => true),
            array('name, year_begin, year_end', 'length', 'max' => 255),
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
            'car_serie_list' => array(self::HAS_MANY, 'CarSerie', 'id_car_generation'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_generation' => 'ID',
            'id_car_model' => 'Модель автомобиля',
            'name' => 'Название Поколения модели',
            'year_begin' => 'Год начала выпуска',
            'year_end' => 'Год окончания выпуска',
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