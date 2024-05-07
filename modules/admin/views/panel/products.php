<?php
/**
 * @var $products ;
 */

use rmrevin\yii\fontawesome\FAS;

?>

<div class="page">
    <a href="/admin/panel/create-product" class="btn"><?= FAS::icon('plus')->size('sm') ?>Новый продукт</a>
    <div class="productCards">
        <?php foreach ($products as $product): ?>
            <div class="productCard">

            </div>
        <?php endforeach; ?>
    </div>
</div>
