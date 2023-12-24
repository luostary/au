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
    <script type="text/javascript"
            src="https://demo2.smthemes.com/wp-content/themes/elementauto/js/frontend.js?ver=85"></script>
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
                            alt="SMThemes.com Demo" title="SMThemes.com Demo"></a>

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
                            <li class="page_item page-item-146"><a href="/site/about">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <div id="menu-trigger"></div>
                </nav>
                <!-- / Main Menu -->

                <!-- extra Menu -->
                <nav id="extra-menu" class="site-navigation" role="navigation">
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
                            <li class="page_item page-item-146"><a href="/site/about">About</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- / extra Menu -->

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
                            <a href="https://demo2.smthemes.com" title=""><img
                                        src="/elementauto/images/slides/1.jpg"
                                        alt="Far far away"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">Far far away</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="https://demo2.smthemes.com">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="https://demo2.smthemes.com" title=""><img
                                        src="https://demo2.smthemes.com/wp-content/themes/elementauto/images/slides/2.jpg"
                                        alt="Behind the word mountains"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">Behind the word mountains</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="https://demo2.smthemes.com">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="https://demo2.smthemes.com" title=""><img
                                        src="https://demo2.smthemes.com/wp-content/themes/elementauto/images/slides/3.jpg"
                                        alt="Far from the countries Vokalia"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">Far from the countries Vokalia</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="https://demo2.smthemes.com">Read More</a>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                    <div class="fp-slides-item">
                        <div class="slider-bgr"></div>
                        <div class="fp-thumbnail">
                            <a href="https://demo2.smthemes.com" title=""><img
                                        src="https://demo2.smthemes.com/wp-content/themes/elementauto/images/slides/4.jpg"
                                        alt="There live the blind texts"></a>
                        </div>
                        <div class="fp-content-wrap">
                            <div class="fp-content">

                                <h3 class="fp-title">There live the blind texts</h3>

                                <p class="fp-description">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts</p>

                                <a class="fp-more button" href="https://demo2.smthemes.com">Read More</a>

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

            <script>
                jQuery('.site-content').addClass('sidebar-right');
            </script>
            <div class="sidebar clearfix floating doFloat" style="width: 265px; top: 0px;">
                <div id="smt_social_profiles-3" class="widget widget_smt_social_profiles">


                    <a href="https://twitter.com/smthemes" target="_blank">
                        <img title="Twitter" alt="Twitter"
                             src="/elementauto/images/social-profiles/twitter.png"
                             height="32" width="32">
                    </a>
                    <a href="http://facebook.com/smthemes" target="_blank">
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

                </div>

                <div id="smt_comments-2" class="widget widget_smt_comments">
                    <div class="caption"><h4>Recent Comments</h4></div>
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

                </div>
                <div id="smt_posts-2" class="widget widget_smt_posts">
                    <div class="caption"><h4>Recent Posts</h4></div>
                    <ul>
                        <li>

                            <div class="alignleft">

                                <span class="post-date">Jan 27</span>


                                <img width="60" height="60" style="" alt="photo-1441966055611-30ea468880a2"
                                     class=" wp-post-image"
                                     src="https://demo2.smthemes.com/wp-content/uploads/post_images/cropped/auto_1_60x60.jpg">

                            </div>


                            <a class="title" href="https://demo2.smthemes.com/?p=1770" rel="bookmark"
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


                            <a class="title" href="https://demo2.smthemes.com/?p=1767" rel="bookmark"
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


                            <a class="title" href="https://demo2.smthemes.com/?p=1764" rel="bookmark"
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


                            <a class="title" href="https://demo2.smthemes.com/?p=1761" rel="bookmark"
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


                            <a class="title" href="https://demo2.smthemes.com/?p=1756" rel="bookmark"
                               title="Libero non vestibulum laoreet">Libero non vestibulum laoreet</a>


                            <p>Fusce odio quam, porttitor vitae vulputate nec, varius sit amet erat. Vestibulum dictum
                                ex sed lorem tincidunt rutrum...</p>
                        </li>
                    </ul>
                </div>
                <div id="tag_cloud-2" class="widget widget_tag_cloud">
                    <div class="caption"><h4>Tags</h4></div>
                    <div class="tagcloud"><a href="https://demo2.smthemes.com/?tag=audio" class="tag-link-70"
                                             title="1 topic" style="font-size: 8pt;">audio</a>
                        <a href="https://demo2.smthemes.com/?tag=content-2" class="tag-link-79" title="1 topic"
                           style="font-size: 8pt;">content</a>
                        <a href="https://demo2.smthemes.com/?tag=embeds-2" class="tag-link-87" title="2 topics"
                           style="font-size: 13.25pt;">embeds</a>
                        <a href="https://demo2.smthemes.com/?tag=gallery" class="tag-link-99" title="1 topic"
                           style="font-size: 8pt;">gallery</a>
                        <a href="https://demo2.smthemes.com/?tag=jetpack-2" class="tag-link-109" title="1 topic"
                           style="font-size: 8pt;">jetpack</a>
                        <a href="https://demo2.smthemes.com/?tag=media" class="tag-link-117" title="1 topic"
                           style="font-size: 8pt;">media</a>
                        <a href="https://demo2.smthemes.com/?tag=post-formats" class="tag-link-134" title="5 topics"
                           style="font-size: 22pt;">Post Formats</a>
                        <a href="https://demo2.smthemes.com/?tag=quote" class="tag-link-140" title="1 topic"
                           style="font-size: 8pt;">quote</a>
                        <a href="https://demo2.smthemes.com/?tag=shortcode" class="tag-link-146" title="2 topics"
                           style="font-size: 13.25pt;">shortcode</a>
                        <a href="https://demo2.smthemes.com/?tag=tiled" class="tag-link-164" title="1 topic"
                           style="font-size: 8pt;">tiled</a>
                        <a href="https://demo2.smthemes.com/?tag=twitter-2" class="tag-link-167" title="1 topic"
                           style="font-size: 8pt;">twitter</a>
                        <a href="https://demo2.smthemes.com/?tag=video" class="tag-link-170" title="1 topic"
                           style="font-size: 8pt;">video</a>
                        <a href="https://demo2.smthemes.com/?tag=wordpress-tv" class="tag-link-174" title="1 topic"
                           style="font-size: 8pt;">wordpress.tv</a></div>
                </div>
            </div>

        </div> <!-- / boxed container -->
    </div> <!-- / wrapper -->
    <footer>
        <div class="boxed-container">


            <div class="footer-columns">
                <div id="tag_cloud-3" class="widget widget_tag_cloud">
                    <div class="caption"><h4>Tag Cloud</h4></div>
                    <div class="tagcloud"><a href="https://demo2.smthemes.com/?tag=audio" class="tag-link-70"
                                             title="1 topic" style="font-size: 8pt;">audio</a>
                        <a href="https://demo2.smthemes.com/?tag=content-2" class="tag-link-79" title="1 topic"
                           style="font-size: 8pt;">content</a>
                        <a href="https://demo2.smthemes.com/?tag=embeds-2" class="tag-link-87" title="2 topics"
                           style="font-size: 13.25pt;">embeds</a>
                        <a href="https://demo2.smthemes.com/?tag=gallery" class="tag-link-99" title="1 topic"
                           style="font-size: 8pt;">gallery</a>
                        <a href="https://demo2.smthemes.com/?tag=jetpack-2" class="tag-link-109" title="1 topic"
                           style="font-size: 8pt;">jetpack</a>
                        <a href="https://demo2.smthemes.com/?tag=media" class="tag-link-117" title="1 topic"
                           style="font-size: 8pt;">media</a>
                        <a href="https://demo2.smthemes.com/?tag=post-formats" class="tag-link-134" title="5 topics"
                           style="font-size: 22pt;">Post Formats</a>
                        <a href="https://demo2.smthemes.com/?tag=quote" class="tag-link-140" title="1 topic"
                           style="font-size: 8pt;">quote</a>
                        <a href="https://demo2.smthemes.com/?tag=shortcode" class="tag-link-146" title="2 topics"
                           style="font-size: 13.25pt;">shortcode</a>
                        <a href="https://demo2.smthemes.com/?tag=tiled" class="tag-link-164" title="1 topic"
                           style="font-size: 8pt;">tiled</a>
                        <a href="https://demo2.smthemes.com/?tag=twitter-2" class="tag-link-167" title="1 topic"
                           style="font-size: 8pt;">twitter</a>
                        <a href="https://demo2.smthemes.com/?tag=video" class="tag-link-170" title="1 topic"
                           style="font-size: 8pt;">video</a>
                        <a href="https://demo2.smthemes.com/?tag=wordpress-tv" class="tag-link-174" title="1 topic"
                           style="font-size: 8pt;">wordpress.tv</a></div>
                </div>
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
                <div class="nav-menu">
                    <ul>
                        <li class="page_item page-item-1779"><a href="https://demo2.smthemes.com/?page_id=1779">Contact
                                Us</a></li>
                        <li class="page_item page-item-5 page_item_has_children"><a
                                    href="https://demo2.smthemes.com/?page_id=5">About The Tests</a>
                            <ul class="children">
                                <li class="page_item page-item-1133"><a href="https://demo2.smthemes.com/?page_id=1133">Page
                                        Image Alignment</a></li>
                                <li class="page_item page-item-1134"><a href="https://demo2.smthemes.com/?page_id=1134">Page
                                        Markup And Formatting</a></li>
                            </ul>
                        </li>
                        <li class="page_item page-item-146"><a
                                    href="https://demo2.smthemes.com/?page_id=146">Languages</a></li>
                    </ul>
                </div>
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
                <div>Copyright © 2023 <a href="https://demo2.smthemes.com">SMThemes.com Demo</a></div>
                <div class="smthemes">Designed by <a href="http://smthemes.com" target="_blank">SMThemes.com</a>, thanks
                    to: <a href="http://www.dpthemes.com/" target="_blank">www.dpthemes.com</a>, <a
                            href="http://crocotheme.com/" target="_blank">crocotheme.com</a> and <a
                            href="http://theme.today/" target="_blank">http://theme.today</a></div>
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