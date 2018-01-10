<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \app\models\Movie;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ToseeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movies To See';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tosee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Movie To See', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    foreach ($tosees as $tosee){
        ?>
        <?php

        $moviename = Movie::findOne($tosee->fk_id_movie);
        $name = $moviename->name;
        $year = $moviename->year;
        $image = $moviename->image;
        $description = $moviename->description;

        ?>
        <div class='container2'>
            <div>
                <!--<img src="..\..\..\mymovielist\image\bastards.jpg" alt="Mountain View" height="85" width="60" class="movieCover">-->
                <?php
                echo '<img src=' . '"..\\..\\..\\mymovielist\\image\\'. $image . '"' . ' height="85" width="60" class="movieCover">';
                ?>
            </div>
            <div style='margin-left:70px; margin-top: -95px';>
                <?php
                echo '<h4><font size="4" margin="0px">' . $name . ' (' . $year . ')' . '</font></h4>';
                echo $description;
                echo "<p><a class='btn btn-default' href=\"/mymovielist/frontend/web/index.php?r=tosee%2Fview&amp;id=$tosee->id\">See More &raquo;</a></p>"
                ?>
            </div>
        </div>
        <br><br>
        <?php
    }
    ?>
</div>
