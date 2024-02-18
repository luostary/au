<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

class menuMain extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- Main Menu -->
            <nav id="main-menu" class="site-navigation mobile-menu" role="navigation">
                <div class="menu-themedefault-container ">';

                $nav = Nav::begin();
                $nav->options = ['class' => 'nav-menu sf-js-enabled'];
                $nav->items = [
                    ['label' => Yii::t('app', 'Contact Us'), 'url' => ['/site/contact']],
                    ['label' => Yii::t('app', 'Catalog'), 'url' => ['/catalog/auto'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => Yii::t('app', 'Cabinet'), 'url' => ['/profile'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => Yii::t('app', 'My cars'), 'url' => ['/profile/car'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => Yii::t('app', 'Upload excel'), 'url' => ['/profile/excel/upload'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => Yii::t('app', 'Taxi drivers'), 'url' => ['/taxi'], 'visible' => (!Yii::$app->user->isGuest && Yii::$app->params['enableTaxiModule'])],

                    Yii::$app->user->isGuest ? (
                    ['label' => Yii::t('app', 'Login'), 'url' => ['/user/login']]
                    ) : (
                     '<li class="nav-item">'
                     . Html::beginForm(['/user/logout'], 'post', ['class' => 'form-inline1'])
                     . Html::submitButton(
                         Yii::t('app', 'Logout') . ' (' . Yii::$app->user->identity->username . ')',
                         ['class' => 'btn btn-link logout']
                     )
                     . Html::endForm()
                     . '</li>'
                    ),
                ];
                echo $nav->run();

                echo '</div>
                <div id="menu-trigger"></div>
            </nav>
            <!-- / Main Menu -->
        ';

        Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/user/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/user/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
    }
}
