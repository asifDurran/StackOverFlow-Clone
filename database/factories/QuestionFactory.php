<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'body' => $faker->paragraph(8),
        'views'=> rand(0,10),
        // 'answers_count'=> rand(0,10),
        // 'votes_count'=> rand(-2,10),
        'user_id'=>rand(0,20),
    ];
});
