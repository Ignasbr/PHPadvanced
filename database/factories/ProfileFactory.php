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

$factory->define(\App\Models\Profile::class, function (Faker $faker) {
    return [
        'age' => $faker->numberBetween(15,45) ,
        'description' => $faker->text ,
        'country' => $faker->country ,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'house' => $faker->numberBetween(1,500),
        'apartament' => $faker->numberBetween(1,80),
        'user_id' => factory(\App\Models\User::class)->create()->id ,
    ];
});
