<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tosee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tosee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_id_movie')->textInput() ?>

    <?= $form->field($model, 'fk_id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
