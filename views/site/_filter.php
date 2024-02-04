<?php

/** @var \app\models\CarSearch $searchModel */

$form = \yii\bootstrap\ActiveForm::begin([]);

echo \app\widgets\selectCarMark::widget(['form' => $form, 'model' => $searchModel]);

\yii\bootstrap\ActiveForm::end();
