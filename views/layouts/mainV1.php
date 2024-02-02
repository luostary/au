<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en-US"><!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="/elementauto/images/menu.png">
    <link rel="pingback" href="https://demo2.smthemes.com/xmlrpc.php">
    <script>
        var ajaxurl = 'https://demo2.smthemes.com/wp-admin/admin-ajax.php';
        var gglapikey = '';
    </script>
    <meta name="robots" content="noindex,follow">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {"concatemoji": "https:\/\/demo2.smthemes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.31"}
        };
        !function (e, n, t) {
            var a;

            function i(e) {
                var t = n.createElement("canvas"), a = t.getContext && t.getContext("2d"), i = String.fromCharCode;
                return !(!a || !a.fillText) && (a.textBaseline = "top", a.font = "600 32px Arial", "flag" === e ? (a.fillText(i(55356, 56806, 55356, 56826), 0, 0), 3e3 < t.toDataURL().length) : "diversity" === e ? (a.fillText(i(55356, 57221), 0, 0), t = a.getImageData(16, 16, 1, 1).data, a.fillText(i(55356, 57221, 55356, 57343), 0, 0), (t = a.getImageData(16, 16, 1, 1).data)[0], t[1], t[2], t[3], !0) : ("simple" === e ? a.fillText(i(55357, 56835), 0, 0) : a.fillText(i(55356, 57135), 0, 0), 0 !== a.getImageData(16, 16, 1, 1).data[0]))
            }

            function o(e) {
                var t = n.createElement("script");
                t.src = e, t.type = "text/javascript", n.getElementsByTagName("head")[0].appendChild(t)
            }

            t.supports = {
                simple: i("simple"),
                flag: i("flag"),
                unicode8: i("unicode8"),
                diversity: i("diversity")
            }, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.simple && t.supports.flag && t.supports.unicode8 && t.supports.diversity || (a = function () {
                t.readyCallback()
            }, n.addEventListener ? (n.addEventListener("DOMContentLoaded", a, !1), e.addEventListener("load", a, !1)) : (e.attachEvent("onload", a), n.attachEvent("onreadystatechange", function () {
                "complete" === n.readyState && t.readyCallback()
            })), (a = t.source || {}).concatemoji ? o(a.concatemoji) : a.wpemoji && a.twemoji && (o(a.twemoji), o(a.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style type="text/css">
        #gallery-1 {
            margin: auto;
        }

        #gallery-1 .gallery-item {
            float: left;
            margin-top: 10px;
            text-align: center;
            width: 25%;
        }

        #gallery-1 img {
            border: 2px solid #cfcfcf;
        }

        #gallery-1 ...</style>
    </div><!-- .entry-summary -->
    <link rel="stylesheet" id="master-style-css"
          href="/elementauto/styles/main.css?ver=4.4.31" type="text/css"
          media="all">
    <link rel="stylesheet" id="style-css"
          href="/elementauto/style.css?ver=4.4.31" type="text/css"
          media="all">
    <link rel="stylesheet" id="fontawesome-css"
          href="/elementauto/styles/font-awesome.css?ver=4.4.31"
          type="text/css" media="all">
    <script type="text/javascript" src="https://demo2.smthemes.com/wp-includes/js/jquery/jquery.js?ver=1.11.3"></script>
    <script type="text/javascript"
            src="https://demo2.smthemes.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
    <link rel="https://api.w.org/" href="https://demo2.smthemes.com/?rest_route=/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo2.smthemes.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://demo2.smthemes.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 4.4.31">

    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="https://demo2.smthemes.com/?feed=rss2">

    <style type="text/css">
    </style>


</head>


<body class="home blog has-slider">
<?php $this->beginBody() ?>
<div id="page">

    <header class="site-header">

        <!-- Mobile Menu Trigger -->
        <div id="mobile-menu-trigger">
            <a href="#" class="icon"></a>
        </div>
        <!-- /Mobile Menu Trigger -->

        <div id="topper">
            <div class="boxed-container">

                <!-- Logo -->
                <a id="logo" href="/"><img
                            src="/elementauto/images/logo.png"
                            alt="" title=""></a>

                <!-- / Logo -->

                <!-- Search -->
                <div class="headersearch" title="">

                    <form role="search" method="get" class="search-form" action="https://demo2.smthemes.com/">
                        <div class="search-box">
                            <input type="search" class="search-field" placeholder="Search" value="" name="s" title="">
                            <input type="submit" class="search-submit icon" value="">
                        </div>
                    </form>
                </div>
                <!-- / Search -->

                <?php echo \app\widgets\menuMain::widget() ?>

                <?php echo \app\widgets\menuExtra::widget() ?>

                <div class="clear"></div>
            </div>
        </div>


        <!-- Slider -->

        <script>
            jQuery('body').addClass('has-slider');
        </script>
        <div class="slider-container">
            <div class="slider">
                <div class="fp-slides">
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="javascript:void(0);" title=""><img
                                        src="/elementauto/images/slides/1.jpg"
                                        alt="Far far away"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">Far far away</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="javascript:void(0);">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="javascript:void(0);" title=""><img
                                        src="https://demo2.smthemes.com/wp-content/themes/elementauto/images/slides/2.jpg"
                                        alt="Behind the word mountains"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">Behind the word mountains</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="javascript:void(0);">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="javascript:void(0);" title=""><img
                                        src="https://demo2.smthemes.com/wp-content/themes/elementauto/images/slides/3.jpg"
                                        alt="Far from the countries Vokalia"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">Far from the countries Vokalia</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="javascript:void(0);">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="javascript:void(0);" title=""><img
                                        src="https://demo2.smthemes.com/wp-content/themes/elementauto/images/slides/4.jpg"
                                        alt="There live the blind texts"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">There live the blind texts</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="javascript:void(0);">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="fp-prev-next-wrap">
                    <a href="#fp-next" class="fp-next"></a>
                    <a href="#fp-prev" class="fp-prev"></a>
                </div>

                <div class="fp-nav">
                    <span class="fp-pager">&nbsp;</span>
                </div>

            </div>
        </div>
        <script type="text/javascript"><!--//--><![CDATA[//><!--
            jQuery(window).load(function () {
                jQuery('.fp-slides, .fp-thumbnail img').css('height', jQuery('.fp-slides').height());
                jQuery('.fp-slides').cycle({
                    fx: 'fade',
                    timeout: 3000,
                    delay: 0,
                    speed: 1000,
                    next: '.fp-next',
                    prev: '.fp-prev',
                    pager: '.fp-pager',
                    continuous: 0,
                    sync: 1,
                    pause: 1000,
                    pauseOnPagerHover: 1,
                    cleartype: true,
                    cleartypeNoBg: true
                });
            });
            //--><!]]></script>                <!-- / Slider -->
        <div class="clear"></div>


    </header>


    <div id="wrapper" class="site-content sidebar-right" role="main">
        <div class="boxed-container">
            <div id="container">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>

            <div class="sidebar clearfix floating doFloat" style="width: 265px;">
                <div id="smt_social_profiles-3" class="widget widget_smt_social_profiles">

                    <?= \app\widgets\socialButtons::widget() ?>

                </div>

                <div id="smt_comments-2" class="widget widget_smt_comments">
                    <div class="caption"><h4>Отзывы покупателей</h4></div>
                    <?php echo \app\widgets\recentComment::widget() ?>
                </div>
                <div id="smt_posts-2" class="widget widget_smt_posts">
                    <div class="caption"><h4>Recent Posts</h4></div>
                    <?php echo \app\widgets\recentPost::widget() ?>
                </div>
                <?= \app\widgets\tag::widget() ?>
            </div>

        </div> <!-- / boxed container -->
    </div> <!-- / wrapper -->
    <footer>
        <div class="boxed-container">


            <div class="footer-columns">
                <?= \app\widgets\tag::widget() ?>
                <div id="pages-2" class="widget widget_pages">
                    <div class="caption"><h4>Pages</h4></div>
                    <ul>
                        <li class="page_item page-item-5 page_item_has_children"><a
                                    href="javascript:void(0)">Taxi lists</a>
                            <ul class="children">
                                <li class="page_item page-item-1133"><a href="/site/driver">Driver</a></li>
                                <li class="page_item page-item-1134"><a href="/site/order">Order</a></li>
                            </ul>
                        </li>
                        <li class="page_item page-item-1779"><a href="/site/contact">Contact
                                Us</a></li>
                        <li class="page_item page-item-146"><a
                                    href="/site/about">About Us</a></li>
                    </ul>
                </div>
                <div id="text-2" class="widget widget_text">
                    <div class="textwidget"><p>Nam lacinia nunc sed diam porta, quis tempor augue aliquet. Mauris
                            molestie vel diam vel bibendum. Integer ultrices libero quis interdum posuere. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.<br>
                            Sed maximus sem ac lobortis luctus. Sed gravida eget tortor sed luctus. Curabitur sit amet
                            erat purus. Nulla sed feugiat enim. </p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="footer-menu">
                <?php echo \app\widgets\menuFooter::widget() ?>
            </div>
            <style>
                @media only screen and (min-width: 801px) {
                    footer .widget {
                        width: 32%;
                    }

                    #text-2 {
                        margin-right: 0;
                    }
                }
            </style>

            <div class="footer_txt">
                <div>Copyright © 2023 <a href="javascript:void(0);">Auto</a></div>
                <div class="">Designed on the knee</div>
            </div>

        </div>

    </footer>


    <link rel="stylesheet" id="mediaelement-css"
          href="https://demo2.smthemes.com/wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.18.1"
          type="text/css" media="all">
    <link rel="stylesheet" id="wp-mediaelement-css"
          href="https://demo2.smthemes.com/wp-includes/js/mediaelement/wp-mediaelement.css?ver=4.4.31" type="text/css"
          media="all">
    <script type="text/javascript" src="https://demo2.smthemes.com/wp-includes/js/wp-embed.min.js?ver=4.4.31"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var mejsL10n = {
            "language": "en-US",
            "strings": {
                "Close": "Close",
                "Fullscreen": "Fullscreen",
                "Download File": "Download File",
                "Download Video": "Download Video",
                "Play\/Pause": "Play\/Pause",
                "Mute Toggle": "Mute Toggle",
                "None": "None",
                "Turn off Fullscreen": "Turn off Fullscreen",
                "Go Fullscreen": "Go Fullscreen",
                "Unmute": "Unmute",
                "Mute": "Mute",
                "Captions\/Subtitles": "Captions\/Subtitles"
            }
        };
        var _wpmejsSettings = {"pluginPath": "\/wp-includes\/js\/mediaelement\/"};
        /* ]]> */
    </script>
    <script type="text/javascript"
            src="https://demo2.smthemes.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.18.1-a"></script>
    <script type="text/javascript"
            src="https://demo2.smthemes.com/wp-includes/js/mediaelement/wp-mediaelement.js?ver=4.4.31"></script>

    <div id="smthemes_share" top="100" bottom="283" style="position: absolute;">
        <ul class="inner" style="top: 283px;">
            <li>
<!--                <iframe src="//www.facebook.com/plugins/like.php?href=https://demo2.smthemes.com/?stylesheet=elementauto&amp;send=false&amp;layout=box_count&amp;width=51&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=65&amp;locale=en_US"-->
<!--                        scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:52px; height:65px;"-->
<!--                        allowtransparency="true"></iframe>-->
            </li>
            <li><a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="en">Tweet</a>
            </li>
            <li class="close"><span>Hide</span></li>
        </ul>
    </div>
    <style>
        @media only screen and (max-width: 1023px) {
            #smthemes_share li {
                width: 50%;
            }
        }
    </style>
    <script type="text/javascript"><!--//--><![CDATA[//><!--
        jQuery(function () {
            jQuery('ul.nav-menu').superfish({
                animation: {width: "show"}, autoArrows: true, dropShadows: false, speed: 200, delay: 800
            });
        });
        //--><!]]></script>
    <script>
        /***** MAIN MENU *****/
        jQuery(document).on('click', '#menu-trigger', function () {
            if (jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
                jQuery('#main-menu ul.nav-menu').slideUp(300);
            } else {
                jQuery(this).addClass('active');
                jQuery('#main-menu ul.nav-menu').slideDown(300);
            }
        });
    </script>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>