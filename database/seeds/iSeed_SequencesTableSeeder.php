<?php

use Illuminate\Database\Seeder;

class iSeed_SequencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sequences')->delete();
        
        \DB::table('sequences')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'ProgWeb',
                'annee' => '1819',
                'lieu' => 'IUT Doua',
                'groupe' => 'Année spéciale',
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'HTML',
                'annee' => '1819',
                'lieu' => 'IUT Doua',
                'groupe' => 'G4S1',
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'SLAM2',
                'annee' => '1819',
                'lieu' => 'CSND Villefranche',
                'groupe' => 'SIO1',
                'created_at' => '2019-04-05 20:35:22',
                'updated_at' => '2019-04-05 20:35:22',
            ),
        ));
        
        
    }
}