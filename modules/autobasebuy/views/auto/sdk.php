<?php
//require_once($_SERVER["DOCUMENT_ROOT"] . '/pay_common/const.php');
$host = 'api.basebuy.ru';
$isProduction = false;
$commonHost = 'http://basebuy.hm';
if ($_SERVER['HTTP_HOST'] == $host) {
    $isProduction = true;
    $commonHost = 'https://basebuy.ru';
}

if ($_SERVER['HTTP_HOST'] == $host) $isProduction = true;
else $isProduction = false;
$this->title = 'AutoBasebuy SDK';
?>

<div class="buy-action-btn" style="display:none">
    <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" title="Скачать" href="/#download">
        <i class="material-icons">&#xE8CC;</i>
    </a>
</div>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header b-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title title"><img src="<?php echo $commonHost; ?>/common/icons/Box1@2x.png" width="30" height="30" alt=""> <span class="txt">Программы для разработчика</span></span>

            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="/#header">Наверх</a>
                <a class="mdl-navigation__link" href="/#yii">Yii module</a>
                <a class="mdl-navigation__link" href="/#mysql">Импорт MySQL</a>
                <a class="mdl-navigation__link" href="/#bases_all">Базы</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">AutoBasebuy SDK</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/#header">Наверх</a>
            <a class="mdl-navigation__link" href="/#yii">Yii module</a>
            <a class="mdl-navigation__link" href="/#mysql">Импорт MySQL</a>
            <a class="mdl-navigation__link" href="/#bases_all">Базы</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content b-content">
            <div class="page-wrapper" id="header">

                <section class="b-vitrina" style="padding: 50px 0; margin-bottom: 50px;">
                    <div class="container">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--7-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                                <h1 itemprop="name" style="margin:0">AutoBasebuy SDK</h1>
                                <p>Раздел помощи разработчикам, использующим базы BaseBuy.ru</p>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- content-4 -->
                <section class="b-auto-api-sdk" id="yii">
                    <div class="container">
                        <div class="hdr">
                            <h3>Auto API SDK PHP</h3>
                        </div>

                        <h5>Готовый пример взимодействия с Auto API, реализованный на PHP с использованием Curl</h5>

                        <p>1. Клонируйте репозиторий с GitHub:<br>
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="https://github.com/basebuy/basebuy-auto-sdk-php"> <span>https://github.com/basebuy/basebuy-auto-sdk-php</span></a>
                        </p>

                        <p>2. Сделайте запрос на <a href="mailto:support@basebuy.ru">support@basebuy.ru</a> для получения API_KEY (ключ доступа к API).</p>

                        <p>3. Вставьте полученный API_KEY в sample.php и запустите его.</p>

                        <p>4. Напишите ваш сценарий взаимодействия с API на базе примера.</p>

                        <p>Ознакомьтесь с <a href="/api/auto/v1/">Описанием Basebuy Auto API</a></p>

                    </div>
                </section>


                <!-- content-4 -->
                <section class="b-module-yii" id="yii">
                    <div class="container">
                        <div class="hdr">
                            <h3>Модуль autobasebuy для Yii</h3>
                        </div>

                        <h5>Инструкция по установке</h5>

                        <p>1. Скачайте модуль autobasebuy для Yii v1:<br>
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="https://yadi.sk/d/xkCV1np3kQDs8"> <span>Скачать autobasebuy</span></a>
                        </p>

                        <p>2. Распакуйте в папку <b>/protected/modules/</b></p>

                        <p>3. Добавить модуль в конфигурацию приложения:</p>

                        <pre>
return [
    'modules' => [
        'autobasebuy',
    ],
]
                        </pre>

                        <p>4. Представление модуля в виде взаимосвязанных списков будет доступно по адресу: <b>http://ваш_сайт.ру/autobasebuy/auto/index/</b></p>

                    </div>
                </section>


                <!-- content-4 -->
                <section class="b-module-yii" id="mysql">
                    <div class="container">
                        <div class="hdr">
                            <h3>Импорт MySQL базы</h3>
                        </div>

                        <h5>Инструкция по загрузке базы данных на сервер</h5>

                        <p>1. Купите <a href="/#bases_all">одну из наших баз данных</a></p>

                        <p>2. Скачайте MySQL-версию базы данных по ссылке в полученном письме</p>

                        <p>3. Распакуйте базу данных</p>

                        <p>4. Распакованный .sql файл загрузите на сервер через FTP или иным способом</p>

                        <p>5. Подключитесь к серверу через SHH и перейдите в папку с загруженным .sql файлом</p>

                        <p>6. Выполните команду импорта:<br>
                            <b>mysql -uUSR -pPASS BASE < xxx.sql</b><br>
                            <i>USR</i> - имя пользователя к базе MySQL<br>
                            <i>PASS</i> - пароль пользователя к базе MySQL<br>
                            <i>BASE</i> - имя базы MySQL, куда будут загружены данные<br>
                            <i>xxx.sql</i> - имя загруженного на сервер .sql файла базы
                        </p>

                    </div>
                </section>


                <!-- content-6 -->
                <section class="b-example" id="example">
                    <div>
                        <div class="container">
                            <div class="hdr">
                                <h3>Результат</h3>
                            </div>

                            <iframe src="https://api.basebuy.ru/autobasebuy/auto/index/" style="width:100%; height:650px; border: 1px dashed #eee; padding: 20px;"></iframe>

                        </div>
                    </div>
                </section>


                <?php echo @file_get_contents($commonHost . "/common/block/site_list_auto_v2.php"); ?>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                <script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
                <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
                <script src="<?php echo $commonHost; ?>/common/styles/common_mdl_v1.js"></script>

                <?php echo @file_get_contents($commonHost . "/common/block/footer_auto_v2.php"); ?>

            </div>


    </main>
</div>
