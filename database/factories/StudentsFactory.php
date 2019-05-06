<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Students::class, function (Faker $faker) {
    return [
        'name'       => $faker->word,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});
