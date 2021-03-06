<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'Sport and Fitness', 
            'Medical', 
            'IT',
            'Political', 
            'Games', 
            'Other'
        ])
    ];
});
