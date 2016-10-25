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
                'remember_token' => 'Dgqe8IWyaVzeYKgvEdp2n0tql4BjuL0fl3N3fZTRqjK8lhFfiRkFxagQ88kZ',
                'created_at' => NULL,
                'updated_at' => '2016-10-24 00:25:41',
            ),
        ));
        
        
    }
}
