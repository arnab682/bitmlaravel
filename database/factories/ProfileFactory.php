<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(\App\Profile::class, function (Faker $faker) {
    return [
        'firstname'       => $faker->firstName,
        'lastname'       => $faker->lastName,
        'gender'       => $faker->word,
        'hobby'       => $faker->word,
        'preferred_languages' => $faker->word,
        'address_line'       => $faker->address,
        'zipcode'       => $faker->postcode,
        'city'       => $faker->city,
        'country'       => $faker->country,
        'about_me'       => $faker->text(),
        'resume'       => $faker->word,
        'picture'       => $faker->word,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});
