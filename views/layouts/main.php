<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;

AppAsset::register($this);

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
        <header class="header">
            <div class="container">
                <a href="/" class="logo">South Choir</a>
            </div>
        </header>
        <main>
            <div class="container">
                <?= $content ?>
            </div>
        </main>
        <footer class="container">
            456
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
