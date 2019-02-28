<?php

use Faker\Generator as Faker;
use App\Models\Employee;

$factory->define(App\Models\Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
    ];
});
