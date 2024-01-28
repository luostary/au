<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarModel extends ActiveRecord
{
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
            array(['id_car_mark', 'id_car_type'], 'integer', 'integerOnly' => true),
            array('name', 'string', 'max' => 255),
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

    public static function listAll($id_car_mark = 0)
    {
        $result = self::find()->select('name')->indexBy('id_car_model');

        if ($id_car_mark) {
            $result = $result->andWhere(['id_car_mark' => $id_car_mark]);
        }
        return $result->column();
    }
}