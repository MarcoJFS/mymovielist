<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'style'=>'width:400px']) ?>

    <?= $form->field($model, 'year')->textInput(['type' => 'number', 'style'=>'width:100px', 'min' => 1918, 'max' => 2018]) ?>


    <?php $listData = ['action' => 'Action', 'adventure' => 'Adventure', 'comedy' => 'Comedy', 'crime' => 'Crime', 'drama' => 'Drama', 'fantasy' => 'Fantasy', 'historical' => 'Historical', 'horror' => 'Horror', 'thriller' => 'Thriller', 'western' => 'Western', 'animation' => 'Animation']; ?>
    <?php echo $form->field($model, 'type')->dropDownList($listData, ['prompt'=>'Select item', 'style'=>'width:400px']);?>

    <!-- <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'director')->textInput(['maxlength' => true, 'style'=>'width:400px']) ?>

    <?= $form->field($model, 'cast')->textInput(['maxlength' => true, 'style'=>'width:400px']) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true, 'style'=>'height:150px']) ?>

    <!--<?= $form->field($model, 'image')->fileInput(['type' => 'file', 'maxlength' => true]) ?>-->
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <!-- <?= $form->field($model, 'file')->fileInput() ?> -->
    <!-- <button>Add</button> -->

    <!-- <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
