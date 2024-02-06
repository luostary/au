<?php

use app\models\Car;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'responsiveWrap' => false,
        'options' => [],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_car_mark',
                'value' => function (Car $model) {
                    if ($model->getCarMark()->exists() && $model->getCarModel()->exists()) {
                        return $model->carMark->name . ' - ' . $model->carModel->name;
                    }
                }
            ],
            [
                'attribute' => 'id_car_generation',
                'value' => function (Car $model) {
                    if ($model->getCarGeneration()->exists()) {
                        return $model->carGeneration->name;
                    }
                }
            ],
            [
                'attribute' => 'id_car_modification',
                'value' => function (Car $model) {
                    if ($model->getCarModification()->exists()) {
                        return $model->carModification->name;
                    }
                }
            ],
            'is_active:boolean',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Car $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
