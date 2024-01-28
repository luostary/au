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


                        <a href="#comment-35" class="comment_author">Анна Хилько</a>

                        <div class="comment_text">
                            Покупали вместе с мужем первую машину, цена оправдала все ожидания. Все честно, без обмана. Предложили доп. услуги, но не настаивали.
                            
                            </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/93e0ad6e81a74ac04dcc858e7ea2935f?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/93e0ad6e81a74ac04dcc858e7ea2935f?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="#comment-34" class="comment_author">Алексей
                            Ларинов</a>

                        <div class="comment_text">
                            Пожалуй это самая лучшая цена в Москве, ниже я не нашел!
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/5f6e7132a2f25f48e5c92b2e2eb8de71?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/5f6e7132a2f25f48e5c92b2e2eb8de71?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="#comment-33" class="comment_author">Лилия Трикина</a>

                        <div class="comment_text">
                            Я покупаю не первый автомобиль, знаю как и где искать, в каких компаниях выбирать, а где лучше даже не связываться, потому что много мошенников, но эти ребята работаю честно 
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/fc785ad78df027569f63d124d8055241?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/fc785ad78df027569f63d124d8055241?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="#comment-32" class="comment_author">Денис Бертов</a>

                        <div class="comment_text">
                            Работаю таксистом на своём автомобиле, продал старую машину, купил новую в этой компании. Справедливые цены, никаких накруток, действительно смело можно всем рекомендовать
                        </div>


                    </li>
                    <li>

                        <div class="comment_avatar"><img alt=""
                                                         src="https://secure.gravatar.com/avatar/3ba50d877ef75b655abcdaf398c5a818?s=32&amp;d=mm&amp;r=g"
                                                         srcset="https://secure.gravatar.com/avatar/3ba50d877ef75b655abcdaf398c5a818?s=64&amp;d=mm&amp;r=g 2x"
                                                         class="avatar avatar-32 photo" height="32" width="32">
                        </div>


                        <a href="#comment-31" class="comment_author">Дарья
                            Симонова</a>

                        <div class="comment_text">
                            Помоему они такие же перекупщики как и все
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
