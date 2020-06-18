<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
      'first_name'=> $faker     -> firstName(),
      'last_name'=> $faker      -> lastName(),
      'address'=> $faker        -> address(),
      'code'=> $faker           -> postcode(),
      'state'=> $faker          -> state(),
      'phone_number'=> $faker   -> phoneNumber(),
      'role'=> $faker           -> jobTitle()
    ];
});
