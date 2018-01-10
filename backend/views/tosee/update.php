<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tosee */

$this->title = 'Update Tosee: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tosees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tosee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
