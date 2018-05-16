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

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'title'              => $faker->text(20),
        'created_at'         => $faker->dateTimeBetween('-3 years', '-2 years', null),
        'updated_at'         => $faker->dateTimeBetween('-2 years', '-1 years', null),
        'anonymous_comments' => $faker->boolean,
        'content'            => $faker->text,

    ];
});

$factory
    ->state(App\Models\User::class, 'with_posts', [])
    ->afterCreatingState(App\Models\User::class, 'with_posts', function ($user, $faker) {
        factory(App\Models\Post::class, random_int(0, 10))->states('with_comments')->create([
            'user_id' => $user->id,
        ]);
    });
