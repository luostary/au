<?php

/** @var array $data */

?>

<div class="profile-default-index">
    <h1>Загрузка excel</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="excel"/>
        <br/>
        <a href="/upload-example.xlsx">Скачать пример файла</a>
        <input type="submit" />
    </form>
    <?php echo \kartik\grid\GridView::widget([
        'dataProvider' => new \yii\data\ArrayDataProvider(['allModels' => $data]),
        'responsiveWrap' => false,
        'columns' => [
            'A', 'F'
        ],
    ])
    ?>
</div>