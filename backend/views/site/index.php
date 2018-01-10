<?php

/* @var $this yii\web\View */

$this->title = 'MyMovieList-Admin';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>MyMovieList</h1>

        <p>Only for administrator</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Movies</h2>

                <p>All the movies that were created by users. <br>
                    You can view, create more, edit the already created ones and delete them.</p>

                <p><a class="btn btn-default" href="../web/index.php?r=movie%2Findex">Movies</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Evaluations</h2>

                <p>All reviews and ratings are displayed by our users, on their perceptions and opinions. <br>
                    You can view, create more, edit the already created ones and delete them.</p>

                <p><a class="btn btn-default" href="../web/index.php?r=avaliation%2Findex">Evaluations</a></p>
            </div>
            <div class="col-lg-4">
                <h2>To See</h2>

                <p>
                    All the movies that our users want to see that they do not yet have the opportunity to see,
                    that have not yet had time or have not left yet. <br>
                    You can view, create more, edit the already created ones and delete them.</p>

                <p><a class="btn btn-default" href="../web/index.php?r=tosee%2Findex">To See</a></p>
            </div>
        </div>

    </div>
</div>
