<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;
use app\models\Avaliation;
use \app\models\Movie;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvaliationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evaluations';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliation-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Evaluation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    foreach ($avaliations as $avaliation){
        ?>
        <?php
        $asd = 3;
        $moviename = Movie::findOne($avaliation->fk_id_movie);
        $name = $moviename->name;
        $year = $moviename->year;
        $image = $moviename->image;

        ?>
        <div class='container2'>
            <div>
                <!--<img src="..\..\..\mymovielist\image\bastards.jpg" alt="Mountain View" height="85" width="60" class="movieCover">-->
                <?php
                //echo implode($movieimage);
                echo '<img src=' . '"..\\..\\..\\mymovielist\\image\\'. $image . '"' . ' height="85" width="60" class="movieCover">';
                ?>
            </div>
            <div style='margin-left:70px; margin-top: -95px';>
                <?php
                echo '<h4><font size="4" margin="0px">' . $name . ' (' . $year . ')' . '</font></h4>';
                //echo $avaliation->stars;
                for ($i = 1; $i <= floor($avaliation->stars); $i++){
                    echo '<img src=' . '"..\\..\\..\\mymovielist\\img\\star.png"' . ' height="25" width="25" class="movieCover">';
                }
                if(($avaliation->stars - floor($avaliation->stars))==0.5){
                    echo '<img src=' . '"..\\..\\..\\mymovielist\\img\\halfstar.png"' . ' height="25" width="25" class="movieCover">';
                }
                for ($i = ceil($avaliation->stars); $i < 5; $i++){
                    echo '<img src=' . '"..\\..\\..\\mymovielist\\img\\nostar.png"' . ' height="25" width="25" class="movieCover">';
                }
                echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=avaliation%2Fview&amp;id=$avaliation->id\">See More &raquo;</a></p>"
                ?>
            </div>
        </div>
        <br><br>
        <?php
    }
    ?>
</div>
