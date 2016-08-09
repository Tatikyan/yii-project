<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php if ($name) { ?>
    <p> Вы ввели имя <b><?=$name?></b> и email <b> <?=$email?></b>.</p>
    <?php } ?>
<?php
    $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
    echo $f->field($form, 'name');
    echo $f->field($form, 'email');
    echo $f->field($form, 'file')->fileInput();
    echo Html::submitButton('Отправить');
    ActiveForm::end();
