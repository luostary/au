<?php

namespace app\widgets;

use kartik\select2\Select2;

class selectCarModification extends \yii\base\Widget
{
    public $form;
    public  $model;

    public function run()
    {
        return $this->form->field($this->model, 'id_car_modification')->widget(Select2::class, [
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
    }
}