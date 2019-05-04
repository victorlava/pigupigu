<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Language;
use Faker\Generator as Faker;

$factory->define(Language::class, function (Faker $faker) {
    return [
        'name' => 'Lithuanian',
        'code' => 'lt'
    ];
});
