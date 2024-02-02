<?php

use app\models\Car;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Cars');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <form id="car-reserve" action="" method="post">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_car_mark',
                'value' => function (Car $model) {
                    return $model->carMark->name . ' - ' . $model->carModel->name;
                }
            ],
            [
                'attribute' => 'id_car_generation',
                'value' => function (Car $model) {
                    return $model->carGeneration->name;
                }
            ],
            [
                'attribute' => 'id_car_modification',
                'value' => function (Car $model) {
                    return $model->carModification->name;
                }
            ],
            'price:decimal',
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => function (Car $model) {
                    if (is_null($model->dt_reserved_until) || strtotime($model->dt_reserved_until) < time()) {
                        $button = Html::submitButton(Yii::t('app', 'Book now'), ['class' => 'button', 'name' => 'id', 'value' => $model->id]);
                    } else {
                        $button = Html::button(Yii::t('app', 'Booked'), ['class' => 'button-muted', 'disabled' => true]);
                    }
                    return $button;
                }
            ],
        ],
    ]); ?>
    </form>


</div>
