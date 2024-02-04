<?php

use app\modules\autobasebuy\models\CarType;

/** @var $carTypeList CarType[] */

$this->title = 'Каталог';
?>
<h1><?= $this->title ?></h1>
<div class="b-interaction-example">
    <div class="row">
        <div class="col-sm-6 table-list">
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Вид транспорта", "carType"); ?></div>
                <div class="col-sm-8">
                    <?php
                    $carTypeListData = \yii\helpers\ArrayHelper::map($carTypeList, 'id_car_type', 'name');
                    echo \kartik\select2\Select2::widget([
                        'name' => 'car_type',
                        'data' => ['prompt' => ''] + $carTypeListData,
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-mark-list',
                                    data: {
                                        'id_car_type': $(this).val(),
                                    },
                                    success: function (data) {
                                        $('#carMark').html(data);
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Марка", "carMark"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \kartik\select2\Select2::widget([
                        'id' => 'carMark',
                        'name' => 'car_mark',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-model-list',
                                    data: {
                                        'id_car_mark': $(this).val(),
                                    },
                                    success: function (data) {
                                        $('#carModel').html(data);
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Модель", "carModel"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \kartik\select2\Select2::widget([
                        'id' => 'carModel',
                        'name' => 'car_model',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-generation-list',
                                    data: {
                                        'id_car_model': $(this).val(),
                                    },
                                    success: function (data) {
                                        $('#carModelSerie').html(data);
                                        
                                        $('#carGeneration').html(data);
                                        $('#carModelSerie').val( $('#carModel').val() ).change();
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                    <?php
                    \kartik\select2\Select2::widget([
                        'id' => 'carModelSerie',
                        'name' => 'car_model_serie',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                console.log($(this).val())
                                $.ajax({
                                    url: '/catalog/auto/get-serie-list',
                                    data: {
                                        'id_car_model': $(this).val(),
                                    },
                                    success: function (data) {
                                        $('#carGeneration').html(data);
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                </div>
            </div>

            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Поколение", "carGeneration"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \kartik\select2\Select2::widget([
                        'id' => 'carGeneration',
                        'name' => 'car_generation',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-serie-list',
                                    data: {
                                        'id_car_generation': $(this).val(),
                                    },
                                    success: function (data) {
                                        $('#carSerie').html(data);
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Серия", "carSerie"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \kartik\select2\Select2::widget([
                        'id' => 'carSerie',
                        'name' => 'car_serie',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-modification-list',
                                    data: {
                                        'id_car_serie': $(this).val(),
                                    },
                                    success: function (data) {
                                        $('#carModification').html(data);
                                        $('#carModificationEquipment').html(data);
                                    }
                                });
                            }",
                        ],
                    ]);

                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Модификация", "carModification"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \kartik\select2\Select2::widget([
                        'id' => 'carModification',
                        'name' => 'car_modification',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-characteristic-value-list',
                                    data: {
                                        'id_car_modification': $(this).val(),
                                    },
                                    success: function (html) {
                                        $('#carCharValue').html(html);
                                    }
                                });
                                
                                $.ajax({
                                    url: '/catalog/auto/get-equipment-list',
                                    data: {
                                        'id_car_modification': $(this).val(),
                                    },
                                    success: function (html) {
                                        $('#carEquipment').html(html);
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Комплектация", "carEquipment"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \kartik\select2\Select2::widget([
                        'id' => 'carEquipment',
                        'name' => 'car_equipment',
                        'data' => [],
                        'hideSearch' => true,
                        'pluginEvents' => [
                            "change" => "function(a) {
                                $.ajax({
                                    url: '/catalog/auto/get-option-value-list',
                                    data: {
                                        'id_car_equipment': $(this).val(),
                                    },
                                    success: function (html) {
                                        $('#carOptionValue').html(html);
                                    }
                                });
                            }",
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 desc">
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <h4>Значения характеристик:</h4>
            <div id="carCharValue" class="char-value-list">-</div>
        </div>
        <div class="col-md-6">
            <h4>Опции:</h4>
            <div id="carOptionValue" class="option-value-list">-</div>
        </div>
    </div>
</div>
