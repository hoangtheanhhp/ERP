<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\DepartmentRole::class, function (Faker $faker) {
    return [
        //
        'department_id' => 1,
        'create' => $faker->boolean,
        'read' => $faker->boolean,
        'update' => $faker->boolean,
        'delete' => $faker->boolean,
    ];
});
