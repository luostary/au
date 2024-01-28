<?php

namespace app\modules\autobasebuy\models;

use yii\db\ActiveRecord;

class CarSerie extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'car_serie';
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
            array('name', 'length', 'max' => 255),
        );
    }

    public function getCarType()
    {
        return $this->hasOne(CarType::class, ['id_car_type' => 'id_car_type']);
    }

    public function getCarModel()
    {
        return $this->hasOne(CarModel::class, ['id_car_model' => 'id_car_model']);
    }

    public function getCarGeneration()
    {
        return $this->hasOne(CarGeneration::class, ['id_car_generation' => 'id_car_generation']);
    }

    public function getCarModification()
    {
        return $this->hasMany(CarModification::class, ['id_car_modification' => 'id_car_modification']);
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_car_serie' => 'ID',
            'id_car_model' => 'Модель',
            'id_car_generation' => 'Поколение',
            'name' => 'Название серии',
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

    public static function listAll($id_car_model = 0, $id_car_generation = 0)
    {
        $result = self::find()->select('name')->indexBy('id_car_serie');

        if ($id_car_model) {
            $result = $result->andWhere(['id_car_model' => $id_car_model]);
        }

        if ($id_car_generation) {
            $result = $result->andWhere(['id_car_generation' => $id_car_generation]);
        }

        return $result->column();
    }

}