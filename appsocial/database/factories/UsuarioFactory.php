<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'usuario' =>$faker->userName,
        'correo' => $faker->unique()->safeEmail,
        'password' => '1', // secret
    ];
});
