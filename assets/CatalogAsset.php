<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CatalogAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        'https://fonts.googleapis.com/css2?family=Bad+Script&display=swap',
        'css/catalog/main.css',
        'css/preloader.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'rmrevin\yii\fontawesome\NpmFreeAssetBundle'
    ];
}
