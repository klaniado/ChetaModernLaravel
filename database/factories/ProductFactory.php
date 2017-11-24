<?php

use Faker\Generator as Faker;


$factory->define(App\Product::class, function (Faker $faker) {
  return [
      'name' => $faker->name,
      'descripcion' => $faker->text,
      'precio' => $faker->randomDigit,
      'images'=>'img\productos\MacBook.jpg',
      'remember_token' => str_random(10),
  ];
});
