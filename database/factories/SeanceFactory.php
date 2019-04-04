<?php

use Faker\Generator as Faker;

$factory->define(App\Seance::class, function (Faker $faker) {
    return [
        'sequence_id' => rand(1,App\Sequence::all()->count()),
        'libelle' => $faker->text(10),
        'date' => $faker->dateTimeBetween($startDate = '-3 months', $endDate = '+3 months'),
        'salle' => rand(1,100),
        'duree' => $faker->time(),
        'contenu' => $faker->paragraph(3)
    ];
});

