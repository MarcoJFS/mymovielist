<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Movie;
use \yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movies';
//$this->params['breadcrumbs'][] = $this->title;
$this->cssFiles
?>
<div class="movie-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (!(Yii::$app->user->isGuest)) { ?>
    <p>
        <?= Html::a('Create Movie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php } ?>
    <?php
    foreach ($movies as $movie){
        ?>
        <br><br>
        <div class='container2'>
            <div>
                <!--<img src="..\..\..\mymovielist\image\bastards.jpg" alt="Mountain View" height="85" width="60" class="movieCover">-->
                <?php
                echo '<img src=' . '"..\\..\\..\\mymovielist\\image\\'. $movie->image . '"' . ' height="85" width="60" class="movieCover">';
                ?>
            </div>
            <div style='margin-left:70px; margin-top: -95px';>
                <?php
                echo '<h4><font size="4" margin="0px">' . $movie->name . ' (' . $movie->year . ')' . '</font></h4>';
                echo $movie->description;
                echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=movie%2Fview&amp;id=$movie->id\">See More &raquo;</a></p>"
                ?>
            </div>
        </div>
        <br><br>
        <?php
    }
    ?>

</div>
