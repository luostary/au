<?php

/** @var array $data */

?>

<div class="profile-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>

    Here show upload from excel document
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="excel"/>
        <input type="submit" />
    </form>
    <?php echo \yii\grid\GridView::widget([
        'dataProvider' => new \yii\data\ArrayDataProvider(['allModels' => $data]),
        'columns' => [
            'A', 'F'
        ],
    ])
    ?>
</div>