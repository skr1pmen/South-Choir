<?php
/**
 * @var $model ;
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<?php $form = ActiveForm::begin([
    'options' => [
        'class' => 'form-swiper'
    ],
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'label'],
        'inputOptions' => ['class' => 'input'],
        'errorOptions' => ['class' => 'error'],
    ],
]) ?>
<?= $form->field($model, 'login')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= Html::submitButton('Войти', ['class' => 'btn']) ?>
<?php ActiveForm::end() ?>
<img class="bg" src="" alt="">
<script>
    let list = ['3d_man.png', '3d_women.png', '3d_yeti.png'];
    document.querySelector('.bg').src = '/images/' + list[Math.floor(Math.random() * list.length)];
</script>
