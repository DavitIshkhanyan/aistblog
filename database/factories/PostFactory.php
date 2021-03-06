<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use Faker\Generator as Faker;
use Illuminate\support\str;
$factory->define(Post::class, function (Faker $faker) {
    return [
           'title' => $this->faker->sentence(),
           'body' => $this->faker->paragraph(),
    ];
});

