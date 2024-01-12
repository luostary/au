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
                            ['label' => 'Contact Us', 'url' => ['/site/contact']],
                            ['label' => 'Catalog', 'url' => ['/catalog/auto'], 'visible' => !Yii::$app->user->isGuest],

                            Yii::$app->user->isGuest ? (
                            ['label' => 'Login', 'url' => ['/user/login']]
                            ) : (
                                '<li class="nav-item">'
                                . Html::beginForm(['/user/logout'], 'post', ['class' => 'form-inline'])
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'
                            ),
                            ['label' => 'Cabinet', 'url' => ['/profile'], 'visible' => !Yii::$app->user->isGuest],
                        ],
                    ]);
            echo '
                </div>
            </nav>
            <!-- / extra Menu -->
        ';
    }
}
