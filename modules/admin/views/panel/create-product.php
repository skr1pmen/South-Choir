<?php
/**
 * @var $model ;
 * @var $sizes ;
 * @var $colors ;
 * @var $type ;
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="page">
    <div class="addProduct">
        <?php $form = ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data'
            ],
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'label'],
                'inputOptions' => ['class' => 'input'],
                'errorOptions' => ['class' => 'error'],
            ],
        ]); ?>
        <div class="productPhoto">
            <div class="photo">
                <label>
                    <img class="photoImg" src="/images/product-placeholder.png" alt="">
                    <span class="photoFileName">Выберите файл</span>
                    <?= $form->field($model, 'photo')->fileInput() ?>
                </label>
            </div>
        </div>
        <div>
            <div class="name"><?= $form->field($model, 'name')->textInput(['placeholder' => 'Название товара']) ?></div>
            <div class="description"><?= $form->field($model, 'description')->textarea(['rows' => 5, 'placeholder' => 'Описание товара']) ?></div>
            <div class="productNumbers">
                <div class="price"><?= $form->field($model, 'price')->input('number', ['placeholder' => 'Цена товара']) ?></div>
                <div class="discount"><?= $form->field($model, 'discount')->input('number', ['value' => 0, 'placeholder' => 'Скидка на товар']) ?></div>
            </div>
            <div class="formFactor"><?= $form->field($model, 'form_factor')->textInput(['placeholder' => 'Форм-фактор товара']) ?></div>
            <div class="size"><?= $form->field($model, 'size_id')->dropDownList($sizes) ?></div>
            <div class="type"><?= $form->field($model, 'type')->dropDownList($type) ?></div>
            <div class="color"><?= $form->field($model, 'color_id')->radioList($colors, ['class' => 'colors']) ?></div>
            <?= Html::submitButton('Добавить', ['class' => 'btn']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<script>
    document.querySelector('#createproductform-photo').onchange = function (event) {
        document.querySelector('.photoFileName').textContent = this.files[0].name;
        let reader = new FileReader();
        reader.onload = function () {
            let output = document.querySelector('.photoImg');
            output.src = reader.result;
            // console.log(reader.result)
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    // document.querySelector('#createproductform-photo').onchange = function (event) {
    //     var reader = new FileReader();
    //     reader.onload = function () {
    //         var output = document.querySelector('.photoFileName');
    //         output.src = reader.result;
    //         output.style.display = 'block';
    //     };
    //     reader.readAsDataURL(event.target.files[0]);
    // };
</script>