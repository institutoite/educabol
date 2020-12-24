<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP', 'JAVASCRIPT', 'JAVA', 'DISEÑO WEB', 'SERVIDORES', 'MYSQL', 'NOSQL', 'BIGDATA', 'AMAZON WEB SERVICES']),
	    'description' => $faker->sentence
    ];
});
