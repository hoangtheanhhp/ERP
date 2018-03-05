<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\DepartmentRole::class, function (Faker $faker) {
    return [
        //
        'department_id' => 1,
        'create' => $faker->numberBetween(0, 1),
        'read' => $faker->numberBetween(0, 1),
        'update' => $faker->numberBetween(0, 1),
        'delete' => $faker->numberBetween(0, 1),
    ];
});
