<?php

namespace app\modules\profile\controllers;

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
            $pathToFile = \Yii::getAlias('@webroot/' . $fileObject->name);
            $fileObject->saveAs($pathToFile);

            $reader = new Xlsx();
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load($pathToFile);
            $xlsxData = $spreadsheet->getActiveSheet()->toArray('', true, true, true);

        }
        return $this->render('upload', [
            'data' => $xlsxData
        ]);
    }
}
