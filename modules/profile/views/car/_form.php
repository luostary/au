<?php

use app\modules\autobasebuy\models\CarMark;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Car $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="car-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_car_mark')->widget(\kartik\select2\Select2::class, [
            'data' => CarMark::listAll(),
            'options' => ['prompt' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => 'Не указано'
            ],
            'pluginEvents' => [
                "change" => "function(a) {
                    $.ajax({
                        url: '/catalog/auto/get-model-list',
                        data: {
                            'id_car_mark': $(this).val(),
                        },
                        success: function (data) {
                            $('#car-id_car_model').html(data);
                        }
                    });
                }",
            ],
        ]
    ) ?>

    <?= $form->field($model, 'id_car_model')->widget(\kartik\select2\Select2::class, [
            'data' => \app\modules\autobasebuy\models\CarModel::listAll($model->id_car_mark),
            'options' => ['prompt' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => 'Не указано'
            ],
        ]
    ) ?>

    <?= $form->field($model, 'id_car_generation')->widget(\kartik\select2\Select2::class, [
            'data' => \app\modules\autobasebuy\models\CarGeneration::listAll($model->id_car_model),
            'options' => ['prompt' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => 'Не указано'
            ],
        ]
    ) ?>

    <?= $form->field($model, 'id_car_serie')->widget(\kartik\select2\Select2::class, [
            'data' => \app\modules\autobasebuy\models\CarSerie::listAll($model->id_car_model, $model->id_car_generation),
            'options' => ['prompt' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => 'Не указано'
            ],
        ]
    ) ?>

    <?= $form->field($model, 'id_car_modification')->widget(\kartik\select2\Select2::class, [
            'data' => \app\modules\autobasebuy\models\CarModification::listAll($model->id_car_serie, $model->id_car_model),
            'options' => ['prompt' => ''],
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => 'Не указано'
            ],
        ]
    ) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
