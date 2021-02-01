<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [

        'name'=>$faker->name,
        'title'=>$faker->jobTitle,
        'User_name'=>$faker->userName,
        'Comments' =>$faker->sentence(10)
    ];
});
