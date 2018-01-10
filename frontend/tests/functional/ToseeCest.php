<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ToseeCest
{
    protected $formId = '#form-tosee';

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('tosee/create');
    }

    public function newmovieWithEmptyFields(FunctionalTester $I)
    {
        $I->see('Movies To See', 'h1');
        $I->seeLink('Create Movie To See');
        $I->click('Create Movie To See');
        $I->submitForm($this->formId, []);
        $I->seeValidationError('Movie cannot be blank.');
    }

    public function newmovieSuccessfully(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
            'MovieForm[fk_id_movie]' => 1,
        ]);

        $I->seeRecord('common\models\Tosee', [
            'fk_id_movie' => 1,
        ]);

        $I->see('Father Figures', 'h1');
    }
}