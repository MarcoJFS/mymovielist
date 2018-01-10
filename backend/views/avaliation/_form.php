<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Avaliation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avaliation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stars')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'critique')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fk_id_user')->textInput() ?>

    <?= $form->field($model, 'fk_id_movie')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
