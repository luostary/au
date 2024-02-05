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
    public function rules()
    {
        return [
            ['id_car_model', 'string']
        ];
    }
    public function search($params)
    {
        $query = Car::find();

        $carSearch = (!empty($params)) ? $params['CarSearch'] : [];

        if ($carSearch['id_car_mark']) {
            $query->andWhere(['id_car_mark' => $carSearch['id_car_mark']]);
        }

        if ($carSearch['id_car_model']) {
            $query->andWhere(['id_car_model' => $carSearch['id_car_model']]);
        }

        if ($carSearch['id_car_generation']) {
            $query->andWhere(['id_car_generation' => $carSearch['id_car_generation']]);
        }

        if ($carSearch['priceMin']) {
            $query->andWhere(['>=', 'price', $carSearch['priceMin']]);
        }

        if ($carSearch['priceMax']) {
            $query->andWhere(['<=', 'price', $carSearch['priceMax']]);
        }

        return new ActiveDataProvider(['query' => $query]);
    }
}
