<?php

use Illuminate\Database\Seeder;
use \App\Sequence;

class SequencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Sequence();
        $s->libelle = 'ProgWeb';
        $s->annee = '1819';
        $s->lieu = 'IUT Doua';
        $s->groupe = 'Année spéciale';
        $s->save();

        $s = new Sequence();
        $s->libelle = 'HTML';
        $s->annee = '1819';
        $s->lieu = 'IUT Doua';
        $s->groupe = 'G4S1';
        $s->save();
    }
}
