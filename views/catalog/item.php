<?php
/**
 * @var $item ;
 */
//var_dump($item->color->name);
?>
<div class="page item_page">
    <!--    --><?php //var_dump($item->color->name) ?>
    <div class="product">
        <img src="/images/jeans/<?= $item->id ?>.jpg" alt="jeans">
        <div class="productInfo">
            <h1><?= $item->name ?></h1>
            <span><?= $item->description ?></span>
            <ul>
                <li>Цвет: <?= $item->color->name ?></li>
                <li>Размер: <?= $item->size->size ?></li>
            </ul>
            <a href="/catalog/buy?id=<?= $item->id ?>" class="btn">Купить</a>
        </div>
    </div>
</div>
