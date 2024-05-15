<?php
/**
 * @var $products ;
 */
?>
<img class="bgBlock" src="/images/jeans/woman/bg.png" alt="">
<div class="page">
    <div class="cards">
        <?php foreach ($products as $item): ?>
            <div class="card" style="padding: 0 25px">
                <img src="/images/jeans/<?= $item['id'] ?>.jpg" alt="">
                <a href="/catalog/item?id=<?= $item->id ?>">
                    <h3><?= $item->name ?></h3>
                </a>
                <a href="/catalog/buy?id=<?= $item->id ?>">
                        <span class="price" title="Нажмите для добавления в корзину">
                            <?= floor($item['price'] - ($item['price'] * ($item['discount'] / 100))) ?> ₽
                        </span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
