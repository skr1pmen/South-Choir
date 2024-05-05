<?php
/**
 * @var $model ;
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<?php $form = ActiveForm::begin([
    'options' => [
        'class' => 'form-swiper',
        'enctype' => 'multipart/form-data'
    ],
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'label'],
        'inputOptions' => ['class' => 'input'],
        'errorOptions' => ['class' => 'error'],
    ],
]) ?>
<label class="avatar">
    <img class="ava"
         src="https://i2.wp.com/vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png?fit=512%2C512&ssl=1" alt="">
    <?= $form->field($model, 'photo')->fileInput(['class' => 'file_input']) ?>
</label>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'surname')->textInput() ?>
<?= $form->field($model, 'patronymic')->textInput() ?>
<?= $form->field($model, 'login')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'repeatPassword')->passwordInput() ?>
<span class="checkbox__rf">
        <?= $form->field($model, 'acceptRules')->checkbox(['template' => "{input}"]) ?>
        <span>Я соглашаюсь с <a href="/user/rules" class="rules">правилами использования платформы</a></span>
    </span>
<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn']) ?>
<?php ActiveForm::end() ?>
<img class="bg" src="" alt="">
<script>
    let list = ['3d_man.png', '3d_women.png', '3d_yeti.png'];
    document.querySelector('.bg').src = '/images/' + list[Math.floor(Math.random() * list.length)];

    document.querySelector('.file_input').onchange = function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.querySelector('.ava');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
