<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'bthouverez',
                'email' => 'bthouverez@bthouverez.fr',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NhVXSrCCephrL.eUPZAi1ecD70QSCjhuw62EACeaoTEsC2FFjLVrq',
                'remember_token' => NULL,
                'created_at' => '2019-04-06 15:55:03',
                'updated_at' => '2019-04-06 15:55:03',
            ),
        ));
        
        
    }
}