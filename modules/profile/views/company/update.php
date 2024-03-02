<?php
/** @var yii\web\View $this */
/** @var \app\models\Company $model $model */

?>
<h1><?= $model->name; ?></h1>

<?php $form = \yii\widgets\ActiveForm::begin(); ?>

<?= $form->field($model, 'name'); ?>

<?= $form->field($model, 'address')->textarea(['rows' => 4]); ?>

<?= $form->field($model, 'is_active')->checkbox(); ?>

<input type="submit">

<?php \yii\widgets\ActiveForm::end(); ?>
