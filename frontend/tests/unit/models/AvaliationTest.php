<?php
namespace frontend\tests\unit\models;

use app\models\Avaliation;
use Yii;

class AvaliationTest extends \Codeception\Test\Unit
{
    function testSaveAvaliation()
    {
        $avaliation = new Avaliation();
        $avaliation->stars = 3;
        $avaliation->critique = 'Its good';
        $avaliation->fk_id_user = 1;
        $avaliation->fk_id_movie = 1;
        $avaliation->save();

        $I = $this->tester;

        $I->seeInDatabase('avaliation', array('stars' => 3, 'critique' => 'Its good', 'fk_id_user' => 1, 'fk_id_movie' => 1));
    }
}
