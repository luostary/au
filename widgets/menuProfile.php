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
            ['label' => 'List items', 'url' => ['/profile/excel/index']],
            ['label' => 'Upload items', 'url' => ['/profile/excel/upload']],
            ['label' => 'Item 3', 'url' => ['/profile/excel']],
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
