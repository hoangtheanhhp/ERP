<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'email' => 'admin@test.com',
        'password' => bcrypt('123456'),
        'name' => 'Nguyen Huu Dung',
    ];
});
