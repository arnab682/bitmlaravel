<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Model\Form::class, function (Faker $faker) {
    return [
        'picture' => $faker->image('public/storage/images',400,300),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'gender' => $faker->randomElement(['male', 'female']),
        'phone' => $faker->phoneNumber,
        'postcode' => $faker->postcode,
        'amount' => $faker->randomDigit,
        'date_of_birth' =>  $faker->date('Y-m-d'),
        'language' => $faker->word,
        'skill' => $faker->word,
        'city' => $faker->city,
        'state' => $faker->state,
        'description' => $faker->streetAddress, //boolean(25),address,paragraph,bankAccountNumber,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});
