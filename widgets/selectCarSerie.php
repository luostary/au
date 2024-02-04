<?php

namespace app\widgets;

use kartik\select2\Select2;

class selectCarSerie extends \yii\base\Widget
{
    public $form;
    public  $model;

    public function run()
    {
        return $this->form->field($this->model, 'id_car_serie')->widget(Select2::class, [
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
                            $('#carsearch-id_car_modification').html(data);
                            $('#carModificationEquipment').html(data);
                        }
                    });
                }",
            ],
        ]);
    }
}