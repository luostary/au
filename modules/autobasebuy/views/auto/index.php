<?php

use app\modules\autobasebuy\models\CarType;

/** @var $carTypeList CarType[] */

$this->title = 'Интерактивный пример работы базы данных';
?>
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
                    echo \yii\helpers\Html::dropDownList('carMark', '', [], array(
                        'id' => 'carMark',
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getModelList'),
                            'update' => '#carModel',
                            'success' => 'function(html){ 
                                $("#carModel").html(html);
                                $("#carModelSerie").html(html);
                            }',
                            'data' => array(
                                'id_car_mark' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                    ));
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Модель", "carModel"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \yii\helpers\Html::dropDownList('carModel', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getGenerationList'),
                            'update' => '#carGeneration',
                            'success' => 'function(html){ 
                                 $("#carGeneration").html(html);
                                 $("#carModelSerie").val( $("#carModel").val() ).change();
                            }',
                            'data' => array(
                                'id_car_model' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                    ));
                    ?>
                    <?php
                    echo \yii\helpers\Html::dropDownList('carModelSerie', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getSerieList'),
                            'update' => '#carSerie',
                            'data' => array(
                                'id_car_model' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                        'style' => 'display:none',
                    ));
                    ?>
                </div>
            </div>

            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Поколение", "carGeneration"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \yii\helpers\Html::dropDownList('carGeneration', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getSerieList'),
                            'update' => '#carSerie',
                            'data' => array(
                                'id_car_generation' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                    ));
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Серия", "carSerie"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \yii\helpers\Html::dropDownList('carSerie', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getModificationList'),
                            'update' => '#carModification',
                            'success' => 'function(html){
                                $("#carModification").html(html);
                                $("#carModificationEquipment").html(html);
                            }',
                            'data' => array(
                                'id_car_serie' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                    ));
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Модификация", "carModification"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \yii\helpers\Html::dropDownList('carModification', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getCharacteristicValueList'),
                            'update' => '#carCharValue',
                            'success' => 'function(html){ 
                                $("#carCharValue").html(html);
                                $("#carModificationEquipment").val( $("#carModification").val() ).change();
                            }',
                            'data' => array(
                                'id_car_modification' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                    ));
                    echo \yii\helpers\Html::dropDownList('carModificationEquipment', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getEquipmentList'),
                            'update' => '#carEquipment',
                            'data' => array(
                                'id_car_modification' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                        'style' => 'display:none',
                    ));
                    ?>
                </div>
            </div>
            <div class="row str">
                <div class="col-sm-4"><?php echo \yii\helpers\Html::label("Комплектация", "carEquipment"); ?></div>
                <div class="col-sm-8">
                    <?php
                    echo \yii\helpers\Html::dropDownList('carEquipment', '', [], array(
                        'empty' => Yii::t('app', '-'),
                        'ajax' => array(
                            'type' => 'GET',
                            'url' => \yii\helpers\Url::to('auto/getOptionValueList'),
                            'update' => '#carOptionValue',
                            'data' => array(
                                'id_car_equipment' => 'js:this.value',
                            ),
                        ),
                        'class' => 'form-control',
                    ));
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