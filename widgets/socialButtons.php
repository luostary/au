<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

class socialButtons extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- social Buttons -->
            <a href="https://twitter.com/autohub" target="_blank">
                        <img title="Twitter" alt="Twitter"
                             src="/elementauto/images/social-profiles/twitter.png"
                             height="32" width="32">
                    </a>
            <a href="http://facebook.com/autohub" target="_blank">
                <img title="Facebook" alt="Facebook"
                     src="/elementauto/images/social-profiles/facebook.png"
                     height="32" width="32">
            </a>
            <a href="http://www.linkedin.com/" target="_blank">
                <img title="LinkedIn" alt="LinkedIn"
                     src="/elementauto/images/social-profiles/linkedin.png"
                     height="32" width="32">
            </a>
            <a href="http://smthemes.com/preview/feed/" target="_blank">
                <img title="RSS Feed" alt="RSS Feed"
                     src="/elementauto/images/social-profiles/rss.png"
                     height="32" width="32">
            </a>
            <a href="mailto:your@email.com" target="_blank">
                        <img title="Email" alt="Email"
                             src="/elementauto/images/social-profiles/email.png"
                             height="32" width="32">
                    </a>
            <!-- / social Buttons -->
        ';

        Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => '<img title="Twitter" alt="Twitter"
                             src="/elementauto/images/social-profiles/twitter.png"
                             height="32" width="32">', 'url' => ['/site/index'], 'encode' => false],
                ['label' => '<img title="Facebook" alt="Facebook"
                     src="/elementauto/images/social-profiles/facebook.png"
                     height="32" width="32">', 'url' => ['/site/about'], 'encode' => false],
                ['label' => '<img title="LinkedIn" alt="LinkedIn"
                     src="/elementauto/images/social-profiles/linkedin.png"
                     height="32" width="32">', 'url' => ['/site/contact'], 'encode' => false],
                ['label' => '<img title="RSS Feed" alt="RSS Feed"
                     src="/elementauto/images/social-profiles/rss.png"
                     height="32" width="32">', 'url' => ['/site/contact'], 'encode' => false],
                ['label' => '<img title="Email" alt="Email"
                             src="/elementauto/images/social-profiles/email.png"
                             height="32" width="32">', 'url' => ['mailto:your@email.com'], 'encode' => false],
            ],
        ]);
    }
}
