<?php

use Faker\Generator as Faker;

$factory->define(App\Model\FullForm::class, function (Faker $faker) {
    return [
        'name' 			=>	$faker->firstName,
        'picture' 		=>	$faker->word,
        'date_of_birth'	=>	$faker->date('Y-m-d'),
        'gender'		=>	$faker->word,
        'hobby'			=>	$faker->word,
        'skills'		=>	$faker->word,
        'bio'			=>	$faker->word,
    ];
});
