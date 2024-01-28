<div class="profile-default-index">
    <h1><?= Yii::t('app', 'Cabinet'); ?></h1>
    <div class="row">
        <div class="col-sm-2">
            <?php echo \app\widgets\menuProfile::widget() ?>
        </div>
        <div class="col-sm-10">
            <?php
            echo '<pre>';
            \yii\helpers\VarDumper::dump(Yii::$app->user->identity->attributes, 3, false);
            echo '</pre>';
            ?>
        </div>
    </div>
</div>
