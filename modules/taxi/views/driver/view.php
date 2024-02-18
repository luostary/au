<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Driver $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Drivers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="driver-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <table class="table table-striped">
        <tr>
            <td style="vertical-align: top; text-align: center;">
                <img src="/taxi/driver/photo-driver?id=<?= $model->tg_user_id ?>" alt="" style="width: 350px;">
                <br/>
                <br/>
                <img src="/taxi/driver/photo-car?id=<?= $model->tg_user_id ?>" alt="" style="width: 350px;">
            </td>
            <td>
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'name:ntext',
                        'phone:ntext',
                        'car_number:ntext',
                        'car_photo',
                        [
                            'attribute' => 'status',
                            'format' => 'html',
                            'value' => function (\app\models\Driver $model) {
                                switch ($model->status) {
                                    case 'online':
                                        $class = 'badge badge-success';
                                        break;
                                    case 'offline':
                                        $class = 'badge badge-danger';
                                        break;
                                    default:
                                        $class = 'badge badge-default';
                                        break;

                                }

                                return Html::tag('span', $model->status, ['class' => $class]);
                            }
                        ],
                        'balance:decimal',
                        'wallet:ntext',
                        'latitude',
                        'longitude',
                        'dt_create:date',
                        'dt_update:date',
                        [
                            'label' => 'Последнее указанное место на карте',
                            'format' => 'html',
                            'value' => function (\app\models\Driver $model) {
                                $href = "https://www.google.com/maps/place/" . $model->latitude . "'00.0%22N+" . $model->longitude . "'00.0%22E/@" . $model->latitude . "," . $model->longitude . ",19.7z/data=!4m4!3m3!8m2!3d35!4d33?entry=ttu";
                                return Html::a('Посмотреть', $href);
                            }
                        ],
                    ],
                ]) ?>
            </td>
        </tr>
    </table>
</div>
