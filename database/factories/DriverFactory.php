<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Driver::class, function (Faker $faker) {
    // 现在时间
    $now = \Carbon\Carbon::now()->toDateTimeString();

    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'cart_number' => '鲁B' . $faker->randomNumber(5, true),
        'last_active_at' => $created_at,
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
