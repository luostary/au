<?php

namespace app\models;

use app\modules\autobasebuy\models\CarGeneration;
use app\modules\autobasebuy\models\CarMark;
use app\modules\autobasebuy\models\CarModel;
use app\modules\autobasebuy\models\CarModification;
use app\modules\autobasebuy\models\CarSerie;

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

    const SCENARIO_MANUAL_UPDATE = 'scenarioManualUpdate';
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
            [['price'], 'number'],
            [['id_car_mark', 'id_car_model', 'id_car_generation', 'id_car_modification', 'id_car_serie', 'is_active'], 'integer'],
            [['id_car_generation', 'id_car_modification', 'id_car_serie'], 'required', 'on' => self::SCENARIO_MANUAL_UPDATE],
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
            'id_user' => 'Пользователь',
            'price' => 'Стоимость',
            'is_active' => 'Активно',
            'dt_create' => 'Дата создания',
            'dt_update' => 'Дата обновления',
        ];
    }

    public function getCarMark()
    {
        return $this->hasOne(CarMark::class, ['id_car_mark' => 'id_car_mark']);
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
        return $this->hasOne(CarModification::class, ['id_car_modification' => 'id_car_modification']);
    }

    public function getCarSerie()
    {
        return $this->hasOne(CarSerie::class, ['id_car_serie' => 'id_car_serie']);
    }
}
