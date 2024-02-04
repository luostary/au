<?php

namespace app\widgets;

use app\modules\autobasebuy\models\CarSerie;
use kartik\select2\Select2;

class selectCarSerie extends \yii\base\Widget
{
    public $form;
    public  $model;

    public function run()
    {

        $id_car_model = \Yii::$app->request->get()['CarSearch']['id_car_model'];
        $id_car_generation = \Yii::$app->request->get()['CarSearch']['id_car_generation'];
        $data = ($id_car_model && $id_car_generation)
            ? CarSerie::listAll($id_car_model, $id_car_generation)
            : [];
        return $this->form->field($this->model, 'id_car_serie')->widget(Select2::class, [
            'name' => 'car_serie',
            'data' => $data,
            'options' => [
                'value' => \Yii::$app->request->get()['CarSearch']['id_car_serie'],
                'prompt' => '',
            ],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => $this->model->getAttributeLabel('id_car_serie')
            ],
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
        ])->label(false);
    }
}