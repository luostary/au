<?php

namespace app\widgets;

use app\modules\autobasebuy\models\CarMark;
use yii\base\Widget;

class selectCarMark extends Widget
{
    public $form;
    public $model;

    public function run()
    {
        return $this->form->field($this->model, 'id_car_mark')->widget(\kartik\select2\Select2::class, [
                'data' => CarMark::listAll(),
                'options' => ['prompt' => ''],
                'pluginOptions' => [
                    'allowClear' => true,
                    'placeholder' => 'Не указано'
                ],
                'pluginEvents' => [
                    "change" => "function(a) {
                    $.ajax({
                        url: '/catalog/auto/get-model-list',
                        data: {
                            'id_car_mark': $(this).val(),
                        },
                        success: function (data) {
                            $('#carsearch-id_car_model').html(data);
                        }
                    });
                }",
                ],
            ]
        );
    }
}