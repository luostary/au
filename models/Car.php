<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property int $id_car_mark
 * @property int $id_car_model
 * @property int $id_car_generation
 * @property int $id_car_modification
 * @property int $id_car_serie
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_car_mark', 'id_car_model'], 'required'],
            [['id_car_mark', 'id_car_model', 'id_car_generation', 'id_car_modification', 'id_car_serie'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'id_car_mark' => 'Марка',
            'id_car_model' => 'Модель',
            'id_car_generation' => 'Поколение',
            'id_car_modification' => 'Модификация',
            'id_car_serie' => 'Серия',
        ];
    }
}
