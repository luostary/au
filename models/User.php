<?php

namespace app\models;

use Yii;
use dektrium\user\models\User as BaseUser;

/**
 * This is the model class for table "user".
 *
 * @property int $created_at
 * @property int $company_id
 * @property int $flags
 * @property int $id
 * @property int $updated_at
 * @property int|null $blocked_at
 * @property int|null $confirmed_at
 * @property int|null $last_login_at
 * @property string $auth_key
 * @property string $email
 * @property string $password_hash
 * @property string $username
 * @property string|null $registration_ip
 * @property string|null $unconfirmed_email
 *
 * @property Profile $profile
 */
class User extends BaseUser
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['confirmed_at', 'blocked_at', 'created_at', 'updated_at', 'flags', 'last_login_at', 'company_id'], 'integer'],
            [['username', 'email', 'unconfirmed_email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 45],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'email' => 'Электронная почта',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Ключ аутентификации',
            'confirmed_at' => 'Дата подтверждения',
            'unconfirmed_email' => 'Не подтвержденная электронная почта',
            'blocked_at' => 'Дата блокировки',
            'registration_ip' => 'IP адрес регистрации',
            'company_id' => 'Компания',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
            'flags' => 'Флаги',
            'last_login_at' => 'Время последнего входа',
        ];
    }

    /**
     * Gets query for [[Profile]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::class, ['id' => 'company_id']);
    }

    public static function findByUsername($username)
    {
        $user = User::findOne(['username' => $username]);

        if ($user) {
            return new static($user->attributes);
        }

        return null;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
}
