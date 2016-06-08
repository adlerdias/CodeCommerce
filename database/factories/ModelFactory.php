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

$factory->define('CodeCommerce\User', function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'fu' => $faker->stateAbbr,
        'zipcode' => $faker->postcode,
        'password' => bcrypt(12345),
        'remember_token' => str_random(10),
    ];
});

$factory->define('CodeCommerce\Category', function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
    ];
});

$factory->define('CodeCommerce\Product', function (Faker\Generator $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 15),
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat(2, 0.01, 999.99),
        'featured' => $faker->numberBetween(0, 1),
        'recommend' => $faker->numberBetween(0, 1)
    ];
});

$factory->define(CodeCommerce\OrderStatus::class, function ($faker) {
    return [
        'name' => $faker->word
    ];
});
