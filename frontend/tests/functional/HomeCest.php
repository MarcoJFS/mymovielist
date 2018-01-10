<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage(\Yii::$app->homeUrl);
        $I->see('MyMovieList');
        $I->seeLink('About');
        $I->click('About');
        $I->see('It is an application for the user to manage their movies in the best and simplest way.');
    }
}