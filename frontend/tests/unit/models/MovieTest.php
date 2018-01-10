<?php
namespace frontend\tests\unit\models;

use Yii;
use app\models\Movie;

class MovieTest extends \Codeception\Test\Unit
{
    function testSaveMovie()
    {
        $movie = new Movie();
        $movie->name = 'Allied';
        $movie->year = 2016;
        $movie->type = 'Action';
        $movie->description = 'In 1942, a Canadian intelligence officer in North Africa encounters a female French Resistance fighter on a deadly mission behind enemy lines. When they reunite in London, their relationship is tested by the pressures of war.';
        $movie->director = 'Robert Zemeckis';
        $movie->cast = 'Brad Pitt, Marion Cotillard, Jared Harris';
        $movie->image = 'allied.jpg';
        $movie->save();

        $I = $this->tester;

        $I->seeInDatabase('movie', array('name' => 'Allied', 'year' => 2016, 'type' => 'Action'));
    }
}
