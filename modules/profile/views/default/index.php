<div class="profile-default-index">
    <h1><?= Yii::t('app', 'Cabinet'); ?></h1>
    <div class="row">
        <div class="col-sm-2">
            <?php echo \app\widgets\menuProfile::widget() ?>
        </div>
        <div class="col-sm-10">
            <?= \yii\widgets\DetailView::widget([
                'model' => Yii::$app->user->identity,
                'attributes' => [
                    'username',
                    'email',
                    'registration_ip',
                    'company.name',
                ],
            ]); ?>
        </div>
    </div>
</div>
