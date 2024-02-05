<?php

namespace app\widgets;

use app\modules\autobasebuy\models\CarGeneration;
use kartik\select2\Select2;

class selectCarGeneration extends \yii\base\Widget
{
    public $form;
    public $model;

    public function run()
    {
        $data = (\Yii::$app->request->get()['CarSearch']['id_car_model'])
            ? CarGeneration::listAll(\Yii::$app->request->get()['CarSearch']['id_car_model'])
            : [];

        $value = (\Yii::$app->request->get()['CarSearch']['id_car_generation'])
            ? \Yii::$app->request->get()['CarSearch']['id_car_generation']
            : '';

        return $this->form->field($this->model, 'id_car_generation')->widget(Select2::class, [
            'name' => 'car_generation',
            'data' => $data,
            'options' => [
                'value' => $value,
                'prompt' => '',
            ],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => $this->model->getAttributeLabel('id_car_generation')
            ],
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
        ])->label(false);
    }
}