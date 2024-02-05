<?php

namespace app\widgets;

use app\modules\autobasebuy\models\CarModel;
use kartik\select2\Select2;
use yii\base\Widget;

class selectCarModel extends Widget
{
    public $form;
    public $model;

    public function run()
    {
        if (\Yii::$app->request->get('CarSearch')['id_car_mark']) {
            $data = CarModel::listAll(\Yii::$app->request->get('CarSearch')['id_car_mark']);
            $value = \Yii::$app->request->get('CarSearch')['id_car_model'];
        } else {
            $data = [];
            $value = '';
        }

        return $this->form->field($this->model, 'id_car_model')->widget(Select2::class, [
            'name' => 'car_model',
            'data' => $data,
            'options' => [
                'value' => $value,
                'prompt' => '',
            ],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => $this->model->getAttributeLabel('id_car_model')
            ],
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
        ])->label(false);
    }
}