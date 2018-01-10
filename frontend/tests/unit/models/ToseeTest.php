<?php
namespace frontend\tests\unit\models;

use app\models\Tosee;
use Yii;

class ToseeTest extends \Codeception\Test\Unit
{
    function testSaveTosee()
    {
        $tosee = new Tosee();
        $tosee->fk_id_movie = "Father Figures";
        $tosee->save();

        $I = $this->tester;

        $I->seeInDatabase('tosee', array('fk_id_user' => 1, 'fk_id_movie' => 1));
    }
}
