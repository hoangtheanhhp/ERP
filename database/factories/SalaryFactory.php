<?php

use Faker\Generator as Faker;

$factory->define(App\Salary::class, function (Faker $faker) {
    $salary = $faker->randomFloat($nbMaxDecimals = NULL, $min = 2000, $max = 3000);
    $salary_per_hour = $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 30);
    $insurance_money = $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 100);
    $final_payment = $salary - $insurance_money;
    return [
        'salary' => $salary,
        'salary_per_hour' => $salary_per_hour,
        'insurance_money' => $insurance_money,
        'final_payment' => $final_payment,
        'user_id' => function(){
            return factory(\App\User::class)->create()->id;
        }
    ];
});
