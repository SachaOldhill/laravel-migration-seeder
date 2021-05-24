<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Boss;
use Faker\Generator as Faker;

$factory->define(Boss::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName,
      'lastname' => $faker -> lastName,
      'date_of_birth' => $faker -> date,
      'ral' => $faker -> numberBetween(100,500),
      'bonus' => $faker -> word,
    ];
});
