<?php

use Faker\Generator as Faker;
use App\Product;
$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'api_id'=>function(){
            return Product::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)
    ];
});
