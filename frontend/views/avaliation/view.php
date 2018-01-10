<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\models\Movie;

/* @var $this yii\web\View */
/* @var $model app\models\Avaliation */

$moviename = Movie::findOne($model->fk_id_movie);
$name = $moviename->name;
$year = $moviename->year;
$image = $moviename->image;
$description = $moviename->description;
$type = $moviename->type;
$director = $moviename->director;
$cast = $moviename->cast;

$this->title = $name;
//$this->params['breadcrumbs'][] = ['label' => 'Avaliations', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliation-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <div>
        <?php
        echo '<img src=' . '"..\\..\\..\\mymovielist\\image\\'. $image . '"' . ' height="566" width="400" class="movieCover">';
        ?>
    </div>
    <div style='margin-left:420px; margin-top: -550px';>
        <h4><?php
            //echo '<h4><font size="4" margin="0px">' . $movie->name . ' (' . $movie->year . ')' . '</font></h4>';
            echo 'Year: ' . $year . '<br>' . '<br>';
            echo 'Type: ' . $type . '<br>' . '<br>';
            echo 'Director: ' . $director . '<br>' . '<br>';
            echo 'Cast: ' . $cast . '<br>' . '<br>' . '<br>';
            echo $description;

            //echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=movie%2Fview&amp;id=$movie->id\">See More &raquo;</a></p>"
            ?></h4>
    </div>
    <div style='margin-left:20px; margin-top: 420px';>
        <hr> <h2> My Evaluation </h2>
        <h4><?php

            for ($i = 1; $i <= floor($model->stars); $i++){
                echo '<img src=' . '"..\\..\\..\\mymovielist\\img\\star.png"' . ' height="50" width="50" class="movieCover">';
            }
            if(($model->stars - floor($model->stars))==0.5){
                echo '<img src=' . '"..\\..\\..\\mymovielist\\img\\halfstar.png"' . ' height="50" width="50" class="movieCover">';
            }
            for ($i = ceil($model->stars); $i < 5; $i++){
                echo '<img src=' . '"..\\..\\..\\mymovielist\\img\\nostar.png"' . ' height="50" width="50" class="movieCover">';
            }
            echo '<br>' . '<br>';
            echo $model->critique;
            ?></h4>
    </div>



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
</div>
