<?php

namespace app\widgets;

use Yii;
use yii\bootstrap\Nav;
use yii\helpers\Html;

class menuProfile extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $items = [
            ['label' => Yii::t('app', 'My cars'), 'url' => ['/profile/car']],
            ['label' => Yii::t('app', 'Upload excel'), 'url' => ['/profile/excel/upload']],
        ];

        foreach ($items as &$item) {
            $item['active'] = $item['url'][0] == '/' . $this->view->context->action->uniqueId;
        }

        echo '
            <!-- profile Menu -->
            <nav id="profile-menu" class="site-navigation" role="navigation">
                <div class="menu-themedefault-container ">';

                    echo Nav::widget([
                        'options' => ['class' => 'nav-menu'],
                        'items' => $items,
                    ]);
            echo '
                </div>
            </nav>
            <!-- / profile Menu -->
        ';
    }
}
