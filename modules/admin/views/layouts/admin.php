<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\PanelAsset;
use rmrevin\yii\fontawesome\FAS;

PanelAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <div class="preloader">
        <div class="load">South<span>Choir</span></div>
    </div>
    <head>
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="container">
            <header class="header">
                <h1><?= $this->title ?></h1>
                <div>
                    <a class="user" href="<?php if (Yii::$app->user->isGuest) {
                        echo '/user/authorization';
                    } else {
                        echo '/user/profile';
                    } ?>">
                        <?php if (file_exists(Yii::getAlias("@webroot") . '/images/users_avatars/' . Yii::$app->user->id . '.jpg')) : ?>
                            <img class="avatarImg" src="<?= '/images/users_avatars/' . Yii::$app->user->id . '.jpg' ?>"
                                 alt="">
                        <?php else : ?>
                            <?= FAS::icon('user')->size('2x') ?>
                        <?php endif; ?>
                    </a>
                    <span><?= Yii::$app->user->identity->login ?></span>
                </div>
            </header>
        </div>
        <main>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="/admin/panel"><?= FAS::icon('home')->size('2x') ?> Главная</a></li>
                        <li><a href="/admin/panel/users"><?= FAS::icon('users')->size('2x') ?> Пользователи</a></li>
                        <li><a href="/admin/panel/products"><?= FAS::icon('paperclip')->size('2x') ?> Товары</a></li>
                        <li><a href="/"><?= FAS::icon('door-open')->size('2x') ?> Вернуться на сайт</a></li>
                    </ul>
                </nav>
                <div>
                    <?= $content ?>
                </div>
            </div>
        </main>
        <footer class="container">
        </footer>
        <script>
            window.addEventListener('load', () => {
                let loader = document.querySelector(".preloader");
                loader.style.opacity = 0;
                setTimeout(() => {
                    loader.style.display = 'none'
                }, 500);
            })
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
