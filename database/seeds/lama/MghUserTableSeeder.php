<?php

use Illuminate\Database\Seeder;

class MghUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mgh_user')->delete();
        
        \DB::table('mgh_user')->insert(array (
            0 => 
            array (
                'iduser' => 0,
                'user_name' => 'user_nam',
                'user_password' => 'user_pas',
                'user_namalengkap' => 'user_namalengkap',
                'user_date' => 'user_date',
                'user_author' => 'user_aut',
            ),
            1 => 
            array (
                'iduser' => 21,
                'user_name' => 'admin',
                'user_password' => 'admin',
                'user_namalengkap' => 'admin',
                'user_date' => '2007-02-20',
                'user_author' => '',
            ),
            2 => 
            array (
                'iduser' => 57,
                'user_name' => 'YUNI',
                'user_password' => 'YUNI',
                'user_namalengkap' => 'YUNIROMIYATI',
                'user_date' => '2007-03-31',
                'user_author' => 'admin',
            ),
            3 => 
            array (
                'iduser' => 58,
                'user_name' => 'OLLA',
                'user_password' => 'OLLA',
                'user_namalengkap' => 'ISNORAWAHYULIANA',
                'user_date' => '2007-03-31',
                'user_author' => 'admin',
            ),
            4 => 
            array (
                'iduser' => 59,
                'user_name' => 'BENNY',
                'user_password' => 'B3NNY',
                'user_namalengkap' => 'BENNYMULEGH',
                'user_date' => '2007-03-31',
                'user_author' => 'admin',
            ),
        ));
        
        
    }
}
