<?php

use Faker\Generator as Faker;

$factory->define(App\Sequence::class, function (Faker $faker) {
    return [
        'libelle' => $faker->text(10),
        'annee' => rand(1000,10000),
        'lieu' => $faker->text(40),
        'groupe' => $faker->text(10)
    ];
});
