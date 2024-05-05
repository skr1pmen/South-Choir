<?php

use coderius\swiperslider\SwiperSlider;

?>
<?=
SwiperSlider::widget([
    'slides' => [
        '<div class="slid"><h2>Новая<br/>история джинсов</h2><img class="slidImg" src="/images/slider/one.jpg"></div>',
        '<div class="slid"><h2>Новая<br/>движение джинсов</h2><img class="slidImg" src="/images/slider/two.jpg"></div>',
        '<div class="slid"><h2>Для мужчин</h2><img class="slidImg" src="/images/slider/three.jpeg"></div>',
        '<div class="slid"><h2>Для подростков</h2><img class="slidImg" src="/images/slider/four.jpg"></div>',
        '<div class="slid"><h2>Для девушек</h2><img class="slidImg" src="/images/slider/five.jpg"></div>',
    ],
    'clientOptions' => [
        'autoplay' => true,
        'loop' => true,
        'slidesPerView' => 1,
        'pagination' => [
            'clickable' => true,
        ],
        "scrollbar" => [
            "el" => \coderius\swiperslider\SwiperSlider::getItemCssClass(SwiperSlider::SCROLLBAR),
            "hide" => false,
        ],
    ],
    'showScrollbar' => false,
    'options' => [
        'styles' => [
            \coderius\swiperslider\SwiperSlider::CONTAINER => ["height" => "100svh"],
            \coderius\swiperslider\SwiperSlider::SLIDE => ["text-align" => "center"],
        ],
    ],
]);
?>
<div class="page">
    <div class="womenBlock">
        <div class="titleBlock">#Для женщин</div>
        <div class="cards">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
    </div>
    <div class="childBlock">
        <div class="titleBlock">#Для Детей</div>
        <div class="cards">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
    </div>
    <div class="manBlock">
        <div class="titleBlock">#Для мужчин</div>
        <div class="cards">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
    </div>
</div>
