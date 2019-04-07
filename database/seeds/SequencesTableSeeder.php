<?php

use Illuminate\Database\Seeder;
use \App\Sequence;
use \App\Info;
use \App\User;

class SequencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();
        $u->name = 'bthouverez';
        $u->email = 'bthouverez@bthouverez.fr';
        $u->password = '$2y$10$NhVXSrCCephrL.eUPZAi1ecD70QSCjhuw62EACeaoTEsC2FFjLVrq';
        $u->save();


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

        $i = new Info();
        $i->sequence_id = 2;
        $i->date = '2018-11-26';
        $i->contenu = 'Le cours du mercredi 28 Novembre sera annulé et sera reporté le
                    <ul>
                      <li>Vendredi 7 Décembre, 8h-10h, Salle 24</li>
                    </ul>
                    Je vous prie d\'excuser ce nouveau changement.';
        $i->panel = 'success';
        $i->save();

        $i = new Info();
        $i->sequence_id = 2;
        $i->date = '2018-10-06';
        $i->contenu = 'Les créneaux de rattrapages des cours annoncés ont été confirmés et devraient être ajouté à votre emploi du temps.
                      <ul>
                      <li>Vendredi 30 Novembre, 8h-10h, Salle 16</li>
                      <li>Vendredi 14 Décembre, 8h-10h, Salle 16</li>
                    </ul>';
        $i->panel = 'info';
        $i->save();

        $i = new Info();
        $i->sequence_id = 2;
        $i->date = '2018-10-02';
        $i->contenu = 'Je vous prie de m\'excuser pour mes absences des deux dernières semaines. Les deux cours manqués seront rattrapés, probablemement les vendredi 30 Novembre et 14 Décembre. Information à confirmer.';
        $i->panel = 'primary';
        $i->save();


    }
}
