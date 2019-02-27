<?php

use Faker\Generator as Faker;

$factory->define(App\Articles::class, function (Faker $faker) {
    return [
        'title'=>$this->faker->text(50),
        'body'=>$this->faker->text(200)
    ];
});
