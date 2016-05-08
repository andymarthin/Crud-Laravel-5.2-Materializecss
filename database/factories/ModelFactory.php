<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Crud::class, function(Faker\Generator $f){
	return [
		'judul' => $f->realText($maxNbChars = 60, $indexSize = 3),
		'isi' => $f->paragraph($nbSentences = 70, $variableNbSentences = true),
	];
});