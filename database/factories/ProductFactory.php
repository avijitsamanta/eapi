<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        
       'name'=> $faker->word,
       'description'=> $faker->paragraph,
       'price'=> $faker->numberBetween(100,1000),
       'discount'=> $faker->numberBetween(10,20),
       'stock'=> $faker->randomDigit
       
    ];
});
