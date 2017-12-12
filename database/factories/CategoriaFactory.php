<?php

use Faker\Generator as Faker;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'images'=>'img\productos\MacBook.jpg',

      //'remember_token' => str_random(10)
    ];
});
