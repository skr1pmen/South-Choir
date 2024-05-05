<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\CatalogAsset;
use rmrevin\yii\fontawesome\FAS;

CatalogAsset::register($this);

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
                <a class="logo" href="/">
                    <svg width="221" height="179" viewBox="0 0 221 179" xmlns="http://www.w3.org/2000/svg"
                    >
                        <path id="Убрать верхний слой"
                              d="M0 92.1755L0 131.576Q24.9514 138.43 35.5469 138.43Q42.4116 138.43 45.4023 135.026Q47.7109 132.398 47.7109 127.742Q47.7109 127.112 47.6245 126.493Q46.959 121.732 41.1719 117.688Q34.7031 113.047 25.4922 108.477Q16.2812 103.836 6.92969 97.7891Q3.24051 95.4036 0 92.1755ZM59.6357 178.875L138.227 178.875L138.227 111.164L171.906 111.164L171.906 178.875L220.844 178.875L220.844 0L171.906 0L171.906 70.3125L138.227 70.3125L138.227 0L88.0007 0L88.2812 47.4453Q59.8047 40.7656 49.1172 40.7656Q40.9854 40.7656 37.7519 44.7454Q35.6172 47.3727 35.6172 51.7344Q35.6172 51.827 35.6202 51.9196Q35.7569 56.1115 42.0859 60.1016Q48.5547 64.1094 57.7656 68.6094Q66.9766 73.0391 76.1875 79.2266Q85.3984 85.4141 91.8672 96.9453Q92.122 97.3996 92.3668 97.8591Q98.3359 109.067 98.3359 123.453Q98.3359 148.536 85.9775 163.211Q84.8596 164.539 83.6406 165.781Q81.9146 167.549 80.0171 169.108Q71.5378 176.074 59.6357 178.875Z"
                              clip-rule="evenodd" fill-rule="evenodd"/>
                    </svg>
                </a>
                <nav>
                    <a href="">Женщины</a>
                    <a href="/catalog/for-men">Мужчины</a>
                    <a href="">Дети</a>
                </nav>
                <a class="user" href="<?php if (Yii::$app->user->isGuest) {
                    echo '/user/authorization';
                } else {
                    echo '/user/profile';
                } ?>">
                    <?php if (Yii::$app->user->isGuest) : ?>
                        <?= FAS::icon('user')->size('2x') ?>
                    <?php else : ?>
                        <?php if (file_exists(Yii::getAlias("@webroot") . '/images/users_avatars/' . Yii::$app->user->id . '.jpg')) : ?>
                            <img class="avatarImg" src="<?= '/images/users_avatars/' . Yii::$app->user->id . '.jpg' ?>"
                                 alt="">
                        <?php else : ?>
                            <?= FAS::icon('user')->size('2x') ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </header>
        </div>
        <main>
            <div class="container">
                <?= $content ?>
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
