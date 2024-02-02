<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

class recentPost extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- Recent Posts -->
            <ul>
                <li>

                    <div class="alignleft">

                        <span class="post-date">Jan 27</span>


                        <img width="60" height="60" style="" alt="photo-1441966055611-30ea468880a2"
                             class=" wp-post-image"
                             src="https://demo2.smthemes.com/wp-content/uploads/post_images/cropped/auto_1_60x60.jpg">

                    </div>


                    <a class="title" href="javascript:void(0);" rel="bookmark"
                       title="Odio erat, condimentum eu tortor et, porta malesuada justo">Odio erat, condimentum
                        eu tortor et, porta malesuada justo</a>


                    <p>Quisque vulputate suscipit lectus, ac vulputate purus sollicitudin et...</p>
                </li>
                <li>

                    <div class="alignleft">

                        <span class="post-date">Dec 24</span>


                        <img width="60" height="60" style="" alt="photo-1441966055611-30ea468880a2"
                             class=" wp-post-image"
                             src="https://demo2.smthemes.com/wp-content/uploads/post_images/cropped/auto_2_60x60.jpg">

                    </div>


                    <a class="title" href="javascript:void(0);" rel="bookmark"
                       title="Nec dolor pharetra, pulvinar lectus nec">Nec dolor pharetra, pulvinar lectus
                        nec</a>


                    <p>Aenean ullamcorper libero commodo velit dapibus condimentum...</p>
                </li>
                <li>

                    <div class="alignleft">

                        <span class="post-date">Nov 27</span>


                        <img width="60" height="60" style="" alt="photo-1441966055611-30ea468880a2"
                             class=" wp-post-image"
                             src="https://demo2.smthemes.com/wp-content/uploads/post_images/cropped/auto_3_60x60.jpg">

                    </div>


                    <a class="title" href="javascript:void(0);" rel="bookmark"
                       title="Posuere eros risus, sit amet scelerisque ante placerat sed">Posuere eros risus,
                        sit amet scelerisque ante placerat sed</a>


                    <p>Morbi et euismod turpis. Phasellus blandit ligula elit, sed sagittis magna semper
                        non...</p>
                </li>
                <li>

                    <div class="alignleft">

                        <span class="post-date">Nov 09</span>


                        <img width="60" height="60" style="" alt="photo-1441966055611-30ea468880a2"
                             class=" wp-post-image"
                             src="https://demo2.smthemes.com/wp-content/uploads/post_images/cropped/auto_4_60x60.jpg">

                    </div>


                    <a class="title" href="javascript:void(0);" rel="bookmark"
                       title="Vestibulum dictum ex sed lorem tincidunt rutrum">Vestibulum dictum ex sed lorem
                        tincidunt rutrum</a>


                    <p>Aliquam pellentesque, libero non vestibulum laoreet, ex dolor auctor erat, ac elementum
                        mauris augue ultricies elit...</p>
                </li>
                <li>

                    <div class="alignleft">

                        <span class="post-date">Oct 21</span>


                        <img width="60" height="60" style="" alt="photo-1441966055611-30ea468880a2"
                             class=" wp-post-image"
                             src="https://demo2.smthemes.com/wp-content/uploads/post_images/cropped/auto_5_60x60.jpg">

                    </div>


                    <a class="title" href="javascript:void(0);" rel="bookmark"
                       title="Libero non vestibulum laoreet">Libero non vestibulum laoreet</a>


                    <p>Fusce odio quam, porttitor vitae vulputate nec, varius sit amet erat. Vestibulum dictum
                        ex sed lorem tincidunt rutrum...</p>
                </li>
            </ul>
            <!-- / Recent Posts -->
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
