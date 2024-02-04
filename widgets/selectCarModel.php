<?php

namespace app\widgets;

use kartik\select2\Select2;
use yii\base\Widget;

class selectCarModel extends Widget
{
    public $form;
    public $model;

    public function run()
    {
        return $this->form->field($this->model, 'id_car_model')->widget(Select2::class, [
            'name' => 'car_model_serie',
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
                            $('#carsearch-id_car_generation').html(data);
                        }
                    });
                }",
            ],
        ]);
    }
}