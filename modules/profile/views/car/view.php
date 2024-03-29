<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Car;

/** @var yii\web\View $this */
/** @var app\models\Car $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="car-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'id_car_mark',
                'value' => function (Car $model) {
                    if ($model->getCarMark()->exists()) {
                        return $model->carMark->name;
                    }
                }
            ],
            [
                'attribute' => 'id_car_model',
                'value' => function (Car $model) {
                    if ($model->getCarModel()->exists()) {
                        return $model->carModel->name;
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
                'attribute' => 'id_car_serie',
                'value' => function (Car $model) {
                    if ($model->getCarSerie()->exists()) {
                        return $model->carSerie->name;
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
            'price',
            'is_active:boolean',
            'dt_create',
            'dt_update',
        ],
    ]) ?>

</div>
