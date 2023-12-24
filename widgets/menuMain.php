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
                <div class="menu-themedefault-container ">
                    <ul class="nav-menu sf-js-enabled">
                        <li><a href="/">Home</a></li>
                        <li class="page_item page-item-1779"><a href="/site/contact">Contact
                                Us</a></li>
                        <li class="page_item page-item-5 page_item_has_children"><a
                                    href="#" class="sf-with-ul">Taxi lists<span class="sf-sub-indicator"> »</span></a>
                            <ul class="children" style="display: none; visibility: hidden;">
                                <li class="page_item page-item-1133"><a
                                            href="/site/driver">Driver</a>
                                </li>
                                <li class="page_item page-item-1134"><a
                                            href="/site/order">Order</a></li>
                            </ul>
                        </li>
                        <li class="page_item"><a href="/site/about">About</a>
                        </li>
                    </ul>
                </div>
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
