<?php

use app\models\Driver;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

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
            ['class' => 'yii\grid\SerialColumn'],

            'name:ntext',
            'phone:ntext',
            [
                'attribute' => 'latitude',
                'format' => 'html',
                'value' => function (Driver $model) {
                    if ($model->latitude && $model->longitude) {
                        return 'Есть точка на карте';
                    }
                }
            ],
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
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Driver $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => 'Фото водителя',
                'format' => 'html',
                'contentOptions' => [
                    'class' => 'text-center'
                ],
                'value' => function ($model) {
                    $file = 'http://localhost:8085/taxi/driver/photo-driver?id=' . $model->tg_user_id;
                    if (!$model->car_photo) {
                        return '';
                    }
                    return '<img src="' . $file . '" alt="" style="width: 240px;">';
                }
            ],
        ],
    ]); ?>


</div>
