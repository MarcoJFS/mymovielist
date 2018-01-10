<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class MoviesCest
{
    protected $formId = '#form-movie';

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('movie/create');
    }

    public function newmovieWithEmptyFields(FunctionalTester $I)
    {
        $I->see('Movies', 'h1');
        $I->seeLink('Create Movie');
        $I->click('Create Movie');
        $I->submitForm($this->formId, []);
        $I->seeValidationError('Name cannot be blank.');
        $I->seeValidationError('Year cannot be blank.');
        $I->seeValidationError('Type cannot be blank.');
    }

    public function newmovieSuccessfully(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
            'MovieForm[name]' => 'Matrix',
            'MovieForm[year]' => 1999,
            'MovieForm[type]' => 'Action',
            'MovieForm[description]' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
            'MovieForm[director]' => 'Lana Wachowski, Lilly Wachowski',
            'MovieForm[cast]' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
            'MovieForm[image]' => 'matrix.jpg',
        ]);

        $I->seeRecord('common\models\Movie', [
            'name' => 'Matrix',
            'year' => 1999,
            'type' => 'Action',
            'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
            'director' => 'Lana Wachowski, Lilly Wachowski',
            'cast' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
            'image' => 'matrix.jpg',
        ]);

        $I->see('Matrix', 'h1');
    }
}