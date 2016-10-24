<?php

use Illuminate\Database\Seeder;

class BotolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('botols')->delete();
        
        \DB::table('botols')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipe' => 'botol_tipe',
                'harga' => 0.0,
                'stock' => 0.0,
                'author' => 'botol_au',
                'created_at' => '2016-10-23 19:16:26',
                'updated_at' => '2016-10-23 19:16:26',
            ),
            1 => 
            array (
                'id' => 2,
                'tipe' => 'REFILL',
                'harga' => 0.0,
                'stock' => 19.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:26',
                'updated_at' => '2016-10-23 19:16:26',
            ),
            2 => 
            array (
                'id' => 3,
                'tipe' => '25 CC PLASTI',
                'harga' => 0.0,
                'stock' => 39.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:26',
                'updated_at' => '2016-10-23 19:16:26',
            ),
            3 => 
            array (
                'id' => 4,
                'tipe' => '60 CC PLASTI',
                'harga' => 0.0,
                'stock' => 17.0,
                'author' => 'YUNI',
                'created_at' => '2016-10-23 19:16:26',
                'updated_at' => '2016-10-23 19:16:26',
            ),
            4 => 
            array (
                'id' => 5,
                'tipe' => 'ROL ON',
                'harga' => 2000.0,
                'stock' => 11.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:26',
                'updated_at' => '2016-10-23 19:16:26',
            ),
            5 => 
            array (
                'id' => 6,
                'tipe' => '35 CC CLEAR',
                'harga' => 6000.0,
                'stock' => 72.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            6 => 
            array (
                'id' => 7,
                'tipe' => '50 CC DOFF',
                'harga' => 6000.0,
                'stock' => 66.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            7 => 
            array (
                'id' => 8,
                'tipe' => '35 CC DOFF',
                'harga' => 6000.0,
                'stock' => 142.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            8 => 
            array (
                'id' => 9,
                'tipe' => '40 CC KF',
                'harga' => 6000.0,
                'stock' => 89.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            9 => 
            array (
                'id' => 10,
                'tipe' => '55 CC KF',
                'harga' => 7000.0,
                'stock' => 92.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            10 => 
            array (
                'id' => 11,
                'tipe' => '10 CC PLASTI',
                'harga' => 0.0,
                'stock' => 18.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            11 => 
            array (
                'id' => 12,
                'tipe' => '7CC LIPSTIK',
                'harga' => 5000.0,
                'stock' => 59.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
            12 => 
            array (
                'id' => 13,
                'tipe' => 'BMX',
                'harga' => 10000.0,
                'stock' => 220.0,
                'author' => 'admin',
                'created_at' => '2016-10-23 19:16:27',
                'updated_at' => '2016-10-23 19:16:27',
            ),
        ));
        
        
    }
}
