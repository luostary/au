<?php

namespace app\widgets;

use Yii;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

class recentComment extends \yii\bootstrap4\Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo '
            <!-- Recent Comments -->
            <ul>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/32696deddb32249ca532e7deb006c488?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/32696deddb32249ca532e7deb006c488?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="https://demo2.smthemes.com/?p=1761#comment-35" class="comment_author">Anne
                            Higgins</a>

                        <div class="comment_text">
                            Nullam imperdiet quis felis sit amet ultricies.
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/93e0ad6e81a74ac04dcc858e7ea2935f?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/93e0ad6e81a74ac04dcc858e7ea2935f?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="https://demo2.smthemes.com/?p=1767#comment-34" class="comment_author">Ashley
                            Clark</a>

                        <div class="comment_text">
                            Suspendisse eleifend leo sem, vel tincidunt elit
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/5f6e7132a2f25f48e5c92b2e2eb8de71?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/5f6e7132a2f25f48e5c92b2e2eb8de71?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="https://demo2.smthemes.com/?p=1770#comment-33" class="comment_author">Lee Tran</a>

                        <div class="comment_text">
                            Pulvinar diam ac nulla semper
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/fc785ad78df027569f63d124d8055241?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/fc785ad78df027569f63d124d8055241?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="https://demo2.smthemes.com/?p=1770#comment-32" class="comment_author">Denise
                            Roberts</a>

                        <div class="comment_text">
                            Maecenas sed risus molestie, tincidunt tellus in,
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/3ba50d877ef75b655abcdaf398c5a818?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/3ba50d877ef75b655abcdaf398c5a818?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="https://demo2.smthemes.com/?p=1770#comment-31" class="comment_author">Doreen
                            Lawrence</a>

                        <div class="comment_text">
                            Curabitur interdum ipsum quis ipsum volutpat, eu
                        </div>


                    </li>
                </ul>
            <!-- / Recent Comments -->
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
