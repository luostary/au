<?php

namespace app\widgets;

use app\modules\autobasebuy\models\CarModification;
use kartik\select2\Select2;
use Yii;

class selectCarModification extends \yii\base\Widget
{
    public $form;
    public  $model;

    public function run()
    {
        $id_car_serie = \Yii::$app->request->get()['CarSearch']['id_car_serie'];
        $id_car_model = \Yii::$app->request->get()['CarSearch']['id_car_model'];

        $data = ($id_car_serie && $id_car_model)
            ? CarModification::listAll($id_car_serie, $id_car_model)
            : [];

        $value = (\Yii::$app->request->get()['CarSearch']['id_car_modification'])
            ? \Yii::$app->request->get()['CarSearch']['id_car_modification']
            : '';
        return $this->form->field($this->model, 'id_car_modification')->widget(Select2::class, [
            'name' => 'car_modification',
            'data' => $data,
            'hideSearch' => true,
            'options' => [
                'value' => $value,
            ],
            'pluginOptions' => [
                'allowClear' => true,
                'placeholder' => $this->model->getAttributeLabel('id_car_modification')
            ],
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
        ])->label(false);
    }
}