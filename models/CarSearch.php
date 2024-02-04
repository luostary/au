<?php

namespace app\models;

use app\modules\autobasebuy\models\CarGeneration;
use app\modules\autobasebuy\models\CarMark;
use app\modules\autobasebuy\models\CarModel;
use app\modules\autobasebuy\models\CarModification;
use app\modules\autobasebuy\models\CarSerie;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "car".
 *
 * @property string $dt_reserved_until
 * @property int $id
 * @property int $id_car_mark
 * @property int $id_car_model
 * @property int $id_car_generation
 * @property int $id_car_modification
 * @property int $id_car_serie
 */
class CarSearch extends Car
{
    public function search($params)
    {
        $query = Car::find();
        return new ActiveDataProvider(['query' => $query]);
    }
}
