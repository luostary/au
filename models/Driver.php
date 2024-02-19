<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $tg_username
 * @property string|null $tg_user_id
 * @property string|null $phone
 * @property string|null $car_number
 * @property resource|null $car_photo
 * @property string|null $status
 * @property int|null $balance
 * @property string|null $wallet
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $tg_first_name
 * @property string|null $dt_create
 * @property string|null $dt_update
 * @property int|null $referer_user_id
 * @property int|null $referer_payed
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbTaxi');
    }

    public function __get($attribute)
    {
        if ($attribute != 'car_photo') {
            return $this->getAttribute($attribute);
        }

        $fileName = $this->tg_user_id . '.jpg';
        $img = \Yii::$app->params['pathToTaxiBot'] . '/cars/' . $fileName;
        return file_exists($img);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tg_username', 'tg_user_id', 'phone', 'car_number', 'car_photo', 'status', 'wallet', 'tg_first_name'], 'string'],
            [['balance', 'referer_user_id', 'referer_payed'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['dt_create', 'dt_update'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Имя'),
            'tg_username' => Yii::t('app', 'Tg Username'),
            'tg_user_id' => Yii::t('app', 'Tg User ID'),
            'phone' => Yii::t('app', 'Телефон'),
            'car_number' => Yii::t('app', 'Номер машины'),
            'car_photo' => Yii::t('app', 'Фото машины'),
            'status' => Yii::t('app', 'Статус'),
            'balance' => Yii::t('app', 'Баланс'),
            'wallet' => Yii::t('app', 'Кошелек'),
            'latitude' => Yii::t('app', 'Широта'),
            'longitude' => Yii::t('app', 'Долгота'),
            'tg_first_name' => Yii::t('app', 'Tg First Name'),
            'dt_create' => Yii::t('app', 'Дата создания'),
            'dt_update' => Yii::t('app', 'Дата обновления'),
            'referer_user_id' => Yii::t('app', 'Referer User ID'),
            'referer_payed' => Yii::t('app', 'Referer Payed'),
        ];
    }

    public function hasPhotoDriver()
    {
        $fileName = $this->tg_user_id . '.jpg';
        $img = \Yii::$app->params['pathToTaxiBot'] . '/drivers/' . $fileName;
        return file_exists($img);
    }
    public function hasPhotoCar()
    {
        $fileName = $this->tg_user_id . '.jpg';
        $img = \Yii::$app->params['pathToTaxiBot'] . '/cars/' . $fileName;
        return file_exists($img);
    }
}
