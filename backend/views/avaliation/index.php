<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvaliationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avaliations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Avaliation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'stars',
            'critique',
            'fk_id_user',
            'fk_id_movie',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
