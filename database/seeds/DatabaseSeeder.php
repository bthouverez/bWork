<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $FACTORY = trUE;

        if($FACTORY) {
            factory(App\Sequence::class, 5)->create();
            factory(App\Seance::class, 30)->create();
        } else {
            $this->call([
                SeancesTableSeeder::class,
                SequencesTableSeeder::class
            ]);
        }
		
    }
}
