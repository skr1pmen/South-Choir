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
                <img src="<?= '/images/jeans/' . $product['id'] . '.jpg' ?>" alt="">
                <div class="data">
                    <?php if ($product->color) : ?>
                        <span class="color" style="background: <?= $product->color->color ?>/*;"></span>
                    <?php endif;
                    if ($product['size']) : ?>
                        <span class="size"><?= $product->size->size ?></span>
                    <?php endif; ?>
                </div>
                <h2><?= $product['name'] ?></h2>
                <span class="description"><?= $product['description'] ?></span>
                <span class="price <?= $product['discount'] !== 0 ? 'priceDiscount' : '' ?>"><?= $product['price'] ?> ₽</span>
                <?php if ($product['discount'] !== 0) : ?>
                    <span class="price"><?= $product['price'] - ($product['price'] * ($product['discount'] / 100)) ?> ₽</span>
                <?php endif; ?>
                <a class="btn" href="/catalog/product?id=<?= $product['id'] ?>">Страница товара</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
