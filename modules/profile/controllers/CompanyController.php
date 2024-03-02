<?php

namespace app\modules\profile\controllers;

use app\models\Company;

class CompanyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $user = \Yii::$app->user->identity;
        $companyId = $user->company_id;

        if (!$companyId) {
            echo 'Вы еще не указали компанию';
        }

        $company = Company::findOne($companyId);
        return $this->render('index', [
            'model' => $company
        ]);
    }

    public function actionUpdate()
    {
        $user = \Yii::$app->user->identity;
        $companyId = $user->company_id;

        if (!$companyId) {
            $model = new Company();
        } else {
            $model = Company::findOne($companyId);
        }

        if (\Yii::$app->request->isPost) {
            $post = \Yii::$app->request->post();
            if ($model->load($post) && $model->save()) {
                if(!$companyId) {
                    $user->updateAttributes(['company_id' => $model->id]);
                }
                $this->redirect('/profile/company/update');
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

}
