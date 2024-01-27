<?php

namespace app\modules\profile\controllers;

use app\models\Car;
use app\modules\autobasebuy\models\CarGeneration;
use app\modules\autobasebuy\models\CarMark;
use app\modules\autobasebuy\models\CarModel;
use app\modules\autobasebuy\models\CarModification;
use app\modules\autobasebuy\models\CarSerie;
use app\modules\autobasebuy\models\CarType;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Default controller for the `profile` module
 */
class ExcelController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionUpload()
    {
        $xlsxData = [];

        if (\Yii::$app->request->isPost) {
            $fileObject = UploadedFile::getInstanceByName('excel');
            $pathToFile = \Yii::getAlias('@runtime/' . $fileObject->name);
            $fileObject->saveAs($pathToFile);

            $reader = new Xlsx();
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load($pathToFile);
            $xlsxData = $spreadsheet->getActiveSheet()->toArray('', true, true, true);

            foreach ($xlsxData as $key => $row) {
                if ($key == 1) {
                    continue;
                }
                foreach ($row as $column => $value) {
                    $row[$column] = trim($value);
                }
                //    'A' => Honda                                      Марка
                //    'B' => Mobilio Spike                              Модель
                //    'C' => 1 поколение [рестайлинг] [2005 - 2008]     Поколение
                //    'D' => 2005                                       Поколение год начала
                //    'E' => 2008                                       Поколоение год конца
                //    'F' => Минивэн                                    Серия
                //    'G' => 1.5 CVT 4WD (110 л.с.)                     Модификация
                //    'H' => 12345.89                                   Цена
                $carType = CarType::findOne(['name' => 'легковые']);

                $markParams = ['name' => $row['A'], 'id_car_type' => $carType->id_car_type];
                $mark = CarMark::findOne(['name' => $row['A'], 'id_car_type' => $carType->id_car_type]);
                if (!$mark) {
                    $mark = new CarMark($markParams);
                    $mark->save();
                }

                $modelParams = [
                    'name' => $row['B'],
                    'id_car_type' => $carType->id_car_type,
                    'id_car_mark' => $mark->id_car_mark];
                $model = CarModel::findOne($modelParams);
                if (!$model) {
                    $model = new CarModel($modelParams);
                    $model->save();
                }

                $gen = CarGeneration::findOne(['name' => $row['C'], 'id_car_model' => $model->id_car_model, 'year_begin' => $row['D'], 'year_end' => $row['E']]);

                $serie = CarSerie::findOne(['name' => $row['F']]);

                $modification = CarModification::findOne(['name' => $row['G']]);

                $car = new Car();
                $car->id_car_mark = ($mark) ? $mark->id_car_mark : null;
                $car->id_car_model = ($model) ? $model->id_car_model : null;

                $car->id_car_generation = ($gen) ? $gen->id_car_generation : null;
                $car->id_car_modification = ($modification) ? $modification->id_car_modification : null;
                $car->id_car_serie = ($serie) ? $serie->id_car_serie : null;
                $car->id_user = \Yii::$app->user->id;
                $car->price = $row['H'];
                if ($mark && $model && $gen && $modification & $serie) {
                    $car->is_active = 1;
                } else {
                    $car->is_active = 0;
                }

                if($car->save()) {
                    \Yii::$app->getSession()->setFlash('success', \Yii::t('app', 'Автомобили загружены из файла в систему'));
                }

                if ($car->is_active) {
                    \Yii::$app->getSession()->setFlash('danger', \Yii::t('app', 'Некоторые автомобили не активны, активируйте вручную в ЛК'));
                }
            }
        }
        return $this->render('upload', [
            'data' => $xlsxData
        ]);
    }
}
