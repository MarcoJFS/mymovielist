<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AvaliationCest
{
    protected $formId = '#form-avaliation';

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('avaliation/create');
    }

    public function newmovieWithEmptyFields(FunctionalTester $I)
    {
        $I->see('Evaluations', 'h1');
        $I->seeLink('Create Evaluation');
        $I->click('Create Evaluation');
        $I->submitForm($this->formId, []);
        $I->seeValidationError('Movie cannot be blank.');
    }

    public function newmovieSuccessfully(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
            'MovieForm[stars]' => 5,
            'MovieForm[critique]' => 'Best movie ever',
            'MovieForm[fk_id_movie]' => 2,
        ]);

        $I->seeRecord('common\models\Avaliation', [
            'stars' => 5,
            'critique' => 'Best movie ever',
            'fk_id_movie' => 2,
        ]);

        $I->see('The Circle', 'h1');
    }
}