<?php
/** @var yii\web\View $this */
/** @var \app\models\Company $model */
?>
<h1><?= $model->name ?></h1>

<?php echo \yii\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'address',
        'dt_create:datetime',
        'dt_update:datetime',
        'is_active:boolean',
    ],
]); ?>

<a href="company/update" class="button">Изменить</a>
