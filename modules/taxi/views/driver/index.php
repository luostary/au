<?php

use app\models\Driver;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = Yii::t('app', 'Drivers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name:ntext',
            'phone:ntext',
            //'car_number:ntext',
            //'car_photo',
            //'status:ntext',
            //'balance',
            //'wallet:ntext',
            //'latitude',
            //'longitude',
            //'tg_first_name:ntext',
            //'dt_create',
            //'dt_update',
            //'referer_user_id',
            //'referer_payed',
            [
                'label' => 'Фото автомобиля',
                'format' => 'html',
                'contentOptions' => [
                    'class' => 'text-center'
                ],
                'value' => function (Driver $model) {
                    if (!$model->hasPhotoCar()) {
                        return '';
                    }
                    return '<img src="/taxi/driver/photo-car?id=' . $model->tg_user_id . '" alt="" style="width: 240px;">';
                }
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Driver $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
