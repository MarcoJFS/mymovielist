<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tosee */

$this->title = 'Create Tosee';
//$this->params['breadcrumbs'][] = ['label' => 'Tosees', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tosee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
