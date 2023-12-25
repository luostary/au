<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

class menuFooter extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- Footer Menu -->
            <div class="nav-menu">
                <ul>
                    <li class="page_item"><a href="/ite/contact">Contact Us</a></li>
                    <li class="page_item page_item_has_children"><a
                                href="javascript:void(0)">Taxi</a>
                        <ul class="children">
                            <li class="page_item"><a href="/driver">Driver</a></li>
                            <li class="page_item"><a href="/order">Order</a></li>
                        </ul>
                    </li>
                    <li class="page_item"><a
                                href="/site/about">About</a></li>
                </ul>
            </div>
            <!-- / Footer Menu -->
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
