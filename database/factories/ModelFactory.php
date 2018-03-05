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

$factory->define(App\Feedback::class, function (Faker\Generator $faker) {
    $categoria = array("Safira", "Pesquisas");
    shuffle($categoria);
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'feedback' => $faker->text,
        'category' => $categoria[0]
    ];

});


$factory->define(App\Donate::class, function (Faker\Generator $faker) {
    $categoria = array("Safira", "Pesquisas");
    shuffle($categoria);
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'value' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 5.00, $max = 100.00),
        'category' => $categoria[0]
    ];

});
