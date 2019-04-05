<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('infos')->delete();
        
        \DB::table('infos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sequence_id' => 2,
                'date' => '2018-11-26',
                'contenu' => 'Le cours du mercredi 28 Novembre sera annulé et sera reporté le
<ul>
<li>Vendredi 7 Décembre, 8h-10h, Salle 24</li>
</ul>
Je vous prie d\'excuser ce nouveau changement.',
                'panel' => 'success',
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            1 => 
            array (
                'id' => 2,
                'sequence_id' => 2,
                'date' => '2018-10-06',
                'contenu' => 'Les créneaux de rattrapages des cours annoncés ont été confirmés et devraient être ajouté à votre emploi du temps.
<ul>
<li>Vendredi 30 Novembre, 8h-10h, Salle 16</li>
<li>Vendredi 14 Décembre, 8h-10h, Salle 16</li>
</ul>',
                'panel' => 'info',
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            2 => 
            array (
                'id' => 3,
                'sequence_id' => 2,
                'date' => '2018-10-02',
                'contenu' => 'Je vous prie de m\'excuser pour mes absences des deux dernières semaines. Les deux cours manqués seront rattrapés, probablemement les vendredi 30 Novembre et 14 Décembre. Information à confirmer.',
                'panel' => 'primary',
                'created_at' => '2019-04-05 20:34:33',
                'updated_at' => '2019-04-05 20:34:33',
            ),
            3 => 
            array (
                'id' => 4,
                'sequence_id' => 2,
                'date' => '2019-04-05',
                'contenu' => 'dza',
                'panel' => 'info',
                'created_at' => '2019-04-05 21:04:19',
                'updated_at' => '2019-04-05 21:04:19',
            ),
        ));
        
        
    }
}