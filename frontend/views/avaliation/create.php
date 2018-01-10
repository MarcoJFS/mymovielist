<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Avaliation */

$this->title = 'Create Avaliation';
//$this->params['breadcrumbs'][] = ['label' => 'Avaliations', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
