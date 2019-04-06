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
        $FACTORY = false;
        $NB = 10;

        if($FACTORY) {
            factory(App\Sequence::class, $NB)->create();
            factory(App\Seance::class, $NB*6)->create();
            $this->call(InfosTableSeeder::class);

        $this->call(UsersTableSeeder::class);
    } else {
            $this->call([
                SeancesTableSeeder::class,
                SequencesTableSeeder::class
            ]);
        }
		
    }
}
