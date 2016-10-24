<?php

use Illuminate\Database\Seeder;

class MghDtbotolTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mgh_dtbotol')->delete();
        
        \DB::table('mgh_dtbotol')->insert(array (
            0 => 
            array (
                'idbotol' => 0,
                'botol_tipe' => 'botol_tipe',
                'botol_harga' => 0.0,
                'botol_stock' => 0.0,
                'botol_date' => 'botol_date',
                'botol_author' => 'botol_au',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => 'botol_ls_d',
                'botol_ls_author' => 'botol_ls',
            ),
            1 => 
            array (
                'idbotol' => 46,
                'botol_tipe' => 'REFILL',
                'botol_harga' => 0.0,
                'botol_stock' => 19.0,
                'botol_date' => '2007-03-31',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-31',
                'botol_ls_author' => 'admin',
            ),
            2 => 
            array (
                'idbotol' => 52,
                'botol_tipe' => '25 CC PLASTI',
                'botol_harga' => 0.0,
                'botol_stock' => 39.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            3 => 
            array (
                'idbotol' => 53,
                'botol_tipe' => '60 CC PLASTI',
                'botol_harga' => 0.0,
                'botol_stock' => 17.0,
                'botol_date' => '2007-06-01',
                'botol_author' => 'YUNI',
                'botol_ls_stock' => 106.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            4 => 
            array (
                'idbotol' => 54,
                'botol_tipe' => 'ROL ON',
                'botol_harga' => 2000.0,
                'botol_stock' => 11.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            5 => 
            array (
                'idbotol' => 56,
                'botol_tipe' => '35 CC CLEAR',
                'botol_harga' => 6000.0,
                'botol_stock' => 72.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            6 => 
            array (
                'idbotol' => 57,
                'botol_tipe' => '50 CC DOFF',
                'botol_harga' => 6000.0,
                'botol_stock' => 66.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            7 => 
            array (
                'idbotol' => 58,
                'botol_tipe' => '35 CC DOFF',
                'botol_harga' => 6000.0,
                'botol_stock' => 142.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            8 => 
            array (
                'idbotol' => 59,
                'botol_tipe' => '40 CC KF',
                'botol_harga' => 6000.0,
                'botol_stock' => 89.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            9 => 
            array (
                'idbotol' => 60,
                'botol_tipe' => '55 CC KF',
                'botol_harga' => 7000.0,
                'botol_stock' => 92.0,
                'botol_date' => '2007-03-28',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-03-28',
                'botol_ls_author' => 'admin',
            ),
            10 => 
            array (
                'idbotol' => 62,
                'botol_tipe' => '10 CC PLASTI',
                'botol_harga' => 0.0,
                'botol_stock' => 18.0,
                'botol_date' => '2007-04-01',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-04-01',
                'botol_ls_author' => 'admin',
            ),
            11 => 
            array (
                'idbotol' => 63,
                'botol_tipe' => '7CC LIPSTIK',
                'botol_harga' => 5000.0,
                'botol_stock' => 59.0,
                'botol_date' => '2007-05-09',
                'botol_author' => 'admin',
                'botol_ls_stock' => 0.0,
                'botol_ls_date' => '2007-05-09',
                'botol_ls_author' => 'admin',
            ),
        ));
        
        
    }
}
