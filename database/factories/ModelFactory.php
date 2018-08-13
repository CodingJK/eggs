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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Candidate::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
        'address' =>$faker->streetAddress,
        'province' =>$faker->state,
        'country' =>$faker->country,
        'postalcode' => $faker->postcode,
        'email' => $faker->unique()->safeEmail,
        
    ];
});
