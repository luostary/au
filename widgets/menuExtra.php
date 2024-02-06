<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

class menuExtra extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- extra Menu -->
            <nav id="extra-menu" class="site-navigation" role="navigation">
                <div class="menu-themedefault-container ">';
                    echo Nav::widget([
                        'options' => ['class' => 'nav-menu sf-js-enabled'],
                        'items' => [
                            ['label' => Yii::t('app', 'Contact Us'), 'url' => ['/site/contact']],
                            ['label' => Yii::t('app', 'Catalog'), 'url' => ['/catalog/auto'], 'visible' => !Yii::$app->user->isGuest],
                            ['label' => Yii::t('app', 'Cabinet'), 'url' => ['/profile'], 'visible' => !Yii::$app->user->isGuest],

                            Yii::$app->user->isGuest ? (
                            ['label' => Yii::t('app', 'Login'), 'url' => ['/user/login']]
                            ) : (
                                '<li class="nav-item">'
                                . Html::beginForm(['/user/logout'], 'post', ['class' => 'form-inline'])
                                . Html::submitButton(
                                    Yii::t('app', 'Logout') . ' (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'
                            ),
                        ],
                    ]);
            echo '
                </div>
            </nav>
            <!-- / extra Menu -->
        ';
    }
}
