<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Movie;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Tosee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tosee-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'fk_id_movie')->textInput() ?> -->

    <?= $form->field($model, 'fk_id_movie')->dropDownList(ArrayHelper::map( Movie::find()->all(), 'id', 'name'), ['prompt'=>'Select item', 'style'=>'width:400px']) ?>

    <!-- <?= $form->field($model, 'fk_id_user')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
