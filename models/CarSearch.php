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

        if (!empty($params['is_active'])) {
            $query->andWhere(['is_active' => $params['is_active']]);
        }

        if (!empty($params['id_car_mark'])) {
            $query->andWhere(['id_car_mark' => $params['id_car_mark']]);
        }

        if (!empty($params['id_car_model'])) {
            $query->andWhere(['id_car_model' => $params['id_car_model']]);
        }

        if (!empty($params['id_car_generation'])) {
            $query->andWhere(['id_car_generation' => $params['id_car_generation']]);
        }

        if (!empty($params['priceMin'])) {
            $query->andWhere(['>=', 'price', $params['priceMin']]);
        }

        if (!empty($params['priceMax'])) {
            $query->andWhere(['<=', 'price', $params['priceMax']]);
        }

        return new ActiveDataProvider(['query' => $query]);
    }
}
