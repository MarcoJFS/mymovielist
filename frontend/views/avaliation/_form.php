<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Movie;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Avaliation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avaliation-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stars')->textInput(['type' => 'number', 'style'=>'width:100px', 'min' => 0, 'max' => 5, 'step' => 0.5, 'value' => 0]) ?>

    <?= $form->field($model, 'critique')->textarea(['maxlength' => true, 'style'=>'height:150px']) ?>

    <!-- <?= $form->field($model, 'fk_id_user')->textInput() ?> -->

    <?= $form->field($model, 'fk_id_movie')->dropDownList(ArrayHelper::map( Movie::find()->all(), 'id', 'name'), ['prompt'=>'Select item', 'style'=>'width:400px']) ?>

    <!-- <?= $form->field($model, 'fk_id_movie')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
