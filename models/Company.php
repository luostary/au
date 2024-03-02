<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property int $is_active
 * @property string $dt_create
 * @property string $dt_update
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address'], 'string'],
            [['is_active'], 'integer'],
            [['dt_create', 'dt_update'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Наименование компании'),
            'address' => Yii::t('app', 'Адрес'),
            'is_active' => Yii::t('app', 'Активна'),
            'dt_create' => Yii::t('app', 'Дата создания'),
            'dt_update' => Yii::t('app', 'Дата изменения'),
        ];
    }
}
