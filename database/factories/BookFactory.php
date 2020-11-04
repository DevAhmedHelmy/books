<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $cats = Category::count();
    return [
        'category_id' => rand(1,$cats),
        'title' => $faker->sentence,
        'author' => $faker->name,
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'featured' => $faker->boolean ,
        'link' => $faker->url


    ];
});
