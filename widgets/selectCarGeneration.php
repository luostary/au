<?php

namespace app\widgets;

use kartik\select2\Select2;

class selectCarGeneration extends \yii\base\Widget
{
    public $form;
    public $model;

    public function run()
    {
        return $this->form->field($this->model, 'id_car_generation')->widget(Select2::class, [
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
                            $('#carsearch-id_car_serie').html(data);
                        }
                    });
                }",
            ],
        ]);
    }
}