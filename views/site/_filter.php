<?php

/** @var \app\models\CarSearch $searchModel */

$form = \yii\bootstrap\ActiveForm::begin([
    'id' => 'car-search',
    'method' => 'get',
    'action' => '/'
]); ?>

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
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-group" placeholder="Цена от, руб." name="CarSearch[priceMin]" value="<?=Yii::$app->request->get()['CarSearch']['priceMin']?>"/>
            <input type="text" class="form-group" placeholder="Цена до, руб." name="CarSearch[priceMax]" value="<?=Yii::$app->request->get()['CarSearch']['priceMax']?>"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="button">Найти</button>
        </div>
    </div>
</div>



<?php \yii\bootstrap\ActiveForm::end(); ?>
