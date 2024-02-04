<?php

/** @var \app\models\CarSearch $searchModel */

$form = \yii\bootstrap\ActiveForm::begin([]); ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <?php echo \app\widgets\selectCarMark::widget(['form' => $form, 'model' => $searchModel]); ?>
        </div>
        <div class="col-md-2">
            <?php echo \app\widgets\selectCarModel::widget(['form' => $form, 'model' => $searchModel]); ?>
        </div>
        <div class="col-md-2">
            <?php echo \app\widgets\selectCarGeneration::widget(['form' => $form, 'model' => $searchModel]); ?>
        </div>
        <div class="col-md-2">
            <?php echo \app\widgets\selectCarSerie::widget(['form' => $form, 'model' => $searchModel]); ?>
        </div>
        <div class="col-md-2">
            <?php echo \app\widgets\selectCarModification::widget(['form' => $form, 'model' => $searchModel]); ?>
        </div>
    </div>
</div>



<?php \yii\bootstrap\ActiveForm::end(); ?>
