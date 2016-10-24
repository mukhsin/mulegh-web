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
                'name' => 'Mukhamad Mukhsin Wibowo',
                'email' => 'mmwibowo2@gmail.com',
                'password' => '$2y$10$doo5GkTtrhFj5s8Ud.jTt.1joa0qtE9aCi1VEfJn4RDSjhtbGau1O',
                'author' => 'admin',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
