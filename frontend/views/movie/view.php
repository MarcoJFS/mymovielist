<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-view">

    <h1><?= $model->name ?></h1>

    <div>
        <?php
        echo '<img src=' . '"..\\..\\..\\mymovielist\\image\\'. $model->image . '"' . ' height="566" width="400" class="movieCover">';
        ?>
    </div>
    <div style='margin-left:420px; margin-top: -550px';>
        <h4><?php
            //echo '<h4><font size="4" margin="0px">' . $movie->name . ' (' . $movie->year . ')' . '</font></h4>';
            echo 'Year: ' . $model->year . '<br>' . '<br>';
            echo 'Type: ' . $model->type . '<br>' . '<br>';
            echo 'Director: ' . $model->director . '<br>' . '<br>';
            echo 'Cast: ' . $model->cast . '<br>' . '<br>';

            //echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=movie%2Fview&amp;id=$movie->id\">See More &raquo;</a></p>"
            ?></h4>
    </div>
    <div style='margin-left:20px; margin-top: 420px';>
        <h4><?php
            //echo '<h4><font size="4" margin="0px">' . $movie->name . ' (' . $movie->year . ')' . '</font></h4>';
            echo $model->description;

            //echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=movie%2Fview&amp;id=$movie->id\">See More &raquo;</a></p>"
            ?></h4>
    </div>

    <?php if (!(Yii::$app->user->isGuest)) { ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php } ?>


</div>
