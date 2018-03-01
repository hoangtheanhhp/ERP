<?php

use Faker\Generator as Faker;

$factory->define(App\Models\RollCall::class, function (Faker $faker) {
    $fakerTime = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
        'starts_at' => $faker->dateTimeBetween($fakerTime . '  6:00:00', $fakerTime . '  10:00:00'),
        'user_id' => function () {
            return factory(\App\Models\User::class)->create()->id;
        }
    ];
});
