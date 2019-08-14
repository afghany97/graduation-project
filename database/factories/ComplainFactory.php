<?php

use App\Assistant;
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

$factory->define(\App\Complain::class, function (Faker $faker) {
    return [
        'department_id' => factory(\App\Department::class)->create()->id,
        'user_id' => factory(\App\User::class)->create()->id,
        'topic' => $faker->sentence,
        'type' => array_random(config('complain.types')),
        'description' => $faker->paragraph
    ];
});