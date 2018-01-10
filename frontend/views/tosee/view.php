<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\models\Movie;

/* @var $this yii\web\View */
/* @var $model app\models\Tosee */

$moviename = Movie::findOne($model->fk_id_movie);
$name = $moviename->name;
$year = $moviename->year;
$image = $moviename->image;
$description = $moviename->description;
$type = $moviename->type;
$director = $moviename->director;
$cast = $moviename->cast;

$this->title = $name;
//$this->params['breadcrumbs'][] = ['label' => 'Tosees', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tosee-view">

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
            echo 'Cast: ' . $cast . '<br>' . '<br>';


            //echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=movie%2Fview&amp;id=$movie->id\">See More &raquo;</a></p>"
            ?></h4>
    </div>
    <div style='margin-left:20px; margin-top: 420px';>
        <?php echo $description; ?>
        <br><br><br>
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
