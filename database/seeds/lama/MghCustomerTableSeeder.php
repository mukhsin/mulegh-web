<?php

use Illuminate\Database\Seeder;

class MghCustomerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mgh_customer')->delete();

        \DB::table('mgh_customer')->insert(array (
            0 =>
            array (
                'idcust' => 0,
                'cust_nomor' => 'cust_nomor',
                'cust_nama' => 'cust_nama',
                'cust_alamat' => 'cust_alamat',
                'cust_notelp' => 'cust_notelp',
                'cust_date' => 'cust_date',
                'cust_author' => 'cust_aut',
            ),
            1 =>
            array (
                'idcust' => 41,
                'cust_nomor' => 'MP00001',
                'cust_nama' => 'ITA',
                'cust_alamat' => 'HR BUNYAMIN 100A PWT',
                'cust_notelp' => '081931744976',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            2 =>
            array (
                'idcust' => 42,
                'cust_nomor' => 'MP00588',
                'cust_nama' => 'ANNA WACHIDAH',
                'cust_alamat' => 'JLN SUNAN KALIJAGA BERKOH PWT',
                'cust_notelp' => '085227368790',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            3 =>
            array (
                'idcust' => 43,
                'cust_nomor' => 'MP00586',
                'cust_nama' => 'ADINANDRA DEWANGGA',
                'cust_alamat' => 'JL PENATUSAN 63',
                'cust_notelp' => '7626880',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            4 =>
            array (
                'idcust' => 44,
                'cust_nomor' => 'MP00574',
                'cust_nama' => 'AYU RIZQI KHOIRULLY',
                'cust_alamat' => 'JL ABDUL MALIK 11 KEDUNG PARUK',
                'cust_notelp' => '085227222380',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            5 =>
            array (
                'idcust' => 45,
                'cust_nomor' => 'MP00360',
                'cust_nama' => 'AAN ',
                'cust_alamat' => 'KRG KLESEM',
                'cust_notelp' => '081327222444',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            6 =>
            array (
                'idcust' => 46,
                'cust_nomor' => 'MP00374',
                'cust_nama' => 'AAN ',
                'cust_alamat' => 'OLYMPIC',
                'cust_notelp' => '081328325699',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            7 =>
            array (
                'idcust' => 47,
                'cust_nomor' => 'MP00079',
                'cust_nama' => 'BU ADE',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '0281 643244',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            8 =>
            array (
                'idcust' => 48,
                'cust_nomor' => 'MP00349',
                'cust_nama' => 'ADE',
                'cust_alamat' => 'BOBOSAN',
                'cust_notelp' => '0281 630655',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            9 =>
            array (
                'idcust' => 49,
                'cust_nomor' => 'MP00073',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'KAUMAN',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            10 =>
            array (
                'idcust' => 50,
                'cust_nomor' => 'MP00074',
                'cust_nama' => 'ADI/AGUNG',
                'cust_alamat' => 'KETAPANG 60A',
                'cust_notelp' => '081514189315',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            11 =>
            array (
                'idcust' => 51,
                'cust_nomor' => 'MP00226',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327357618',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            12 =>
            array (
                'idcust' => 52,
                'cust_nomor' => 'MP00007',
                'cust_nama' => 'ADISTY',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '085869780206',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            13 =>
            array (
                'idcust' => 53,
                'cust_nomor' => 'MP00359',
                'cust_nama' => 'BP AFANI',
                'cust_alamat' => 'DUKU WALUH',
                'cust_notelp' => '637309',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            14 =>
            array (
                'idcust' => 54,
                'cust_nomor' => 'MP00353',
                'cust_nama' => 'M.AFIF',
                'cust_alamat' => 'PASIR KIDUL-PWT BARAT',
                'cust_notelp' => '081327504200',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            15 =>
            array (
                'idcust' => 55,
                'cust_nomor' => 'MP00241',
                'cust_nama' => 'MAS AGUNG',
                'cust_alamat' => 'NOTOG',
                'cust_notelp' => '081327723882',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            16 =>
            array (
                'idcust' => 56,
                'cust_nomor' => 'MP00401',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081542950295',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            17 =>
            array (
                'idcust' => 57,
                'cust_nomor' => 'MP00292',
                'cust_nama' => 'P.AGUS',
                'cust_alamat' => 'JLN.ST',
                'cust_notelp' => '626938',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            18 =>
            array (
                'idcust' => 58,
                'cust_nomor' => 'MP00188',
                'cust_nama' => 'BP.AGUSTINUS',
                'cust_alamat' => 'SCHERING',
                'cust_notelp' => '081325759986',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            19 =>
            array (
                'idcust' => 59,
                'cust_nomor' => 'MP00126',
                'cust_nama' => 'AHMAD',
                'cust_alamat' => 'PERTANIAN UNSOED',
                'cust_notelp' => '08882684512',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            20 =>
            array (
                'idcust' => 60,
                'cust_nomor' => 'MP00213',
                'cust_nama' => 'AIDA',
                'cust_alamat' => 'UNSOED EKONOMI',
                'cust_notelp' => '081327900976',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            21 =>
            array (
                'idcust' => 61,
                'cust_nomor' => 'MP00215',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'KRG.KLESEM',
                'cust_notelp' => '08192222002',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            22 =>
            array (
                'idcust' => 62,
                'cust_nomor' => 'MP00250',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'JLN.VETERAN-KALIBOGOR',
                'cust_notelp' => '08121555235',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            23 =>
            array (
                'idcust' => 63,
                'cust_nomor' => 'MP00204',
                'cust_nama' => 'ALIN',
                'cust_alamat' => 'GRIYA SATRIA',
                'cust_notelp' => '081542857766',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            24 =>
            array (
                'idcust' => 64,
                'cust_nomor' => 'MP00059',
                'cust_nama' => 'AMANDA',
                'cust_alamat' => 'JAKARTA UTARA',
                'cust_notelp' => '0817886709',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            25 =>
            array (
                'idcust' => 65,
                'cust_nomor' => 'MP00050',
                'cust_nama' => 'AMBAR',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            26 =>
            array (
                'idcust' => 66,
                'cust_nomor' => 'MP00535',
                'cust_nama' => 'ADELIO EVAN CURTINA',
                'cust_alamat' => 'OVIS 2/1 PURWOKERTO',
                'cust_notelp' => '639703/7630786',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            27 =>
            array (
                'idcust' => 67,
                'cust_nomor' => 'MP00530',
                'cust_nama' => 'ADITYA CHRISTIE W',
                'cust_alamat' => 'JL.CENDRAWASIH GG.KEPUDANG 34/35 GRENDENG PURWOKERTO',
                'cust_notelp' => '085659696696',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            28 =>
            array (
                'idcust' => 68,
                'cust_nomor' => 'MP00538',
                'cust_nama' => 'R.ARDIAN.S',
                'cust_alamat' => 'G.S BLOK K',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            29 =>
            array (
                'idcust' => 69,
                'cust_nomor' => 'MP00477',
                'cust_nama' => 'AGUNG AJI PRASETYO',
                'cust_alamat' => 'SAWANGAN',
                'cust_notelp' => '08170613080',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            30 =>
            array (
                'idcust' => 70,
                'cust_nomor' => 'MP00493',
                'cust_nama' => 'ARIF SETIAWAN',
                'cust_alamat' => 'KOBER',
                'cust_notelp' => '081327459637',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            31 =>
            array (
                'idcust' => 71,
                'cust_nomor' => 'MP00492',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'LEDUG',
                'cust_notelp' => '085624032953',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            32 =>
            array (
                'idcust' => 72,
                'cust_nomor' => 'MP00491',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'JL.JEND.SUPRAPTO 3/18C PURWOKERTO',
                'cust_notelp' => '081327419872',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            33 =>
            array (
                'idcust' => 73,
                'cust_nomor' => 'MP00615',
                'cust_nama' => 'AGUS.S',
                'cust_alamat' => 'PERUM TIARA PERMAI 1E6',
                'cust_notelp' => '081327566665',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            34 =>
            array (
                'idcust' => 74,
                'cust_nomor' => 'MP00618',
                'cust_nama' => 'ANDIKA YAMAR',
                'cust_alamat' => 'GRIYA LANISA GR.MALATAR 7 PWT UTARA',
                'cust_notelp' => '08170601100',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            35 =>
            array (
                'idcust' => 75,
                'cust_nomor' => 'MP00603',
                'cust_nama' => 'ARI.L',
                'cust_alamat' => 'JL.KAMANDAKA BOBOSAN',
                'cust_notelp' => '081327019416',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            36 =>
            array (
                'idcust' => 76,
                'cust_nomor' => 'MP00606',
                'cust_nama' => 'ARIS',
                'cust_alamat' => 'JL.BALAI KALURAHAN 17 3/9 ARCAWINANGUN',
                'cust_notelp' => '0281625885',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            37 =>
            array (
                'idcust' => 77,
                'cust_nomor' => 'MP00608',
                'cust_nama' => 'AAT',
                'cust_alamat' => 'BATURADEN',
                'cust_notelp' => '081327236237',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            38 =>
            array (
                'idcust' => 78,
                'cust_nomor' => 'MP00623',
                'cust_nama' => 'ARI H.W',
                'cust_alamat' => 'JL.KOL.SUGIONO',
                'cust_notelp' => '08886650110',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            39 =>
            array (
                'idcust' => 79,
                'cust_nomor' => 'MP00624',
                'cust_nama' => 'ALEN/LENSA',
                'cust_alamat' => 'MAN2',
                'cust_notelp' => '081327988906',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            40 =>
            array (
                'idcust' => 80,
                'cust_nomor' => 'MP00622',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '08157655487',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            41 =>
            array (
                'idcust' => 81,
                'cust_nomor' => 'MP00035',
                'cust_nama' => 'AMEL',
                'cust_alamat' => 'DR.ANGKA-JATIWINANGUN',
                'cust_notelp' => '081327713333',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            42 =>
            array (
                'idcust' => 82,
                'cust_nomor' => 'MP00118',
                'cust_nama' => 'AMEL',
                'cust_alamat' => 'BANTARSOKA PWT',
                'cust_notelp' => '85227669992',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            43 =>
            array (
                'idcust' => 83,
                'cust_nomor' => 'MP00085',
            'cust_nama' => 'AMIN (CUCIAN MOTOR)',
                'cust_alamat' => 'DR.ANGKA',
                'cust_notelp' => '639315',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            44 =>
            array (
                'idcust' => 84,
                'cust_nomor' => 'MP00240',
                'cust_nama' => 'PAK.AMIN',
                'cust_alamat' => 'TELUK',
                'cust_notelp' => '08122982009',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            45 =>
            array (
                'idcust' => 85,
                'cust_nomor' => 'MP00549',
                'cust_nama' => 'M.ANI',
                'cust_alamat' => 'REJASARI',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            46 =>
            array (
                'idcust' => 86,
                'cust_nomor' => 'MP00031',
                'cust_nama' => 'ANNA/ANNI',
                'cust_alamat' => 'REJASARI',
                'cust_notelp' => '091327707520',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            47 =>
            array (
                'idcust' => 87,
                'cust_nomor' => 'MP00174',
                'cust_nama' => 'M.ANA',
                'cust_alamat' => 'KRG.KOBAR',
                'cust_notelp' => '081542881232',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            48 =>
            array (
                'idcust' => 88,
                'cust_nomor' => 'MP00194',
            'cust_nama' => 'M.ANA(SANGHYANG)',
                'cust_alamat' => 'JLN.BANK',
                'cust_notelp' => '08122746295',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            49 =>
            array (
                'idcust' => 89,
                'cust_nomor' => 'MP00092',
                'cust_nama' => 'MBA ANDI',
                'cust_alamat' => 'KRG.SALAM',
                'cust_notelp' => '091327327030',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            50 =>
            array (
                'idcust' => 90,
                'cust_nomor' => 'MP00523',
                'cust_nama' => 'ANDRIE M',
                'cust_alamat' => 'JLN.KS TUBUN 17B PURWOKERTO',
                'cust_notelp' => '081542904114',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            51 =>
            array (
                'idcust' => 91,
                'cust_nomor' => 'MP00522',
                'cust_nama' => 'ARIEF MAULANA A',
                'cust_alamat' => 'WATUMAS',
                'cust_notelp' => '081327200500',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            52 =>
            array (
                'idcust' => 92,
                'cust_nomor' => 'MP00519',
                'cust_nama' => 'ATIK IRAYANTI',
                'cust_alamat' => 'JLNSITAPEN 65 ',
                'cust_notelp' => '081327209057',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            53 =>
            array (
                'idcust' => 93,
                'cust_nomor' => 'MP00224',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '08156523101',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            54 =>
            array (
                'idcust' => 94,
                'cust_nomor' => 'MP00225',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08122716774',
                'cust_date' => '2007-03-28',
                'cust_author' => 'admin',
            ),
            55 =>
            array (
                'idcust' => 95,
                'cust_nomor' => 'MP00271',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'BANYUMAS',
                'cust_notelp' => '0811260599',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            56 =>
            array (
                'idcust' => 96,
                'cust_nomor' => 'MP00367',
                'cust_nama' => 'ANDI ',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '08122673755',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            57 =>
            array (
                'idcust' => 97,
                'cust_nomor' => 'MP00390',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'KALIBAGOR',
                'cust_notelp' => '081327479947',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            58 =>
            array (
                'idcust' => 98,
                'cust_nomor' => 'MP00095',
                'cust_nama' => 'ANDRE',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081548845804',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            59 =>
            array (
                'idcust' => 99,
                'cust_nomor' => 'MP00128',
                'cust_nama' => 'M.ANDRE ZONE',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327707060',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            60 =>
            array (
                'idcust' => 100,
                'cust_nomor' => 'MP00257',
                'cust_nama' => 'ANDRI',
                'cust_alamat' => 'PASAR PON',
                'cust_notelp' => '640067',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            61 =>
            array (
                'idcust' => 101,
                'cust_nomor' => 'MP00362',
                'cust_nama' => 'ANGIE',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '7617698',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            62 =>
            array (
                'idcust' => 102,
                'cust_nomor' => 'MP00212',
                'cust_nama' => 'ANI ',
                'cust_alamat' => 'UNSOED EKONOMI',
                'cust_notelp' => '085224606754',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            63 =>
            array (
                'idcust' => 103,
                'cust_nomor' => 'MP00551',
                'cust_nama' => 'ADI WIDIANTO',
                'cust_alamat' => 'JL.BRIGJEN KATAMSO 48A',
                'cust_notelp' => '636731',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            64 =>
            array (
                'idcust' => 104,
                'cust_nomor' => 'MP00564',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'SIDANEGARA 1/28',
                'cust_notelp' => '08882697544',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            65 =>
            array (
                'idcust' => 105,
                'cust_nomor' => 'MP00086',
                'cust_nama' => 'ANJAR',
                'cust_alamat' => 'GADING',
                'cust_notelp' => '081325126516',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            66 =>
            array (
                'idcust' => 106,
                'cust_nomor' => 'MP00334',
                'cust_nama' => 'ANISA(NUR)',
                'cust_alamat' => 'RAGA SEMANGSANG PWT',
                'cust_notelp' => '85659044318',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            67 =>
            array (
                'idcust' => 107,
                'cust_nomor' => 'MP00020',
                'cust_nama' => 'ANTON',
                'cust_alamat' => 'KRG.LEWAS',
                'cust_notelp' => '0818277871',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            68 =>
            array (
                'idcust' => 108,
                'cust_nomor' => 'MP00183',
                'cust_nama' => 'M.ANTON',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '08122734028',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            69 =>
            array (
                'idcust' => 109,
                'cust_nomor' => 'MP00410',
                'cust_nama' => 'ANUGRAH',
                'cust_alamat' => 'GRAHA MUSTIKA',
                'cust_notelp' => '085640061804',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            70 =>
            array (
                'idcust' => 110,
                'cust_nomor' => 'MP00319',
                'cust_nama' => 'ARDA',
                'cust_alamat' => 'PASAR MANIS',
                'cust_notelp' => '081327793783',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            71 =>
            array (
                'idcust' => 111,
                'cust_nomor' => 'MP00187',
                'cust_nama' => 'IBU ARI',
                'cust_alamat' => 'JATIWINANGUN-PERGIWATI',
                'cust_notelp' => '0816696848',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            72 =>
            array (
                'idcust' => 112,
                'cust_nomor' => 'MP00285',
                'cust_nama' => 'ARI',
                'cust_alamat' => 'JLGUNUNG LAWU',
                'cust_notelp' => '085647708623',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            73 =>
            array (
                'idcust' => 113,
                'cust_nomor' => 'MP00200',
                'cust_nama' => 'ARIF',
                'cust_alamat' => 'PH',
                'cust_notelp' => '085227334040',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            74 =>
            array (
                'idcust' => 114,
                'cust_nomor' => 'MP00046',
                'cust_nama' => 'ARJUNA',
                'cust_alamat' => 'DUKUH WALUH',
                'cust_notelp' => '081328084999',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            75 =>
            array (
                'idcust' => 115,
                'cust_nomor' => 'MP00350',
                'cust_nama' => 'MAS ASEP',
                'cust_alamat' => 'PASIR MUNCANG',
                'cust_notelp' => '081327718199',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            76 =>
            array (
                'idcust' => 116,
                'cust_nomor' => 'MP00458',
                'cust_nama' => 'AULIA',
                'cust_alamat' => 'TELUK',
                'cust_notelp' => '081327193562',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            77 =>
            array (
                'idcust' => 117,
                'cust_nomor' => 'MP00136',
                'cust_nama' => 'ATI/HERI',
                'cust_alamat' => 'GUNUNG MURIA',
                'cust_notelp' => '081327101555',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            78 =>
            array (
                'idcust' => 118,
                'cust_nomor' => 'MP199',
                'cust_nama' => 'AZIZ',
                'cust_alamat' => 'KRG.SALAM',
                'cust_notelp' => '0283 3323663',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            79 =>
            array (
                'idcust' => 119,
                'cust_nomor' => 'MP00322',
                'cust_nama' => 'AZKHA',
                'cust_alamat' => 'GRIYA SATRIA 2',
                'cust_notelp' => '7602424',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            80 =>
            array (
                'idcust' => 120,
                'cust_nomor' => 'MP00498',
                'cust_nama' => 'BAMBANG YOEN',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081327411117',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            81 =>
            array (
                'idcust' => 121,
                'cust_nomor' => 'MP00467',
                'cust_nama' => 'BAMBANG',
                'cust_alamat' => 'DR.ANGKA 1 14',
                'cust_notelp' => '630641',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            82 =>
            array (
                'idcust' => 122,
                'cust_nomor' => 'MP00227',
                'cust_nama' => 'BABRINA',
                'cust_alamat' => 'PURWOSARI',
                'cust_notelp' => '08882671327',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            83 =>
            array (
                'idcust' => 123,
                'cust_nomor' => 'MP00590',
                'cust_nama' => 'BAYU ALFIN F',
                'cust_alamat' => 'CILONGOK',
                'cust_notelp' => '085227431482',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            84 =>
            array (
                'idcust' => 124,
                'cust_nomor' => 'MP00496',
                'cust_nama' => 'BUDI SANTOSO',
                'cust_alamat' => 'PURI INDAH',
                'cust_notelp' => '085229310000',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            85 =>
            array (
                'idcust' => 125,
                'cust_nomor' => 'MP00426',
                'cust_nama' => 'BENI',
                'cust_alamat' => 'KRG.LEWAS',
                'cust_notelp' => '081327011177',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            86 =>
            array (
                'idcust' => 126,
                'cust_nomor' => 'MP00450',
                'cust_nama' => 'BETI',
                'cust_alamat' => 'PERUM TELUK',
                'cust_notelp' => '08122956023',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            87 =>
            array (
                'idcust' => 127,
                'cust_nomor' => 'MP00453',
                'cust_nama' => 'BANGKIT',
                'cust_alamat' => 'LIMAS AGUNG',
                'cust_notelp' => '085227165463',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            88 =>
            array (
                'idcust' => 128,
                'cust_nomor' => 'MP00273',
                'cust_nama' => 'BAGUS',
                'cust_alamat' => 'GS',
                'cust_notelp' => '081391000566',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            89 =>
            array (
                'idcust' => 129,
                'cust_nomor' => 'MP00261',
                'cust_nama' => 'BAMBANG',
                'cust_alamat' => 'PERUM KALIBAGOR',
                'cust_notelp' => '08122955864',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            90 =>
            array (
                'idcust' => 130,
                'cust_nomor' => 'MP00182',
                'cust_nama' => 'BAYU',
                'cust_alamat' => 'DUKU WALUH',
                'cust_notelp' => '08562010230',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            91 =>
            array (
                'idcust' => 131,
                'cust_nomor' => 'MP00527',
                'cust_nama' => 'BAYU E,H',
                'cust_alamat' => 'KRG.PUCUNG',
                'cust_notelp' => '7615076',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            92 =>
            array (
                'idcust' => 132,
                'cust_nomor' => 'MP00279',
                'cust_nama' => 'BAYU/SUTA',
                'cust_alamat' => 'KOL.SUGIONO',
                'cust_notelp' => '081326388719',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            93 =>
            array (
                'idcust' => 133,
                'cust_nomor' => 'MP00296',
                'cust_nama' => 'BENYAMIN',
                'cust_alamat' => 'BEIJI',
                'cust_notelp' => '08164282704',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            94 =>
            array (
                'idcust' => 134,
                'cust_nomor' => 'MP00221',
                'cust_nama' => 'BETA',
                'cust_alamat' => 'PURWOSARI',
                'cust_notelp' => '081227371117',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            95 =>
            array (
                'idcust' => 135,
                'cust_nomor' => 'MP00333',
                'cust_nama' => 'BETI',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081548825545',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            96 =>
            array (
                'idcust' => 136,
                'cust_nomor' => 'MP00544',
                'cust_nama' => 'BAYU INDRA RESPATI',
                'cust_alamat' => 'JL.SLAMET RIYADI 21',
                'cust_notelp' => '085647861000',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            97 =>
            array (
                'idcust' => 137,
                'cust_nomor' => 'MP00165',
                'cust_nama' => 'BLINK',
                'cust_alamat' => 'DUKUH WALUH',
                'cust_notelp' => '081391003363',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            98 =>
            array (
                'idcust' => 138,
                'cust_nomor' => 'MP00415',
                'cust_nama' => 'BOBI',
                'cust_alamat' => 'JAKARTA',
                'cust_notelp' => '081542632992',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            99 =>
            array (
                'idcust' => 139,
                'cust_nomor' => 'MP00048',
                'cust_nama' => 'BOGY',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '081542995522',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            100 =>
            array (
                'idcust' => 140,
                'cust_nomor' => 'MP00099',
                'cust_nama' => 'BOMA',
                'cust_alamat' => 'KEBONDALEM',
                'cust_notelp' => '08164844350',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            101 =>
            array (
                'idcust' => 141,
                'cust_nomor' => 'MP00282',
                'cust_nama' => 'BONDAN/RINI',
                'cust_alamat' => 'TELUK',
                'cust_notelp' => '08156987573',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            102 =>
            array (
                'idcust' => 142,
                'cust_nomor' => 'MP00324',
                'cust_nama' => 'BONDE',
                'cust_alamat' => 'JL.BANOWATI',
                'cust_notelp' => '081327776278',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            103 =>
            array (
                'idcust' => 143,
                'cust_nomor' => 'MP00314',
                'cust_nama' => 'BRATA CHEM',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            104 =>
            array (
                'idcust' => 144,
                'cust_nomor' => 'MP00560',
                'cust_nama' => 'BAGUS CAHYO',
                'cust_alamat' => 'JLKOMBAS 157',
                'cust_notelp' => '0281632159',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            105 =>
            array (
                'idcust' => 145,
                'cust_nomor' => 'MP00567',
                'cust_nama' => 'BOWO/LANDSON',
                'cust_alamat' => 'MANGUNJAYA 56',
                'cust_notelp' => '08156717913',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            106 =>
            array (
                'idcust' => 146,
                'cust_nomor' => 'MP00021',
                'cust_nama' => 'BUDI/IMA',
                'cust_alamat' => 'TELUK',
                'cust_notelp' => '7633216',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            107 =>
            array (
                'idcust' => 147,
                'cust_nomor' => 'MP00026',
                'cust_nama' => 'BUDI',
                'cust_alamat' => 'IGM/INDOFARMA',
                'cust_notelp' => '08122786164',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            108 =>
            array (
                'idcust' => 148,
                'cust_nomor' => 'MP00278',
                'cust_nama' => 'BUDI',
                'cust_alamat' => 'DR.ANGKA',
                'cust_notelp' => '081327111234',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            109 =>
            array (
                'idcust' => 149,
                'cust_nomor' => 'MP00394',
                'cust_nama' => 'BUDI',
                'cust_alamat' => 'KEDUNGWULUH',
                'cust_notelp' => '081327228361',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            110 =>
            array (
                'idcust' => 150,
                'cust_nomor' => 'MP00047',
                'cust_nama' => 'BRAM',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            111 =>
            array (
                'idcust' => 151,
                'cust_nomor' => 'MP00264',
                'cust_nama' => 'CACA',
                'cust_alamat' => 'SEKOLAH TEKHNIK',
                'cust_notelp' => '08882696030',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            112 =>
            array (
                'idcust' => 152,
                'cust_nomor' => 'MP00432',
                'cust_nama' => 'CANDRA',
                'cust_alamat' => 'PURBALINGGA KULON',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            113 =>
            array (
                'idcust' => 153,
                'cust_nomor' => 'MP00145',
                'cust_nama' => 'CAHYO ',
                'cust_alamat' => 'NOTOG',
                'cust_notelp' => '081327169729',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            114 =>
            array (
                'idcust' => 154,
                'cust_nomor' => 'MP00230',
                'cust_nama' => 'CAHYO',
                'cust_alamat' => 'KOBER',
                'cust_notelp' => '0852280999',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            115 =>
            array (
                'idcust' => 155,
                'cust_nomor' => 'MP00315',
                'cust_nama' => 'CATUR/AGUS',
                'cust_alamat' => 'SUDAGARAN',
                'cust_notelp' => '081804731606',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            116 =>
            array (
                'idcust' => 156,
                'cust_nomor' => 'MP00228',
                'cust_nama' => 'CEMENG',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '08172826708',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            117 =>
            array (
                'idcust' => 157,
                'cust_nomor' => 'MP00275',
                'cust_nama' => 'CHEN-CHEN',
                'cust_alamat' => 'BCA',
                'cust_notelp' => '081327199906',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            118 =>
            array (
                'idcust' => 158,
                'cust_nomor' => 'MP00119',
                'cust_nama' => 'CICI',
                'cust_alamat' => 'DUKU WALUH',
                'cust_notelp' => '081326094659',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            119 =>
            array (
                'idcust' => 159,
                'cust_nomor' => 'MP00312',
                'cust_nama' => 'CIKHA ',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '081802843390',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            120 =>
            array (
                'idcust' => 160,
                'cust_nomor' => 'MP00327',
            'cust_nama' => 'CHIKA(PADUKA)',
                'cust_alamat' => 'YOS SUDARSO',
                'cust_notelp' => '085227023417',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            121 =>
            array (
                'idcust' => 161,
                'cust_nomor' => 'MP00351',
                'cust_nama' => 'CINDY',
                'cust_alamat' => 'PURWOSARI',
                'cust_notelp' => '08156094585',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            122 =>
            array (
                'idcust' => 162,
                'cust_nomor' => 'MP00599',
                'cust_nama' => 'CHRISTANTY',
                'cust_alamat' => 'PERUM.BANCAR KEMBAR 13/4 PURWOKERTO',
                'cust_notelp' => '633594',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            123 =>
            array (
                'idcust' => 163,
                'cust_nomor' => 'MP00123',
                'cust_nama' => 'CRISTIN',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081578185407',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            124 =>
            array (
                'idcust' => 164,
                'cust_nomor' => 'MP00378',
                'cust_nama' => 'CUENG',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327790250',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            125 =>
            array (
                'idcust' => 165,
                'cust_nomor' => 'MP00459',
                'cust_nama' => 'DAVID',
                'cust_alamat' => 'PURI INTAN',
                'cust_notelp' => '08888028925',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            126 =>
            array (
                'idcust' => 166,
                'cust_nomor' => 'MP00513',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'BOBOSAN',
                'cust_notelp' => '08156708955',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            127 =>
            array (
                'idcust' => 167,
                'cust_nomor' => 'MP00116',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'PHW',
                'cust_notelp' => '08156999991',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            128 =>
            array (
                'idcust' => 168,
                'cust_nomor' => 'MP00277',
                'cust_nama' => 'DANIEL',
                'cust_alamat' => 'A.YANI 8',
                'cust_notelp' => '081327352567',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            129 =>
            array (
                'idcust' => 169,
                'cust_nomor' => 'MP00311',
                'cust_nama' => 'DARMAWAN',
                'cust_alamat' => 'JL.BANK',
                'cust_notelp' => '08122727335',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            130 =>
            array (
                'idcust' => 170,
                'cust_nomor' => 'MP00346',
                'cust_nama' => 'DEA',
                'cust_alamat' => 'KEBON DALEM',
                'cust_notelp' => '08562649421',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            131 =>
            array (
                'idcust' => 171,
                'cust_nomor' => 'MP00475',
                'cust_nama' => 'DIAH',
                'cust_alamat' => 'SUNAN KALIJAGA',
                'cust_notelp' => '081328013150',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            132 =>
            array (
                'idcust' => 172,
                'cust_nomor' => 'MP00472',
                'cust_nama' => 'DARSO',
                'cust_alamat' => 'KLAMPOK',
                'cust_notelp' => '085214474568',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            133 =>
            array (
                'idcust' => 173,
                'cust_nomor' => 'MP00140',
                'cust_nama' => 'DEDI',
                'cust_alamat' => 'SUKADAMAI',
                'cust_notelp' => '081327943913',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            134 =>
            array (
                'idcust' => 174,
                'cust_nomor' => 'MP00216',
                'cust_nama' => 'DEDI RET HENDRAWAN',
                'cust_alamat' => 'MERSI',
                'cust_notelp' => '081327123444',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            135 =>
            array (
                'idcust' => 175,
                'cust_nomor' => 'MP00582',
                'cust_nama' => 'DEVITA ELSANTI',
                'cust_alamat' => 'JL.LEKOL ISDIMAN 68A PURBALINGGA',
                'cust_notelp' => '08122997947',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            136 =>
            array (
                'idcust' => 176,
                'cust_nomor' => 'MP00578',
                'cust_nama' => 'DARYO',
                'cust_alamat' => 'BERKOH PURWOKERTO',
                'cust_notelp' => '081327212460',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            137 =>
            array (
                'idcust' => 177,
                'cust_nomor' => 'MP00577',
                'cust_nama' => 'DINAR PRIHANDINI',
                'cust_alamat' => 'JL.KSATRIAN 20',
                'cust_notelp' => '639822',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            138 =>
            array (
                'idcust' => 179,
                'cust_nomor' => 'MP00580',
                'cust_nama' => 'DEWI AJI',
                'cust_alamat' => 'GS.SUMAMPIR 6A',
                'cust_notelp' => '081327740404',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            139 =>
            array (
                'idcust' => 180,
                'cust_nomor' => 'MP00218',
                'cust_nama' => 'DEDI',
                'cust_alamat' => 'TIANSI',
                'cust_notelp' => '0818283222',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            140 =>
            array (
                'idcust' => 181,
                'cust_nomor' => 'MP00501',
                'cust_nama' => 'DRAJAT',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081327779222',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            141 =>
            array (
                'idcust' => 182,
                'cust_nomor' => 'MP00510',
                'cust_nama' => 'DONA',
                'cust_alamat' => 'JL.SUNAN KALIJAGA 2',
                'cust_notelp' => '08881012099',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            142 =>
            array (
                'idcust' => 183,
                'cust_nomor' => 'MP00512',
                'cust_nama' => 'DENI',
                'cust_alamat' => 'GRIYA KARANG INDAH',
                'cust_notelp' => '081327089099',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            143 =>
            array (
                'idcust' => 184,
                'cust_nomor' => 'MP00504',
                'cust_nama' => 'DONI',
                'cust_alamat' => 'PERUM BABAKAN-PURBALINGGA',
                'cust_notelp' => '081542754222',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            144 =>
            array (
                'idcust' => 185,
                'cust_nomor' => 'MP00602',
                'cust_nama' => 'DHIAN R',
                'cust_alamat' => 'KARANG WANGKAL',
                'cust_notelp' => '085227055050',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            145 =>
            array (
                'idcust' => 186,
                'cust_nomor' => 'MP00596',
                'cust_nama' => 'DINI',
                'cust_alamat' => 'JL.ROGOJEMBANGAN 428 PURWOKERTO',
                'cust_notelp' => '081328753597',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            146 =>
            array (
                'idcust' => 187,
                'cust_nomor' => 'MP00589',
                'cust_nama' => 'DARWANTO',
                'cust_alamat' => 'JL.PUNGKURAN',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            147 =>
            array (
                'idcust' => 188,
                'cust_nomor' => 'MP00298',
                'cust_nama' => 'DEDI TIRKEM',
                'cust_alamat' => 'JL.A.YANI',
                'cust_notelp' => '081548821188',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            148 =>
            array (
                'idcust' => 189,
                'cust_nomor' => 'MP00142',
                'cust_nama' => 'DEFI',
                'cust_alamat' => 'PURWOSARI',
                'cust_notelp' => '08172811717',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            149 =>
            array (
                'idcust' => 190,
                'cust_nomor' => 'MP00173',
                'cust_nama' => 'DENDY',
                'cust_alamat' => 'MANGUNJAYA',
                'cust_notelp' => '08121566680',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            150 =>
            array (
                'idcust' => 191,
                'cust_nomor' => 'MP00399',
                'cust_nama' => 'DENI',
                'cust_alamat' => 'JL.BANK',
                'cust_notelp' => '08172825522',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            151 =>
            array (
                'idcust' => 192,
                'cust_nomor' => 'MP00542',
                'cust_nama' => 'DYANT',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081806996103',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            152 =>
            array (
                'idcust' => 193,
                'cust_nomor' => 'MP00546',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'JL.SERAYU 10/72 SUMAMPIR PURWOKERTO',
                'cust_notelp' => '08122746882',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            153 =>
            array (
                'idcust' => 194,
                'cust_nomor' => 'MP00548',
                'cust_nama' => 'DILA/NOVI',
                'cust_alamat' => 'JL.GUNUNG MERAPI 5A BANCAR KEMBAR',
                'cust_notelp' => '081804777710',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            154 =>
            array (
                'idcust' => 195,
                'cust_nomor' => 'MP00357',
                'cust_nama' => 'DENI',
                'cust_alamat' => 'GRIYA SATRIA',
                'cust_notelp' => '635202',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            155 =>
            array (
                'idcust' => 196,
                'cust_nomor' => 'MP00344',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'ARCAWINANGUN',
                'cust_notelp' => '085647650888',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            156 =>
            array (
                'idcust' => 197,
                'cust_nomor' => 'MP00389',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'GRIYA SATRIA PERMAI 2',
                'cust_notelp' => '085624230821',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            157 =>
            array (
                'idcust' => 198,
                'cust_nomor' => 'MP00290',
                'cust_nama' => 'DESTRI',
                'cust_alamat' => 'DR SUPRAPTO 77',
                'cust_notelp' => '08172810080',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            158 =>
            array (
                'idcust' => 199,
                'cust_nomor' => 'MP00566',
                'cust_nama' => 'DEAN EISAI',
                'cust_alamat' => 'MANGUNJAYA 56 (WISMA GALAXI) PWT',
                'cust_notelp' => '0817452291',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            159 =>
            array (
                'idcust' => 200,
                'cust_nomor' => 'MP00569',
                'cust_nama' => 'DIDI SUMARDI',
                'cust_alamat' => 'JL. KOL SUGIRI 53 PWT',
                'cust_notelp' => '081327616380',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            160 =>
            array (
                'idcust' => 201,
                'cust_nomor' => 'MP00556',
                'cust_nama' => 'DIAN K HAPSARI',
                'cust_alamat' => 'JL. KARANG KOBAR 25A PWT',
                'cust_notelp' => '08122725455',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            161 =>
            array (
                'idcust' => 202,
                'cust_nomor' => 'MP001600',
                'cust_nama' => 'DIAN PUSPITA AYU',
                'cust_alamat' => 'JL RIYANTO NO 627 PWT',
                'cust_notelp' => '081548899945',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            162 =>
            array (
                'idcust' => 203,
                'cust_nomor' => 'MP00557',
                'cust_nama' => 'DIMAS N',
                'cust_alamat' => 'JL. KARANG KOBAR 25A PWT',
                'cust_notelp' => '0281631774',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            163 =>
            array (
                'idcust' => 204,
                'cust_nomor' => 'MP00555',
                'cust_nama' => 'DODI',
                'cust_alamat' => 'JL PERINTIS KEMERDEKAAN 21 PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            164 =>
            array (
                'idcust' => 205,
                'cust_nomor' => 'MP00562',
                'cust_nama' => 'DODON',
                'cust_alamat' => 'JL. GUNUNG SLAMET VI/2 PURWOSARI INDAH PWT',
                'cust_notelp' => '0281633146',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            165 =>
            array (
                'idcust' => 206,
                'cust_nomor' => 'MP00268',
                'cust_nama' => 'DEVI',
                'cust_alamat' => 'GRIYA SATRIA BANTARSOKA',
                'cust_notelp' => '08166872717',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            166 =>
            array (
                'idcust' => 207,
                'cust_nomor' => 'MP00081',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'KORAN RAKYAT BELAKANG RGM PWT',
                'cust_notelp' => '081327149499',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            167 =>
            array (
                'idcust' => 208,
                'cust_nomor' => 'MP00483',
                'cust_nama' => 'DWI ',
                'cust_alamat' => 'ASPOL',
                'cust_notelp' => '081548899912',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            168 =>
            array (
                'idcust' => 209,
                'cust_nomor' => 'MP00138',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'SEMARANG',
                'cust_notelp' => '08157727977',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            169 =>
            array (
                'idcust' => 210,
                'cust_nomor' => 'MP00172',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'MARTADIREJA 3',
                'cust_notelp' => '08122512497',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            170 =>
            array (
                'idcust' => 211,
                'cust_nomor' => 'MP00358',
                'cust_nama' => 'DHANI',
                'cust_alamat' => 'SPN PURWOKERTO B41',
                'cust_notelp' => '08122716863',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            171 =>
            array (
                'idcust' => 212,
                'cust_nomor' => 'MP00396',
                'cust_nama' => 'DINDA ',
                'cust_alamat' => 'KOBER',
                'cust_notelp' => '085227409222',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            172 =>
            array (
                'idcust' => 213,
                'cust_nomor' => 'MP00262',
                'cust_nama' => 'DIAH',
                'cust_alamat' => 'KARANG WANGKAL',
                'cust_notelp' => '081911443473',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            173 =>
            array (
                'idcust' => 214,
                'cust_nomor' => 'MP00274',
                'cust_nama' => 'DYAH',
                'cust_alamat' => 'KALIJAGA',
                'cust_notelp' => '08128326130',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            174 =>
            array (
                'idcust' => 215,
                'cust_nomor' => 'MP00011',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'MARGASANA',
                'cust_notelp' => '081327356004',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            175 =>
            array (
                'idcust' => 216,
                'cust_nomor' => 'MP00060',
                'cust_nama' => 'DIAN/TELKOMSEL',
                'cust_alamat' => 'HR.BUNYAMIN',
                'cust_notelp' => '0811287702',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            176 =>
            array (
                'idcust' => 217,
                'cust_nomor' => 'MP00231',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'PURWOKENCANA',
                'cust_notelp' => '08170615945',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            177 =>
            array (
                'idcust' => 218,
                'cust_nomor' => 'MP01535',
                'cust_nama' => 'RITA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081326921919',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            178 =>
            array (
                'idcust' => 219,
                'cust_nomor' => 'MP00408',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'HR.BUNYAMIN',
                'cust_notelp' => '0818285200',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            179 =>
            array (
                'idcust' => 220,
                'cust_nomor' => 'MP00276',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'GUNUNG MURIA 2B PWT',
                'cust_notelp' => '081327340004',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            180 =>
            array (
                'idcust' => 221,
                'cust_nomor' => 'MP00286',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'JL DR SUPARNO PWT',
                'cust_notelp' => '08122580261',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            181 =>
            array (
                'idcust' => 222,
                'cust_nomor' => 'MP00100',
                'cust_nama' => 'DIAS',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081323479299',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            182 =>
            array (
                'idcust' => 223,
                'cust_nomor' => 'MP00030',
                'cust_nama' => 'DICKY',
                'cust_alamat' => 'LIMAS AGUNG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            183 =>
            array (
                'idcust' => 224,
                'cust_nomor' => 'MP00017',
                'cust_nama' => 'DIDI',
                'cust_alamat' => 'INDOFARMA',
                'cust_notelp' => '08122811413',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            184 =>
            array (
                'idcust' => 225,
                'cust_nomor' => 'MP00106',
                'cust_nama' => 'DILA/ROY',
                'cust_alamat' => 'KOAS',
                'cust_notelp' => '081932726667',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            185 =>
            array (
                'idcust' => 226,
                'cust_nomor' => 'MP00087',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '08122716180',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            186 =>
            array (
                'idcust' => 227,
                'cust_nomor' => 'MP00222',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'MERSI',
                'cust_notelp' => '081327378778',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            187 =>
            array (
                'idcust' => 228,
                'cust_nomor' => 'MP00434',
                'cust_nama' => 'DICKY',
                'cust_alamat' => 'SUMAMPIR',
                'cust_notelp' => '08122672202',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            188 =>
            array (
                'idcust' => 229,
                'cust_nomor' => 'MP00427',
                'cust_nama' => 'DIANA',
                'cust_alamat' => 'SAWANGAN PWT',
                'cust_notelp' => '081327296873',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            189 =>
            array (
                'idcust' => 230,
                'cust_nomor' => 'MP00515',
                'cust_nama' => 'DONI',
                'cust_alamat' => 'TANJUNG PWT',
                'cust_notelp' => '085647733388',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            190 =>
            array (
                'idcust' => 231,
                'cust_nomor' => 'MP00454',
                'cust_nama' => 'DONA FRISKA AGUNG NUGRAHA',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '085647644444',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            191 =>
            array (
                'idcust' => 232,
                'cust_nomor' => 'MP00090',
                'cust_nama' => 'DINI',
                'cust_alamat' => 'TELKOMSEL',
                'cust_notelp' => '7633830',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            192 =>
            array (
                'idcust' => 233,
                'cust_nomor' => 'MP00363',
            'cust_nama' => 'DOLOP (SABLON)',
                'cust_alamat' => 'TAMBAK BATU',
                'cust_notelp' => '081327939657',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            193 =>
            array (
                'idcust' => 234,
                'cust_nomor' => 'MP00533',
                'cust_nama' => 'DEDDY SETYO H',
                'cust_alamat' => 'REJASARI PWT BARAT',
                'cust_notelp' => '081548803984',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            194 =>
            array (
                'idcust' => 235,
                'cust_nomor' => 'MP00201',
                'cust_nama' => 'DONI',
                'cust_alamat' => 'PASAR WAGE PWT',
                'cust_notelp' => '085228007545',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            195 =>
            array (
                'idcust' => 236,
                'cust_nomor' => 'MP00190',
                'cust_nama' => 'ECHI',
                'cust_alamat' => 'MANGUN JAYA PWT',
                'cust_notelp' => '081327792201',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            196 =>
            array (
                'idcust' => 237,
                'cust_nomor' => 'MP00105',
                'cust_nama' => 'EDI ',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '0811262829',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            197 =>
            array (
                'idcust' => 238,
                'cust_nomor' => 'MP00405',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'JL MERDEKA PWT',
                'cust_notelp' => '0818280455',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            198 =>
            array (
                'idcust' => 239,
                'cust_nomor' => 'MP00265',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'MANGUN JAYA PWT',
                'cust_notelp' => '08164267472',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            199 =>
            array (
                'idcust' => 240,
                'cust_nomor' => 'MP00072',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'KALI BENER PWT',
                'cust_notelp' => '7605522',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            200 =>
            array (
                'idcust' => 241,
                'cust_nomor' => 'MP00192',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'KALI BAGOR PWT',
                'cust_notelp' => '08562648949',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            201 =>
            array (
                'idcust' => 242,
                'cust_nomor' => 'MP00592',
                'cust_nama' => 'ENDAH',
                'cust_alamat' => 'OVIST PWT',
                'cust_notelp' => '76240600',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            202 =>
            array (
                'idcust' => 243,
                'cust_nomor' => 'MP00613',
                'cust_nama' => 'ENDRI K',
                'cust_alamat' => 'JL A YANI 6/091 PWT',
                'cust_notelp' => '0281 621579',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            203 =>
            array (
                'idcust' => 244,
                'cust_nomor' => 'MP00503',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'PERUM GTSI BLOK P4 12',
                'cust_notelp' => '081327372352',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            204 =>
            array (
                'idcust' => 245,
                'cust_nomor' => 'MP00144',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'SIDABOA PWT',
                'cust_notelp' => '08129734001',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            205 =>
            array (
                'idcust' => 246,
                'cust_nomor' => 'MP00497',
                'cust_nama' => 'EDY TM',
                'cust_alamat' => 'JL KOL SUGIONO 46A',
                'cust_notelp' => '0281 628345',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            206 =>
            array (
                'idcust' => 247,
                'cust_nomor' => 'MP00294',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'JL PERINTIS KEMERDEKAAN PWT',
                'cust_notelp' => '08157544227',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            207 =>
            array (
                'idcust' => 248,
                'cust_nomor' => 'MP00393',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'JL KESATRIAN G 12 PWT',
                'cust_notelp' => '08164284541',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            208 =>
            array (
                'idcust' => 249,
                'cust_nomor' => 'MP00532',
                'cust_nama' => 'EKAWATI PUSPITASARI',
                'cust_alamat' => 'JLN NANGKA 17 PWT',
                'cust_notelp' => '085224002189',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            209 =>
            array (
                'idcust' => 250,
                'cust_nomor' => 'MP00223',
                'cust_nama' => 'ELLY',
                'cust_alamat' => 'JL A YANI GG 3 6A PWT',
                'cust_notelp' => '0811287602',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            210 =>
            array (
                'idcust' => 251,
                'cust_nomor' => 'MP00124',
                'cust_nama' => 'ELIA',
                'cust_alamat' => 'JLN KSATRIAN K2 13 PWT',
                'cust_notelp' => '081328730086',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            211 =>
            array (
                'idcust' => 252,
                'cust_nomor' => 'MP00141',
                'cust_nama' => 'ELSA',
                'cust_alamat' => 'PROF DR SUHARSO PWT',
                'cust_notelp' => '081327626367',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            212 =>
            array (
                'idcust' => 253,
                'cust_nomor' => 'MP00179',
                'cust_nama' => 'EMI',
                'cust_alamat' => 'MANGUNJAYA 69A PWT',
                'cust_notelp' => '085227333453',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            213 =>
            array (
                'idcust' => 254,
                'cust_nomor' => 'MP001601',
                'cust_nama' => 'RINDI',
                'cust_alamat' => 'MADRANI 62A PWT',
                'cust_notelp' => '085692866206',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            214 =>
            array (
                'idcust' => 255,
                'cust_nomor' => 'MP00518',
                'cust_nama' => 'EDA LISTIYANA',
                'cust_alamat' => 'LEDUG RT01/03 KEMBARAN BANYUMAS',
                'cust_notelp' => '085647608586',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            215 =>
            array (
                'idcust' => 256,
                'cust_nomor' => 'MP00385',
                'cust_nama' => 'WINI',
                'cust_alamat' => 'SUMAPMIR PWT',
                'cust_notelp' => '085647808864',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            216 =>
            array (
                'idcust' => 257,
                'cust_nomor' => 'MP00176',
                'cust_nama' => 'ENDAH/NURHADI',
                'cust_alamat' => 'BANTARSOKA/PASIRAJA',
                'cust_notelp' => '08122784604',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            217 =>
            array (
                'idcust' => 258,
                'cust_nomor' => 'MP00320',
                'cust_nama' => 'EPUL',
                'cust_alamat' => 'KROYA',
                'cust_notelp' => '081327553369',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            218 =>
            array (
                'idcust' => 259,
                'cust_nomor' => 'MP00003',
                'cust_nama' => 'ERDA',
                'cust_alamat' => 'LEDUG',
                'cust_notelp' => '085647666663',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            219 =>
            array (
                'idcust' => 260,
                'cust_nomor' => 'MP01536',
                'cust_nama' => 'IRMA',
                'cust_alamat' => 'SUMAMPIR',
                'cust_notelp' => '081548825184',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            220 =>
            array (
                'idcust' => 261,
                'cust_nomor' => 'MP00500',
                'cust_nama' => 'ERNITA NONIASTUTI',
                'cust_alamat' => 'JL.BALAI KELURAHAN 52ARCAWINANGUN PWT',
                'cust_notelp' => '623454',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            221 =>
            array (
                'idcust' => 262,
                'cust_nomor' => 'MP01537 ',
                'cust_nama' => 'YUANITA NOVRIYANA',
                'cust_alamat' => 'PANDAK-SUMPIUH',
                'cust_notelp' => '081324328534',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            222 =>
            array (
                'idcust' => 263,
                'cust_nomor' => 'MP00120',
                'cust_nama' => 'ERVI',
                'cust_alamat' => 'KRG.WANGKAL',
                'cust_notelp' => '0816691226',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            223 =>
            array (
                'idcust' => 264,
                'cust_nomor' => 'MP00203',
                'cust_nama' => 'ESTI RW',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '628202',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            224 =>
            array (
                'idcust' => 265,
                'cust_nomor' => 'MP00219',
                'cust_nama' => 'EVI',
                'cust_alamat' => 'JL.PAHLAWAN',
                'cust_notelp' => '081327222111',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            225 =>
            array (
                'idcust' => 266,
                'cust_nomor' => 'MP00122',
                'cust_nama' => 'FAJAR',
                'cust_alamat' => 'BI',
                'cust_notelp' => '081548830073',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            226 =>
            array (
                'idcust' => 267,
                'cust_nomor' => 'MP00317',
                'cust_nama' => 'FAJAR',
                'cust_alamat' => 'KRG.SALAM',
                'cust_notelp' => '085227441163',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            227 =>
            array (
                'idcust' => 268,
                'cust_nomor' => 'MP00332',
                'cust_nama' => 'FANG',
                'cust_alamat' => 'BATURADEN',
                'cust_notelp' => '085647764777',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            228 =>
            array (
                'idcust' => 269,
                'cust_nomor' => 'MP00511',
                'cust_nama' => 'FANNY',
                'cust_alamat' => 'PENATUSAN',
                'cust_notelp' => '081548817789',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            229 =>
            array (
                'idcust' => 270,
                'cust_nomor' => 'MP00260',
                'cust_nama' => 'FANI',
                'cust_alamat' => 'KOAS',
                'cust_notelp' => '081584743115',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            230 =>
            array (
                'idcust' => 271,
                'cust_nomor' => 'MP00339',
                'cust_nama' => 'FAUZIAH',
                'cust_alamat' => 'ARCAWINANGUN',
                'cust_notelp' => '625789',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            231 =>
            array (
                'idcust' => 272,
                'cust_nomor' => 'MP00559',
                'cust_nama' => 'FAHD',
                'cust_alamat' => 'KAUMAN LAMA 5',
                'cust_notelp' => '081802330613',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            232 =>
            array (
                'idcust' => 273,
                'cust_nomor' => 'MP00029',
                'cust_nama' => 'FEBRY',
                'cust_alamat' => 'UNSOED',
                'cust_notelp' => '085692120956',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            233 =>
            array (
                'idcust' => 274,
                'cust_nomor' => 'MP00525',
                'cust_nama' => 'FEBRIANY',
                'cust_alamat' => 'MARTADIREJA I 877',
                'cust_notelp' => '081327422009',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            234 =>
            array (
                'idcust' => 275,
                'cust_nomor' => 'MP00540',
                'cust_nama' => 'FRANCISCA',
                'cust_alamat' => 'PURI HIJAU JL PUMAS 4 NO 2 PWT',
                'cust_notelp' => '085226929292',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            235 =>
            array (
                'idcust' => 276,
                'cust_nomor' => 'MP00330',
                'cust_nama' => 'FELI',
                'cust_alamat' => 'BATURADEN',
                'cust_notelp' => '081378446555',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            236 =>
            array (
                'idcust' => 277,
                'cust_nomor' => 'MP00402',
                'cust_nama' => 'FENI',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN',
                'cust_notelp' => '081327309999',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            237 =>
            array (
                'idcust' => 278,
                'cust_nomor' => 'MP00258',
                'cust_nama' => 'FENI',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '081228380331',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            238 =>
            array (
                'idcust' => 279,
                'cust_nomor' => 'MP00234',
                'cust_nama' => 'FELIX',
                'cust_alamat' => 'YASIKA',
                'cust_notelp' => '0281626402',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            239 =>
            array (
                'idcust' => 280,
                'cust_nomor' => 'MP00042',
                'cust_nama' => 'FELLA',
                'cust_alamat' => 'KEBONDALEM2 JPWT',
                'cust_notelp' => '085647742276',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            240 =>
            array (
                'idcust' => 281,
                'cust_nomor' => 'MP00148',
                'cust_nama' => 'FERI',
                'cust_alamat' => 'PURI HIJAU',
                'cust_notelp' => '081804766432',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            241 =>
            array (
                'idcust' => 282,
                'cust_nomor' => 'MP00361',
                'cust_nama' => 'FERI',
                'cust_alamat' => 'GS BLOK 13 PWT',
                'cust_notelp' => '08122663406',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            242 =>
            array (
                'idcust' => 283,
                'cust_nomor' => 'MP00233',
                'cust_nama' => 'FERNI',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '081327343552',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            243 =>
            array (
                'idcust' => 284,
                'cust_nomor' => 'MP00446',
                'cust_nama' => 'FAUZI',
                'cust_alamat' => 'SLAMET RIYADI PWT',
                'cust_notelp' => '081802809460',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            244 =>
            array (
                'idcust' => 285,
                'cust_nomor' => 'MP00447',
                'cust_nama' => 'FAHMI',
                'cust_alamat' => 'ARCA MANIK BANDUNG',
                'cust_notelp' => '08562278745',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            245 =>
            array (
                'idcust' => 286,
                'cust_nomor' => 'MP00431',
                'cust_nama' => 'FINFAN',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '085647764777',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            246 =>
            array (
                'idcust' => 287,
                'cust_nomor' => 'MP00175',
                'cust_nama' => 'FIKA',
                'cust_alamat' => 'PURWOSARI',
                'cust_notelp' => '08156809788',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            247 =>
            array (
                'idcust' => 288,
                'cust_nomor' => 'MP00103',
                'cust_nama' => 'FIRMAN FITRI',
                'cust_alamat' => 'KOAS UPN',
                'cust_notelp' => '08129940499',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            248 =>
            array (
                'idcust' => 289,
                'cust_nomor' => 'MP00158',
                'cust_nama' => 'FHRA',
                'cust_alamat' => 'KSTATRIAN PWT',
                'cust_notelp' => '081542998178',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            249 =>
            array (
                'idcust' => 290,
                'cust_nomor' => 'MP00462',
                'cust_nama' => 'FIMA',
                'cust_alamat' => 'KARANG MELATI PWT',
                'cust_notelp' => '081548888148',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            250 =>
            array (
                'idcust' => 291,
                'cust_nomor' => 'MP00015',
                'cust_nama' => 'FITRI',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '081327604710',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            251 =>
            array (
                'idcust' => 292,
                'cust_nomor' => 'MP00305',
                'cust_nama' => 'FITRI FATIMANINGSIH',
                'cust_alamat' => 'MAJENANG',
                'cust_notelp' => '081804704005',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            252 =>
            array (
                'idcust' => 293,
                'cust_nomor' => 'MP00403',
                'cust_nama' => 'FRISCA',
                'cust_alamat' => 'PANCURAWIS PWT',
                'cust_notelp' => '081327450000',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            253 =>
            array (
                'idcust' => 294,
                'cust_nomor' => 'MP00495',
                'cust_nama' => 'FEFEN YP',
                'cust_alamat' => 'JL. KALIBENER 451 PWT',
                'cust_notelp' => '081804870140',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            254 =>
            array (
                'idcust' => 295,
                'cust_nomor' => 'MP00383',
                'cust_nama' => 'FREDI MARA',
                'cust_alamat' => 'KOMBAS PWT',
                'cust_notelp' => '622750',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            255 =>
            array (
                'idcust' => 296,
                'cust_nomor' => 'MP00375',
                'cust_nama' => 'FRITZIE',
                'cust_alamat' => 'PERUM BANCAR KEMBAR',
                'cust_notelp' => '08156991166',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            256 =>
            array (
                'idcust' => 297,
                'cust_nomor' => 'MP00006',
                'cust_nama' => 'F.YOAN',
                'cust_alamat' => 'GRIYA SATRIA2',
                'cust_notelp' => '0817461887',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            257 =>
            array (
                'idcust' => 298,
                'cust_nomor' => 'MP00115',
                'cust_nama' => 'GADING',
                'cust_alamat' => 'PURI INTAN',
                'cust_notelp' => '08122777171',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            258 =>
            array (
                'idcust' => 299,
                'cust_nomor' => 'MP00067',
                'cust_nama' => 'GAGUK',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '081327446433',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            259 =>
            array (
                'idcust' => 300,
                'cust_nomor' => 'MP00181',
                'cust_nama' => 'GALUH',
                'cust_alamat' => 'KRG.LEWAS',
                'cust_notelp' => '081327357001',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            260 =>
            array (
                'idcust' => 301,
                'cust_nomor' => 'MP00252',
                'cust_nama' => 'GATOT',
                'cust_alamat' => 'MANGUN JAYA',
                'cust_notelp' => '081327633334',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            261 =>
            array (
                'idcust' => 302,
                'cust_nomor' => 'MP00036',
                'cust_nama' => 'GEMBONG/PIPIT',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085647666661',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            262 =>
            array (
                'idcust' => 303,
                'cust_nomor' => 'MP00479',
                'cust_nama' => 'GUNTUR',
                'cust_alamat' => 'JL.PEMUDA PURWOKERTO',
                'cust_notelp' => '08122955889',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            263 =>
            array (
                'idcust' => 304,
                'cust_nomor' => 'MP00149',
                'cust_nama' => 'GONANG',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '0281624222',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            264 =>
            array (
                'idcust' => 305,
                'cust_nomor' => 'MP00573',
                'cust_nama' => 'GILANG PRASASTI',
                'cust_alamat' => 'JL.GUNUNG SLAMET',
                'cust_notelp' => '081320487808',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            265 =>
            array (
                'idcust' => 306,
                'cust_nomor' => 'MP00439',
                'cust_nama' => 'GIRI',
                'cust_alamat' => 'KEDUNG MALANG PABUARAN PURWOKERTO',
                'cust_notelp' => '08562609697',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            266 =>
            array (
                'idcust' => 307,
                'cust_nomor' => 'MP00372',
                'cust_nama' => 'GUNTUR',
                'cust_alamat' => 'DANAMON',
                'cust_notelp' => '08156980532',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            267 =>
            array (
                'idcust' => 308,
                'cust_nomor' => 'MP00524',
                'cust_nama' => 'GRACE NITA',
                'cust_alamat' => 'JL.MARTADIREJA I GG PUTERAN PURWOKERTO',
                'cust_notelp' => '081391028005',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            268 =>
            array (
                'idcust' => 309,
                'cust_nomor' => 'MP00520',
                'cust_nama' => 'HARRYS HARYANTO',
                'cust_alamat' => 'KROYA-CILACAP',
                'cust_notelp' => '081548828659',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            269 =>
            array (
                'idcust' => 310,
                'cust_nomor' => 'MP00088',
                'cust_nama' => 'HAM',
                'cust_alamat' => 'SEMARANG',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            270 =>
            array (
                'idcust' => 311,
                'cust_nomor' => 'MP00547',
                'cust_nama' => 'HADY NURYAMAN',
                'cust_alamat' => 'JL MADRANI GRENDENG PURWOKERTO',
                'cust_notelp' => '0281640560',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            271 =>
            array (
                'idcust' => 312,
                'cust_nomor' => 'MP00539',
                'cust_nama' => 'HANDRY SETYANDA',
                'cust_alamat' => 'PURI HIJAU JL.PUMAS 4 NO 3 PURWOKERTO',
                'cust_notelp' => '0811253600',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            272 =>
            array (
                'idcust' => 313,
                'cust_nomor' => 'MP00460',
                'cust_nama' => 'HAFIK',
                'cust_alamat' => 'JATILAWANG',
                'cust_notelp' => '511260',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            273 =>
            array (
                'idcust' => 314,
                'cust_nomor' => 'MP00463',
                'cust_nama' => 'HERU',
                'cust_alamat' => 'MERSI PURWOKERTO',
                'cust_notelp' => '08156970823',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            274 =>
            array (
                'idcust' => 315,
                'cust_nomor' => 'MP00083',
                'cust_nama' => 'HANDOYO',
                'cust_alamat' => 'PONDOK KENCANA PURWOKERTO',
                'cust_notelp' => '08156421397',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            275 =>
            array (
                'idcust' => 316,
                'cust_nomor' => 'MP00552',
                'cust_nama' => 'HARI',
                'cust_alamat' => 'PURWOSARI PURWOKERTO',
                'cust_notelp' => '081548883679',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            276 =>
            array (
                'idcust' => 317,
                'cust_nomor' => 'MP00409',
                'cust_nama' => 'HANDOYO',
                'cust_alamat' => 'KEBONDALEM',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            277 =>
            array (
                'idcust' => 318,
                'cust_nomor' => 'MP00266',
                'cust_nama' => 'HANDOKO',
                'cust_alamat' => 'TIRKEM PURWOKERTO',
                'cust_notelp' => '085647771899',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            278 =>
            array (
                'idcust' => 319,
                'cust_nomor' => 'MP00366',
                'cust_nama' => 'HANUM',
                'cust_alamat' => 'DUKU WALUH',
                'cust_notelp' => '0856424655965',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            279 =>
            array (
                'idcust' => 320,
                'cust_nomor' => 'MP00065',
                'cust_nama' => 'HARI LANSON',
                'cust_alamat' => 'OBAT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            280 =>
            array (
                'idcust' => 321,
                'cust_nomor' => 'MP00482',
                'cust_nama' => 'HENDRA',
                'cust_alamat' => 'JL.AHMAD YANI',
                'cust_notelp' => '085227470004',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            281 =>
            array (
                'idcust' => 322,
                'cust_nomor' => 'MP00484',
                'cust_nama' => 'HARI',
                'cust_alamat' => 'KALIBENER',
                'cust_notelp' => '081327644006',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            282 =>
            array (
                'idcust' => 323,
                'cust_nomor' => 'MP00157',
                'cust_nama' => 'HARTONO',
                'cust_alamat' => 'MANGUN JAYA',
                'cust_notelp' => '08157726289',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            283 =>
            array (
                'idcust' => 324,
                'cust_nomor' => 'MP00232',
                'cust_nama' => 'HERRI WOM',
                'cust_alamat' => 'WOM PURWOKERTO',
                'cust_notelp' => '08122527883',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            284 =>
            array (
                'idcust' => 325,
                'cust_nomor' => 'MP00022',
                'cust_nama' => 'HENDRI PRASETYO',
                'cust_alamat' => 'PURBANDANA',
                'cust_notelp' => '081380305758',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            285 =>
            array (
                'idcust' => 326,
                'cust_nomor' => 'MP00082',
                'cust_nama' => 'HENI/WAWAN',
                'cust_alamat' => 'TANJUNG',
                'cust_notelp' => '08121566908',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            286 =>
            array (
                'idcust' => 327,
                'cust_nomor' => 'MP00096',
                'cust_nama' => 'HERSI',
                'cust_alamat' => 'SUTEJA 12',
                'cust_notelp' => '627765',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            287 =>
            array (
                'idcust' => 328,
                'cust_nomor' => 'MP00238',
                'cust_nama' => 'HEVIK',
                'cust_alamat' => 'JL.KOMBAS',
                'cust_notelp' => '08156892664',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            288 =>
            array (
                'idcust' => 329,
                'cust_nomor' => 'MP00786',
                'cust_nama' => 'ADEL',
                'cust_alamat' => 'KRG.JAMBU',
                'cust_notelp' => '7653437',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            289 =>
            array (
                'idcust' => 330,
                'cust_nomor' => 'MP00545',
                'cust_nama' => 'IBAZ',
                'cust_alamat' => 'PURWOSARI PURWOKERTO',
                'cust_notelp' => '081548847138',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            290 =>
            array (
                'idcust' => 331,
                'cust_nomor' => 'MP00541',
                'cust_nama' => 'INDRA H',
                'cust_alamat' => 'SOKARAJA TENGAH',
                'cust_notelp' => '081542945311',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            291 =>
            array (
                'idcust' => 332,
                'cust_nomor' => 'MP0071',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'BANCAR KEMBAR',
                'cust_notelp' => '08132774744',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            292 =>
            array (
                'idcust' => 333,
                'cust_nomor' => 'MP00517',
                'cust_nama' => 'IKE',
                'cust_alamat' => 'KRANJI-PURWOKERTO',
                'cust_notelp' => '08152017929',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            293 =>
            array (
                'idcust' => 334,
                'cust_nomor' => 'MP00156',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'DR.ANGKA PURWOKERTO',
                'cust_notelp' => '081327300252',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            294 =>
            array (
                'idcust' => 335,
                'cust_nomor' => 'MP00034',
                'cust_nama' => 'IKE',
                'cust_alamat' => 'PATRIOT PURWOKERTO',
                'cust_notelp' => '081327244445',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            295 =>
            array (
                'idcust' => 336,
                'cust_nomor' => 'MP00502',
                'cust_nama' => 'IRWAN P ISKANDAR',
                'cust_alamat' => 'KOBER',
                'cust_notelp' => '7643499',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            296 =>
            array (
                'idcust' => 337,
                'cust_nomor' => 'MP00185',
                'cust_nama' => 'IKHWAN',
                'cust_alamat' => 'BANCAR KEMBAR PURWOKERTO',
                'cust_notelp' => '085224606754',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            297 =>
            array (
                'idcust' => 338,
                'cust_nomor' => 'MP00114',
                'cust_nama' => 'IMAN',
                'cust_alamat' => 'OTO MOBIL',
                'cust_notelp' => '02817626446',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            298 =>
            array (
                'idcust' => 339,
                'cust_nomor' => 'MP00180',
                'cust_nama' => 'INDAH',
                'cust_alamat' => 'KRG.LEWAS PURWOKERTO',
                'cust_notelp' => '081327483515',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            299 =>
            array (
                'idcust' => 340,
                'cust_nomor' => 'MP00242',
                'cust_nama' => 'INDRA',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '7631969',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            300 =>
            array (
                'idcust' => 341,
                'cust_nomor' => 'MP00281',
                'cust_nama' => 'INDRA',
                'cust_alamat' => 'PH PWT',
                'cust_notelp' => '7604900',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            301 =>
            array (
                'idcust' => 342,
                'cust_nomor' => 'MP00583',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'KRG BAWANG PWT',
                'cust_notelp' => '081327645959',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            302 =>
            array (
                'idcust' => 343,
                'cust_nomor' => 'MP00476',
                'cust_nama' => 'IQBAL',
                'cust_alamat' => 'PERUM GRAHA MUSTIKA PWT',
                'cust_notelp' => '081327545995',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            303 =>
            array (
                'idcust' => 344,
                'cust_nomor' => 'MP00139',
                'cust_nama' => 'INES',
                'cust_alamat' => 'JL PEMUDA PWT',
                'cust_notelp' => '081931822722',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            304 =>
            array (
                'idcust' => 345,
                'cust_nomor' => 'MP00184',
                'cust_nama' => 'INDRI',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '08172817079',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            305 =>
            array (
                'idcust' => 346,
                'cust_nomor' => 'MP00080',
                'cust_nama' => 'INTAN/DAVID',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081327008080',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            306 =>
            array (
                'idcust' => 347,
                'cust_nomor' => 'MP00397',
                'cust_nama' => 'IMA',
                'cust_alamat' => 'JATI WINANGUN PWT',
                'cust_notelp' => '085227461461',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            307 =>
            array (
                'idcust' => 348,
                'cust_nomor' => 'MP00445',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '081542943752',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            308 =>
            array (
                'idcust' => 349,
                'cust_nomor' => 'MP00251',
                'cust_nama' => 'IRA',
                'cust_alamat' => 'SIDANEGARA PWT',
                'cust_notelp' => '08882697544',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            309 =>
            array (
                'idcust' => 350,
                'cust_nomor' => 'MP00299',
                'cust_nama' => 'IRAWADI',
                'cust_alamat' => 'SENOPATI DUKUWALU PWT',
                'cust_notelp' => '08121566525',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            310 =>
            array (
                'idcust' => 351,
                'cust_nomor' => 'MP00177',
                'cust_nama' => 'ISNA',
                'cust_alamat' => 'GUNUNG LAWU PWT',
                'cust_notelp' => '081802810195',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            311 =>
            array (
                'idcust' => 352,
                'cust_nomor' => 'MP009392',
                'cust_nama' => 'ISYANA CANDRA DEWI',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '085228806558',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            312 =>
            array (
                'idcust' => 353,
                'cust_nomor' => 'MP00052',
                'cust_nama' => 'ITA',
                'cust_alamat' => 'SAWANGAN PWT',
                'cust_notelp' => '0281626575',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            313 =>
            array (
                'idcust' => 354,
                'cust_nomor' => 'MP00308',
                'cust_nama' => 'ITA',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '085647797431',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            314 =>
            array (
                'idcust' => 355,
                'cust_nomor' => 'MP000004',
                'cust_nama' => 'IVIN',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '08156545237',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            315 =>
            array (
                'idcust' => 356,
                'cust_nomor' => 'MP00010',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '08562686216',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            316 =>
            array (
                'idcust' => 357,
                'cust_nomor' => 'MP00407',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '081327505544',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            317 =>
            array (
                'idcust' => 358,
                'cust_nomor' => 'MP00066',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'MANDIRAJA',
                'cust_notelp' => '085227045777',
                'cust_date' => '2007-03-29',
                'cust_author' => 'admin',
            ),
            318 =>
            array (
                'idcust' => 359,
                'cust_nomor' => 'MP00414',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'POLWIL',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            319 =>
            array (
                'idcust' => 360,
                'cust_nomor' => 'MP00147',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '085227161991',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            320 =>
            array (
                'idcust' => 361,
                'cust_nomor' => 'MP00377',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327642279',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            321 =>
            array (
                'idcust' => 362,
                'cust_nomor' => 'MP00614',
                'cust_nama' => 'IWING',
                'cust_alamat' => 'JL KOL SUGIONO 200 PWT',
                'cust_notelp' => '081327130880',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            322 =>
            array (
                'idcust' => 363,
                'cust_nomor' => 'MP00611',
                'cust_nama' => 'IFA',
                'cust_alamat' => 'BUKOPIN',
                'cust_notelp' => '081327152990',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            323 =>
            array (
                'idcust' => 364,
                'cust_nomor' => 'MP00612',
                'cust_nama' => 'IKE WARDHANI',
                'cust_alamat' => 'JL MT HARYONO 20A',
                'cust_notelp' => '0281 7609298',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            324 =>
            array (
                'idcust' => 365,
                'cust_nomor' => 'MP00609',
                'cust_nama' => 'INDRANILA',
                'cust_alamat' => 'JL HR BUNYAMIN 55 PWT',
                'cust_notelp' => '0281 7627409',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            325 =>
            array (
                'idcust' => 366,
                'cust_nomor' => 'MP00600',
                'cust_nama' => 'INDAH',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08562917704',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            326 =>
            array (
                'idcust' => 367,
                'cust_nomor' => 'MP00620',
                'cust_nama' => 'IBNU',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '085227504404',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            327 =>
            array (
                'idcust' => 368,
                'cust_nomor' => 'MP00256',
                'cust_nama' => 'JATI',
                'cust_alamat' => 'AHMAD YANI',
                'cust_notelp' => '081327390017',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            328 =>
            array (
                'idcust' => 369,
                'cust_nomor' => 'MP00019',
                'cust_nama' => 'JEMMY CHRISTIANUS',
                'cust_alamat' => 'KARANG KLESEM PWT',
                'cust_notelp' => '081542771110',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            329 =>
            array (
                'idcust' => 370,
                'cust_nomor' => 'MP00193',
                'cust_nama' => 'JENI',
                'cust_alamat' => 'CIKEBROK PWT',
                'cust_notelp' => '08122997084',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            330 =>
            array (
                'idcust' => 371,
                'cust_nomor' => 'MP00143',
                'cust_nama' => 'JOHAN',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081327391902',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            331 =>
            array (
                'idcust' => 372,
                'cust_nomor' => 'MP00243',
                'cust_nama' => 'JOKO',
                'cust_alamat' => 'WATUMAS PWT',
                'cust_notelp' => '081327757677',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            332 =>
            array (
                'idcust' => 373,
                'cust_nomor' => 'MP00217',
                'cust_nama' => 'JUVENTUS',
                'cust_alamat' => 'PEMUDA PWT',
                'cust_notelp' => '085640112280',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            333 =>
            array (
                'idcust' => 374,
                'cust_nomor' => 'MP00442',
                'cust_nama' => 'KATRI',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081327319889',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            334 =>
            array (
                'idcust' => 375,
                'cust_nomor' => 'MP00269',
                'cust_nama' => 'KABUL',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '08121556347',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            335 =>
            array (
                'idcust' => 376,
                'cust_nomor' => 'MP00570',
                'cust_nama' => 'KRIS ARDHI/AAN',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '081327056662',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            336 =>
            array (
                'idcust' => 377,
                'cust_nomor' => 'MP00323',
                'cust_nama' => 'KAKA',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '08179973393',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            337 =>
            array (
                'idcust' => 378,
                'cust_nomor' => 'MP00094',
                'cust_nama' => 'KERIN',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '08122744882',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            338 =>
            array (
                'idcust' => 379,
                'cust_nomor' => 'MP00368',
                'cust_nama' => 'KHALEED',
                'cust_alamat' => 'LIMAS AGUNG PWT ',
                'cust_notelp' => '085227447788',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            339 =>
            array (
                'idcust' => 380,
                'cust_nomor' => 'MP00605',
                'cust_nama' => 'KURNIAWAN BS',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '081327077857',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            340 =>
            array (
                'idcust' => 381,
                'cust_nomor' => 'MP00591',
                'cust_nama' => 'KOKO',
                'cust_alamat' => 'GUNUNG SUMBING PWT',
                'cust_notelp' => '0816695531',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            341 =>
            array (
                'idcust' => 382,
                'cust_nomor' => 'MP00253',
                'cust_nama' => 'KURNIAWAN',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081578157473',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            342 =>
            array (
                'idcust' => 383,
                'cust_nomor' => 'MP00341',
                'cust_nama' => 'LANU/PAUL',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            343 =>
            array (
                'idcust' => 384,
                'cust_nomor' => 'MP00328',
                'cust_nama' => 'LEGSA',
                'cust_alamat' => 'PANCURAWIS PWT',
                'cust_notelp' => '081542641200',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            344 =>
            array (
                'idcust' => 385,
                'cust_nomor' => 'MP00166',
                'cust_nama' => 'LELI',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '081328766149',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            345 =>
            array (
                'idcust' => 386,
                'cust_nomor' => 'MP00005',
                'cust_nama' => 'LEMAN',
                'cust_alamat' => 'SOKAWERA REMPOAH PWT',
                'cust_notelp' => '08154267828',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            346 =>
            array (
                'idcust' => 387,
                'cust_nomor' => 'MP00127',
                'cust_nama' => 'LEMAN',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '08122670709',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            347 =>
            array (
                'idcust' => 388,
                'cust_nomor' => 'MP00078',
                'cust_nama' => 'LEMBAH',
                'cust_alamat' => 'PATIKRAJA',
                'cust_notelp' => '081327205432',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            348 =>
            array (
                'idcust' => 389,
                'cust_nomor' => 'MP00490',
                'cust_nama' => 'LEONARDUS SUN',
                'cust_alamat' => 'JL DIRGANTARA 6 LEDUG',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            349 =>
            array (
                'idcust' => 390,
                'cust_nomor' => 'MP00058',
                'cust_nama' => 'LENDAM',
                'cust_alamat' => 'STASIUN GLOBAL',
                'cust_notelp' => '081804800244',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            350 =>
            array (
                'idcust' => 391,
                'cust_nomor' => 'MP00024',
                'cust_nama' => 'LENI/TIO',
                'cust_alamat' => 'KEDUNG MALANG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            351 =>
            array (
                'idcust' => 392,
                'cust_nomor' => 'MP00012',
                'cust_nama' => 'LIA',
                'cust_alamat' => 'JATILAWANG',
                'cust_notelp' => '08132746399',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            352 =>
            array (
                'idcust' => 393,
                'cust_nomor' => 'MP00068',
                'cust_nama' => 'LIA ',
                'cust_alamat' => 'PH PWT',
                'cust_notelp' => '081804804525',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            353 =>
            array (
                'idcust' => 394,
                'cust_nomor' => 'MP00470',
                'cust_nama' => 'LIA',
                'cust_alamat' => 'SOKARAJA PWT',
                'cust_notelp' => '081327302152',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            354 =>
            array (
                'idcust' => 395,
                'cust_nomor' => 'MP00098',
                'cust_nama' => 'LIA ',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '08562544478',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            355 =>
            array (
                'idcust' => 396,
                'cust_nomor' => 'MP00604',
                'cust_nama' => 'LINA MARLINA S SH',
                'cust_alamat' => 'BABAKAN ESTATE B17 KALIMANAH PBG',
                'cust_notelp' => '081742754222',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            356 =>
            array (
                'idcust' => 397,
                'cust_nomor' => 'MP00593',
                'cust_nama' => 'LUH ANI S',
                'cust_alamat' => 'JLN PRAMUKA 249 PWT',
                'cust_notelp' => '081327625416',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            357 =>
            array (
                'idcust' => 398,
                'cust_nomor' => 'MP00619',
                'cust_nama' => 'LANY',
                'cust_alamat' => 'PENATUSAN 19A PWT',
                'cust_notelp' => '08122779979',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            358 =>
            array (
                'idcust' => 399,
                'cust_nomor' => 'MP00055',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            359 =>
            array (
                'idcust' => 400,
                'cust_nomor' => 'MP00091',
                'cust_nama' => 'LINA/TRI',
                'cust_alamat' => 'KARANG MANGU PWT',
                'cust_notelp' => '081327068238',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            360 =>
            array (
                'idcust' => 401,
                'cust_nomor' => 'MP00283',
                'cust_nama' => 'LIS/DONI',
                'cust_alamat' => 'PERUM GRAHA MUSTIKA PWT',
                'cust_notelp' => '081327699963',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            361 =>
            array (
                'idcust' => 402,
                'cust_nomor' => 'MP00025',
                'cust_nama' => 'LUCKY/RIA',
                'cust_alamat' => 'UNSOED PWT',
                'cust_notelp' => '08886387099',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            362 =>
            array (
                'idcust' => 403,
                'cust_nomor' => 'MP00270',
                'cust_nama' => 'LUCKY',
                'cust_alamat' => 'JL SUPRIYADI',
                'cust_notelp' => '081327020875',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            363 =>
            array (
                'idcust' => 404,
                'cust_nomor' => 'MP00306',
                'cust_nama' => 'LUKI',
                'cust_alamat' => 'JL MARTADIREJA 2 PWT',
                'cust_notelp' => '08121563646',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            364 =>
            array (
                'idcust' => 405,
                'cust_nomor' => 'MP00032',
                'cust_nama' => 'LUTFI',
                'cust_alamat' => 'JL BANK PWT',
                'cust_notelp' => '0281 640260',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            365 =>
            array (
                'idcust' => 406,
                'cust_nomor' => 'MP00076',
                'cust_nama' => 'LUTFI',
                'cust_alamat' => 'OBAT',
                'cust_notelp' => '085220277463',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            366 =>
            array (
                'idcust' => 407,
                'cust_nomor' => 'MP00418',
                'cust_nama' => 'LINA ',
                'cust_alamat' => 'JL PAHLAWAN 99 KONVOI 28',
                'cust_notelp' => '085624145595',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            367 =>
            array (
                'idcust' => 408,
                'cust_nomor' => 'MP00371',
                'cust_nama' => 'LUTFI ',
                'cust_alamat' => 'MERSI',
                'cust_notelp' => '081804847565',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            368 =>
            array (
                'idcust' => 409,
                'cust_nomor' => 'MP00437',
                'cust_nama' => 'LENI',
                'cust_alamat' => 'PRAMUKA PWT',
                'cust_notelp' => '08156976352',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            369 =>
            array (
                'idcust' => 410,
                'cust_nomor' => 'MP00436',
                'cust_nama' => 'LOISE',
                'cust_alamat' => 'PRAMUKA PWT',
                'cust_notelp' => '08562638886',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            370 =>
            array (
                'idcust' => 411,
                'cust_nomor' => 'MP00433',
                'cust_nama' => 'LISA',
                'cust_alamat' => 'KALI PUTIH PWT',
                'cust_notelp' => '081327220399',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            371 =>
            array (
                'idcust' => 412,
                'cust_nomor' => 'MP00318',
                'cust_nama' => 'MAKBUD TUBUAN',
                'cust_alamat' => 'PAMIJEN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            372 =>
            array (
                'idcust' => 413,
                'cust_nomor' => 'MP00272',
                'cust_nama' => 'MANJA',
                'cust_alamat' => 'SOKARAJA PWT',
                'cust_notelp' => '08121570911',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            373 =>
            array (
                'idcust' => 414,
                'cust_nomor' => 'MP00300',
                'cust_nama' => 'MARTA',
                'cust_alamat' => 'JATI WINANGUN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            374 =>
            array (
                'idcust' => 415,
                'cust_nomor' => 'MP00576',
                'cust_nama' => 'MAHERU SOIM',
                'cust_alamat' => 'JL TRIMURTI PWT',
                'cust_notelp' => '085227442323',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            375 =>
            array (
                'idcust' => 416,
                'cust_nomor' => 'MP00267',
                'cust_nama' => 'MARTHIN/SISKA',
                'cust_alamat' => 'JL KAMPUS GRENDENG PWT',
                'cust_notelp' => '081808359720',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            376 =>
            array (
                'idcust' => 417,
                'cust_nomor' => 'MP00335',
                'cust_nama' => 'MAYA',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '081227555577',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            377 =>
            array (
                'idcust' => 418,
                'cust_nomor' => 'MP00354',
                'cust_nama' => 'MAYONG',
                'cust_alamat' => 'BUMIAYU',
                'cust_notelp' => '081514733185',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            378 =>
            array (
                'idcust' => 419,
                'cust_nomor' => 'MP00255',
                'cust_nama' => 'MELDA',
                'cust_alamat' => 'JL MOH IKHSAN KAUMAN PWT',
                'cust_notelp' => '081807002355',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            379 =>
            array (
                'idcust' => 420,
                'cust_nomor' => 'MP00236',
                'cust_nama' => 'MELI',
                'cust_alamat' => 'DI PANJAITAN PWT',
                'cust_notelp' => '08889695030',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            380 =>
            array (
                'idcust' => 421,
                'cust_nomor' => 'MP00537',
                'cust_nama' => 'MITA',
                'cust_alamat' => 'JL MAS CILIK 28 PWT',
                'cust_notelp' => '0281640648',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            381 =>
            array (
                'idcust' => 422,
                'cust_nomor' => 'MP00162',
                'cust_nama' => 'MISTI',
                'cust_alamat' => 'JL PAHLAWAN PWT',
                'cust_notelp' => '081327111176',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            382 =>
            array (
                'idcust' => 423,
                'cust_nomor' => 'MP00302',
                'cust_nama' => 'MOLINA',
                'cust_alamat' => 'JL KSATRIAN PWT',
                'cust_notelp' => '081548882987',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            383 =>
            array (
                'idcust' => 424,
                'cust_nomor' => 'MP00028',
                'cust_nama' => 'MOMON',
                'cust_alamat' => 'MERAPI PT',
                'cust_notelp' => '',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            384 =>
            array (
                'idcust' => 425,
                'cust_nomor' => 'MP00423',
                'cust_nama' => 'MUSTAFA',
                'cust_alamat' => 'JL GANG PUTRI PWT',
                'cust_notelp' => '08172826617',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            385 =>
            array (
                'idcust' => 426,
                'cust_nomor' => 'MP00373',
                'cust_nama' => 'MUSTOFA',
                'cust_alamat' => 'BANK MEGA',
                'cust_notelp' => '081327492586',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            386 =>
            array (
                'idcust' => 427,
                'cust_nomor' => 'MP00259',
                'cust_nama' => 'MUTIARA',
                'cust_alamat' => 'KOAS',
                'cust_notelp' => '085216059726',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            387 =>
            array (
                'idcust' => 428,
                'cust_nomor' => 'MP00435',
                'cust_nama' => 'MENIK',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081327544999',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            388 =>
            array (
                'idcust' => 429,
                'cust_nomor' => 'MP00444',
                'cust_nama' => 'MUHAMAD ABDULLAH',
                'cust_alamat' => 'KAUMAN LAMA PWT',
                'cust_notelp' => '08122993344',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            389 =>
            array (
                'idcust' => 430,
                'cust_nomor' => 'MP00440',
                'cust_nama' => 'NETI ANGGRAENI',
                'cust_alamat' => 'REJASARI/YASIKA',
                'cust_notelp' => '081548861491',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            390 =>
            array (
                'idcust' => 431,
                'cust_nomor' => 'MP00581',
                'cust_nama' => 'NANA',
                'cust_alamat' => 'JL PINUS II 99 TANJUNG ELOK PWT',
                'cust_notelp' => '7635586',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            391 =>
            array (
                'idcust' => 432,
                'cust_nomor' => 'MP00455',
                'cust_nama' => 'NANANG',
                'cust_alamat' => 'KRG KOBAR PWT',
                'cust_notelp' => '0281 628059',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            392 =>
            array (
                'idcust' => 433,
                'cust_nomor' => 'MP00002',
                'cust_nama' => 'NARIA',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '081328145175',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            393 =>
            array (
                'idcust' => 434,
                'cust_nomor' => 'MP00531',
                'cust_nama' => 'NIKEN',
                'cust_alamat' => 'JL PEJAGALAN 391 PWT',
                'cust_notelp' => '085643210600',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            394 =>
            array (
                'idcust' => 435,
                'cust_nomor' => 'MP00486',
                'cust_nama' => 'NUR EFENDI,ST',
                'cust_alamat' => 'JL PANCURAWIS G MERPATI PWT',
                'cust_notelp' => '081271582266',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            395 =>
            array (
                'idcust' => 436,
                'cust_nomor' => 'MP01601',
                'cust_nama' => 'DEDI  ',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '7624471',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            396 =>
            array (
                'idcust' => 437,
                'cust_nomor' => 'MP00045',
                'cust_nama' => 'NDARU',
                'cust_alamat' => 'DUKU WALUH',
                'cust_notelp' => '081327977752',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            397 =>
            array (
                'idcust' => 438,
                'cust_nomor' => 'MP00014',
                'cust_nama' => 'NDARI',
                'cust_alamat' => 'KARANG KLESEM PURWOKERTO',
                'cust_notelp' => '081327457458',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            398 =>
            array (
                'idcust' => 439,
                'cust_nomor' => 'MP00416',
                'cust_nama' => 'NDARU',
                'cust_alamat' => 'PERUM KARANG KLESEM PWT',
                'cust_notelp' => '08122722379',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            399 =>
            array (
                'idcust' => 440,
                'cust_nomor' => 'MP00196',
                'cust_nama' => 'NIA',
                'cust_alamat' => 'BANJAR NEGARA',
                'cust_notelp' => '08122777317',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            400 =>
            array (
                'idcust' => 441,
                'cust_nomor' => 'MP00061',
                'cust_nama' => 'NIKEN',
                'cust_alamat' => 'DR.ANGKA',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            401 =>
            array (
                'idcust' => 442,
                'cust_nomor' => 'MP00013',
                'cust_nama' => 'NINA',
                'cust_alamat' => 'JATILAWANG',
                'cust_notelp' => '081804765763',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            402 =>
            array (
                'idcust' => 443,
                'cust_nomor' => 'MP00054',
                'cust_nama' => 'NINA',
                'cust_alamat' => 'PASIR LOR KRG LEWAS PWT',
                'cust_notelp' => '08156979565',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            403 =>
            array (
                'idcust' => 444,
                'cust_nomor' => 'MP00121',
                'cust_nama' => 'NISA',
                'cust_alamat' => 'KRG.WANGKAL PWT',
                'cust_notelp' => '081802822004',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            404 =>
            array (
                'idcust' => 445,
                'cust_nomor' => 'MP00284',
                'cust_nama' => 'NITA',
                'cust_alamat' => 'PERUM TELIK PWT',
                'cust_notelp' => '085647781115',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            405 =>
            array (
                'idcust' => 446,
                'cust_nomor' => 'MP00112',
                'cust_nama' => 'NOVALINA',
                'cust_alamat' => 'NOTOG PATIKRAJA',
                'cust_notelp' => '081327392703',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            406 =>
            array (
                'idcust' => 447,
                'cust_nomor' => 'MP00062',
                'cust_nama' => 'NOVI',
                'cust_alamat' => 'HERI KOST PWT',
                'cust_notelp' => '085647808123',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            407 =>
            array (
                'idcust' => 448,
                'cust_nomor' => 'MP00326',
                'cust_nama' => 'NOVI ',
                'cust_alamat' => 'PABUARAN PURWOKERTO',
                'cust_notelp' => '08164286207',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            408 =>
            array (
                'idcust' => 449,
                'cust_nomor' => 'MP00381',
                'cust_nama' => 'NOVI',
                'cust_alamat' => 'REJASARI PURWOKERTO',
                'cust_notelp' => '08154283638',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            409 =>
            array (
                'idcust' => 450,
                'cust_nomor' => 'MP00169',
                'cust_nama' => 'OKI',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '08121566691',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            410 =>
            array (
                'idcust' => 451,
                'cust_nomor' => 'MP00070',
                'cust_nama' => 'OKVA',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '085647766746',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            411 =>
            array (
                'idcust' => 452,
                'cust_nomor' => 'MP00526',
                'cust_nama' => 'OSSA',
                'cust_alamat' => 'MANGUNJAYA 39A PWT',
                'cust_notelp' => '085647800883',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            412 =>
            array (
                'idcust' => 453,
                'cust_nomor' => 'MP00168',
                'cust_nama' => 'OLLSON',
                'cust_alamat' => 'MUTIARA PRATAMA',
                'cust_notelp' => '08122674034',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            413 =>
            array (
                'idcust' => 454,
                'cust_nomor' => 'MP00449',
                'cust_nama' => 'OMI',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '08164899521',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            414 =>
            array (
                'idcust' => 455,
                'cust_nomor' => 'MP00209',
                'cust_nama' => 'OMEN',
                'cust_alamat' => 'DR.ANGKA PWT',
                'cust_notelp' => '081327140666',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            415 =>
            array (
                'idcust' => 456,
                'cust_nomor' => 'MP00355',
                'cust_nama' => 'PRAKOSO',
                'cust_alamat' => 'GS SAGA KOBER PWT',
                'cust_notelp' => '08121580679',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            416 =>
            array (
                'idcust' => 457,
                'cust_nomor' => 'MP00041',
                'cust_nama' => 'PARAMITA',
                'cust_alamat' => 'PASAR PON PWT',
                'cust_notelp' => '085647671217',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            417 =>
            array (
                'idcust' => 458,
                'cust_nomor' => 'MP00053',
                'cust_nama' => 'IBU PARSIKUN',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081327326971',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            418 =>
            array (
                'idcust' => 459,
                'cust_nomor' => 'MP00101',
                'cust_nama' => 'PIPIT',
                'cust_alamat' => 'PATIKRAJA',
                'cust_notelp' => '081327982992',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            419 =>
            array (
                'idcust' => 460,
                'cust_nomor' => 'MP00163',
                'cust_nama' => 'PIPIT',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '08122965653',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            420 =>
            array (
                'idcust' => 461,
                'cust_nomor' => 'MP01602',
                'cust_nama' => 'FETI',
                'cust_alamat' => 'KOL SUGIRI 56 A PWT',
                'cust_notelp' => '639385',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            421 =>
            array (
                'idcust' => 462,
                'cust_nomor' => 'MP00133',
                'cust_nama' => 'PONI',
                'cust_alamat' => 'SUHARSO PWT',
                'cust_notelp' => '081327216042',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            422 =>
            array (
                'idcust' => 463,
                'cust_nomor' => 'mp01603',
                'cust_nama' => 'bangkit',
                'cust_alamat' => 'ARCA WINANGUN',
                'cust_notelp' => '0811261500',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            423 =>
            array (
                'idcust' => 464,
                'cust_nomor' => 'MP00386',
                'cust_nama' => 'POPY',
                'cust_alamat' => 'GRIYA SATRIA BLOK 4',
                'cust_notelp' => '08172820345',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            424 =>
            array (
                'idcust' => 465,
                'cust_nomor' => 'MP00235',
                'cust_nama' => 'POPO',
                'cust_alamat' => 'ODO KLONYO',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            425 =>
            array (
                'idcust' => 466,
                'cust_nomor' => 'MP00039',
                'cust_nama' => 'PRISKA',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '085227265651',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            426 =>
            array (
                'idcust' => 467,
                'cust_nomor' => 'MP00474',
                'cust_nama' => 'PUTRI',
                'cust_alamat' => 'WARGA BAKTI',
                'cust_notelp' => '081327068962',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            427 =>
            array (
                'idcust' => 468,
                'cust_nomor' => 'MP00329',
                'cust_nama' => 'PUPUT',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '081804844477',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            428 =>
            array (
                'idcust' => 469,
                'cust_nomor' => 'MP00338',
                'cust_nama' => 'PURNOMO',
                'cust_alamat' => 'GRIYA SATRIA BANTAR SOKA PWT',
                'cust_notelp' => '085647788149',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            429 =>
            array (
                'idcust' => 470,
                'cust_nomor' => 'MP00529',
                'cust_nama' => 'PHIA',
                'cust_alamat' => 'KARMEL 10 PWT',
                'cust_notelp' => '08885160387',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            430 =>
            array (
                'idcust' => 471,
                'cust_nomor' => 'MP00536',
                'cust_nama' => 'PANCA',
                'cust_alamat' => 'SOKARAJA II PWT 53115',
                'cust_notelp' => '081542996222',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            431 =>
            array (
                'idcust' => 472,
                'cust_nomor' => 'MP00295',
                'cust_nama' => 'PUTUT',
                'cust_alamat' => 'PORKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            432 =>
            array (
                'idcust' => 473,
                'cust_nomor' => 'MP00420',
                'cust_nama' => 'RARE',
                'cust_alamat' => 'JATIWINANGUN 57',
                'cust_notelp' => '081327377771',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            433 =>
            array (
                'idcust' => 474,
                'cust_nomor' => 'MP00130',
                'cust_nama' => 'RAGIL',
                'cust_alamat' => 'GRIYA SATRIA',
                'cust_notelp' => '085227443458',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            434 =>
            array (
                'idcust' => 475,
                'cust_nomor' => 'MP00237',
                'cust_nama' => 'RAHMA ',
                'cust_alamat' => 'KRG,KOBAR PWT',
                'cust_notelp' => '081542916474',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            435 =>
            array (
                'idcust' => 476,
                'cust_nomor' => 'MP00303',
                'cust_nama' => 'RARAS',
                'cust_alamat' => 'BANTAR SOKA PWT',
                'cust_notelp' => '081804804723',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            436 =>
            array (
                'idcust' => 477,
                'cust_nomor' => 'MP00178',
                'cust_nama' => 'RATIH',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '081327438899',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            437 =>
            array (
                'idcust' => 478,
                'cust_nomor' => 'MP00348',
                'cust_nama' => 'RANTI',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '0816699982',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            438 =>
            array (
                'idcust' => 479,
                'cust_nomor' => 'MP00352',
                'cust_nama' => 'REDY AKUNTANSI',
                'cust_alamat' => 'UNSOED GUNUNG MURIA PWT',
                'cust_notelp' => '081327953555',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            439 =>
            array (
                'idcust' => 480,
                'cust_nomor' => 'MP00342',
                'cust_nama' => 'RENI',
                'cust_alamat' => 'PENATUSAN',
                'cust_notelp' => '085227165000',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            440 =>
            array (
                'idcust' => 481,
                'cust_nomor' => 'MP00027',
                'cust_nama' => 'RERE',
                'cust_alamat' => 'DR.ANGKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            441 =>
            array (
                'idcust' => 482,
                'cust_nomor' => 'MP00499',
                'cust_nama' => 'RICKY ARMAYUDHA',
                'cust_alamat' => 'JL.SOKAJATI PWT',
                'cust_notelp' => '631346',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            442 =>
            array (
                'idcust' => 483,
                'cust_nomor' => 'MP00534',
                'cust_nama' => 'TAUFAN YOGA HIMAWAN',
                'cust_alamat' => 'PERUM BERKOH PWT',
                'cust_notelp' => '08156679335',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            443 =>
            array (
                'idcust' => 484,
                'cust_nomor' => 'MP00008',
                'cust_nama' => 'RETNO',
                'cust_alamat' => 'DR.ANGKA PWT',
                'cust_notelp' => '081548861432',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            444 =>
            array (
                'idcust' => 485,
                'cust_nomor' => 'MP00132',
                'cust_nama' => 'REZA',
                'cust_alamat' => 'FAHRENHEIT OBAT',
                'cust_notelp' => '081548100080',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            445 =>
            array (
                'idcust' => 486,
                'cust_nomor' => 'MP00287',
                'cust_nama' => 'RIA',
                'cust_alamat' => 'JL.KH WAHID',
                'cust_notelp' => '085227399899',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            446 =>
            array (
                'idcust' => 487,
                'cust_nomor' => 'MP00206',
                'cust_nama' => 'RIAN ',
                'cust_alamat' => 'BUMIAYU',
                'cust_notelp' => '081578018651',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            447 =>
            array (
                'idcust' => 488,
                'cust_nomor' => 'MP00263',
                'cust_nama' => 'RIAN',
                'cust_alamat' => 'PERMATA HIJAU',
                'cust_notelp' => '640740',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            448 =>
            array (
                'idcust' => 489,
                'cust_nomor' => 'MP00310',
                'cust_nama' => 'RIDLO',
                'cust_alamat' => 'BANCAR KEMBAR',
                'cust_notelp' => '085227226364',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            449 =>
            array (
                'idcust' => 490,
                'cust_nomor' => 'MP00597',
                'cust_nama' => 'RAHMAT HIDAYAT,SH',
                'cust_alamat' => 'LIMAS PERMAI J 10',
                'cust_notelp' => '081520932726',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            450 =>
            array (
                'idcust' => 491,
                'cust_nomor' => 'MP00595',
                'cust_nama' => 'ROMMY',
                'cust_alamat' => 'JL GNG CREME 21 PABUARAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            451 =>
            array (
                'idcust' => 492,
                'cust_nomor' => 'MP00038',
                'cust_nama' => 'RIFAI',
                'cust_alamat' => 'BUMIAYU',
                'cust_notelp' => '081562493743',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            452 =>
            array (
                'idcust' => 493,
                'cust_nomor' => 'MP00146',
                'cust_nama' => 'RIFAI',
                'cust_alamat' => 'PERUM LEDUG PWT',
                'cust_notelp' => '081542012730',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            453 =>
            array (
                'idcust' => 494,
                'cust_nomor' => 'MP00043',
                'cust_nama' => 'RINA',
                'cust_alamat' => 'REJASARI PWT',
                'cust_notelp' => '7630870',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            454 =>
            array (
                'idcust' => 495,
                'cust_nomor' => 'MP00579',
            'cust_nama' => 'RAMADHANI E W(WULAN)',
                'cust_alamat' => 'JL KALPATARU XI 80 PURWOSARI',
                'cust_notelp' => '081327352008',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            455 =>
            array (
                'idcust' => 496,
                'cust_nomor' => 'MP00585',
                'cust_nama' => 'RUSTAM EFFENDY',
                'cust_alamat' => 'JL HR BUNYAMIN 43',
                'cust_notelp' => '08122781648',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            456 =>
            array (
                'idcust' => 497,
                'cust_nomor' => 'MP00563',
                'cust_nama' => 'RANI',
                'cust_alamat' => 'JL SUPARNO 93 PWT',
                'cust_notelp' => '081327684000',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            457 =>
            array (
                'idcust' => 498,
                'cust_nomor' => 'MP00565',
                'cust_nama' => 'RENDI YOSO A',
                'cust_alamat' => 'JL CERMAI 28A REJASARI PWT BRT',
                'cust_notelp' => '085647777668',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            458 =>
            array (
                'idcust' => 499,
                'cust_nomor' => 'MP00543',
                'cust_nama' => 'REVI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            459 =>
            array (
                'idcust' => 500,
                'cust_nomor' => 'MP00400',
                'cust_nama' => 'RERE',
                'cust_alamat' => 'LIMAS PERMAI PWT',
                'cust_notelp' => '085647800940',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            460 =>
            array (
                'idcust' => 501,
                'cust_nomor' => 'MP00425',
                'cust_nama' => 'RUBEN',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '081327459000',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            461 =>
            array (
                'idcust' => 502,
                'cust_nomor' => 'MP00469',
                'cust_nama' => 'RIRIN',
                'cust_alamat' => 'PALEM INDAH B1 45 PWT',
                'cust_notelp' => '08122908364',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            462 =>
            array (
                'idcust' => 503,
                'cust_nomor' => 'MP00404',
                'cust_nama' => 'RIAN',
                'cust_alamat' => 'PH PWT',
                'cust_notelp' => '081542988951',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            463 =>
            array (
                'idcust' => 504,
                'cust_nomor' => 'MP00151',
                'cust_nama' => 'RISKA',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '0281 633977',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            464 =>
            array (
                'idcust' => 505,
                'cust_nomor' => 'MP00297',
                'cust_nama' => 'ROMI',
                'cust_alamat' => 'JL  KAMPUS GRENDENG PWT',
                'cust_notelp' => '085227450004',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            465 =>
            array (
                'idcust' => 506,
                'cust_nomor' => 'MP00113',
                'cust_nama' => 'ROSSA',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '081327345910',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            466 =>
            array (
                'idcust' => 507,
                'cust_nomor' => 'MP00210',
                'cust_nama' => 'ROY',
                'cust_alamat' => 'DI PANJAITAN PWT',
                'cust_notelp' => '081327298456',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            467 =>
            array (
                'idcust' => 508,
                'cust_nomor' => 'MP00249',
                'cust_nama' => 'RUBY',
                'cust_alamat' => 'SITAPEN PWT',
                'cust_notelp' => '08156973778',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            468 =>
            array (
                'idcust' => 509,
                'cust_nomor' => 'MP00337',
                'cust_nama' => 'RULI',
                'cust_alamat' => 'GUNUNG SLAMET PWT',
                'cust_notelp' => '085640044059',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            469 =>
            array (
                'idcust' => 510,
                'cust_nomor' => 'MP00135',
                'cust_nama' => 'RULI',
                'cust_alamat' => 'GANDASULI KR PUCUNG PWT',
                'cust_notelp' => '02817635005',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            470 =>
            array (
                'idcust' => 511,
                'cust_nomor' => 'MP00457',
                'cust_nama' => 'ROHMAN',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '7616375',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            471 =>
            array (
                'idcust' => 512,
                'cust_nomor' => 'MP00464',
                'cust_nama' => 'RUDI HARTONO',
                'cust_alamat' => 'KARANG SARI PWT',
                'cust_notelp' => '081542993651',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            472 =>
            array (
                'idcust' => 513,
                'cust_nomor' => 'MP00417',
                'cust_nama' => 'RUSMANTO',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '081326134708',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            473 =>
            array (
                'idcust' => 514,
                'cust_nomor' => 'MP00198',
                'cust_nama' => 'SABRINA',
                'cust_alamat' => 'CILONGOK PWT',
                'cust_notelp' => '0281 656382',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            474 =>
            array (
                'idcust' => 515,
                'cust_nomor' => 'MP00316',
                'cust_nama' => 'SELVI',
                'cust_alamat' => 'BATURADEN PWT',
                'cust_notelp' => '081327664407',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            475 =>
            array (
                'idcust' => 516,
                'cust_nomor' => 'MP00550',
                'cust_nama' => 'SENLY',
                'cust_alamat' => 'KR SALAM PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            476 =>
            array (
                'idcust' => 517,
                'cust_nomor' => 'MP00291',
                'cust_nama' => 'SENDI',
                'cust_alamat' => 'JL GUNUNG SLAMET PWT',
                'cust_notelp' => '085220074470',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            477 =>
            array (
                'idcust' => 518,
                'cust_nomor' => 'MP00617',
                'cust_nama' => 'SHINTA',
                'cust_alamat' => 'KR WANGKAL PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            478 =>
            array (
                'idcust' => 519,
                'cust_nomor' => 'MP00601',
                'cust_nama' => 'SINGGIH',
                'cust_alamat' => 'KRG WANGKAL PWT',
                'cust_notelp' => '08163689163',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            479 =>
            array (
                'idcust' => 520,
                'cust_nomor' => 'MP00607',
                'cust_nama' => 'SETIO RINI S',
                'cust_alamat' => 'JL SITAPEN RT7/V KRANJI PWT TIMUR',
                'cust_notelp' => '081327288114',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            480 =>
            array (
                'idcust' => 521,
                'cust_nomor' => 'MP00380',
                'cust_nama' => 'SHASHA',
                'cust_alamat' => 'KOBER GG CEMPAKA PWT',
                'cust_notelp' => '0281 628340',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            481 =>
            array (
                'idcust' => 522,
                'cust_nomor' => 'MP00309',
                'cust_nama' => 'SIHOMBING',
                'cust_alamat' => 'JL GATOT SUBROTO ',
                'cust_notelp' => '081573525252',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            482 =>
            array (
                'idcust' => 523,
                'cust_nomor' => 'MP00109',
                'cust_nama' => 'SIMOH',
                'cust_alamat' => 'KAUMAN LAMA PWT',
                'cust_notelp' => '08122993344',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            483 =>
            array (
                'idcust' => 524,
                'cust_nomor' => 'MP00254',
                'cust_nama' => 'SINGGIH',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '08122722770',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            484 =>
            array (
                'idcust' => 525,
                'cust_nomor' => 'MP00077',
                'cust_nama' => 'SINTA',
                'cust_alamat' => 'KARANG PUCUNG PWT',
                'cust_notelp' => '08122993871',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            485 =>
            array (
                'idcust' => 526,
                'cust_nomor' => 'MP00370',
                'cust_nama' => 'SIGIT',
                'cust_alamat' => 'ADIPURA RAYA',
                'cust_notelp' => '7641875',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            486 =>
            array (
                'idcust' => 527,
                'cust_nomor' => 'MP00137',
                'cust_nama' => 'SINTA',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '085647708599',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            487 =>
            array (
                'idcust' => 528,
                'cust_nomor' => 'MP00473',
                'cust_nama' => 'SARI',
                'cust_alamat' => 'AHMAD YANI PWT',
                'cust_notelp' => '081327198887',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            488 =>
            array (
                'idcust' => 529,
                'cust_nomor' => 'MP00461',
                'cust_nama' => 'SARI',
                'cust_alamat' => 'BANJAR KEMBAR PWT',
                'cust_notelp' => '081802827494',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            489 =>
            array (
                'idcust' => 530,
                'cust_nomor' => 'MP00465',
                'cust_nama' => 'RUBOWO SULISTYO/SULIS',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '0281 621707',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            490 =>
            array (
                'idcust' => 531,
                'cust_nomor' => 'MP00189',
                'cust_nama' => 'SITI',
                'cust_alamat' => 'NOTOG',
                'cust_notelp' => '081327668427',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            491 =>
            array (
                'idcust' => 532,
                'cust_nomor' => 'MP00571',
                'cust_nama' => 'SOBARI',
                'cust_alamat' => 'MREBET',
                'cust_notelp' => '0281 7634167',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            492 =>
            array (
                'idcust' => 533,
                'cust_nomor' => 'MP00558',
                'cust_nama' => 'SUTRISNO',
                'cust_alamat' => 'JL A YANI 59',
                'cust_notelp' => '081327151364',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            493 =>
            array (
                'idcust' => 534,
                'cust_nomor' => 'MP00343',
                'cust_nama' => 'SONO',
                'cust_alamat' => 'TANJUNG RT4/3 PWT',
                'cust_notelp' => '081542621143',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            494 =>
            array (
                'idcust' => 535,
                'cust_nomor' => 'MP00411',
                'cust_nama' => 'SONY',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '081327070320',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            495 =>
            array (
                'idcust' => 536,
                'cust_nomor' => 'MP00438',
                'cust_nama' => 'SANTI',
                'cust_alamat' => 'KARANG KLESEM PWT',
                'cust_notelp' => '7604560',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            496 =>
            array (
                'idcust' => 537,
                'cust_nomor' => 'MP00430',
                'cust_nama' => 'SONY',
                'cust_alamat' => 'PASIR PWT',
                'cust_notelp' => '0281 639274',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            497 =>
            array (
                'idcust' => 538,
                'cust_nomor' => 'MP00448',
                'cust_nama' => 'SUS',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227073013',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            498 =>
            array (
                'idcust' => 539,
                'cust_nomor' => 'MP00195',
                'cust_nama' => 'SUGENG',
                'cust_alamat' => 'KARANG LEWAS PWT',
                'cust_notelp' => '081548822930',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            499 =>
            array (
                'idcust' => 540,
                'cust_nomor' => 'MP00340',
                'cust_nama' => 'SUKIRNO',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '08170886304',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
        ));
        \DB::table('mgh_customer')->insert(array (
            0 =>
            array (
                'idcust' => 541,
                'cust_nomor' => 'MP00161',
                'cust_nama' => 'SUSI',
                'cust_alamat' => 'RADAR BANYUMAS PWT',
                'cust_notelp' => '08156973766',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            1 =>
            array (
                'idcust' => 542,
                'cust_nomor' => 'MP00365',
                'cust_nama' => 'SUTRISNO',
                'cust_alamat' => 'GS BANTAR SOKA PWT',
                'cust_notelp' => '081327008860',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            2 =>
            array (
                'idcust' => 543,
                'cust_nomor' => 'MP00506',
                'cust_nama' => 'SUROSO',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '762660',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            3 =>
            array (
                'idcust' => 544,
                'cust_nomor' => 'MP00336',
                'cust_nama' => 'SUTAMTO',
                'cust_alamat' => 'SKLH TEKHNIK',
                'cust_notelp' => '0281 7631838',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            4 =>
            array (
                'idcust' => 545,
                'cust_nomor' => 'MP00009',
                'cust_nama' => 'SRI HARYANI',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '081314917853',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            5 =>
            array (
                'idcust' => 546,
                'cust_nomor' => 'MP00452',
                'cust_nama' => 'TARI',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '085227412987',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            6 =>
            array (
                'idcust' => 547,
                'cust_nomor' => 'MP00451',
                'cust_nama' => 'TIKA',
                'cust_alamat' => 'SALON',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            7 =>
            array (
                'idcust' => 548,
                'cust_nomor' => 'MP00033',
                'cust_nama' => 'TATA-FIAN',
                'cust_alamat' => 'JL PINUS 2 112/B TANJUNG ELOK',
                'cust_notelp' => '081326926665',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            8 =>
            array (
                'idcust' => 549,
                'cust_nomor' => 'MP00064',
                'cust_nama' => 'TAFRIDA',
                'cust_alamat' => 'ARCA WINANGUN PWT',
                'cust_notelp' => '085225375096',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            9 =>
            array (
                'idcust' => 550,
                'cust_nomor' => 'MP00561',
                'cust_nama' => 'TIA/RANI AGUSTIN',
                'cust_alamat' => 'RT 01/1V SOKARAJA TENGAH',
                'cust_notelp' => '0281 694554',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            10 =>
            array (
                'idcust' => 551,
                'cust_nomor' => 'MP00154',
                'cust_nama' => 'TANTI',
                'cust_alamat' => 'MUTIARA PRATAMA',
                'cust_notelp' => '0818924211',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            11 =>
            array (
                'idcust' => 552,
                'cust_nomor' => 'MP00610',
                'cust_nama' => 'TRIS YUHANA T',
                'cust_alamat' => 'JL KOBER GG KENANGA 22 RT4/2 PWT BRT',
                'cust_notelp' => '085227459914',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            12 =>
            array (
                'idcust' => 553,
                'cust_nomor' => 'MP00587',
                'cust_nama' => 'TAUKHID',
                'cust_alamat' => 'JL SUTOYO GGIII/21',
                'cust_notelp' => '627175',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            13 =>
            array (
                'idcust' => 554,
                'cust_nomor' => 'MP00575',
                'cust_nama' => 'TEGUH LISTIONO',
                'cust_alamat' => 'JL SOEPARNO 27',
                'cust_notelp' => '0281 7641980',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            14 =>
            array (
                'idcust' => 555,
                'cust_nomor' => 'MP00044',
                'cust_nama' => 'TEDDY',
                'cust_alamat' => 'KARANG TURI',
                'cust_notelp' => '0281 7616728',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            15 =>
            array (
                'idcust' => 556,
                'cust_nomor' => 'MP00155',
                'cust_nama' => 'TEGUH',
                'cust_alamat' => 'PEMDA',
                'cust_notelp' => '7634921',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            16 =>
            array (
                'idcust' => 557,
                'cust_nomor' => 'MP00102',
                'cust_nama' => 'TIA',
                'cust_alamat' => 'PERUM DEKATE',
                'cust_notelp' => '081327601500',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            17 =>
            array (
                'idcust' => 558,
                'cust_nomor' => 'MP00049',
                'cust_nama' => 'TIARA',
                'cust_alamat' => 'JATI WINANGUN',
                'cust_notelp' => '085227057234',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            18 =>
            array (
                'idcust' => 559,
                'cust_nomor' => 'MP00247',
                'cust_nama' => 'TIAS',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '081327179992',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            19 =>
            array (
                'idcust' => 560,
                'cust_nomor' => 'MP00016',
                'cust_nama' => 'TIKA',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '08158329310',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            20 =>
            array (
                'idcust' => 561,
                'cust_nomor' => 'MP00356',
                'cust_nama' => 'TINA',
                'cust_alamat' => 'PH',
                'cust_notelp' => '0281 637722',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            21 =>
            array (
                'idcust' => 562,
                'cust_nomor' => 'MP00364',
                'cust_nama' => 'TUSI ',
                'cust_alamat' => 'FISIP UNSOED',
                'cust_notelp' => '08122675276',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            22 =>
            array (
                'idcust' => 563,
                'cust_nomor' => 'MP00018',
                'cust_nama' => 'TIO',
                'cust_alamat' => 'INDO FARMA',
                'cust_notelp' => '08121594315',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            23 =>
            array (
                'idcust' => 564,
                'cust_nomor' => 'MP00468',
                'cust_nama' => 'TIA',
                'cust_alamat' => 'PERUM TELUK',
                'cust_notelp' => '7603831',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            24 =>
            array (
                'idcust' => 565,
                'cust_nomor' => 'MP00471',
                'cust_nama' => 'TANTI',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '0281 621736',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            25 =>
            array (
                'idcust' => 566,
                'cust_nomor' => 'MP00150',
                'cust_nama' => 'TISA',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '085647745354',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            26 =>
            array (
                'idcust' => 567,
                'cust_nomor' => 'MP00313',
                'cust_nama' => 'TITO',
                'cust_alamat' => 'KARANG PUCUNG',
                'cust_notelp' => '08156058341',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            27 =>
            array (
                'idcust' => 568,
                'cust_nomor' => 'MP00023',
                'cust_nama' => 'TIUT/RENDRA',
                'cust_alamat' => 'PENATUSAN PWT',
                'cust_notelp' => '0281 636822',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            28 =>
            array (
                'idcust' => 569,
                'cust_nomor' => 'MP00347',
                'cust_nama' => 'TIWI',
                'cust_alamat' => 'JL SUKAJATI PWT',
                'cust_notelp' => '08156979449',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            29 =>
            array (
                'idcust' => 570,
                'cust_nomor' => 'MP00134',
                'cust_nama' => 'TONI ',
                'cust_alamat' => 'PADANG',
                'cust_notelp' => '081327682857',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            30 =>
            array (
                'idcust' => 571,
                'cust_nomor' => 'MP00288',
                'cust_nama' => 'TOTAL',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            31 =>
            array (
                'idcust' => 572,
                'cust_nomor' => 'MP00293',
                'cust_nama' => 'TOTO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227345557',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            32 =>
            array (
                'idcust' => 573,
                'cust_nomor' => 'MP00056',
                'cust_nama' => 'TRI HARYADI/DIAN',
                'cust_alamat' => 'KALI BENER PWT',
                'cust_notelp' => ' 081327685060',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            33 =>
            array (
                'idcust' => 574,
                'cust_nomor' => 'MP00208',
                'cust_nama' => 'TRIYONO',
                'cust_alamat' => 'LEDUG PWT',
                'cust_notelp' => '08122993566',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            34 =>
            array (
                'idcust' => 575,
                'cust_nomor' => 'MP00125',
                'cust_nama' => 'TUTI',
                'cust_alamat' => 'JENDRAL SUDIRMAN BERKOH PWT',
                'cust_notelp' => '081327978063',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            35 =>
            array (
                'idcust' => 576,
                'cust_nomor' => 'MP00521',
                'cust_nama' => 'TYA',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '081327719010',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            36 =>
            array (
                'idcust' => 577,
                'cust_nomor' => 'MP00466',
                'cust_nama' => 'UNI',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            37 =>
            array (
                'idcust' => 578,
                'cust_nomor' => 'MP00075',
                'cust_nama' => 'UCUP',
                'cust_alamat' => 'PSBS',
                'cust_notelp' => '085647661146',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            38 =>
            array (
                'idcust' => 579,
                'cust_nomor' => 'MP00057',
                'cust_nama' => 'UGI',
                'cust_alamat' => 'SOLO',
                'cust_notelp' => '0271 7049970',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            39 =>
            array (
                'idcust' => 580,
                'cust_nomor' => 'MP00108',
                'cust_nama' => 'UPIT',
                'cust_alamat' => 'MARTADIREJA PWT',
                'cust_notelp' => '081542998761',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            40 =>
            array (
                'idcust' => 581,
                'cust_nomor' => 'MP00280',
                'cust_nama' => 'UTE',
                'cust_alamat' => 'JL PALEM BLOK B1 39 PWT',
                'cust_notelp' => '08121563986',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            41 =>
            array (
                'idcust' => 582,
                'cust_nomor' => 'MP00248',
                'cust_nama' => 'VERONICA',
                'cust_alamat' => 'AHMAD YANI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            42 =>
            array (
                'idcust' => 583,
                'cust_nomor' => 'MP00089',
                'cust_nama' => 'VILMA',
                'cust_alamat' => 'HR BUNYAMIN 152',
                'cust_notelp' => '081802898208',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            43 =>
            array (
                'idcust' => 584,
                'cust_nomor' => 'MP00321',
                'cust_nama' => 'VINCENT',
                'cust_alamat' => 'KAUMAN PWT',
                'cust_notelp' => '7636100',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            44 =>
            array (
                'idcust' => 585,
                'cust_nomor' => 'MP00413',
                'cust_nama' => 'VICKY',
                'cust_alamat' => 'UNSOED',
                'cust_notelp' => '085226929136',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            45 =>
            array (
                'idcust' => 586,
                'cust_nomor' => 'MP00516',
                'cust_nama' => 'VIRGO',
                'cust_alamat' => 'AHMAD YANI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            46 =>
            array (
                'idcust' => 587,
                'cust_nomor' => 'MP00197',
                'cust_nama' => 'VIRLI',
                'cust_alamat' => 'KARANG ANJING PWT',
                'cust_notelp' => '0281 631920',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            47 =>
            array (
                'idcust' => 588,
                'cust_nomor' => 'MP00111',
                'cust_nama' => 'VITA',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081327311011',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            48 =>
            array (
                'idcust' => 589,
                'cust_nomor' => 'MP00170',
                'cust_nama' => 'VITA',
                'cust_alamat' => 'MARTADIREJA III PWT',
                'cust_notelp' => '085227041717',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            49 =>
            array (
                'idcust' => 590,
                'cust_nomor' => 'MP00239',
                'cust_nama' => 'WAHYONO',
                'cust_alamat' => 'CILONGOK PWT',
                'cust_notelp' => '081327479034',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            50 =>
            array (
                'idcust' => 591,
                'cust_nomor' => 'MP00507',
                'cust_nama' => 'WAHYU',
                'cust_alamat' => 'SIDAKANGEN PURBALINGGA',
                'cust_notelp' => '08122754577',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            51 =>
            array (
                'idcust' => 592,
                'cust_nomor' => 'MP00505',
                'cust_nama' => 'WAHYU',
                'cust_alamat' => 'COUNTER SBLH',
                'cust_notelp' => '081542901414',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            52 =>
            array (
                'idcust' => 593,
                'cust_nomor' => 'MP00554',
                'cust_nama' => 'WAHYU GAZLE',
                'cust_alamat' => 'JL KOBER 17 RT01/01 PWT',
                'cust_notelp' => '0281 7629283',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            53 =>
            array (
                'idcust' => 594,
                'cust_nomor' => 'MP00553',
                'cust_nama' => 'WIWIK SETYOWATI',
                'cust_alamat' => 'JL A JAELANI B4 KR WANGKAL PWT UTRA',
                'cust_notelp' => '0281 7608521',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            54 =>
            array (
                'idcust' => 595,
                'cust_nomor' => 'MP00040',
                'cust_nama' => 'WATI',
                'cust_alamat' => 'JL DIRGANTARA LEDUG PWT',
                'cust_notelp' => '085227226925',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            55 =>
            array (
                'idcust' => 596,
                'cust_nomor' => 'MP00621',
                'cust_nama' => 'WILU',
                'cust_alamat' => 'KENITEN KDG BANTENG',
                'cust_notelp' => '7670116',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            56 =>
            array (
                'idcust' => 597,
                'cust_nomor' => 'MP00093',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '7617250',
                'cust_date' => '2007-03-30',
                'cust_author' => 'admin',
            ),
            57 =>
            array (
                'idcust' => 598,
                'cust_nomor' => 'MP00456',
                'cust_nama' => 'WARSENO',
                'cust_alamat' => 'DR ANGKA 42 PWT',
                'cust_notelp' => '081548874888',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            58 =>
            array (
                'idcust' => 599,
                'cust_nomor' => 'MP00207',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '0281 624485',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            59 =>
            array (
                'idcust' => 600,
                'cust_nomor' => 'MP00584',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'JL BOBOSAN II RT6/1 PURWANEGARA PWT',
                'cust_notelp' => '0281 625546',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            60 =>
            array (
                'idcust' => 601,
                'cust_nomor' => 'MP00443',
                'cust_nama' => 'WIWIN ',
                'cust_alamat' => 'ISDIMAN 70 PWT',
                'cust_notelp' => '08156536911',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            61 =>
            array (
                'idcust' => 602,
                'cust_nomor' => 'MP00395',
                'cust_nama' => 'WENING',
                'cust_alamat' => 'GRIYA SATRIA II',
                'cust_notelp' => '085647711611',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            62 =>
            array (
                'idcust' => 603,
                'cust_nomor' => 'MP00307',
                'cust_nama' => 'WIDI',
                'cust_alamat' => 'MARTADIREJA ',
                'cust_notelp' => '081327570001',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            63 =>
            array (
                'idcust' => 604,
                'cust_nomor' => 'MP00331',
                'cust_nama' => 'WIDORETNO',
                'cust_alamat' => 'AJIBARANG',
                'cust_notelp' => '081548860078',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            64 =>
            array (
                'idcust' => 605,
                'cust_nomor' => 'MP00406',
                'cust_nama' => 'WENDI ',
                'cust_alamat' => 'KALI KIDANG',
                'cust_notelp' => '081327778500',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            65 =>
            array (
                'idcust' => 606,
                'cust_nomor' => 'MP00171',
                'cust_nama' => 'WIDYA',
                'cust_alamat' => 'MARTADIREJA 3 PWT',
                'cust_notelp' => '081325758455',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            66 =>
            array (
                'idcust' => 607,
                'cust_nomor' => 'MP00097',
                'cust_nama' => 'WINDA',
                'cust_alamat' => 'OUTLET LIMITED',
                'cust_notelp' => '081327771826',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            67 =>
            array (
                'idcust' => 608,
                'cust_nomor' => 'MP00214',
                'cust_nama' => 'WINDA ',
                'cust_alamat' => 'UNSOED EKONOMI',
                'cust_notelp' => '081324220094',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            68 =>
            array (
                'idcust' => 609,
                'cust_nomor' => 'MP00164',
                'cust_nama' => 'WISNU',
                'cust_alamat' => 'JATI WINANGUN PWT',
                'cust_notelp' => '085652765060',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            69 =>
            array (
                'idcust' => 610,
                'cust_nomor' => 'MP00421',
                'cust_nama' => 'WIDODO',
                'cust_alamat' => 'MANGUN JAYA 56 PWT',
                'cust_notelp' => '7636674',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            70 =>
            array (
                'idcust' => 611,
                'cust_nomor' => 'MP00301',
                'cust_nama' => 'WIWID',
                'cust_alamat' => 'JL PEMUDA PWT',
                'cust_notelp' => '081327689888',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            71 =>
            array (
                'idcust' => 612,
                'cust_nomor' => 'MP00384',
                'cust_nama' => 'WIWIT',
                'cust_alamat' => 'MARTADIREJA I PWT',
                'cust_notelp' => '081802813759',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            72 =>
            array (
                'idcust' => 613,
                'cust_nomor' => 'MP00084',
                'cust_nama' => 'YANTI/IBNU',
                'cust_alamat' => 'BEIJI PWT',
                'cust_notelp' => '085227183105',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            73 =>
            array (
                'idcust' => 614,
                'cust_nomor' => 'MP00304',
                'cust_nama' => 'YANUAR',
                'cust_alamat' => 'PERUM PASIR INDAH PWT',
                'cust_notelp' => '0281 623046',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            74 =>
            array (
                'idcust' => 615,
                'cust_nomor' => 'MP00568',
                'cust_nama' => 'YOGI',
                'cust_alamat' => 'JL RAYA SIDABOA 4',
                'cust_notelp' => '081327521000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            75 =>
            array (
                'idcust' => 616,
                'cust_nomor' => 'MP00487',
                'cust_nama' => 'YUDHIS',
                'cust_alamat' => 'JL JATWIN 57',
                'cust_notelp' => '7615665',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            76 =>
            array (
                'idcust' => 617,
                'cust_nomor' => 'MP00480',
                'cust_nama' => 'YOGI',
                'cust_alamat' => 'KEMBARAN PURBALINGGA',
                'cust_notelp' => '0281 894076',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            77 =>
            array (
                'idcust' => 618,
                'cust_nomor' => 'MP00485',
                'cust_nama' => 'YOYO KOESWAYA',
                'cust_alamat' => 'JL TIPAR BARU 24 KRANJI',
                'cust_notelp' => '08122994093',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            78 =>
            array (
                'idcust' => 619,
                'cust_nomor' => 'MP00488',
                'cust_nama' => 'YUS MIRANTI',
                'cust_alamat' => 'JL SETASIUN RAYA I/12',
                'cust_notelp' => '0281 621703',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            79 =>
            array (
                'idcust' => 620,
                'cust_nomor' => 'MP00494',
                'cust_nama' => 'YANA',
                'cust_alamat' => 'PURI HIJAU P20 N.6 PWT',
                'cust_notelp' => '0281 7627909',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            80 =>
            array (
                'idcust' => 621,
                'cust_nomor' => 'MP00117',
                'cust_nama' => 'YODHA',
                'cust_alamat' => 'JL PRAMUKA 215 PWT',
                'cust_notelp' => '7631631',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            81 =>
            array (
                'idcust' => 622,
                'cust_nomor' => 'MP00325',
                'cust_nama' => 'YUDHA',
                'cust_alamat' => 'JL BANOWATI/CILACAP',
                'cust_notelp' => '0816691372',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            82 =>
            array (
                'idcust' => 623,
                'cust_nomor' => 'MP00245',
                'cust_nama' => 'YOGA',
                'cust_alamat' => 'BUMIAYU',
                'cust_notelp' => '081646099669',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            83 =>
            array (
                'idcust' => 624,
                'cust_nomor' => 'MP00379',
                'cust_nama' => 'YOGA',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '081327747112',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            84 =>
            array (
                'idcust' => 625,
                'cust_nomor' => 'MP00616',
                'cust_nama' => 'YUNI',
                'cust_alamat' => 'GS II BLOK E NO.5 PWT',
                'cust_notelp' => '081327906555',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            85 =>
            array (
                'idcust' => 626,
                'cust_nomor' => 'MP00110',
                'cust_nama' => 'YOGI ',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081324645454',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            86 =>
            array (
                'idcust' => 627,
                'cust_nomor' => 'MP00153',
                'cust_nama' => 'YOGO',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081327389593',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            87 =>
            array (
                'idcust' => 628,
                'cust_nomor' => 'MP00167',
                'cust_nama' => 'YOHAN',
                'cust_alamat' => 'TELUK',
                'cust_notelp' => '081327285730',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            88 =>
            array (
                'idcust' => 629,
                'cust_nomor' => 'MP00220',
                'cust_nama' => 'YOKE',
                'cust_alamat' => 'PERTABATAN I 25',
                'cust_notelp' => '08172825707',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            89 =>
            array (
                'idcust' => 630,
                'cust_nomor' => 'MP00131',
                'cust_nama' => 'YOSI',
                'cust_alamat' => 'KEBON DALEM',
                'cust_notelp' => '08122767447',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            90 =>
            array (
                'idcust' => 631,
                'cust_nomor' => 'MP00528',
                'cust_nama' => 'YUNI-PUJI R',
                'cust_alamat' => 'PERUM PURWOKENCANA BLOK 75APWT',
                'cust_notelp' => '08882666020',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            91 =>
            array (
                'idcust' => 632,
                'cust_nomor' => 'MP00160',
                'cust_nama' => 'YOTA',
                'cust_alamat' => 'JLN.ST',
                'cust_notelp' => '08156993456',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            92 =>
            array (
                'idcust' => 633,
                'cust_nomor' => 'MP00152',
                'cust_nama' => 'YOYOK',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081327715858',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            93 =>
            array (
                'idcust' => 634,
                'cust_nomor' => 'MP00107',
                'cust_nama' => 'YUDI',
                'cust_alamat' => 'CILONGOK',
                'cust_notelp' => '081327744451',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            94 =>
            array (
                'idcust' => 635,
                'cust_nomor' => 'MP00129',
                'cust_nama' => 'YULI',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '081327646544',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            95 =>
            array (
                'idcust' => 636,
                'cust_nomor' => 'MP00159',
                'cust_nama' => 'YULI ',
                'cust_alamat' => 'TANJUNG PWT',
                'cust_notelp' => '081327222223',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            96 =>
            array (
                'idcust' => 637,
                'cust_nomor' => 'MP00211',
                'cust_nama' => 'YULI',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '081327786565',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            97 =>
            array (
                'idcust' => 638,
                'cust_nomor' => 'MP00345',
                'cust_nama' => 'YULI',
                'cust_alamat' => 'PONDOK KENCANA PWT',
                'cust_notelp' => '7603618',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            98 =>
            array (
                'idcust' => 639,
                'cust_nomor' => 'MP00391',
                'cust_nama' => 'YULIUS',
                'cust_alamat' => 'BREBES',
                'cust_notelp' => '081808095576',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            99 =>
            array (
                'idcust' => 640,
                'cust_nomor' => 'MP00037',
                'cust_nama' => 'YUNI',
                'cust_alamat' => 'PERTABATAN PWT KIDUL',
                'cust_notelp' => '08156989391',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            100 =>
            array (
                'idcust' => 641,
                'cust_nomor' => 'MP00069',
                'cust_nama' => 'YUNI',
                'cust_alamat' => 'JATIWINANGUN-PWT',
                'cust_notelp' => '081563116185',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            101 =>
            array (
                'idcust' => 642,
                'cust_nomor' => 'MP00205',
                'cust_nama' => 'YULIANTO',
                'cust_alamat' => 'SAMBE-PWT',
                'cust_notelp' => '08122733304',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            102 =>
            array (
                'idcust' => 643,
                'cust_nomor' => 'MP00104',
                'cust_nama' => 'YUNI/ANIND',
                'cust_alamat' => 'KRG KLESEM PWT',
                'cust_notelp' => '085864111858',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            103 =>
            array (
                'idcust' => 644,
                'cust_nomor' => 'MP00202',
                'cust_nama' => 'YUNITA',
                'cust_alamat' => 'KRG LEWAS',
                'cust_notelp' => '081542815211',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            104 =>
            array (
                'idcust' => 645,
                'cust_nomor' => 'MP00004',
                'cust_nama' => 'SLAMET JUNEDI',
                'cust_alamat' => 'SOKARAJA TENGAH',
                'cust_notelp' => '081327595484',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            105 =>
            array (
                'idcust' => 646,
                'cust_nomor' => 'MP00051',
                'cust_nama' => 'TIKA',
                'cust_alamat' => 'SUMAMPIR-PWT',
                'cust_notelp' => '081327654448',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            106 =>
            array (
                'idcust' => 647,
                'cust_nomor' => 'MP00063',
                'cust_nama' => 'TUSILOWATI',
                'cust_alamat' => 'BANCAR KEMBAR-PWT',
                'cust_notelp' => '085227326601',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            107 =>
            array (
                'idcust' => 648,
                'cust_nomor' => 'MP00071',
                'cust_nama' => 'WAHYUDI',
                'cust_alamat' => 'PABUARAN-PWT',
                'cust_notelp' => '08156974334',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            108 =>
            array (
                'idcust' => 649,
                'cust_nomor' => 'MP00412',
                'cust_nama' => 'AAN',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08174126195',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            109 =>
            array (
                'idcust' => 650,
                'cust_nomor' => 'MP00572',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'PURWOSARI-PWT',
                'cust_notelp' => '081542699722',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            110 =>
            array (
                'idcust' => 651,
                'cust_nomor' => 'MP00509',
                'cust_nama' => 'ADIT',
                'cust_alamat' => 'SIBABOA',
                'cust_notelp' => '08564752546',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            111 =>
            array (
                'idcust' => 652,
                'cust_nomor' => 'MP00481',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'JLN.MASJID-PWT',
                'cust_notelp' => '08562610088',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            112 =>
            array (
                'idcust' => 653,
                'cust_nomor' => 'MP00429',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'PERTANIAN UNSOED PWT',
                'cust_notelp' => '08122993822',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            113 =>
            array (
                'idcust' => 654,
                'cust_nomor' => 'MP00428',
                'cust_nama' => 'AZIZ',
                'cust_alamat' => 'KRG.KOBAR-PWT',
                'cust_notelp' => '081327732000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            114 =>
            array (
                'idcust' => 655,
                'cust_nomor' => 'MP00441',
                'cust_nama' => 'ARIF',
                'cust_alamat' => 'SUMAMPIR-PWT',
                'cust_notelp' => '0281-7634705',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            115 =>
            array (
                'idcust' => 656,
                'cust_nomor' => 'MP00186',
                'cust_nama' => 'ADIYANTO',
                'cust_alamat' => 'APOTIK WIDURI',
                'cust_notelp' => '7641411',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            116 =>
            array (
                'idcust' => 657,
                'cust_nomor' => 'MP01605',
                'cust_nama' => 'ASTRID',
                'cust_alamat' => 'KRG.SALAM-PWT',
                'cust_notelp' => '085647868778',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            117 =>
            array (
                'idcust' => 658,
                'cust_nomor' => 'MP01182',
                'cust_nama' => 'KABUL GUNAWAN',
                'cust_alamat' => 'JL.BANK 29 PWT',
                'cust_notelp' => '0281-7648224',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            118 =>
            array (
                'idcust' => 659,
                'cust_nomor' => 'MP00424',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081802822072',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            119 =>
            array (
                'idcust' => 660,
                'cust_nomor' => 'MP00514',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'JL.BUNYAMIN 43-PWT',
                'cust_notelp' => '08122784454',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            120 =>
            array (
                'idcust' => 661,
                'cust_nomor' => 'MP00422',
                'cust_nama' => 'ARI',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN-PWT',
                'cust_notelp' => '085227448339',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            121 =>
            array (
                'idcust' => 662,
                'cust_nomor' => 'MP00419',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            122 =>
            array (
                'idcust' => 663,
                'cust_nomor' => 'MP00508',
                'cust_nama' => 'AMI',
                'cust_alamat' => 'PALEM INDAH-PWT',
                'cust_notelp' => '081327069678',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            123 =>
            array (
                'idcust' => 664,
                'cust_nomor' => 'MP00191',
                'cust_nama' => 'HUDA',
                'cust_alamat' => 'BEJI-PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            124 =>
            array (
                'idcust' => 665,
                'cust_nomor' => 'MP00246',
                'cust_nama' => 'HURI',
                'cust_alamat' => 'PERENG',
                'cust_notelp' => '0281-7632219',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            125 =>
            array (
                'idcust' => 666,
                'cust_nomor' => 'MP00289',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'TANJUNG-PWT',
                'cust_notelp' => '085228231111',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            126 =>
            array (
                'idcust' => 667,
                'cust_nomor' => 'MP00382',
                'cust_nama' => 'IGUN',
                'cust_alamat' => 'PABUARAN-PWT',
                'cust_notelp' => '081802802800',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            127 =>
            array (
                'idcust' => 668,
                'cust_nomor' => 'MP00369',
                'cust_nama' => 'JAKA',
                'cust_alamat' => 'PERUM VETERAN-PWT',
                'cust_notelp' => '085227346655',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            128 =>
            array (
                'idcust' => 669,
                'cust_nomor' => 'MP01606',
                'cust_nama' => 'DODO',
                'cust_alamat' => 'JL.GERILYA 12-PWT',
                'cust_notelp' => '621585',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            129 =>
            array (
                'idcust' => 670,
                'cust_nomor' => 'MP01607',
                'cust_nama' => 'YONI',
                'cust_alamat' => 'PURI HIJAU-PWT',
                'cust_notelp' => '653890',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            130 =>
            array (
                'idcust' => 671,
                'cust_nomor' => 'MP01608',
                'cust_nama' => 'YAYU',
                'cust_alamat' => 'REJASARI-PWT',
                'cust_notelp' => '08156987616',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            131 =>
            array (
                'idcust' => 672,
                'cust_nomor' => 'MP01129',
                'cust_nama' => 'ESMANTO',
                'cust_alamat' => 'KARANG KOBAR-PWT',
                'cust_notelp' => '081931177582',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            132 =>
            array (
                'idcust' => 673,
                'cust_nomor' => 'MP00229',
                'cust_nama' => 'ICHI',
                'cust_alamat' => 'SUMAMPIR-PWT',
                'cust_notelp' => '081548823230',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            133 =>
            array (
                'idcust' => 674,
                'cust_nomor' => 'MP00244',
                'cust_nama' => 'RINA',
                'cust_alamat' => 'ARWIN-PWT',
                'cust_notelp' => '08882722591',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            134 =>
            array (
                'idcust' => 675,
                'cust_nomor' => 'MP00807',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'JL KALPATARU I/104 PURWOSARI INDAH',
                'cust_notelp' => '0281624410',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            135 =>
            array (
                'idcust' => 676,
                'cust_nomor' => 'MP00812',
                'cust_nama' => 'ALVIN YS',
                'cust_alamat' => 'JL. JEND SUPRAPTO 14 PWT',
                'cust_notelp' => '0281638625',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            136 =>
            array (
                'idcust' => 677,
                'cust_nomor' => 'MP00819',
                'cust_nama' => 'ARI',
                'cust_alamat' => 'DS PAMIJEN RT 04/I PWT',
                'cust_notelp' => '085227468805',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            137 =>
            array (
                'idcust' => 678,
                'cust_nomor' => 'MP00821',
                'cust_nama' => 'APRIL',
            'cust_alamat' => 'JL MERDEKA 26 (TELKOM) PWT',
                'cust_notelp' => '02817623623',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            138 =>
            array (
                'idcust' => 679,
                'cust_nomor' => 'MP00825',
                'cust_nama' => 'AMALAURA D',
                'cust_alamat' => 'JL GN SINGGALANG 26 PWT',
                'cust_notelp' => '0281621878',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            139 =>
            array (
                'idcust' => 680,
                'cust_nomor' => 'MP00835',
                'cust_nama' => 'AKTIF SUBHAN',
                'cust_alamat' => 'JL GUNUNG SLAMET RAYA 28 PURWOKSARI PWT',
                'cust_notelp' => '08156977168',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            140 =>
            array (
                'idcust' => 681,
                'cust_nomor' => 'MP00843',
                'cust_nama' => 'ANNISA ZUHARA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '028176200886',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            141 =>
            array (
                'idcust' => 682,
                'cust_nomor' => 'MP00781',
                'cust_nama' => 'ARI DARMAWAN',
                'cust_alamat' => 'JL. CEMARA V/20 PERUM TELUK PWT',
                'cust_notelp' => '08172819444',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            142 =>
            array (
                'idcust' => 683,
                'cust_nomor' => 'MP00751',
                'cust_nama' => 'ANA',
                'cust_alamat' => 'WATUMAS PWT',
                'cust_notelp' => '0811487272',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            143 =>
            array (
                'idcust' => 684,
                'cust_nomor' => 'MP00754',
                'cust_nama' => 'ADI WAHYONO',
                'cust_alamat' => 'SARWO ENDAH II PANCURAWIS PWT',
                'cust_notelp' => '02817643346',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            144 =>
            array (
                'idcust' => 685,
                'cust_nomor' => 'MP00762',
                'cust_nama' => 'ANGGIE',
                'cust_alamat' => 'JL HR BUNYAMIN 3 PWT',
                'cust_notelp' => '081931820110',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            145 =>
            array (
                'idcust' => 686,
                'cust_nomor' => 'MP00761',
                'cust_nama' => 'AMANDA P',
                'cust_alamat' => 'PERUM TAMAN ANGGREK ARANDA IV/4B PWT',
                'cust_notelp' => '02817631012',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            146 =>
            array (
                'idcust' => 687,
                'cust_nomor' => 'MP00773',
                'cust_nama' => 'AJENG WIBISONO',
                'cust_alamat' => 'TIARA PERMAI II BLOK E 1 PWT',
                'cust_notelp' => '081327647771',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            147 =>
            array (
                'idcust' => 688,
                'cust_nomor' => 'MP00678',
                'cust_nama' => 'ARI SETYAWAN',
                'cust_alamat' => 'KARANG SALAM KIDUL RT01/II PWT',
                'cust_notelp' => '0281630786',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            148 =>
            array (
                'idcust' => 689,
                'cust_nomor' => 'MP00726',
                'cust_nama' => 'AGUSTINA',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '0281896140',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            149 =>
            array (
                'idcust' => 690,
                'cust_nomor' => 'MP00732',
                'cust_nama' => 'ALVIRA',
                'cust_alamat' => 'SPN PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            150 =>
            array (
                'idcust' => 691,
                'cust_nomor' => 'MP00729',
                'cust_nama' => 'ALIF',
                'cust_alamat' => 'BUMIAYU',
                'cust_notelp' => '081327268867',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            151 =>
            array (
                'idcust' => 692,
                'cust_nomor' => 'MP00694',
                'cust_nama' => 'ADWIE AJI PRABOWO',
                'cust_alamat' => 'JL GERILYA 40 RT01/01 TANJUNG PWT',
                'cust_notelp' => '085227272825',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            152 =>
            array (
                'idcust' => 693,
                'cust_nomor' => 'MP00722',
                'cust_nama' => 'ARUM ASTIKA S',
                'cust_alamat' => 'SMA N 1 PURWOKERTO',
                'cust_notelp' => '0281 622500',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            153 =>
            array (
                'idcust' => 694,
                'cust_nomor' => 'MP00647',
                'cust_nama' => 'ARIF PRIYONO PUTRO',
                'cust_alamat' => 'JL DR ANGKA 75B PURWOKERTO',
                'cust_notelp' => '081931838661',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            154 =>
            array (
                'idcust' => 695,
                'cust_nomor' => 'MP00637',
                'cust_nama' => 'AKMAL',
                'cust_alamat' => 'PURI INDAH BLOK O NO 31 PWT',
                'cust_notelp' => '0281 624972',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            155 =>
            array (
                'idcust' => 696,
                'cust_nomor' => 'MP00638',
                'cust_nama' => 'ATIN/ANA',
                'cust_alamat' => 'JL MENUR RT 04/02 MERSI PWT',
                'cust_notelp' => '7631209',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            156 =>
            array (
                'idcust' => 697,
                'cust_nomor' => 'MP00633',
                'cust_nama' => 'ANGGIA RAHMADIAN W',
                'cust_alamat' => 'PERUM BINA MARGA PABUARAN',
                'cust_notelp' => '085227461131',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            157 =>
            array (
                'idcust' => 698,
                'cust_nomor' => 'MP00663',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'JL JAMBU 82 PWT',
                'cust_notelp' => '0281 639178',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            158 =>
            array (
                'idcust' => 699,
                'cust_nomor' => 'MP00664',
                'cust_nama' => 'ALVIN',
                'cust_alamat' => 'JAKARTA',
                'cust_notelp' => '08161638789',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            159 =>
            array (
                'idcust' => 700,
                'cust_nomor' => 'MP00680',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'WANGON',
                'cust_notelp' => '081327716166',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            160 =>
            array (
                'idcust' => 701,
                'cust_nomor' => 'MP00645',
                'cust_nama' => 'G ARDIADI',
                'cust_alamat' => 'PERUM TELUK DAMAR VI 144 PWT',
                'cust_notelp' => '081548877405',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            161 =>
            array (
                'idcust' => 702,
                'cust_nomor' => 'MP00700',
                'cust_nama' => 'AGNES WIDYA Y',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081327277666',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            162 =>
            array (
                'idcust' => 703,
                'cust_nomor' => 'MP00703',
                'cust_nama' => 'AGUSTIANA P',
                'cust_alamat' => 'JL PEKIH 183 PWT',
                'cust_notelp' => '0281 623571',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            163 =>
            array (
                'idcust' => 704,
                'cust_nomor' => 'MP00796',
                'cust_nama' => 'BOY',
                'cust_alamat' => 'JL KOL SUGIONO I NO 3 PWT',
                'cust_notelp' => '0281 7633626',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            164 =>
            array (
                'idcust' => 705,
                'cust_nomor' => 'MP00827',
                'cust_nama' => 'BEJO',
                'cust_alamat' => 'SOKARAJA TENGAH SKJ 02/IV',
                'cust_notelp' => '08121589564',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            165 =>
            array (
                'idcust' => 706,
                'cust_nomor' => 'MP00813',
                'cust_nama' => 'BADRA',
                'cust_alamat' => 'TIRTA KEMBAR',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            166 =>
            array (
                'idcust' => 707,
                'cust_nomor' => 'MP00839',
                'cust_nama' => 'BENNY/SOESI',
                'cust_alamat' => 'PURI INTAN PIX/16',
                'cust_notelp' => '081575505784',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            167 =>
            array (
                'idcust' => 708,
                'cust_nomor' => 'MP00768',
                'cust_nama' => 'A BAYU AJI W',
                'cust_alamat' => 'ADIPURA RAYA 193 PWT',
                'cust_notelp' => '081327549987',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            168 =>
            array (
                'idcust' => 709,
                'cust_nomor' => 'MP00636',
                'cust_nama' => 'BAYU SETIAWAN',
                'cust_alamat' => 'KUTASARI RT3/2 BATURADEN PWT',
                'cust_notelp' => '081327777180',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            169 =>
            array (
                'idcust' => 710,
                'cust_nomor' => 'MP00702',
                'cust_nama' => 'BUDEE',
                'cust_alamat' => 'RINGIN TIRTA 19A',
                'cust_notelp' => '081327051000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            170 =>
            array (
                'idcust' => 711,
                'cust_nomor' => 'MP00782',
                'cust_nama' => 'BETHA',
                'cust_alamat' => 'PERUM PURI INTAN 99 PWT',
                'cust_notelp' => '085647830070',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            171 =>
            array (
                'idcust' => 712,
                'cust_nomor' => 'MP00714',
                'cust_nama' => 'BELLY',
                'cust_alamat' => 'KRANJI G.I PWT',
                'cust_notelp' => '081327682021',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            172 =>
            array (
                'idcust' => 713,
                'cust_nomor' => 'MP00717',
                'cust_nama' => 'BUDI/IVANA',
                'cust_alamat' => 'KARANG LEWAS PWT',
                'cust_notelp' => '0281 639293',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            173 =>
            array (
                'idcust' => 714,
                'cust_nomor' => 'MP00657',
                'cust_nama' => 'BOWO',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '081327590767',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            174 =>
            array (
                'idcust' => 715,
                'cust_nomor' => 'MP00656',
                'cust_nama' => 'BUCEK',
                'cust_alamat' => 'JL PAHLAWAN TANJUNG PWT',
                'cust_notelp' => '081802801261',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            175 =>
            array (
                'idcust' => 716,
                'cust_nomor' => 'MP00630',
                'cust_nama' => 'DURYANTI',
                'cust_alamat' => 'JL CENDRAWASIH 741 GRENDENG PWT',
                'cust_notelp' => '081327774958',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            176 =>
            array (
                'idcust' => 717,
                'cust_nomor' => 'MP00639',
                'cust_nama' => 'BAYU INDRA',
                'cust_alamat' => 'JL PRAMUKA PWT',
                'cust_notelp' => '081542667666',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            177 =>
            array (
                'idcust' => 718,
                'cust_nomor' => 'MP00643',
                'cust_nama' => 'BOWO',
                'cust_alamat' => 'WONOSOBO',
                'cust_notelp' => '085228979222',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            178 =>
            array (
                'idcust' => 719,
                'cust_nomor' => 'MP00831',
                'cust_nama' => 'CANDRA WIJAYA',
                'cust_alamat' => 'JL KOM BAMBANG SUPRAPTO GG I/971 PWT',
                'cust_notelp' => '0281 7608203',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            179 =>
            array (
                'idcust' => 720,
                'cust_nomor' => 'MP00823',
                'cust_nama' => 'CITRA',
                'cust_alamat' => 'PERUM TGSI BLOK R4/21 PWT',
                'cust_notelp' => '08164282403',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            180 =>
            array (
                'idcust' => 721,
                'cust_nomor' => 'MP00841',
                'cust_nama' => 'CAHYO',
                'cust_alamat' => 'LIMAS AGUNG P2 NO 1 PWT',
                'cust_notelp' => '0281 622019',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            181 =>
            array (
                'idcust' => 722,
                'cust_nomor' => 'MP00741',
                'cust_nama' => 'CHACHA',
                'cust_alamat' => 'JL DI PANJAITAN PWT',
                'cust_notelp' => '081802814000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            182 =>
            array (
                'idcust' => 723,
                'cust_nomor' => 'MP00733',
                'cust_nama' => 'DANNY',
                'cust_alamat' => 'KARANG GAMBAS PURBALINGGA',
                'cust_notelp' => '08882664826',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            183 =>
            array (
                'idcust' => 724,
                'cust_nomor' => 'MP00776',
                'cust_nama' => 'DITA',
                'cust_alamat' => 'JATWIN PWT',
                'cust_notelp' => '081327155575',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            184 =>
            array (
                'idcust' => 725,
                'cust_nomor' => 'MP00772',
                'cust_nama' => 'DENY GANTENG',
                'cust_alamat' => 'GRIYA SATRIA II BLOK EA/2 PWT',
                'cust_notelp' => '08882687360',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            185 =>
            array (
                'idcust' => 726,
                'cust_nomor' => 'MP00736',
                'cust_nama' => 'DORA',
                'cust_alamat' => 'JLN SKLH TKHNK PWT',
                'cust_notelp' => '636176',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            186 =>
            array (
                'idcust' => 727,
                'cust_nomor' => 'MP00730',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'BBS',
                'cust_notelp' => '085227417000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            187 =>
            array (
                'idcust' => 728,
                'cust_nomor' => 'MP00711',
                'cust_nama' => 'DERI N',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '0281 7635442',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            188 =>
            array (
                'idcust' => 729,
                'cust_nomor' => 'MP00698',
                'cust_nama' => 'DEDDY W S',
                'cust_alamat' => 'PERUM KR ASRI',
                'cust_notelp' => '08122661848',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            189 =>
            array (
                'idcust' => 730,
                'cust_nomor' => 'MP00687',
                'cust_nama' => 'DESY NATALIA',
                'cust_alamat' => 'JL PERINTIS KEMERDEKAAN 165',
                'cust_notelp' => '081327688600',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            190 =>
            array (
                'idcust' => 731,
                'cust_nomor' => 'MP00684',
                'cust_nama' => 'DEWI NOVIANA',
                'cust_alamat' => 'JL PRAMUKA 260 PWT',
                'cust_notelp' => '637386',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            191 =>
            array (
                'idcust' => 732,
                'cust_nomor' => 'MP00792',
                'cust_nama' => 'DHI-DHI',
                'cust_alamat' => 'JL JATWIN 38',
                'cust_notelp' => '0281 638145',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            192 =>
            array (
                'idcust' => 733,
                'cust_nomor' => 'MP00818',
                'cust_nama' => 'DEVINA',
                'cust_alamat' => 'PERUM PURWO KENCANA I BLOK4/5B PWT',
                'cust_notelp' => '081804704808',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            193 =>
            array (
                'idcust' => 734,
                'cust_nomor' => 'MP00653',
                'cust_nama' => 'DHYTA',
                'cust_alamat' => 'GAMBARSARI RT2/4 KEBASEN',
                'cust_notelp' => '081391103166',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            194 =>
            array (
                'idcust' => 735,
                'cust_nomor' => 'MP00672',
                'cust_nama' => 'DINI',
                'cust_alamat' => 'PERUM BOJONG 135A PBG',
                'cust_notelp' => '891906',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            195 =>
            array (
                'idcust' => 736,
                'cust_nomor' => 'MP00682',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'GRIYA SATRIA 16 BANTAR SOKA PWT',
                'cust_notelp' => '641969',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            196 =>
            array (
                'idcust' => 737,
                'cust_nomor' => 'MP00744',
                'cust_nama' => 'ERI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            197 =>
            array (
                'idcust' => 738,
                'cust_nomor' => 'MP00668',
                'cust_nama' => 'ERIK WIJAYA',
                'cust_alamat' => 'AJIBARANG',
                'cust_notelp' => '081327247500',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            198 =>
            array (
                'idcust' => 739,
                'cust_nomor' => 'MP00670',
                'cust_nama' => 'ENDANG SW',
                'cust_alamat' => 'JL KOPRAL TANWIR 26',
                'cust_notelp' => '081542887887',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            199 =>
            array (
                'idcust' => 740,
                'cust_nomor' => 'MP00778',
                'cust_nama' => 'EMMY',
                'cust_alamat' => 'JL JAMBU 25 PWT',
                'cust_notelp' => '621532',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            200 =>
            array (
                'idcust' => 741,
                'cust_nomor' => 'MP00803',
                'cust_nama' => 'ESCHA FIRDAUS KAYUZI',
                'cust_alamat' => 'JL GNG SRANDIL 67 KARANG WANGKAL PWT',
                'cust_notelp' => '085692312200',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            201 =>
            array (
                'idcust' => 742,
                'cust_nomor' => 'MP00806',
                'cust_nama' => 'ENDAR',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            202 =>
            array (
                'idcust' => 743,
                'cust_nomor' => 'MP00828',
                'cust_nama' => 'EMI',
                'cust_alamat' => 'JL MELATI 2 MERSI PWT',
                'cust_notelp' => '081391102484',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            203 =>
            array (
                'idcust' => 744,
                'cust_nomor' => 'MP00832',
                'cust_nama' => 'EDDY SPL',
                'cust_alamat' => 'JAKARTA',
                'cust_notelp' => '085218725432',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            204 =>
            array (
                'idcust' => 745,
                'cust_nomor' => 'MP00692',
                'cust_nama' => 'ESIE MEGA WANGI',
                'cust_alamat' => 'JL DR SOEPARNO 93 KRG WANGKAL PWT',
                'cust_notelp' => '081324133328',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            205 =>
            array (
                'idcust' => 746,
                'cust_nomor' => 'MP00689',
                'cust_nama' => 'ELAN HAMAYU B',
                'cust_alamat' => 'BANCAR KEMBAR PERMAI PWT',
                'cust_notelp' => '08882641426',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            206 =>
            array (
                'idcust' => 747,
                'cust_nomor' => 'MP00769',
                'cust_nama' => 'ENDAH S',
                'cust_alamat' => 'GG.TERATAI 22 KOBER PWT',
                'cust_notelp' => '0281 623749',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            207 =>
            array (
                'idcust' => 748,
                'cust_nomor' => 'MP00641',
                'cust_nama' => 'ENDRO DWI H',
                'cust_alamat' => 'PERUM PONDOK KENCANA BLOK 3/32',
                'cust_notelp' => '7604427',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            208 =>
            array (
                'idcust' => 749,
                'cust_nomor' => 'MP00665',
                'cust_nama' => 'EKO WP',
                'cust_alamat' => 'JL KOBER GG SUTOYO 28 PWT',
                'cust_notelp' => '7638723',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            209 =>
            array (
                'idcust' => 750,
                'cust_nomor' => 'MP00757',
                'cust_nama' => 'FIAN',
                'cust_alamat' => 'SOF-PUR',
                'cust_notelp' => '0281 641888',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            210 =>
            array (
                'idcust' => 751,
                'cust_nomor' => 'MP00842',
                'cust_nama' => 'FERI',
                'cust_alamat' => 'PH 371 PWT',
                'cust_notelp' => '7604308',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            211 =>
            array (
                'idcust' => 752,
                'cust_nomor' => 'MP00797',
                'cust_nama' => 'FLORA',
                'cust_alamat' => 'PERMATA HIJAU VII/62 PWT',
                'cust_notelp' => '08562245185',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            212 =>
            array (
                'idcust' => 753,
                'cust_nomor' => 'MP00826',
                'cust_nama' => 'FAOZAN NUR HIDAYAT',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081806906400',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            213 =>
            array (
                'idcust' => 754,
                'cust_nomor' => 'MP00774',
                'cust_nama' => 'FANNY Y',
                'cust_alamat' => 'JL SERAYU XIV/116 PWT',
                'cust_notelp' => '085227295992',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            214 =>
            array (
                'idcust' => 755,
                'cust_nomor' => 'MP00706',
                'cust_nama' => 'FERY',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '085647820000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            215 =>
            array (
                'idcust' => 756,
                'cust_nomor' => 'MP00652',
                'cust_nama' => 'FRED.BANTANGO',
                'cust_alamat' => 'JL GRENDENG PWT',
                'cust_notelp' => '081327385537',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            216 =>
            array (
                'idcust' => 757,
                'cust_nomor' => 'MP00679',
                'cust_nama' => 'FITRI YULIANI',
                'cust_alamat' => 'JL JAMBU GG MENTENG 21 PWT BRT',
                'cust_notelp' => '0281 621439',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            217 =>
            array (
                'idcust' => 758,
                'cust_nomor' => 'MP00681',
                'cust_nama' => 'FERNIE ROOSNITA EKA PUTRI',
                'cust_alamat' => 'PERUM UNSOED 39 GRENDENG PWT',
                'cust_notelp' => '081327343552',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            218 =>
            array (
                'idcust' => 759,
                'cust_nomor' => 'MP001602',
                'cust_nama' => 'RANNY FITRIYANI',
                'cust_alamat' => 'JL KS TUBUN GANG NANAS NO 68',
                'cust_notelp' => '0281622227',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            219 =>
            array (
                'idcust' => 760,
                'cust_nomor' => 'MP001603',
                'cust_nama' => 'NILA',
                'cust_alamat' => 'JL KOBER NO 9A PWT',
                'cust_notelp' => '081542013676',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            220 =>
            array (
                'idcust' => 761,
                'cust_nomor' => 'MP00661',
                'cust_nama' => 'FIEED',
                'cust_alamat' => 'JL MADRANI NO 05 PUSPORINI PWT',
                'cust_notelp' => '081546797979',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            221 =>
            array (
                'idcust' => 762,
                'cust_nomor' => 'MP00784',
                'cust_nama' => 'GEMEK',
                'cust_alamat' => 'KUTALINES',
                'cust_notelp' => '02817606511',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            222 =>
            array (
                'idcust' => 763,
                'cust_nomor' => 'MP00718',
                'cust_nama' => 'HENDRO',
                'cust_alamat' => 'RAGASEMANGSANG 44 PWT',
                'cust_notelp' => '081548057052',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            223 =>
            array (
                'idcust' => 764,
                'cust_nomor' => 'MP00626',
                'cust_nama' => 'HERLINA SUSANTI',
                'cust_alamat' => 'PABUARAN GG SINDORO 35 PWT',
                'cust_notelp' => '085227465888',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            224 =>
            array (
                'idcust' => 765,
                'cust_nomor' => 'MP00735',
                'cust_nama' => 'HERI',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '08156106408',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            225 =>
            array (
                'idcust' => 766,
                'cust_nomor' => 'MP00738',
                'cust_nama' => 'HARRI RAMDHANI',
                'cust_alamat' => 'GRIYA SATRIA BLOK M3 BANCAR KEMBAR PWT',
                'cust_notelp' => '081911425655',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            226 =>
            array (
                'idcust' => 767,
                'cust_nomor' => 'MP00759',
                'cust_nama' => 'HAFRI',
                'cust_alamat' => 'JL PELOPOR 408 LEDUG PWT',
                'cust_notelp' => '08121783557',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            227 =>
            array (
                'idcust' => 768,
                'cust_nomor' => 'MP00705',
                'cust_nama' => 'HERMAN',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '081327567280',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            228 =>
            array (
                'idcust' => 769,
                'cust_nomor' => 'MP00809',
                'cust_nama' => 'HANA SHAFIYYAH Z',
                'cust_alamat' => 'BLABER RT01/06 KALIMANAH PURBALINGGA',
                'cust_notelp' => '0281 7624455',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            229 =>
            array (
                'idcust' => 770,
                'cust_nomor' => 'MP00801',
                'cust_nama' => 'HASTIN',
                'cust_alamat' => 'PERUM GS I BLOK J 1 PWT',
                'cust_notelp' => '085227531989',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            230 =>
            array (
                'idcust' => 771,
                'cust_nomor' => 'MP00787',
                'cust_nama' => 'HERU A',
                'cust_alamat' => 'BANJAR NEGARA RT03/02 KRANDEGAN',
                'cust_notelp' => '08122784431',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            231 =>
            array (
                'idcust' => 772,
                'cust_nomor' => 'MP00808',
                'cust_nama' => 'HILDA',
                'cust_alamat' => 'JL ADIPURA RAYA 205 PURWOSARI',
                'cust_notelp' => '0281 7620093',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            232 =>
            array (
                'idcust' => 773,
                'cust_nomor' => 'MP00648',
                'cust_nama' => 'HERMAN S',
                'cust_alamat' => 'JL DONAN HILIR CILACAP',
                'cust_notelp' => '541750',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            233 =>
            array (
                'idcust' => 774,
                'cust_nomor' => 'MP00752',
                'cust_nama' => 'INDRI',
                'cust_alamat' => 'KAREN INDAH K21',
                'cust_notelp' => '0281 7620001',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            234 =>
            array (
                'idcust' => 775,
                'cust_nomor' => 'MP00794',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'CENDRAWASIH 673 PURWOKERTO',
                'cust_notelp' => '081227462248',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            235 =>
            array (
                'idcust' => 776,
                'cust_nomor' => 'MP00790',
                'cust_nama' => 'ION',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '0281 625569',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            236 =>
            array (
                'idcust' => 777,
                'cust_nomor' => 'MP00834',
                'cust_nama' => 'IMAM BADRIYANTO',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '085227532002',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            237 =>
            array (
                'idcust' => 778,
                'cust_nomor' => 'MP00742',
                'cust_nama' => 'INDRI',
                'cust_alamat' => 'JL KAMPUS 662',
                'cust_notelp' => '08164659100',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            238 =>
            array (
                'idcust' => 779,
                'cust_nomor' => 'MP00696',
                'cust_nama' => ' IMAM ARIF',
                'cust_alamat' => 'JL TANJLIG SOKANEGARA PWT',
                'cust_notelp' => '081542651858',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            239 =>
            array (
                'idcust' => 780,
                'cust_nomor' => 'MP00654',
                'cust_nama' => 'ISTE SAVITRI',
                'cust_alamat' => 'JL PROF. DR. BUNYAMIN 42 PWT',
                'cust_notelp' => '08562628291',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            240 =>
            array (
                'idcust' => 781,
                'cust_nomor' => 'MP00688',
                'cust_nama' => 'IBNU N',
                'cust_alamat' => 'JL BALE KAMBANG ',
                'cust_notelp' => '08179412343',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            241 =>
            array (
                'idcust' => 782,
                'cust_nomor' => 'MP00629',
                'cust_nama' => 'INTAN',
                'cust_alamat' => 'HERI KOST',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            242 =>
            array (
                'idcust' => 783,
                'cust_nomor' => 'MP00666',
                'cust_nama' => 'INTAN PRAWESTI',
                'cust_alamat' => 'JL DR SOEPARNO 93 PWT',
                'cust_notelp' => '081542991966',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            243 =>
            array (
                'idcust' => 784,
                'cust_nomor' => 'MP00743',
                'cust_nama' => 'JOKO',
                'cust_alamat' => 'JL A YANI GG VII PWT',
                'cust_notelp' => '081327427781',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            244 =>
            array (
                'idcust' => 785,
                'cust_nomor' => 'MP00721',
                'cust_nama' => 'JASMINE',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '0281 626306',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            245 =>
            array (
                'idcust' => 786,
                'cust_nomor' => 'MP00770',
                'cust_nama' => 'JINGGA CITRA P',
                'cust_alamat' => 'JL KAUMAN LAMA PWT',
                'cust_notelp' => '0281 638934',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            246 =>
            array (
                'idcust' => 787,
                'cust_nomor' => 'MP00837',
                'cust_nama' => 'JOKO HN',
                'cust_alamat' => 'ASPOL RAGASEMANGSANG PWT',
                'cust_notelp' => '081548814617',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            247 =>
            array (
                'idcust' => 788,
                'cust_nomor' => 'NP00655',
                'cust_nama' => 'JOICE HERDA YM',
                'cust_alamat' => 'JL DR SUHARSO GG KENANGA 47/I',
                'cust_notelp' => '0281 625236',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            248 =>
            array (
                'idcust' => 789,
                'cust_nomor' => 'MP00691',
                'cust_nama' => 'JATI WAHYUDI',
                'cust_alamat' => 'JL SIDO DADI',
                'cust_notelp' => '081327396622',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            249 =>
            array (
                'idcust' => 790,
                'cust_nomor' => 'MP00715',
                'cust_nama' => 'KRIS HENDRATNO',
                'cust_alamat' => 'KARANG KEMIRI RT01/IV NO 2 KR LEWAS',
                'cust_notelp' => '0281 656232',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            250 =>
            array (
                'idcust' => 791,
                'cust_nomor' => 'MP00685',
                'cust_nama' => 'KRISTIAWAN',
                'cust_alamat' => 'BNCAR KEMBAR PERMAI VIII/16 PWT',
                'cust_notelp' => '08122654820',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            251 =>
            array (
                'idcust' => 792,
                'cust_nomor' => 'MP00625',
                'cust_nama' => 'KIKIE',
                'cust_alamat' => 'JL PABUARAN GG SINDORO 35 PWT',
                'cust_notelp' => '081327615000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            252 =>
            array (
                'idcust' => 793,
                'cust_nomor' => 'MP00658',
                'cust_nama' => 'KUNTI AYU D',
                'cust_alamat' => 'JL DR SUPARNO 93 B KRNG WANGKAL PWT',
                'cust_notelp' => '085647794401',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            253 =>
            array (
                'idcust' => 794,
                'cust_nomor' => 'MP01604',
                'cust_nama' => 'MARIA',
                'cust_alamat' => 'JL OVIS ISDIMAN GG 4/1223 PWT',
                'cust_notelp' => '0816696993',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            254 =>
            array (
                'idcust' => 795,
                'cust_nomor' => 'MP00785',
                'cust_nama' => 'LESTI',
                'cust_alamat' => 'JL JEND.SOETOYO GG 1/14 PWT',
                'cust_notelp' => '081327491106',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            255 =>
            array (
                'idcust' => 796,
                'cust_nomor' => 'MP00811',
                'cust_nama' => 'LISA WIDIASARI',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '085227208999',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            256 =>
            array (
                'idcust' => 797,
                'cust_nomor' => 'MP00840',
                'cust_nama' => 'LINA SURYANI',
                'cust_alamat' => 'KOL SUGIRI 11A PWT',
                'cust_notelp' => '0281 636757',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            257 =>
            array (
                'idcust' => 798,
                'cust_nomor' => 'MP00830',
                'cust_nama' => 'LELI BUDI LESTARI',
                'cust_alamat' => 'JL KEMUTUG LOR RT02/II BATURADEN',
                'cust_notelp' => '081327444498',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            258 =>
            array (
                'idcust' => 799,
                'cust_nomor' => 'MP00707',
                'cust_nama' => 'LINDA',
                'cust_alamat' => 'PERUM GRIYA SATRIA BLOK X/1 PWT',
                'cust_notelp' => '081542690000',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            259 =>
            array (
                'idcust' => 800,
                'cust_nomor' => 'MP00777',
                'cust_nama' => 'LITA',
                'cust_alamat' => 'JL RIYANTO GG DAHLIA 3 RT01/02 SUMAMPIR PWT',
                'cust_notelp' => '081542899234',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            260 =>
            array (
                'idcust' => 801,
                'cust_nomor' => 'MP00765',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '08562634546',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            261 =>
            array (
                'idcust' => 802,
                'cust_nomor' => 'MP00659',
                'cust_nama' => 'LODY',
                'cust_alamat' => 'PH 9/18 PWT',
                'cust_notelp' => '0811287228',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            262 =>
            array (
                'idcust' => 803,
                'cust_nomor' => 'MP00763',
                'cust_nama' => 'MIQDAD',
                'cust_alamat' => 'JEND SUDIRMAN 850 PWT',
                'cust_notelp' => '7606290/623111',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            263 =>
            array (
                'idcust' => 804,
                'cust_nomor' => 'MP00771',
                'cust_nama' => 'M.RIFQI',
                'cust_alamat' => 'JL DR ANGKA PWT',
                'cust_notelp' => '0281 641459',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            264 =>
            array (
                'idcust' => 805,
                'cust_nomor' => 'MP00631',
                'cust_nama' => 'MAHARANI DH',
                'cust_alamat' => 'JL KOBER GG KENANGA RT01/02 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            265 =>
            array (
                'idcust' => 806,
                'cust_nomor' => 'MP00693',
                'cust_nama' => 'MERIE',
                'cust_alamat' => 'JL DI PANJAITAN 60 PWT',
                'cust_notelp' => '0281 632568',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            266 =>
            array (
                'idcust' => 807,
                'cust_nomor' => 'MP00829',
                'cust_nama' => 'MOHAMMAD FAOZAN',
                'cust_alamat' => 'BANCARKEMBAR PWT',
                'cust_notelp' => '081542745007',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            267 =>
            array (
                'idcust' => 808,
                'cust_nomor' => 'MP00745',
                'cust_nama' => 'MONO/ANI',
                'cust_alamat' => 'JL DR ANGKA 33 PWT',
                'cust_notelp' => '0281 7614500',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            268 =>
            array (
                'idcust' => 809,
                'cust_nomor' => 'MP00634',
                'cust_nama' => 'MARIA',
                'cust_alamat' => 'JL DR SUHARSO 1257 PWT',
                'cust_notelp' => '081327633050',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            269 =>
            array (
                'idcust' => 810,
                'cust_nomor' => 'MP00727',
                'cust_nama' => 'MIRA',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '0282 540411',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            270 =>
            array (
                'idcust' => 811,
                'cust_nomor' => 'MP00725',
                'cust_nama' => 'MUTIA',
                'cust_alamat' => 'JL HR BUNYAMIN 361 PWT',
                'cust_notelp' => '081327088677',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            271 =>
            array (
                'idcust' => 812,
                'cust_nomor' => 'MP00724',
                'cust_nama' => 'MIA',
                'cust_alamat' => 'DR ANGKA 99 PWT',
                'cust_notelp' => '0281 632315',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            272 =>
            array (
                'idcust' => 813,
                'cust_nomor' => 'MP00671',
                'cust_nama' => 'MEGO SUROTO',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '-',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            273 =>
            array (
                'idcust' => 814,
                'cust_nomor' => 'MP00780',
                'cust_nama' => 'NANA',
                'cust_alamat' => 'JL KAMPUS 44 PWT',
                'cust_notelp' => '0281 630651',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            274 =>
            array (
                'idcust' => 815,
                'cust_nomor' => 'MP00749',
                'cust_nama' => 'NINING',
                'cust_alamat' => 'JL KAMPUS PWT',
                'cust_notelp' => '085647669666',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            275 =>
            array (
                'idcust' => 816,
                'cust_nomor' => 'MP00709',
                'cust_nama' => 'NITA QAINI',
                'cust_alamat' => 'PERUM FIRDAUS M-8',
                'cust_notelp' => '081802005550',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            276 =>
            array (
                'idcust' => 817,
                'cust_nomor' => 'MP01609',
                'cust_nama' => 'DIKI BASKORO',
                'cust_alamat' => 'JL SUNAN KLI JG 4/9 PWT',
                'cust_notelp' => '081573850901',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            277 =>
            array (
                'idcust' => 818,
                'cust_nomor' => 'MP001484',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'PERUM TIARA PERMAI I D3 SKRAJA',
                'cust_notelp' => '0281 623153',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            278 =>
            array (
                'idcust' => 819,
                'cust_nomor' => 'MP01610',
                'cust_nama' => 'OPI',
                'cust_alamat' => 'JL KAMPUNG BARU RT05/05 RJASARI',
                'cust_notelp' => '085692226982',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            279 =>
            array (
                'idcust' => 820,
                'cust_nomor' => 'MP00783',
                'cust_nama' => 'OCHA',
                'cust_alamat' => 'ARCAWINANGUN 03/09 PWT',
                'cust_notelp' => '081327116269',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            280 =>
            array (
                'idcust' => 821,
                'cust_nomor' => 'MP001605',
                'cust_nama' => 'TRI INTEL',
                'cust_alamat' => 'POLWIL',
                'cust_notelp' => '085227557609',
                'cust_date' => '2007-03-31',
                'cust_author' => 'BENNY',
            ),
            281 =>
            array (
                'idcust' => 822,
                'cust_nomor' => 'MP001606',
                'cust_nama' => 'DIAN WAWAN',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081542891222',
                'cust_date' => '2007-03-31',
                'cust_author' => 'BENNY',
            ),
            282 =>
            array (
                'idcust' => 823,
                'cust_nomor' => 'MP00655',
                'cust_nama' => 'JOICE HERDA YM',
                'cust_alamat' => 'JL.DR.SUHARSO GG KENANGA 47/I PWT',
                'cust_notelp' => '081328022799',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            283 =>
            array (
                'idcust' => 824,
                'cust_nomor' => 'MP00699',
                'cust_nama' => 'NITO DYAH MULANI',
                'cust_alamat' => 'JL.PAHLAWAN IV/336 PWT',
                'cust_notelp' => '081327734567',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            284 =>
            array (
                'idcust' => 825,
                'cust_nomor' => 'MP00799',
                'cust_nama' => 'NOE2NK',
                'cust_alamat' => 'JLBANOWATI 24',
                'cust_notelp' => '085647847001',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            285 =>
            array (
                'idcust' => 826,
                'cust_nomor' => 'MP00804',
                'cust_nama' => 'NITA',
                'cust_alamat' => 'GRIYA SATRIA I 3 BANTARSOKA PWT',
                'cust_notelp' => '0281641971',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            286 =>
            array (
                'idcust' => 827,
                'cust_nomor' => 'MP00817',
                'cust_nama' => 'NASIM',
                'cust_alamat' => 'YANJUNG PWT',
                'cust_notelp' => '081542824341',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            287 =>
            array (
                'idcust' => 828,
                'cust_nomor' => 'MP00810',
                'cust_nama' => 'NUR SIFAIYAH',
                'cust_alamat' => 'JL.SUPARNO 71 KR.WANGKAL PWT',
                'cust_notelp' => '0813327924449',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            288 =>
            array (
                'idcust' => 829,
                'cust_nomor' => 'MP00822',
                'cust_nama' => 'NOVITA.S',
                'cust_alamat' => 'JL.SUNAN AMPEL 4B PABUARAN PWT',
                'cust_notelp' => '0281641973',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            289 =>
            array (
                'idcust' => 830,
                'cust_nomor' => 'MP00833',
                'cust_nama' => 'NURHIDAYAT',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '085221372729',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            290 =>
            array (
                'idcust' => 831,
                'cust_nomor' => 'MP00710',
                'cust_nama' => 'NUNI',
                'cust_alamat' => 'JLDR ANGKA I/21 PWT',
                'cust_notelp' => '637259',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            291 =>
            array (
                'idcust' => 832,
                'cust_nomor' => 'MP00728',
                'cust_nama' => 'NINING',
                'cust_alamat' => 'PORWOKERTO',
                'cust_notelp' => '0813272332511',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            292 =>
            array (
                'idcust' => 833,
                'cust_nomor' => 'MP00686',
                'cust_nama' => 'NIAS',
                'cust_alamat' => 'JL.SOKAJAYA 56 03/12 PWT',
                'cust_notelp' => '081542679255',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            293 =>
            array (
                'idcust' => 834,
                'cust_nomor' => 'MP00662',
                'cust_nama' => 'NANANG',
                'cust_alamat' => 'JL.GNG MENOREH 33B PWT',
                'cust_notelp' => '08155767996',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            294 =>
            array (
                'idcust' => 835,
                'cust_nomor' => 'MP00667',
                'cust_nama' => 'NINA',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '0856477077620',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            295 =>
            array (
                'idcust' => 836,
                'cust_nomor' => 'MP00766',
                'cust_nama' => 'OKI',
                'cust_alamat' => 'JL.SERAYU X/73 SUMAMPIR PWT',
                'cust_notelp' => '08122721824',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            296 =>
            array (
                'idcust' => 837,
                'cust_nomor' => 'MP00716',
                'cust_nama' => 'OKA',
                'cust_alamat' => 'JL.KALIBENER 640 PWT',
                'cust_notelp' => '632891',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            297 =>
            array (
                'idcust' => 838,
                'cust_nomor' => 'MP00712',
                'cust_nama' => 'ODES',
                'cust_alamat' => 'STASIUN GLOBAL PWT',
                'cust_notelp' => '081322220227',
                'cust_date' => '2007-03-31',
                'cust_author' => 'admin',
            ),
            298 =>
            array (
                'idcust' => 839,
                'cust_nomor' => 'MP00644',
                'cust_nama' => 'OELLY',
                'cust_alamat' => 'P.KEMERDEKAAN GG MERPATI 7 PWT',
                'cust_notelp' => '081327359989',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            299 =>
            array (
                'idcust' => 840,
                'cust_nomor' => 'MP00627',
                'cust_nama' => 'ONEL',
                'cust_alamat' => 'MADRANI GG SADEWA PWT',
                'cust_notelp' => '0281641270',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            300 =>
            array (
                'idcust' => 841,
                'cust_nomor' => 'MP00789',
                'cust_nama' => 'POPI H',
                'cust_alamat' => 'JL.SOEPARNO PWT',
                'cust_notelp' => '0818100465',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            301 =>
            array (
                'idcust' => 842,
                'cust_nomor' => 'MP00800',
                'cust_nama' => 'PHIPIT',
                'cust_alamat' => 'JL.GNG SLAMET VI/2 PURWOSARI PWT',
                'cust_notelp' => '08156984840',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            302 =>
            array (
                'idcust' => 843,
                'cust_nomor' => 'MP00816',
                'cust_nama' => 'PRIHONO',
                'cust_alamat' => 'GG.SEMANGKA KOBER PWT',
                'cust_notelp' => '7641391',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            303 =>
            array (
                'idcust' => 844,
                'cust_nomor' => 'MP00753',
                'cust_nama' => 'PUTRI',
                'cust_alamat' => 'BANK MEGA PWT',
                'cust_notelp' => '0281642726',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            304 =>
            array (
                'idcust' => 845,
                'cust_nomor' => 'MP00788',
                'cust_nama' => 'OQI A.ARRASYID',
                'cust_alamat' => 'JLGNG MURIA 867 PWT',
                'cust_notelp' => '08562366816',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            305 =>
            array (
                'idcust' => 846,
                'cust_nomor' => 'MP00836',
                'cust_nama' => 'Q\'UTH',
                'cust_alamat' => 'JL.GNG.MURIA 44 PWT',
                'cust_notelp' => '081391052120',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            306 =>
            array (
                'idcust' => 847,
                'cust_nomor' => 'MP00793',
                'cust_nama' => 'REDANITA F.R',
                'cust_alamat' => 'JL.ADIPURA V/169 PURWOSARI PWT',
                'cust_notelp' => '085227461317',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            307 =>
            array (
                'idcust' => 848,
                'cust_nomor' => 'MP00750',
                'cust_nama' => 'RUDI SEPTIYANT',
                'cust_alamat' => 'JL.AHMAD YANI GGVI 18PWT',
                'cust_notelp' => '0816693578',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            308 =>
            array (
                'idcust' => 849,
                'cust_nomor' => 'MP00758',
                'cust_nama' => 'ROHIM',
                'cust_alamat' => 'YOS SUDARSO 112 PWT',
                'cust_notelp' => '08122667723',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            309 =>
            array (
                'idcust' => 850,
                'cust_nomor' => 'MP00760',
                'cust_nama' => 'RIO',
                'cust_alamat' => 'JL.GERILYA 567 PWT',
                'cust_notelp' => '081548844558',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            310 =>
            array (
                'idcust' => 851,
                'cust_nomor' => 'MP00701',
                'cust_nama' => 'RISA',
                'cust_alamat' => 'GS.2 PWT',
                'cust_notelp' => '085227191011',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            311 =>
            array (
                'idcust' => 852,
                'cust_nomor' => 'MP00713',
                'cust_nama' => 'ROZZAN',
                'cust_alamat' => 'GRAHA MUSTIKA A10 PWT',
                'cust_notelp' => '02817621172',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            312 =>
            array (
                'idcust' => 853,
                'cust_nomor' => 'MP00739',
                'cust_nama' => 'RONI',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081328733469',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            313 =>
            array (
                'idcust' => 854,
                'cust_nomor' => 'MP00720',
                'cust_nama' => 'RARA',
                'cust_alamat' => 'JL.KAMPUS PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            314 =>
            array (
                'idcust' => 855,
                'cust_nomor' => 'MP00723',
                'cust_nama' => 'RIRI',
                'cust_alamat' => 'JLPAHLAWAN 38 04/02 PWT',
                'cust_notelp' => '0815117413342',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            315 =>
            array (
                'idcust' => 856,
                'cust_nomor' => 'MP00642',
                'cust_nama' => 'RANI',
                'cust_alamat' => 'KARANG JAMBU PWT',
                'cust_notelp' => '02817607253',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            316 =>
            array (
                'idcust' => 857,
                'cust_nomor' => 'MP00640',
                'cust_nama' => 'RINI',
                'cust_alamat' => 'KR.SALAM KIDUL 01/02 PWT',
                'cust_notelp' => '0281630786',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            317 =>
            array (
                'idcust' => 858,
                'cust_nomor' => 'MP00632',
                'cust_nama' => 'RIYANTI W',
                'cust_alamat' => 'KOBER GG KENANGA 34',
                'cust_notelp' => '081327907072',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            318 =>
            array (
                'idcust' => 859,
                'cust_nomor' => 'MP00651',
                'cust_nama' => 'RAIS FADHLI HABIBIE',
                'cust_alamat' => 'JLADIPURA 3 114 PWT',
                'cust_notelp' => '0810804720866',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            319 =>
            array (
                'idcust' => 860,
                'cust_nomor' => 'MP00719',
                'cust_nama' => 'SHINTA MR',
                'cust_alamat' => 'GS2 BLOK C 26 PWT',
                'cust_notelp' => '085227461160',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            320 =>
            array (
                'idcust' => 861,
                'cust_nomor' => 'MP00737',
                'cust_nama' => 'SIGIT ',
                'cust_alamat' => 'JL.JAMBU 1109 PWT',
                'cust_notelp' => '08122993274',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            321 =>
            array (
                'idcust' => 862,
                'cust_nomor' => 'MP00740',
                'cust_nama' => 'SISWANTO',
                'cust_alamat' => 'KEDUNG MALANG 2/II PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            322 =>
            array (
                'idcust' => 863,
                'cust_nomor' => 'MP00805',
                'cust_nama' => 'SONY NC',
                'cust_alamat' => 'GS II C-8 SUMAMPIR PWT',
                'cust_notelp' => '7616644',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            323 =>
            array (
                'idcust' => 864,
                'cust_nomor' => 'MP0798',
                'cust_nama' => 'SRI REJEKI',
                'cust_alamat' => 'BANOWATI 24 PWT',
                'cust_notelp' => '02817605559',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            324 =>
            array (
                'idcust' => 865,
                'cust_nomor' => 'MP00814',
                'cust_nama' => 'SUSAN',
                'cust_alamat' => 'PH II/7 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            325 =>
            array (
                'idcust' => 866,
                'cust_nomor' => 'MP00815',
                'cust_nama' => 'SOLIHIN',
                'cust_alamat' => 'GATOT SUBROTO PWT',
                'cust_notelp' => '641247',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            326 =>
            array (
                'idcust' => 867,
                'cust_nomor' => 'MP00824',
                'cust_nama' => 'SUHARYANTO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '0281845740',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            327 =>
            array (
                'idcust' => 868,
                'cust_nomor' => 'MP00747',
                'cust_nama' => 'SUDI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '634788',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            328 =>
            array (
                'idcust' => 869,
                'cust_nomor' => 'MP00660',
                'cust_nama' => 'SUSIE',
                'cust_alamat' => 'JL.AHMAD I 571 SOKARAJA KIDUL',
                'cust_notelp' => '0281694365',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            329 =>
            array (
                'idcust' => 870,
                'cust_nomor' => 'MP00690',
                'cust_nama' => 'SUPRIYADI SE ',
                'cust_alamat' => 'KR,NANGKA I/I PWT',
                'cust_notelp' => '7618401',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            330 =>
            array (
                'idcust' => 871,
                'cust_nomor' => 'MP00779',
                'cust_nama' => 'SRI P',
                'cust_alamat' => 'JL.PEMUDA 1155',
                'cust_notelp' => '621431',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            331 =>
            array (
                'idcust' => 872,
                'cust_nomor' => 'MP00650',
                'cust_nama' => 'SAIFULLOH',
                'cust_alamat' => 'CILONGOK AJIBARANG',
                'cust_notelp' => '655520',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            332 =>
            array (
                'idcust' => 873,
                'cust_nomor' => 'MP00755',
                'cust_nama' => 'THESTY A',
                'cust_alamat' => 'KARANGWANGKAL PWT',
                'cust_notelp' => '081548511050',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            333 =>
            array (
                'idcust' => 874,
                'cust_nomor' => 'MP00764',
                'cust_nama' => 'TIKA',
                'cust_alamat' => 'JL.HOPAN PWT',
                'cust_notelp' => '081804084086',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            334 =>
            array (
                'idcust' => 875,
                'cust_nomor' => 'MP00775',
                'cust_nama' => 'TEGUH',
                'cust_alamat' => 'BROBAHAN PWT',
                'cust_notelp' => '081548850509',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            335 =>
            array (
                'idcust' => 876,
                'cust_nomor' => 'MP00704',
                'cust_nama' => 'TONO',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            336 =>
            array (
                'idcust' => 877,
                'cust_nomor' => 'MP00795',
                'cust_nama' => 'TEGUH TRIYANTO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081327298330',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            337 =>
            array (
                'idcust' => 878,
                'cust_nomor' => 'MP00802',
                'cust_nama' => 'TONI',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            338 =>
            array (
                'idcust' => 879,
                'cust_nomor' => 'MP00820',
                'cust_nama' => 'TRI SEPTI MAHARANI',
                'cust_alamat' => 'MANGINJAYA 20 PWT',
                'cust_notelp' => '0281630922',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            339 =>
            array (
                'idcust' => 880,
                'cust_nomor' => 'MP00646',
                'cust_nama' => 'TUKIMAN',
                'cust_alamat' => 'RUKO PH I 15 PWT',
                'cust_notelp' => '081327168904',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            340 =>
            array (
                'idcust' => 881,
                'cust_nomor' => 'MP00683',
                'cust_nama' => 'TOMY',
                'cust_alamat' => 'JL.GUNUNG SALAK 59 PWT',
                'cust_notelp' => '081548853537',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            341 =>
            array (
                'idcust' => 882,
                'cust_nomor' => 'MP00635',
                'cust_nama' => 'TYA',
                'cust_alamat' => 'PALEM INDAH A2/30 PWT',
                'cust_notelp' => '085227033700',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            342 =>
            array (
                'idcust' => 883,
                'cust_nomor' => 'MP00695',
                'cust_nama' => 'UFY',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081567878624',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            343 =>
            array (
                'idcust' => 884,
                'cust_nomor' => 'MP00756',
                'cust_nama' => 'ULFAH',
                'cust_alamat' => 'SOF-PURWOKERTO',
                'cust_notelp' => '0281641888',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            344 =>
            array (
                'idcust' => 885,
                'cust_nomor' => 'MP00649',
                'cust_nama' => 'ULLY INDAH RASMAWATI',
                'cust_alamat' => 'JL.RINGIN TIRTA 15 PWT',
                'cust_notelp' => '08882664050',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            345 =>
            array (
                'idcust' => 886,
                'cust_nomor' => 'MP00791',
                'cust_nama' => 'WIDYA W',
                'cust_alamat' => 'KARANGGUDE KULON PWT',
                'cust_notelp' => '627618',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            346 =>
            array (
                'idcust' => 887,
                'cust_nomor' => 'MP00746',
                'cust_nama' => 'WIDODO',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '08122988442',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            347 =>
            array (
                'idcust' => 888,
                'cust_nomor' => 'MP00734',
                'cust_nama' => 'WIWID',
                'cust_alamat' => 'JL.GEREJA 32 PWT',
                'cust_notelp' => '081385985307',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            348 =>
            array (
                'idcust' => 889,
                'cust_nomor' => 'MP01611',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'GS II PWT',
                'cust_notelp' => '085227013700',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            349 =>
            array (
                'idcust' => 890,
                'cust_nomor' => 'MP01612',
                'cust_nama' => 'ULI',
                'cust_alamat' => 'KETAPANG INDAH PWT',
                'cust_notelp' => '6844223',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            350 =>
            array (
                'idcust' => 891,
                'cust_nomor' => 'MP01613',
                'cust_nama' => 'TYA',
                'cust_alamat' => 'LIMAS AGUNG BLOK C D4 PWT',
                'cust_notelp' => '633497',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            351 =>
            array (
                'idcust' => 892,
                'cust_nomor' => 'MP01614',
                'cust_nama' => 'PUTRI',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '080804826663',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            352 =>
            array (
                'idcust' => 893,
                'cust_nomor' => 'MP00731',
                'cust_nama' => 'WIDA ZORAEDA/NOPHE',
                'cust_alamat' => 'JL.KH AGUS SALIM 7 KRG PUCUNG PWT',
                'cust_notelp' => '0281622146',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            353 =>
            array (
                'idcust' => 894,
                'cust_nomor' => 'MP00628',
                'cust_nama' => 'YUDI',
                'cust_alamat' => 'JL.OVIS 4 PWT',
                'cust_notelp' => '081804760822',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            354 =>
            array (
                'idcust' => 895,
                'cust_nomor' => 'MP00669',
                'cust_nama' => 'YUNI',
                'cust_alamat' => 'PH VIII/50 PWT',
                'cust_notelp' => '625404',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            355 =>
            array (
                'idcust' => 896,
                'cust_nomor' => 'MP00673',
                'cust_nama' => 'YUYUN',
                'cust_alamat' => 'JL.KRG KOBAR 15 PWT',
                'cust_notelp' => '08174102385',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            356 =>
            array (
                'idcust' => 897,
                'cust_nomor' => 'MP00697',
                'cust_nama' => 'YUSSICA F',
                'cust_alamat' => 'PONDOK INDAH BLOK D 23/24 PWT',
                'cust_notelp' => '081391070090',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            357 =>
            array (
                'idcust' => 898,
                'cust_nomor' => 'MP00767',
                'cust_nama' => 'YOSEPH HARY P',
                'cust_alamat' => 'JL.DR.SOEHARSO 1 PWT',
                'cust_notelp' => '7608203',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            358 =>
            array (
                'idcust' => 899,
                'cust_nomor' => 'MP00708',
                'cust_nama' => 'YANTI BBC',
                'cust_alamat' => 'JL.KR.KOBAR PWT',
                'cust_notelp' => '081542999172',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            359 =>
            array (
                'idcust' => 900,
                'cust_nomor' => 'MP01477',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085227500389',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            360 =>
            array (
                'idcust' => 901,
                'cust_nomor' => 'MP01487',
                'cust_nama' => 'HASBULLAH ',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081385593009',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            361 =>
            array (
                'idcust' => 902,
                'cust_nomor' => 'MP01479',
                'cust_nama' => 'IDA',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '085869777276',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            362 =>
            array (
                'idcust' => 903,
                'cust_nomor' => 'MP01480',
                'cust_nama' => 'WIWIT',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '085227572038',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            363 =>
            array (
                'idcust' => 904,
                'cust_nomor' => 'MP01481',
                'cust_nama' => 'ARYO',
                'cust_alamat' => 'KODIM PWT',
                'cust_notelp' => '085227579090',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            364 =>
            array (
                'idcust' => 905,
                'cust_nomor' => 'MP01482',
                'cust_nama' => 'RARAS',
                'cust_alamat' => 'BATURADEN PWT',
                'cust_notelp' => '085227447472',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            365 =>
            array (
                'idcust' => 906,
                'cust_nomor' => 'MP01483',
                'cust_nama' => 'BAGUS',
                'cust_alamat' => 'JLKSATRIAN 3 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            366 =>
            array (
                'idcust' => 907,
                'cust_nomor' => 'MP01484',
                'cust_nama' => 'JAMES',
                'cust_alamat' => 'TANJUNG PWT',
                'cust_notelp' => '08179132800',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            367 =>
            array (
                'idcust' => 908,
                'cust_nomor' => 'MP01485',
                'cust_nama' => 'FIRMAN',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '08139136781',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            368 =>
            array (
                'idcust' => 910,
                'cust_nomor' => 'MP01615',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081327561106',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            369 =>
            array (
                'idcust' => 911,
                'cust_nomor' => 'MP01616',
                'cust_nama' => 'NANA',
                'cust_alamat' => 'PERUM.SUMAMPIR JL.SERAYU 13 104 PWT',
                'cust_notelp' => '0281632206',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            370 =>
            array (
                'idcust' => 912,
                'cust_nomor' => 'MP01617',
                'cust_nama' => 'AVEST KOAS UPN',
                'cust_alamat' => 'JL KALIJAGA 65 PWT',
                'cust_notelp' => '08158739246',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            371 =>
            array (
                'idcust' => 913,
                'cust_nomor' => 'MP01486',
                'cust_nama' => 'RENI',
                'cust_alamat' => 'PURWOKENCANA PWT',
                'cust_notelp' => '081802812478',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            372 =>
            array (
                'idcust' => 914,
                'cust_nomor' => 'MP01618',
                'cust_nama' => 'ANGELINA',
                'cust_alamat' => 'YOS SUDARMO 18 PWT',
                'cust_notelp' => '081804841200',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            373 =>
            array (
                'idcust' => 915,
                'cust_nomor' => 'MP01488',
                'cust_nama' => 'IDGAS PUTRA',
                'cust_alamat' => 'MANGUNJAYA PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            374 =>
            array (
                'idcust' => 916,
                'cust_nomor' => 'MP01619',
                'cust_nama' => 'RARA',
                'cust_alamat' => 'JL PERENG 23 PWT',
                'cust_notelp' => '0281639289',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            375 =>
            array (
                'idcust' => 917,
                'cust_nomor' => 'MP01489',
                'cust_nama' => 'SELVI',
                'cust_alamat' => 'GURANG MANGU PWT',
                'cust_notelp' => '081327664407',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            376 =>
            array (
                'idcust' => 918,
                'cust_nomor' => 'MP01490',
                'cust_nama' => 'NETI',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '085647910009',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            377 =>
            array (
                'idcust' => 919,
                'cust_nomor' => 'MP01491',
                'cust_nama' => 'WIWI',
                'cust_alamat' => 'DR.SUPARNO 27 KRG.WANGKAL PWT',
                'cust_notelp' => '081548875738',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            378 =>
            array (
                'idcust' => 920,
                'cust_nomor' => 'MP01492',
                'cust_nama' => 'ZAENI',
                'cust_alamat' => 'PASIR WETAN KRG LEWAS ',
                'cust_notelp' => '081542903969',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            379 =>
            array (
                'idcust' => 921,
                'cust_nomor' => 'MP01493',
                'cust_nama' => 'ARI',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '085227170606',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            380 =>
            array (
                'idcust' => 922,
                'cust_nomor' => 'MP01478',
                'cust_nama' => 'HERMINTO',
                'cust_alamat' => 'JL.ASATAKA ARCAWINANGUN PWT',
                'cust_notelp' => '081548883848',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            381 =>
            array (
                'idcust' => 923,
                'cust_nomor' => 'MP01494',
                'cust_nama' => 'DEDIK',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '7617935',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            382 =>
            array (
                'idcust' => 924,
                'cust_nomor' => 'MP01495',
                'cust_nama' => 'NITA',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '627831',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            383 =>
            array (
                'idcust' => 925,
                'cust_nomor' => 'MP01496',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'GLEMPANG PWT',
                'cust_notelp' => '081328600698',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            384 =>
            array (
                'idcust' => 926,
                'cust_nomor' => 'MP01497',
                'cust_nama' => 'PUJI ',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            385 =>
            array (
                'idcust' => 927,
                'cust_nomor' => 'MP01498',
                'cust_nama' => 'DESTI',
                'cust_alamat' => 'CENDRAWASIH PWT',
                'cust_notelp' => '085227494994',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            386 =>
            array (
                'idcust' => 928,
                'cust_nomor' => 'MP01499',
                'cust_nama' => 'YAHMAN',
                'cust_alamat' => 'POLRES PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            387 =>
            array (
                'idcust' => 929,
                'cust_nomor' => 'MP01500',
                'cust_nama' => 'LUCKY HERERA',
                'cust_alamat' => 'JL.KAMPUS PWT',
                'cust_notelp' => '081575706762',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            388 =>
            array (
                'idcust' => 930,
                'cust_nomor' => 'MP01501',
                'cust_nama' => 'CHRISTIAN',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081327999666',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            389 =>
            array (
                'idcust' => 931,
                'cust_nomor' => 'MP01502',
                'cust_nama' => 'TITIN',
                'cust_alamat' => 'REJASARI PWT',
                'cust_notelp' => '081572880776',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            390 =>
            array (
                'idcust' => 932,
                'cust_nomor' => 'MP01503',
                'cust_nama' => 'ANGGA',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '639996',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            391 =>
            array (
                'idcust' => 933,
                'cust_nomor' => 'MP01504',
                'cust_nama' => 'ULLY',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '08562615000',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            392 =>
            array (
                'idcust' => 934,
                'cust_nomor' => 'MP01505',
                'cust_nama' => 'GATI',
                'cust_alamat' => 'JL.SEKOLAH TEKHNIK 27 PWT',
                'cust_notelp' => '7609770',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            393 =>
            array (
                'idcust' => 935,
                'cust_nomor' => 'MP01506',
                'cust_nama' => 'INUNG',
                'cust_alamat' => 'DR.ANGKA PWT',
                'cust_notelp' => '08156701141',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            394 =>
            array (
                'idcust' => 936,
                'cust_nomor' => 'MP01507',
                'cust_nama' => 'BRAM',
                'cust_alamat' => 'DR.ANGKA 35 PWT',
                'cust_notelp' => '628773',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            395 =>
            array (
                'idcust' => 937,
                'cust_nomor' => 'MP01508',
                'cust_nama' => 'HENTI',
                'cust_alamat' => 'PATIKRAJA',
                'cust_notelp' => '081327169898',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            396 =>
            array (
                'idcust' => 938,
                'cust_nomor' => 'MP01509',
                'cust_nama' => 'DEWI ',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '6844687',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            397 =>
            array (
                'idcust' => 939,
                'cust_nomor' => 'MP01510',
                'cust_nama' => 'CIKO',
                'cust_alamat' => 'JL.TENTARA PELAJAR PWT',
                'cust_notelp' => '085227550500',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            398 =>
            array (
                'idcust' => 940,
                'cust_nomor' => 'MP01511',
                'cust_nama' => 'BENI',
                'cust_alamat' => 'KRG.SALAM PWT',
                'cust_notelp' => '081327408370',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            399 =>
            array (
                'idcust' => 941,
                'cust_nomor' => 'MP01512',
                'cust_nama' => 'LADI INTAN',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081392999558',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            400 =>
            array (
                'idcust' => 942,
                'cust_nomor' => 'MP01513',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '0818276884',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            401 =>
            array (
                'idcust' => 943,
                'cust_nomor' => 'MP01514',
                'cust_nama' => 'YOYO',
                'cust_alamat' => 'JL.KRANJI 17 PWT',
                'cust_notelp' => '635939',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            402 =>
            array (
                'idcust' => 944,
                'cust_nomor' => 'MP01515',
                'cust_nama' => 'ARIF GESENG ',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327679417',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            403 =>
            array (
                'idcust' => 945,
                'cust_nomor' => 'MP01516',
                'cust_nama' => 'WINA',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            404 =>
            array (
                'idcust' => 946,
                'cust_nomor' => 'MP01517',
                'cust_nama' => 'ARDIANA',
                'cust_alamat' => 'BANTARSOKA PWT',
                'cust_notelp' => '7604049',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            405 =>
            array (
                'idcust' => 947,
                'cust_nomor' => 'MP01518',
                'cust_nama' => 'HAMIDUN',
                'cust_alamat' => 'A.YANI PWT',
                'cust_notelp' => '627043',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            406 =>
            array (
                'idcust' => 948,
                'cust_nomor' => 'MP01519',
                'cust_nama' => 'DINA',
                'cust_alamat' => 'KRG.KLESEM PWT',
                'cust_notelp' => '7633753',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            407 =>
            array (
                'idcust' => 949,
                'cust_nomor' => 'MP01520',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '7655282',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            408 =>
            array (
                'idcust' => 950,
                'cust_nomor' => 'MP01521',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'HR.BUNYAMIN PWT',
                'cust_notelp' => '081391150009',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            409 =>
            array (
                'idcust' => 951,
                'cust_nomor' => 'MP01522',
                'cust_nama' => 'ATI',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '891629',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            410 =>
            array (
                'idcust' => 952,
                'cust_nomor' => 'MP01523',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'KROYA CLP',
                'cust_notelp' => '081327490686',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            411 =>
            array (
                'idcust' => 953,
                'cust_nomor' => 'MP01524',
                'cust_nama' => 'ALVIRA',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '08882690002',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            412 =>
            array (
                'idcust' => 954,
                'cust_nomor' => 'MP01525',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'KARANG LAWU SOKARAJA',
                'cust_notelp' => '08164280087',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            413 =>
            array (
                'idcust' => 955,
                'cust_nomor' => 'MP01526',
                'cust_nama' => 'SRI',
                'cust_alamat' => 'KARANG TURI PUTRA KOMBAS PWT',
                'cust_notelp' => '632961',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            414 =>
            array (
                'idcust' => 956,
                'cust_nomor' => 'MP01527',
                'cust_nama' => 'INDRI',
                'cust_alamat' => 'KOMBAS PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            415 =>
            array (
                'idcust' => 957,
                'cust_nomor' => 'MP01528',
                'cust_nama' => 'ITA',
                'cust_alamat' => 'HR.BUNYAMIN 100A PWT',
                'cust_notelp' => '081931744976',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            416 =>
            array (
                'idcust' => 958,
                'cust_nomor' => 'MP01529',
                'cust_nama' => 'DHINA',
                'cust_alamat' => 'ARCAWINANGUN PWT',
                'cust_notelp' => '081914938764',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            417 =>
            array (
                'idcust' => 959,
                'cust_nomor' => 'MP01530',
                'cust_nama' => 'ERIN',
                'cust_alamat' => 'PORKA PWT',
                'cust_notelp' => '085689780001',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            418 =>
            array (
                'idcust' => 960,
                'cust_nomor' => 'MP01531',
                'cust_nama' => 'RATIH/GUNTUR',
                'cust_alamat' => 'PERENG PWT',
                'cust_notelp' => '630095',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            419 =>
            array (
                'idcust' => 961,
                'cust_nomor' => 'MP01532',
                'cust_nama' => 'RICO',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '085647690600',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            420 =>
            array (
                'idcust' => 962,
                'cust_nomor' => 'MP01533',
                'cust_nama' => 'SRI',
                'cust_alamat' => 'GATOT SUBROTO PWT',
                'cust_notelp' => '7623488',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            421 =>
            array (
                'idcust' => 963,
                'cust_nomor' => 'MP01534',
                'cust_nama' => 'NOVI',
                'cust_alamat' => 'JL.KAMPUS',
                'cust_notelp' => '081327538607',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            422 =>
            array (
                'idcust' => 964,
                'cust_nomor' => 'MP01538',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'DR.ANGKA 53 PWT',
                'cust_notelp' => '085227578087',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            423 =>
            array (
                'idcust' => 965,
                'cust_nomor' => 'MP01539',
                'cust_nama' => 'ONGKI',
                'cust_alamat' => 'SIDABOWA PATIKRAJA',
                'cust_notelp' => '7600455',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            424 =>
            array (
                'idcust' => 966,
                'cust_nomor' => 'MP01074',
                'cust_nama' => 'PIPIT',
                'cust_alamat' => 'GUNUNG SUMBING 1B PWT',
                'cust_notelp' => '081548831799',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            425 =>
            array (
                'idcust' => 967,
                'cust_nomor' => 'MP01620',
                'cust_nama' => 'LEONITA',
                'cust_alamat' => 'GUNUNG SUMBING SUMBING 1B PWT',
                'cust_notelp' => '081802820333',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            426 =>
            array (
                'idcust' => 968,
                'cust_nomor' => 'MP01621',
                'cust_nama' => 'IIM',
                'cust_alamat' => 'JAKARTA',
                'cust_notelp' => '081808392767',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            427 =>
            array (
                'idcust' => 969,
                'cust_nomor' => 'MP01540',
                'cust_nama' => 'DANITATO',
                'cust_alamat' => 'GLOBAL',
                'cust_notelp' => '081327322112',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            428 =>
            array (
                'idcust' => 970,
                'cust_nomor' => 'MP01541',
                'cust_nama' => 'VIKA',
                'cust_alamat' => 'SAWANGAN PWT',
                'cust_notelp' => '643431',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            429 =>
            array (
                'idcust' => 971,
                'cust_nomor' => 'MP01542',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'TANJUNG ELOK PWT',
                'cust_notelp' => '081327421959',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            430 =>
            array (
                'idcust' => 972,
                'cust_nomor' => 'MP01543',
                'cust_nama' => 'PUTRI',
                'cust_alamat' => 'JL.BANOWATI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            431 =>
            array (
                'idcust' => 973,
                'cust_nomor' => 'MP01544',
                'cust_nama' => 'YONNI',
                'cust_alamat' => 'KRG.KLESEMPWT',
                'cust_notelp' => '081327213976',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            432 =>
            array (
                'idcust' => 974,
                'cust_nomor' => 'MP01545',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '.85227401177',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            433 =>
            array (
                'idcust' => 975,
                'cust_nomor' => 'MP01546',
                'cust_nama' => 'HANDOKO',
                'cust_alamat' => 'LIMAS AGUNG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            434 =>
            array (
                'idcust' => 976,
                'cust_nomor' => 'MP01547',
                'cust_nama' => 'MCHHISNI',
                'cust_alamat' => 'KEBORONGAN CLP',
                'cust_notelp' => '02825291160',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            435 =>
            array (
                'idcust' => 977,
                'cust_nomor' => 'MP01548',
                'cust_nama' => 'ELI',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '081327219000',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            436 =>
            array (
                'idcust' => 978,
                'cust_nomor' => 'MP01549',
                'cust_nama' => 'ELYN',
                'cust_alamat' => 'BANCAR KEMBAR 6/10 PWT',
                'cust_notelp' => '085227001718',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            437 =>
            array (
                'idcust' => 979,
                'cust_nomor' => 'MP01550',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'ADYAKSA 232 PWT',
                'cust_notelp' => '640183',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            438 =>
            array (
                'idcust' => 980,
                'cust_nomor' => 'MP01551',
                'cust_nama' => 'ASTRI',
                'cust_alamat' => 'JATWIN 24 PWT',
                'cust_notelp' => '08122956779',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            439 =>
            array (
                'idcust' => 981,
                'cust_nomor' => 'MP01552',
                'cust_nama' => 'ARYO',
                'cust_alamat' => 'KRANJI PWT',
                'cust_notelp' => '08122717744',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            440 =>
            array (
                'idcust' => 982,
                'cust_nomor' => 'MP01453',
                'cust_nama' => 'ANDI HERMANSYAH',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '081384156080',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            441 =>
            array (
                'idcust' => 983,
                'cust_nomor' => 'MP01454',
                'cust_nama' => 'KARIN',
                'cust_alamat' => 'JL.STASIUN PWT',
                'cust_notelp' => '081327407304',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            442 =>
            array (
                'idcust' => 984,
                'cust_nomor' => 'MP01455',
                'cust_nama' => 'SHINTA',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '08586991837',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            443 =>
            array (
                'idcust' => 985,
                'cust_nomor' => 'MP01456',
                'cust_nama' => 'NINA',
                'cust_alamat' => 'MARTADIREJA PWT',
                'cust_notelp' => '632747',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            444 =>
            array (
                'idcust' => 986,
                'cust_nomor' => 'MP01457',
                'cust_nama' => 'TYO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            445 =>
            array (
                'idcust' => 987,
                'cust_nomor' => 'MP01458',
                'cust_nama' => 'NIBI',
                'cust_alamat' => 'JL.BIMA 63 CLP',
                'cust_notelp' => '085227264410',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            446 =>
            array (
                'idcust' => 988,
                'cust_nomor' => 'MP01459',
                'cust_nama' => 'SHINTA',
                'cust_alamat' => 'PORKA PWT',
                'cust_notelp' => '0281653362',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            447 =>
            array (
                'idcust' => 989,
                'cust_nomor' => 'MP01460',
                'cust_nama' => 'YOKO',
                'cust_alamat' => 'SAMPANG CLP',
                'cust_notelp' => '085647903709',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            448 =>
            array (
                'idcust' => 990,
                'cust_nomor' => 'MP01461',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '085226126054',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            449 =>
            array (
                'idcust' => 991,
                'cust_nomor' => 'MP01462',
                'cust_nama' => 'WIDYA',
                'cust_alamat' => 'PERUM GKI BLOK J 12PWT',
                'cust_notelp' => '628220',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            450 =>
            array (
                'idcust' => 992,
                'cust_nomor' => 'MP01463',
                'cust_nama' => 'SINGGIH',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081328718727',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            451 =>
            array (
                'idcust' => 993,
                'cust_nomor' => 'MP01464',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '640797',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            452 =>
            array (
                'idcust' => 994,
                'cust_nomor' => 'MP01465',
                'cust_nama' => 'ADVEN',
                'cust_alamat' => 'DOKTER ANGKA PWT',
                'cust_notelp' => '081802804808',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            453 =>
            array (
                'idcust' => 995,
                'cust_nomor' => 'MP01466',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'KRG.KLESEM PWT',
                'cust_notelp' => '085647826300',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            454 =>
            array (
                'idcust' => 996,
                'cust_nomor' => 'MP01467',
                'cust_nama' => 'SAFRINA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081394599390',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            455 =>
            array (
                'idcust' => 997,
                'cust_nomor' => 'MP01468',
                'cust_nama' => 'NINA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            456 =>
            array (
                'idcust' => 998,
                'cust_nomor' => 'MP01469',
                'cust_nama' => 'SUSI',
                'cust_alamat' => 'DUKU WALUH',
                'cust_notelp' => '641660',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            457 =>
            array (
                'idcust' => 999,
                'cust_nomor' => 'MP01470',
                'cust_nama' => 'ARI',
                'cust_alamat' => 'LIMAS PERMAI K7 PWT',
                'cust_notelp' => '08122737160',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            458 =>
            array (
                'idcust' => 1000,
                'cust_nomor' => 'MP01471',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'DR.SUPARNO ARCAWINANGUN PWT',
                'cust_notelp' => '085647869444',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            459 =>
            array (
                'idcust' => 1001,
                'cust_nomor' => 'MP01472',
                'cust_nama' => 'VIKO',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085647341184',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            460 =>
            array (
                'idcust' => 1002,
                'cust_nomor' => 'MP01473',
                'cust_nama' => 'UNGGUL',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '081327494953',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            461 =>
            array (
                'idcust' => 1003,
                'cust_nomor' => 'MP01474',
                'cust_nama' => 'OFI',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '081327253900',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            462 =>
            array (
                'idcust' => 1004,
                'cust_nomor' => 'MP01475',
                'cust_nama' => 'PITA',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '640797',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            463 =>
            array (
                'idcust' => 1005,
                'cust_nomor' => 'MP01476',
                'cust_nama' => 'INDAH',
                'cust_alamat' => 'GS PWT',
                'cust_notelp' => '085647767890',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            464 =>
            array (
                'idcust' => 1006,
                'cust_nomor' => 'MP01624',
                'cust_nama' => 'BAGUS',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227000668',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            465 =>
            array (
                'idcust' => 1007,
                'cust_nomor' => 'MP01622',
                'cust_nama' => 'VINA',
                'cust_alamat' => 'ASPOL SPN PWT',
                'cust_notelp' => '085227441999',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            466 =>
            array (
                'idcust' => 1008,
                'cust_nomor' => 'MP01623',
                'cust_nama' => 'IRIN',
                'cust_alamat' => 'PERUMAHAN TANJUNG PWT',
                'cust_notelp' => '085227543337',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            467 =>
            array (
                'idcust' => 1009,
                'cust_nomor' => 'MP01553',
                'cust_nama' => 'BUNGA',
                'cust_alamat' => 'SUNAN KALIJAGA PWT',
                'cust_notelp' => '08568500804',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            468 =>
            array (
                'idcust' => 1010,
                'cust_nomor' => 'MP01554',
                'cust_nama' => 'EMA',
                'cust_alamat' => 'SUNAN KALIJAGA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            469 =>
            array (
                'idcust' => 1011,
                'cust_nomor' => 'MP01566',
                'cust_nama' => 'RINI',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            470 =>
            array (
                'idcust' => 1012,
                'cust_nomor' => 'MP01567',
                'cust_nama' => 'INDRA/LINA',
                'cust_alamat' => 'PH 6/31 PWT',
                'cust_notelp' => '640915',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            471 =>
            array (
                'idcust' => 1013,
                'cust_nomor' => 'MP01568',
                'cust_nama' => 'ERNA',
                'cust_alamat' => 'JL.DR SUPARNO 1 PWT',
                'cust_notelp' => '081931772426',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            472 =>
            array (
                'idcust' => 1014,
                'cust_nomor' => 'MP01569',
                'cust_nama' => 'HESTI',
                'cust_alamat' => 'PONDOK KENCANA PWT',
                'cust_notelp' => '081327566845',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            473 =>
            array (
                'idcust' => 1015,
                'cust_nomor' => 'MP01570',
                'cust_nama' => 'RETNI',
                'cust_alamat' => 'JL.RY.NOTOG 15',
                'cust_notelp' => '085227444669',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            474 =>
            array (
                'idcust' => 1016,
                'cust_nomor' => 'MP01571',
                'cust_nama' => 'ZAZA',
                'cust_alamat' => 'TANJUNG ELOK PWT',
                'cust_notelp' => '081327037676',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            475 =>
            array (
                'idcust' => 1017,
                'cust_nomor' => 'MP01572',
                'cust_nama' => 'WAN',
                'cust_alamat' => 'KAUMAN LAMA GI 776',
                'cust_notelp' => '633454',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            476 =>
            array (
                'idcust' => 1018,
                'cust_nomor' => 'MP01573',
                'cust_nama' => 'PUTUT',
                'cust_alamat' => 'GRIYA SATRIA BE AZ PWT',
                'cust_notelp' => '081327459605',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            477 =>
            array (
                'idcust' => 1019,
                'cust_nomor' => 'MP01574',
                'cust_nama' => 'ARIS',
                'cust_alamat' => 'PASIR PURWOKERTO',
                'cust_notelp' => '081391335672',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            478 =>
            array (
                'idcust' => 1020,
                'cust_nomor' => 'MP01555',
                'cust_nama' => 'MARWATI SANJAYA',
                'cust_alamat' => 'PADAMARA PURBALINGGA',
                'cust_notelp' => '08882664826',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            479 =>
            array (
                'idcust' => 1021,
                'cust_nomor' => 'MP01556',
                'cust_nama' => 'IRENE',
                'cust_alamat' => 'JL.S PARMAN 14 PWT',
                'cust_notelp' => '625812',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            480 =>
            array (
                'idcust' => 1022,
                'cust_nomor' => 'MP01557',
                'cust_nama' => 'KIKI',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081327077611',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            481 =>
            array (
                'idcust' => 1023,
                'cust_nomor' => 'MP01558',
                'cust_nama' => 'AKIN',
                'cust_alamat' => 'DUKUWALUH PWT',
                'cust_notelp' => '081391012225',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            482 =>
            array (
                'idcust' => 1024,
                'cust_nomor' => 'MP01559',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'KEBUMEN',
                'cust_notelp' => '0287382578',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            483 =>
            array (
                'idcust' => 1025,
                'cust_nomor' => 'MP01560',
                'cust_nama' => 'CHAVID',
                'cust_alamat' => 'KAMULIYAN TAMBAK PWT',
                'cust_notelp' => '08164899917',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            484 =>
            array (
                'idcust' => 1026,
                'cust_nomor' => 'MP01561',
                'cust_nama' => 'AHMAD',
                'cust_alamat' => 'KAMULIYAN TAMBAK PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            485 =>
            array (
                'idcust' => 1027,
                'cust_nomor' => 'MP01562',
                'cust_nama' => 'HERLIN',
                'cust_alamat' => 'JL.GANG SINGGALANG BANCARKEMBAR PWT',
                'cust_notelp' => '634297',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            486 =>
            array (
                'idcust' => 1028,
                'cust_nomor' => 'MP01563',
                'cust_nama' => 'MILA',
                'cust_alamat' => 'KOMBAS PURWOKERTO',
                'cust_notelp' => '085227177718',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            487 =>
            array (
                'idcust' => 1029,
                'cust_nomor' => 'MP01564',
                'cust_nama' => 'TOMO',
                'cust_alamat' => 'KOBER PURWOKERTO',
                'cust_notelp' => '081327598000',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            488 =>
            array (
                'idcust' => 1030,
                'cust_nomor' => 'MP01565',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'JL.DAMAR TELUK PWT',
                'cust_notelp' => '081327001003',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            489 =>
            array (
                'idcust' => 1031,
                'cust_nomor' => 'MP01089',
                'cust_nama' => 'RUNDI RANTAU W',
                'cust_alamat' => 'JL.KH AGUS SALIM KR.PUCUNG PWT',
                'cust_notelp' => '08882686551',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            490 =>
            array (
                'idcust' => 1032,
                'cust_nomor' => 'MP00961',
                'cust_nama' => 'NANANK',
                'cust_alamat' => 'PERUM LEDUG PWT',
                'cust_notelp' => '081327773477',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            491 =>
            array (
                'idcust' => 1033,
                'cust_nomor' => 'MP00950',
                'cust_nama' => 'NUKE',
                'cust_alamat' => 'JL.A YANI 28 PWT',
                'cust_notelp' => '081327152722',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            492 =>
            array (
                'idcust' => 1034,
                'cust_nomor' => 'MP00936',
                'cust_nama' => 'KRISNA',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '081327275413',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            493 =>
            array (
                'idcust' => 1035,
                'cust_nomor' => 'MP01195',
                'cust_nama' => 'DEVI',
                'cust_alamat' => 'JL.KOL SUGIONO 35 KRANJI PWT',
                'cust_notelp' => '085227636890',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            494 =>
            array (
                'idcust' => 1036,
                'cust_nomor' => 'MP00594',
                'cust_nama' => 'ODHI',
                'cust_alamat' => 'GRIYA SATRIA K-20 PWT',
                'cust_notelp' => '081327030343',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            495 =>
            array (
                'idcust' => 1037,
                'cust_nomor' => 'MP01184',
                'cust_nama' => 'TEGUH IMAM P',
                'cust_alamat' => 'BOBOSAN 03/I PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            496 =>
            array (
                'idcust' => 1038,
                'cust_nomor' => 'MP01307',
                'cust_nama' => 'ELEKTRIKA',
                'cust_alamat' => 'JL.KOBER GG.RISWAN 23 PWT',
                'cust_notelp' => '631710',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            497 =>
            array (
                'idcust' => 1039,
                'cust_nomor' => 'MP01379',
                'cust_nama' => 'LIA',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '085227477988',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            498 =>
            array (
                'idcust' => 1040,
                'cust_nomor' => 'MP01445',
                'cust_nama' => 'WIJI SWANDARU',
                'cust_alamat' => 'JATIWINANGUN 11D PWT',
                'cust_notelp' => '08562612456',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            499 =>
            array (
                'idcust' => 1041,
                'cust_nomor' => 'MP01390',
                'cust_nama' => 'ADI PRASETYO',
                'cust_alamat' => 'DESA KEDONDONG SOKARAJA',
                'cust_notelp' => '08562613131',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
        ));
        \DB::table('mgh_customer')->insert(array (
            0 =>
            array (
                'idcust' => 1042,
                'cust_nomor' => 'MP01282',
                'cust_nama' => 'WENDY.M',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327491300',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            1 =>
            array (
                'idcust' => 1043,
                'cust_nomor' => 'MP01213',
                'cust_nama' => 'HARTONO S',
                'cust_alamat' => 'JL.SARWODADI III/882',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            2 =>
            array (
                'idcust' => 1044,
                'cust_nomor' => 'MP01313',
                'cust_nama' => 'ADELINA RATIH',
                'cust_alamat' => 'JL.MENUR NO.35 MERSI PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            3 =>
            array (
                'idcust' => 1045,
                'cust_nomor' => 'MP01317',
                'cust_nama' => 'NOVI PURWANTI',
                'cust_alamat' => 'JL.KALIBENER 672 RT.04/02',
                'cust_notelp' => '081327480110',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            4 =>
            array (
                'idcust' => 1046,
                'cust_nomor' => 'MP01235',
                'cust_nama' => 'LEO',
                'cust_alamat' => 'KARANG PUCUNG MJNANG',
                'cust_notelp' => '081802420663',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            5 =>
            array (
                'idcust' => 1047,
                'cust_nomor' => 'MP01096',
                'cust_nama' => 'IRMAN',
                'cust_alamat' => 'JL.MASJID 312 PWT',
                'cust_notelp' => '08159601060',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            6 =>
            array (
                'idcust' => 1048,
                'cust_nomor' => 'MP00971',
                'cust_nama' => 'RIO',
                'cust_alamat' => 'JL.PEMUNA NO.19 PWT',
                'cust_notelp' => '081327270737',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            7 =>
            array (
                'idcust' => 1049,
                'cust_nomor' => 'MP01009',
                'cust_nama' => 'EKO PRASETYO',
                'cust_alamat' => 'JL.DAMAR III/12 PERUMTEL PWT',
                'cust_notelp' => '08122675811',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            8 =>
            array (
                'idcust' => 1050,
                'cust_nomor' => 'MP01408',
                'cust_nama' => 'INE',
                'cust_alamat' => 'PH VI/60',
                'cust_notelp' => '085647901234',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            9 =>
            array (
                'idcust' => 1051,
                'cust_nomor' => 'MP01405',
                'cust_nama' => 'VITA',
                'cust_alamat' => 'PERUM GRIYA SATRIA SUMAMPIR INDAH BLOK Q-18 PWT',
                'cust_notelp' => '081327943222',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            10 =>
            array (
                'idcust' => 1052,
                'cust_nomor' => 'MP01406',
                'cust_nama' => 'LENI',
                'cust_alamat' => 'OVIS 8 PWT',
                'cust_notelp' => '085223456408',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            11 =>
            array (
                'idcust' => 1053,
                'cust_nomor' => 'MP01398',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '081542938631',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            12 =>
            array (
                'idcust' => 1054,
                'cust_nomor' => 'MP01404',
                'cust_nama' => 'DEWI TANIA',
                'cust_alamat' => 'JLN.KOMBAS I NO.613',
                'cust_notelp' => '08888303560',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            13 =>
            array (
                'idcust' => 1055,
                'cust_nomor' => 'MP01403',
                'cust_nama' => 'EDU',
                'cust_alamat' => 'JL. H.R. BOENYAMIN NO.142',
                'cust_notelp' => '085647606555',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            14 =>
            array (
                'idcust' => 1056,
                'cust_nomor' => 'MP01402',
                'cust_nama' => 'HET UTAMI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '081327042887',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            15 =>
            array (
                'idcust' => 1057,
                'cust_nomor' => 'MP01401',
                'cust_nama' => 'IMAN F.',
                'cust_alamat' => 'JL.OVISDIMAN IV',
                'cust_notelp' => '085227555589',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            16 =>
            array (
                'idcust' => 1058,
                'cust_nomor' => 'MP01400',
                'cust_nama' => 'DIRO',
                'cust_alamat' => 'HR.BUNYAMIN 36 PWT',
                'cust_notelp' => '081325293040',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            17 =>
            array (
                'idcust' => 1059,
                'cust_nomor' => 'MP01399',
                'cust_nama' => 'LATIFAH ZANUAR ',
                'cust_alamat' => 'KEDUNG WRINGIN ',
                'cust_notelp' => '081391215546',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            18 =>
            array (
                'idcust' => 1060,
                'cust_nomor' => 'MP01397',
                'cust_nama' => 'AGUS',
                'cust_alamat' => 'GRIYA SATRIA BLOK 17 PWT',
                'cust_notelp' => '08122907391',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            19 =>
            array (
                'idcust' => 1061,
                'cust_nomor' => 'MP01396',
                'cust_nama' => 'TONI RAFIANTO',
                'cust_alamat' => 'JL.JEND.SUROYO V PWT',
                'cust_notelp' => '081327015181',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            20 =>
            array (
                'idcust' => 1062,
                'cust_nomor' => 'MP01124',
                'cust_nama' => 'DYAH SITO RINI ',
                'cust_alamat' => 'JL.HOS NOTOSUWIRYO PWT',
                'cust_notelp' => '085227549939',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            21 =>
            array (
                'idcust' => 1063,
                'cust_nomor' => 'MP01409',
                'cust_nama' => 'RISKA PERMANA SARI ',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081802818140',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            22 =>
            array (
                'idcust' => 1064,
                'cust_nomor' => 'MP01410',
                'cust_nama' => 'HENRY',
                'cust_alamat' => 'BANYUMAS PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            23 =>
            array (
                'idcust' => 1065,
                'cust_nomor' => 'MP01411',
                'cust_nama' => 'HARI M',
                'cust_alamat' => 'WINDUNEGARA 02/II WANGON CLP',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            24 =>
            array (
                'idcust' => 1066,
                'cust_nomor' => 'MP01036',
                'cust_nama' => 'LALA',
                'cust_alamat' => 'AJIBARANG',
                'cust_notelp' => '0818282184',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            25 =>
            array (
                'idcust' => 1067,
                'cust_nomor' => 'MP01330',
                'cust_nama' => 'SUTARYO',
                'cust_alamat' => 'TIARA PERMAI I BLOK C-8 PWT',
                'cust_notelp' => '08122706672',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            26 =>
            array (
                'idcust' => 1068,
                'cust_nomor' => 'MP01193',
                'cust_nama' => 'FINO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            27 =>
            array (
                'idcust' => 1069,
                'cust_nomor' => 'MP01439',
                'cust_nama' => 'NDONO',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '02817637841',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            28 =>
            array (
                'idcust' => 1070,
                'cust_nomor' => 'MP01437',
                'cust_nama' => 'GITO',
                'cust_alamat' => 'GRIYA SATRIA 2 BLOK N 4 PWT',
                'cust_notelp' => '081328744001',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            29 =>
            array (
                'idcust' => 1071,
                'cust_nomor' => 'MP01434',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'KEMBARAN PWT',
                'cust_notelp' => '08562638899',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            30 =>
            array (
                'idcust' => 1072,
                'cust_nomor' => 'MP00954',
                'cust_nama' => 'IDHA',
                'cust_alamat' => 'KOMBAS PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            31 =>
            array (
                'idcust' => 1073,
                'cust_nomor' => 'MP00924',
                'cust_nama' => 'GALUH ARUM',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '085227642233',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            32 =>
            array (
                'idcust' => 1074,
                'cust_nomor' => 'MP01424',
                'cust_nama' => 'ADITYA SATYA NUGROHO',
                'cust_alamat' => 'JL.OVIST V/IV PWT',
                'cust_notelp' => '08568960666',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            33 =>
            array (
                'idcust' => 1075,
                'cust_nomor' => 'MP01433',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'JL.GANG CERME 36 PWT',
                'cust_notelp' => '081323766061',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            34 =>
            array (
                'idcust' => 1076,
                'cust_nomor' => 'MP01425',
                'cust_nama' => 'DONA',
                'cust_alamat' => 'SUNAN KALIJAGA II BERKOH PWT',
                'cust_notelp' => '085693414429',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            35 =>
            array (
                'idcust' => 1077,
                'cust_nomor' => 'MP01116',
                'cust_nama' => 'ERWIN',
                'cust_alamat' => 'PERUM ABDINEGARA PADAMARA PURBALINGGA',
                'cust_notelp' => '08122724483',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            36 =>
            array (
                'idcust' => 1078,
                'cust_nomor' => 'MP01429',
                'cust_nama' => 'ESA RATNASARI',
                'cust_alamat' => 'JL.GUNUNG SLAMET X PURWOSARI PWT',
                'cust_notelp' => '085647808821',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            37 =>
            array (
                'idcust' => 1079,
                'cust_nomor' => 'MP01385',
                'cust_nama' => 'ECHA HARDIANTI',
                'cust_alamat' => 'JATIWINANGUN GG ARJUNA PWT',
                'cust_notelp' => '081578324072',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            38 =>
            array (
                'idcust' => 1080,
                'cust_nomor' => 'MP01428',
                'cust_nama' => 'FERRY',
                'cust_alamat' => 'BANYUMAS',
                'cust_notelp' => '02817617832',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            39 =>
            array (
                'idcust' => 1081,
                'cust_nomor' => 'MP00848',
                'cust_nama' => 'FERRY',
                'cust_alamat' => 'BOJONGSARI PURBALINGGA',
                'cust_notelp' => '081327975875',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            40 =>
            array (
                'idcust' => 1082,
                'cust_nomor' => 'MP01128',
                'cust_nama' => 'ITA',
                'cust_alamat' => 'NOTOG',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            41 =>
            array (
                'idcust' => 1083,
                'cust_nomor' => 'MP01430',
                'cust_nama' => 'LUQMAN NH',
                'cust_alamat' => 'JL.KOPRAL TANWIR 7 PWT',
                'cust_notelp' => '08152873336',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            42 =>
            array (
                'idcust' => 1084,
                'cust_nomor' => 'MP01210',
                'cust_nama' => 'LUSIAN OKTAVANI',
                'cust_alamat' => 'JL.SUWARJONO 52 KALIBAGOR PWT',
                'cust_notelp' => '7637038',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            43 =>
            array (
                'idcust' => 1085,
                'cust_nomor' => 'MP01423',
                'cust_nama' => 'MIRA',
                'cust_alamat' => 'SIDABOA PATIKRAJA',
                'cust_notelp' => '085227556408',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            44 =>
            array (
                'idcust' => 1086,
                'cust_nomor' => 'MP01438',
                'cust_nama' => 'MITHA',
                'cust_alamat' => 'JLRIYANTO 34 SUMAMPIR PWT',
                'cust_notelp' => '081931927623',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            45 =>
            array (
                'idcust' => 1087,
                'cust_nomor' => 'MP01432',
                'cust_nama' => 'NANANG',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '08122631950',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            46 =>
            array (
                'idcust' => 1088,
                'cust_nomor' => 'MP01626',
                'cust_nama' => 'BAGUS',
                'cust_alamat' => 'MANGUNJAYA PWT',
                'cust_notelp' => '08164285552',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            47 =>
            array (
                'idcust' => 1089,
                'cust_nomor' => 'MP01625',
                'cust_nama' => 'ARIF',
                'cust_alamat' => 'DR.ANGKA 7A PWT',
                'cust_notelp' => '0281635587',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            48 =>
            array (
                'idcust' => 1090,
                'cust_nomor' => 'MP01435',
                'cust_nama' => 'NIKEN INDAH',
                'cust_alamat' => 'PABUARAN RT2/2 PWT',
                'cust_notelp' => '081327220076',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            49 =>
            array (
                'idcust' => 1091,
                'cust_nomor' => 'MP01422',
                'cust_nama' => 'PRASETYO',
                'cust_alamat' => 'JL.MANGUNJAYA GG 5 NO.1 PWT',
                'cust_notelp' => '081326850000',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            50 =>
            array (
                'idcust' => 1092,
                'cust_nomor' => 'MP01436',
                'cust_nama' => 'PERADYA',
                'cust_alamat' => 'JL.JENDRAL SOEPRAPTO IV/1905 PWT',
                'cust_notelp' => '085692368081',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            51 =>
            array (
                'idcust' => 1093,
                'cust_nomor' => 'MP01407',
                'cust_nama' => 'SUMSIATI',
                'cust_alamat' => 'BUKIT LIPAI RT 04/01 RIAU',
                'cust_notelp' => '085647711050',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            52 =>
            array (
                'idcust' => 1094,
                'cust_nomor' => 'MP01427',
                'cust_nama' => 'RYAN',
                'cust_alamat' => 'PERUM WIRASANA INDAH F 13 PBG',
                'cust_notelp' => '896390',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            53 =>
            array (
                'idcust' => 1095,
                'cust_nomor' => 'MP01373',
                'cust_nama' => 'ROCHMAT H.',
                'cust_alamat' => 'GG PELOPOR NO.9A WATUMAS PWT',
                'cust_notelp' => '081327771119',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            54 =>
            array (
                'idcust' => 1096,
                'cust_nomor' => 'MP01431',
                'cust_nama' => 'RINNIE',
                'cust_alamat' => 'JL.DR SOEPARNO 70 PWT',
                'cust_notelp' => '08882641355',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            55 =>
            array (
                'idcust' => 1097,
                'cust_nomor' => 'MP01426',
                'cust_nama' => 'YANA KUSUMA',
                'cust_alamat' => 'JLA YANI GGII NO16 PWT',
                'cust_notelp' => '0816698543',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            56 =>
            array (
                'idcust' => 1098,
                'cust_nomor' => 'MP01421',
                'cust_nama' => 'ELLY',
                'cust_alamat' => 'JL.STASIUN 120 PWT',
                'cust_notelp' => '081327380798',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            57 =>
            array (
                'idcust' => 1099,
                'cust_nomor' => 'MP01420',
                'cust_nama' => 'DANNY',
                'cust_alamat' => 'BANARAN PWT',
                'cust_notelp' => '081326007900',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            58 =>
            array (
                'idcust' => 1100,
                'cust_nomor' => 'MP00857',
                'cust_nama' => 'LATIF INDRA ISMAWAN',
                'cust_alamat' => 'JL.DR ANGKA NO.43 PWT',
                'cust_notelp' => '628660',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            59 =>
            array (
                'idcust' => 1101,
                'cust_nomor' => 'MP01303',
                'cust_nama' => 'SUGENG PRIYONO',
                'cust_alamat' => 'JL.PERINTIS KEMERDEKAAN NO.17',
                'cust_notelp' => '7603060',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            60 =>
            array (
                'idcust' => 1102,
                'cust_nomor' => 'MP01419',
                'cust_nama' => 'HIERONISIUS',
                'cust_alamat' => 'JL.SUKA DAMAI',
                'cust_notelp' => '081804883586',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            61 =>
            array (
                'idcust' => 1103,
                'cust_nomor' => 'MP01418',
                'cust_nama' => 'LYAS DP',
                'cust_alamat' => 'JL.SRIDADI I NO.35 PWT',
                'cust_notelp' => '08170604070',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            62 =>
            array (
                'idcust' => 1104,
                'cust_nomor' => 'MP01179',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            63 =>
            array (
                'idcust' => 1105,
                'cust_nomor' => 'MP01204',
                'cust_nama' => 'EVAN',
                'cust_alamat' => 'JL.G. RORO JEMBANGAN',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            64 =>
            array (
                'idcust' => 1106,
                'cust_nomor' => 'MP01245',
                'cust_nama' => 'YOKI OLIVYAN',
                'cust_alamat' => 'JLSOKANEGARA NO58',
                'cust_notelp' => '085227024265',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            65 =>
            array (
                'idcust' => 1107,
                'cust_nomor' => 'MP01417',
                'cust_nama' => 'EGHA',
                'cust_alamat' => 'JL.KSATRIAN H.38',
                'cust_notelp' => '085227382227',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            66 =>
            array (
                'idcust' => 1108,
                'cust_nomor' => 'MP01416',
                'cust_nama' => 'VILMA MELINE',
                'cust_alamat' => 'HR.BUNYAMIN 15',
                'cust_notelp' => '081802898208',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            67 =>
            array (
                'idcust' => 1109,
                'cust_nomor' => 'MP01378',
                'cust_nama' => 'MIA',
                'cust_alamat' => 'PURWOSARI JLGUNUNG SLAMET 20',
                'cust_notelp' => '081572772555',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            68 =>
            array (
                'idcust' => 1110,
                'cust_nomor' => 'MP01415',
                'cust_nama' => 'MN LATIEF',
                'cust_alamat' => 'JL.RIYANTO 5A SUMAMPIR PWT',
                'cust_notelp' => '081327445505',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            69 =>
            array (
                'idcust' => 1111,
                'cust_nomor' => 'MP01414',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08391161114',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            70 =>
            array (
                'idcust' => 1112,
                'cust_nomor' => 'MP01413',
                'cust_nama' => 'ARHY',
                'cust_alamat' => 'JL.DR ANGKA NO.80',
                'cust_notelp' => '081548815673',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            71 =>
            array (
                'idcust' => 1113,
                'cust_nomor' => 'MP01412',
                'cust_nama' => 'TANTI',
                'cust_alamat' => 'JL.SUNAN KALIJAGA VI BO.9 BERKOH',
                'cust_notelp' => '085227368770',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            72 =>
            array (
                'idcust' => 1114,
                'cust_nomor' => 'MP01361',
                'cust_nama' => 'WINDRI ESMIATI',
                'cust_alamat' => 'PERUM TEGAL SARI INDAH BLOK R 7 DKWLH',
                'cust_notelp' => '081804784159',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            73 =>
            array (
                'idcust' => 1115,
                'cust_nomor' => 'MP01059',
                'cust_nama' => 'TIEN TISNAWATI',
                'cust_alamat' => 'TEGAL SARI INDAH',
                'cust_notelp' => '08122756575',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            74 =>
            array (
                'idcust' => 1116,
                'cust_nomor' => 'MP01627',
                'cust_nama' => 'ASID',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '085227728787',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            75 =>
            array (
                'idcust' => 1117,
                'cust_nomor' => 'MP01214',
                'cust_nama' => 'JAENAL',
                'cust_alamat' => 'SINGASARI KRG.LEWAS PWT',
                'cust_notelp' => '629969',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            76 =>
            array (
                'idcust' => 1118,
                'cust_nomor' => 'MP00992',
                'cust_nama' => 'AGUS',
                'cust_alamat' => 'DR,ANGKA PWT',
                'cust_notelp' => '7626679',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            77 =>
            array (
                'idcust' => 1119,
                'cust_nomor' => 'MP00928',
                'cust_nama' => 'WIWI',
                'cust_alamat' => 'JL.BERINGIN AIV/21 PWT',
                'cust_notelp' => '081327288090',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            78 =>
            array (
                'idcust' => 1120,
                'cust_nomor' => 'MP00879',
                'cust_nama' => 'AHMAD CAHYONO',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081327080072',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            79 =>
            array (
                'idcust' => 1121,
                'cust_nomor' => 'MP00852',
                'cust_nama' => 'DHINE',
                'cust_alamat' => 'PERUM KEDUNGRINGIN C-48 PWT',
                'cust_notelp' => '085647607335',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            80 =>
            array (
                'idcust' => 1122,
                'cust_nomor' => 'MP01104',
                'cust_nama' => 'ANTHON TRILAKSONO',
                'cust_alamat' => 'GRIYA SATRIA 2 BLOK EA 2PWT',
                'cust_notelp' => '085227476307',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            81 =>
            array (
                'idcust' => 1123,
                'cust_nomor' => 'MP00864',
                'cust_nama' => 'BUDI HARYONO',
                'cust_alamat' => 'GRIYA 75 INDAH BLOK B-46 SIDABOWA',
                'cust_notelp' => '08122713255',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            82 =>
            array (
                'idcust' => 1124,
                'cust_nomor' => 'MP01304',
                'cust_nama' => 'F.FAUZIAH',
                'cust_alamat' => 'PURI INDAH PWT',
                'cust_notelp' => '085227308040',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            83 =>
            array (
                'idcust' => 1125,
                'cust_nomor' => 'MP01452',
                'cust_nama' => 'HERMAWAN',
                'cust_alamat' => 'JL.TANJLIG 85 PWT',
                'cust_notelp' => '081575120610',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            84 =>
            array (
                'idcust' => 1126,
                'cust_nomor' => 'MP01451',
                'cust_nama' => 'T-YAZ',
                'cust_alamat' => 'JL.SITAPEN 21 PWT',
                'cust_notelp' => '085227441018',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            85 =>
            array (
                'idcust' => 1127,
                'cust_nomor' => 'MP01447',
                'cust_nama' => 'OYI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227634613',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            86 =>
            array (
                'idcust' => 1128,
                'cust_nomor' => 'MP01391',
                'cust_nama' => 'TINNA',
                'cust_alamat' => 'GKI BLOK N-11 PWT',
                'cust_notelp' => '08122661168',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            87 =>
            array (
                'idcust' => 1129,
                'cust_nomor' => 'MP01392',
                'cust_nama' => 'AGUS SUSANTO',
                'cust_alamat' => 'MELATI 2 AP SATRIA PWT',
                'cust_notelp' => '08122819461',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            88 =>
            array (
                'idcust' => 1130,
                'cust_nomor' => 'MP01393',
                'cust_nama' => 'HERRY INDRA MURPHY',
                'cust_alamat' => 'DR.SUPARNO SPEED NET PWT',
                'cust_notelp' => '08882270994',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            89 =>
            array (
                'idcust' => 1131,
                'cust_nomor' => 'MP01394',
                'cust_nama' => 'STEVANUS',
                'cust_alamat' => 'GKI PWT',
                'cust_notelp' => '08122711576',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            90 =>
            array (
                'idcust' => 1132,
                'cust_nomor' => 'MP01047',
                'cust_nama' => 'ANDI SUSANTO',
                'cust_alamat' => 'KSATRIAN D.19 SOKANEGARA PWT',
                'cust_notelp' => '02817632234',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            91 =>
            array (
                'idcust' => 1133,
                'cust_nomor' => 'MP01448',
                'cust_nama' => 'ADHIT KURNIAWAN',
                'cust_alamat' => 'GRIYA SATRIA BLOK H 7-8 PWT',
                'cust_notelp' => '085647635577',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            92 =>
            array (
                'idcust' => 1134,
                'cust_nomor' => 'MP01449',
                'cust_nama' => 'ANTO',
                'cust_alamat' => 'GS SUMAMPIR G.10 PWT',
                'cust_notelp' => '085647888990',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            93 =>
            array (
                'idcust' => 1135,
                'cust_nomor' => 'MP01450',
                'cust_nama' => 'AMY',
                'cust_alamat' => 'JL.H MADRANI 65 A PWT',
                'cust_notelp' => '08164392714',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            94 =>
            array (
                'idcust' => 1136,
                'cust_nomor' => 'MP01339',
                'cust_nama' => 'BAGUS H ',
                'cust_alamat' => 'KARANG SALAM PWT',
                'cust_notelp' => '08122907391',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            95 =>
            array (
                'idcust' => 1137,
                'cust_nomor' => 'MP01446',
                'cust_nama' => 'KARTIKA HERENA',
                'cust_alamat' => 'PERUM GRIYA LIMAS PERMAI A4 PWT',
                'cust_notelp' => '08127353657',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            96 =>
            array (
                'idcust' => 1138,
                'cust_nomor' => 'MP01443',
                'cust_nama' => 'ANDO',
                'cust_alamat' => 'JL.GN.SLAMET 18 PWT',
                'cust_notelp' => '08562097737',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            97 =>
            array (
                'idcust' => 1139,
                'cust_nomor' => 'MP01442',
                'cust_nama' => 'YOGGIE',
                'cust_alamat' => 'SOKARAJA ',
                'cust_notelp' => '081578882898',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            98 =>
            array (
                'idcust' => 1140,
                'cust_nomor' => 'MP01013',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'RUKO PH BLOK A.10 PWT',
                'cust_notelp' => '0816694870',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            99 =>
            array (
                'idcust' => 1141,
                'cust_nomor' => 'MP01441',
                'cust_nama' => 'AYU SITARINI',
                'cust_alamat' => 'BANCARKEMBAR BLOK 8 15 PWT',
                'cust_notelp' => '081328738040',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            100 =>
            array (
                'idcust' => 1142,
                'cust_nomor' => 'MP01440',
                'cust_nama' => 'ENI SADEWO',
                'cust_alamat' => 'JL.S. PARMAN 130 PWT',
                'cust_notelp' => '0811260484',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            101 =>
            array (
                'idcust' => 1143,
                'cust_nomor' => 'MP00978',
                'cust_nama' => 'ABDI',
                'cust_alamat' => 'MERSI',
                'cust_notelp' => '081327990333',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            102 =>
            array (
                'idcust' => 1144,
                'cust_nomor' => 'MP01033',
                'cust_nama' => 'ARYO',
                'cust_alamat' => 'WATUMAS PWT',
                'cust_notelp' => '081327046099',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            103 =>
            array (
                'idcust' => 1145,
                'cust_nomor' => 'MP01386',
                'cust_nama' => 'ADISSA SITA PURWANADYA',
                'cust_alamat' => 'PERUM MUTIARA PRATAMA C-21 PWT',
                'cust_notelp' => '081574910924',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            104 =>
            array (
                'idcust' => 1146,
                'cust_nomor' => 'MP01072',
                'cust_nama' => 'AH.PURWANTO',
                'cust_alamat' => 'KSATRIAN K 48',
                'cust_notelp' => '081548889147',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            105 =>
            array (
                'idcust' => 1147,
                'cust_nomor' => 'MP01374',
                'cust_nama' => 'ANI DWIYANTI',
                'cust_alamat' => 'KSATRIAN KII 18 PWT',
                'cust_notelp' => '081327033850',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            106 =>
            array (
                'idcust' => 1148,
                'cust_nomor' => 'MP01363',
                'cust_nama' => 'ARIS PUJIARTI',
                'cust_alamat' => 'JL.PERINTIS KEMERDEKAAN 187',
                'cust_notelp' => '08156887769',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            107 =>
            array (
                'idcust' => 1149,
                'cust_nomor' => 'MP01208',
                'cust_nama' => 'AGUS PURWITO',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '08122664959',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            108 =>
            array (
                'idcust' => 1150,
                'cust_nomor' => 'MP01351',
                'cust_nama' => 'AUDIA CANDRA MEITA',
                'cust_alamat' => 'SOKARAJA TENGAH RT03/VII',
                'cust_notelp' => '085227398210',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            109 =>
            array (
                'idcust' => 1151,
                'cust_nomor' => 'MP01343',
                'cust_nama' => 'AZIZ',
                'cust_alamat' => 'PERUM LEDUG',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            110 =>
            array (
                'idcust' => 1152,
                'cust_nomor' => 'MP01338',
                'cust_nama' => 'AGUS SUPARMONO',
                'cust_alamat' => 'LEDUG',
                'cust_notelp' => '081327061930',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            111 =>
            array (
                'idcust' => 1153,
                'cust_nomor' => 'MP01337',
                'cust_nama' => 'AUFIA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08156974321',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            112 =>
            array (
                'idcust' => 1154,
                'cust_nomor' => 'MP01335',
                'cust_nama' => 'ANNY',
                'cust_alamat' => 'POEL SOEMARTO 62A PWT',
                'cust_notelp' => '081578580191',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            113 =>
            array (
                'idcust' => 1155,
                'cust_nomor' => 'MP01297',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'PWT KR LEWAS',
                'cust_notelp' => '',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            114 =>
            array (
                'idcust' => 1156,
                'cust_nomor' => 'MP01298',
                'cust_nama' => 'AGNES H.',
                'cust_alamat' => 'JL.JENDRAL SUDIRMAN NO.687 PURWOKERTO',
                'cust_notelp' => '08882667636',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            115 =>
            array (
                'idcust' => 1157,
                'cust_nomor' => 'MP01102',
                'cust_nama' => 'ARLIA',
                'cust_alamat' => 'KALIJAGA III',
                'cust_notelp' => '08158025118',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            116 =>
            array (
                'idcust' => 1158,
                'cust_nomor' => 'MP01265',
                'cust_nama' => 'ANTY SURI',
                'cust_alamat' => 'BATURADEN 03/02 PWT',
                'cust_notelp' => '085227468550',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            117 =>
            array (
                'idcust' => 1159,
                'cust_nomor' => 'MP01312',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'JL.MANGGA BLOK E-4 PWT',
                'cust_notelp' => '081327299501',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            118 =>
            array (
                'idcust' => 1160,
                'cust_nomor' => 'MP01159',
                'cust_nama' => 'ANGGI.S',
                'cust_alamat' => 'YOS SUDARSO GG.KATES 10 SOKARAJA',
                'cust_notelp' => '081542946912',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            119 =>
            array (
                'idcust' => 1161,
                'cust_nomor' => 'MP01292',
                'cust_nama' => 'ANTI',
                'cust_alamat' => 'JL.LESANPURA 8/3 TELUK PWT',
                'cust_notelp' => '085227630234',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            120 =>
            array (
                'idcust' => 1162,
                'cust_nomor' => 'MP01280',
                'cust_nama' => 'ARFAGE',
                'cust_alamat' => 'ASPOL SPN PWT BLOK B-26',
                'cust_notelp' => '085869990315',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            121 =>
            array (
                'idcust' => 1163,
                'cust_nomor' => 'MP01275',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'JL.MERANTI RAYA 209 PWT',
                'cust_notelp' => '08172820177',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            122 =>
            array (
                'idcust' => 1164,
                'cust_nomor' => 'MP01274',
                'cust_nama' => 'ARGANTA MOZART',
                'cust_alamat' => 'GS 2 BLOK H4 SUMAMPIR PWT',
                'cust_notelp' => '08882608514',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            123 =>
            array (
                'idcust' => 1165,
                'cust_nomor' => 'MP01271',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'KLAMPOK RAWALO',
                'cust_notelp' => '085227461202',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            124 =>
            array (
                'idcust' => 1166,
                'cust_nomor' => 'MP01270',
                'cust_nama' => 'AYA',
                'cust_alamat' => 'ARSANTAKA PWT',
                'cust_notelp' => '081542978782',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            125 =>
            array (
                'idcust' => 1167,
                'cust_nomor' => 'MP01088',
                'cust_nama' => 'ASTI',
                'cust_alamat' => 'SOKABARU PWT',
                'cust_notelp' => '640229',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            126 =>
            array (
                'idcust' => 1168,
                'cust_nomor' => 'MP01269',
                'cust_nama' => 'AGUS',
                'cust_alamat' => 'PALEM A2/19 PWT',
                'cust_notelp' => '081804285014',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            127 =>
            array (
                'idcust' => 1169,
                'cust_nomor' => 'MP01261',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'MORO PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            128 =>
            array (
                'idcust' => 1170,
                'cust_nomor' => 'MP01046',
                'cust_nama' => 'AGUS LIEYANTO',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN 75B PWT',
                'cust_notelp' => '08122992888',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            129 =>
            array (
                'idcust' => 1171,
                'cust_nomor' => 'MP01231',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'MARGANTARA 12 TANJUNG PWT',
                'cust_notelp' => '085225027428',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            130 =>
            array (
                'idcust' => 1172,
                'cust_nomor' => 'MP01203',
                'cust_nama' => 'ANA PUTRI',
                'cust_alamat' => 'PASUKAN PELAJAR IMAM I GG.ANGGREK 21 PWT',
                'cust_notelp' => '081327382100',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            131 =>
            array (
                'idcust' => 1173,
                'cust_nomor' => 'MP01181',
                'cust_nama' => 'AHMAD AUDHY F',
                'cust_alamat' => 'KEDUNGMENJANGAN RT01/I PBG',
                'cust_notelp' => '081808066676',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            132 =>
            array (
                'idcust' => 1174,
                'cust_nomor' => 'MP01140',
                'cust_nama' => 'ANDRI T',
                'cust_alamat' => 'SOF PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            133 =>
            array (
                'idcust' => 1175,
                'cust_nomor' => 'MP01138',
                'cust_nama' => 'ADE',
                'cust_alamat' => 'PWT TIMUR',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            134 =>
            array (
                'idcust' => 1176,
                'cust_nomor' => 'MP01131',
                'cust_nama' => 'ANDY',
                'cust_alamat' => 'PERUM GRAHA MUSTIKA 8 PWT',
                'cust_notelp' => '081548842065',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            135 =>
            array (
                'idcust' => 1177,
                'cust_nomor' => 'MP00388',
                'cust_nama' => 'ANI',
                'cust_alamat' => 'ADIYAKSA PWT',
                'cust_notelp' => '621874',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            136 =>
            array (
                'idcust' => 1178,
                'cust_nomor' => 'MP01127',
                'cust_nama' => 'ARIF BH',
                'cust_alamat' => 'DUKUWALUH PWT',
                'cust_notelp' => '0856434396319',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            137 =>
            array (
                'idcust' => 1179,
                'cust_nomor' => 'MP01118',
                'cust_nama' => 'ANGELIA.A',
                'cust_alamat' => 'JL.NAKULA 185 SOKARAJA ',
                'cust_notelp' => '081327247788',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            138 =>
            array (
                'idcust' => 1180,
                'cust_nomor' => 'MP01109',
                'cust_nama' => 'AGNES RAHMAWATI',
                'cust_alamat' => 'JL.BALENG CLP',
                'cust_notelp' => '0816692610',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            139 =>
            array (
                'idcust' => 1181,
                'cust_nomor' => 'MP01021',
                'cust_nama' => 'AVA',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '081327010652',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            140 =>
            array (
                'idcust' => 1182,
                'cust_nomor' => 'MP01075',
                'cust_nama' => 'AHYAR MUNIF',
                'cust_alamat' => 'PASIR KIDUL PWT',
                'cust_notelp' => '081327346127',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            141 =>
            array (
                'idcust' => 1183,
                'cust_nomor' => 'MP01018',
                'cust_nama' => 'APRI BUDI',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN 54 PWT',
                'cust_notelp' => '085864986288',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            142 =>
            array (
                'idcust' => 1184,
                'cust_nomor' => 'MP01082',
                'cust_nama' => 'INDARWATI',
                'cust_alamat' => 'JL.PAHLAWAN PWT',
                'cust_notelp' => '081327663500',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            143 =>
            array (
                'idcust' => 1185,
                'cust_nomor' => 'MP01081',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'BANCARKEMBAR BLOK VIII/3 PWT',
                'cust_notelp' => '081325760797',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            144 =>
            array (
                'idcust' => 1186,
                'cust_nomor' => 'MP01057',
                'cust_nama' => 'ARUM SUSANTI',
                'cust_alamat' => 'WONOSOBO',
                'cust_notelp' => '081328435106',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            145 =>
            array (
                'idcust' => 1187,
                'cust_nomor' => 'MP01236',
                'cust_nama' => 'AGUS TRIYANTO',
                'cust_alamat' => 'JL.PUTERAN 22 BERKOH PWT',
                'cust_notelp' => '08122716131',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            146 =>
            array (
                'idcust' => 1188,
                'cust_nomor' => 'MP01039',
                'cust_nama' => 'YUDHA',
                'cust_alamat' => 'KARANGTURI PWT',
                'cust_notelp' => '08122727057',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            147 =>
            array (
                'idcust' => 1189,
                'cust_nomor' => 'MP01049',
                'cust_nama' => 'AVERUS',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '081327505892',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            148 =>
            array (
                'idcust' => 1190,
                'cust_nomor' => 'MP00943',
                'cust_nama' => 'ADHITYA',
                'cust_alamat' => 'CENDERAWASIH PWT',
                'cust_notelp' => '081326559944',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            149 =>
            array (
                'idcust' => 1191,
                'cust_nomor' => 'MP00949',
                'cust_nama' => 'ARIF BUDI HARTONO',
                'cust_alamat' => 'GS II KALISARI BLOK D/22 SUMAMPIR PWT',
                'cust_notelp' => '02817632164',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            150 =>
            array (
                'idcust' => 1192,
                'cust_nomor' => 'MP00990',
                'cust_nama' => 'AJIE',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227381234',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            151 =>
            array (
                'idcust' => 1193,
                'cust_nomor' => 'MP00997',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'JL.PRAMUKA PWT',
                'cust_notelp' => '081327722678',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            152 =>
            array (
                'idcust' => 1194,
                'cust_nomor' => 'MP00887',
                'cust_nama' => 'ATEP',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081323336008',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            153 =>
            array (
                'idcust' => 1195,
                'cust_nomor' => 'MP01011',
                'cust_nama' => 'ARINDRA HYDE TAKASAI',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '08562639923',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            154 =>
            array (
                'idcust' => 1196,
                'cust_nomor' => 'MP01002',
                'cust_nama' => 'AFRIAN ',
                'cust_alamat' => 'JL.VETERAN KALIBOGOR PWT',
                'cust_notelp' => '0281628504',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            155 =>
            array (
                'idcust' => 1197,
                'cust_nomor' => 'MP00975',
                'cust_nama' => 'ARIS',
                'cust_alamat' => 'KEBONDALEM I/10 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            156 =>
            array (
                'idcust' => 1198,
                'cust_nomor' => 'MP00970',
                'cust_nama' => 'ANTY',
                'cust_alamat' => 'JL.PROF SUTARSO 3 PURWOKERTO',
                'cust_notelp' => '08122661690',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            157 =>
            array (
                'idcust' => 1199,
                'cust_nomor' => 'MP00969',
                'cust_nama' => 'ARIS TEGUH',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081542976911',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            158 =>
            array (
                'idcust' => 1200,
                'cust_nomor' => 'MP00748',
                'cust_nama' => 'ANNA',
                'cust_alamat' => 'JL.PASAR PON 28 PWT',
                'cust_notelp' => '081327541333',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            159 =>
            array (
                'idcust' => 1201,
                'cust_nomor' => 'MP01052',
                'cust_nama' => 'ANISSA ZAHARA',
                'cust_alamat' => 'SUSUKAN BANJARNEGARA PBG',
                'cust_notelp' => '081802727703',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            160 =>
            array (
                'idcust' => 1202,
                'cust_nomor' => 'MP00854',
                'cust_nama' => 'AZIZ AMIN',
                'cust_alamat' => 'BANJARNEGARA ',
                'cust_notelp' => '081327986004',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            161 =>
            array (
                'idcust' => 1203,
                'cust_nomor' => 'MP00860',
                'cust_nama' => 'ANDY',
                'cust_alamat' => 'SUMAMPIR',
                'cust_notelp' => '085647778089',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            162 =>
            array (
                'idcust' => 1204,
                'cust_nomor' => 'MP00882',
                'cust_nama' => 'ANI',
                'cust_alamat' => 'PH VI/39 PURWOKERTO',
                'cust_notelp' => '081542999991',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            163 =>
            array (
                'idcust' => 1205,
                'cust_nomor' => 'MP00871',
                'cust_nama' => 'ARIS',
                'cust_alamat' => 'PURWOKERTO WETAN',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            164 =>
            array (
                'idcust' => 1206,
                'cust_nomor' => 'MP00874',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'WISMA DARMALOKA PWT',
                'cust_notelp' => '08882662669',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            165 =>
            array (
                'idcust' => 1207,
                'cust_nomor' => 'MP00867',
                'cust_nama' => 'ANDRY WIBOWO',
                'cust_alamat' => 'JL.SEMINGKIR REJASARI PWT',
                'cust_notelp' => '625369',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            166 =>
            array (
                'idcust' => 1208,
                'cust_nomor' => 'MP00923',
                'cust_nama' => 'AMELIA',
                'cust_alamat' => 'PURI INDAH PWT',
                'cust_notelp' => '633688',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            167 =>
            array (
                'idcust' => 1209,
                'cust_nomor' => 'MP00918',
                'cust_nama' => 'ARIE',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '08562046714',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            168 =>
            array (
                'idcust' => 1210,
                'cust_nomor' => 'MP01043',
                'cust_nama' => 'ANDRIANI MERKE R',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '085647881886',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            169 =>
            array (
                'idcust' => 1211,
                'cust_nomor' => 'MP00946',
                'cust_nama' => 'ARISNO',
                'cust_alamat' => 'ASPOL GG.PELOPOR B7 PWT',
                'cust_notelp' => '628603',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            170 =>
            array (
                'idcust' => 1212,
                'cust_nomor' => 'MP01027',
                'cust_nama' => 'ADLI ARBI NASUTION',
                'cust_alamat' => 'BANCARKEMBAR PWT',
                'cust_notelp' => '081548827973',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            171 =>
            array (
                'idcust' => 1213,
                'cust_nomor' => 'MP01291',
                'cust_nama' => 'BUDI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081327700570',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            172 =>
            array (
                'idcust' => 1214,
                'cust_nomor' => 'MP01264',
                'cust_nama' => 'BUDI',
                'cust_alamat' => 'JLSUTEJA 29 PWT',
                'cust_notelp' => '081328006850',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            173 =>
            array (
                'idcust' => 1215,
                'cust_nomor' => 'MP01107',
                'cust_nama' => 'BUDIYANTO',
                'cust_alamat' => 'JL.GERILYA KARANG PUCUNG PWT',
                'cust_notelp' => '081329900069',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            174 =>
            array (
                'idcust' => 1216,
                'cust_nomor' => 'MP01019',
                'cust_nama' => 'BAMBANG',
                'cust_alamat' => 'MANGUNJAYA PWT',
                'cust_notelp' => '081391055228',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            175 =>
            array (
                'idcust' => 1217,
                'cust_nomor' => 'MP00976',
                'cust_nama' => 'BOWO',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '081398999851',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            176 =>
            array (
                'idcust' => 1218,
                'cust_nomor' => 'MP00935',
                'cust_nama' => 'BIMA',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '081325892094',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            177 =>
            array (
                'idcust' => 1219,
                'cust_nomor' => 'MP01229',
                'cust_nama' => 'BAMBANG LEGA T',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '895465',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            178 =>
            array (
                'idcust' => 1220,
                'cust_nomor' => 'MP01228',
                'cust_nama' => 'BAMBANG P',
                'cust_alamat' => 'KARANG KLESEM PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            179 =>
            array (
                'idcust' => 1221,
                'cust_nomor' => 'MP01237',
                'cust_nama' => 'BIMA ARRY',
                'cust_alamat' => 'JL.PARIWISATA 99 PWT',
                'cust_notelp' => '081327769444',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            180 =>
            array (
                'idcust' => 1222,
                'cust_nomor' => 'MP01368',
                'cust_nama' => 'BUDI SANTOSO',
                'cust_alamat' => 'PERUM TIARA PERMAI I PWT',
                'cust_notelp' => '081804875003',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            181 =>
            array (
                'idcust' => 1223,
                'cust_nomor' => 'MP01356',
                'cust_nama' => 'BAYU',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '085659282224',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            182 =>
            array (
                'idcust' => 1224,
                'cust_nomor' => 'MP00914',
                'cust_nama' => 'BUDI PRASETYO',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '081327377756',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            183 =>
            array (
                'idcust' => 1225,
                'cust_nomor' => 'MP01200',
                'cust_nama' => 'BENNY WITJAKSONO',
                'cust_alamat' => 'CIBERUNG AJIBARANG',
                'cust_notelp' => '08122938446',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            184 =>
            array (
                'idcust' => 1226,
                'cust_nomor' => 'MP00957',
                'cust_nama' => 'BENI',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081327691618',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            185 =>
            array (
                'idcust' => 1227,
                'cust_nomor' => 'MP00883',
                'cust_nama' => 'BASRAN',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            186 =>
            array (
                'idcust' => 1228,
                'cust_nomor' => 'MP00855',
                'cust_nama' => 'BUDI AZHAR SIRAIT',
                'cust_alamat' => 'PERUM PEMDA WARGA BAKTI II PWT',
                'cust_notelp' => '081327932323',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            187 =>
            array (
                'idcust' => 1229,
                'cust_nomor' => 'MP01094',
                'cust_nama' => 'BAMBANG P',
                'cust_alamat' => 'KARANG MANYAR KALIMANAH PURBALINGGA',
                'cust_notelp' => '08156970440',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            188 =>
            array (
                'idcust' => 1230,
                'cust_nomor' => 'MP01189',
                'cust_nama' => 'BOBON',
                'cust_alamat' => 'JLBANK 21 PWT',
                'cust_notelp' => '085220053186',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            189 =>
            array (
                'idcust' => 1231,
                'cust_nomor' => 'MP01029',
                'cust_nama' => 'BOWO',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08122665033',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            190 =>
            array (
                'idcust' => 1232,
                'cust_nomor' => 'MP01151',
                'cust_nama' => 'CATUR CAHYA P.',
                'cust_alamat' => 'JL.PEPAYA NO.484 CLCP',
                'cust_notelp' => '08882681397',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            191 =>
            array (
                'idcust' => 1233,
                'cust_nomor' => 'MP01115',
                'cust_nama' => 'CAHYA ADRIAN',
                'cust_alamat' => 'DUKUWALUH RT02/10',
                'cust_notelp' => '085227176611',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            192 =>
            array (
                'idcust' => 1235,
                'cust_nomor' => 'MP01091',
                'cust_nama' => 'CATUR MARTANTO',
                'cust_alamat' => 'JL.DR SUPARNO 100 ',
                'cust_notelp' => '081327708678',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            193 =>
            array (
                'idcust' => 1236,
                'cust_nomor' => 'MP01357',
                'cust_nama' => 'CHAPUNG',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            194 =>
            array (
                'idcust' => 1237,
                'cust_nomor' => 'MP01095',
                'cust_nama' => 'CHRISTINE',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            195 =>
            array (
                'idcust' => 1238,
                'cust_nomor' => 'MP01628',
                'cust_nama' => 'DESI ARISANTI',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '081320171024',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            196 =>
            array (
                'idcust' => 1239,
                'cust_nomor' => 'MP01629',
                'cust_nama' => 'ELENA',
                'cust_alamat' => 'GS BLOK D 15 PWT',
                'cust_notelp' => '08562604457',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            197 =>
            array (
                'idcust' => 1240,
                'cust_nomor' => 'MP01630',
                'cust_nama' => 'INTAN',
                'cust_alamat' => 'GS BLOK D 15 PWT',
                'cust_notelp' => '085647777188',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            198 =>
            array (
                'idcust' => 1241,
                'cust_nomor' => 'MP01631',
                'cust_nama' => 'PUPUNG',
                'cust_alamat' => 'PURWOKERTO ',
                'cust_notelp' => '08882698661',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            199 =>
            array (
                'idcust' => 1242,
                'cust_nomor' => 'MP01632',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '085647870355',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            200 =>
            array (
                'idcust' => 1243,
                'cust_nomor' => 'MP01633',
                'cust_nama' => 'FADLI',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '081316811144',
                'cust_date' => '2007-04-01',
                'cust_author' => 'admin',
            ),
            201 =>
            array (
                'idcust' => 1244,
                'cust_nomor' => 'MP00895',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'CAHYANA PURBALINGGA(COMBI PAR)',
                'cust_notelp' => '081328306666',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            202 =>
            array (
                'idcust' => 1245,
                'cust_nomor' => 'MP001066',
                'cust_nama' => 'DWI AKBAR YULIA',
                'cust_alamat' => 'SOKARAJA KIDUL',
                'cust_notelp' => '081327798009',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            203 =>
            array (
                'idcust' => 1246,
                'cust_nomor' => 'MP00899',
                'cust_nama' => 'DWI NOVA RIYANTO',
                'cust_alamat' => 'JL PROF M YAMIN SELATAN 07 PWT',
                'cust_notelp' => '08122604388',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            204 =>
            array (
                'idcust' => 1247,
                'cust_nomor' => 'MP001329',
                'cust_nama' => 'DESY RIPTIYANI',
                'cust_alamat' => 'KEDUNG BANTENG',
                'cust_notelp' => '081327127197',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            205 =>
            array (
                'idcust' => 1248,
                'cust_nomor' => 'MP01299',
                'cust_nama' => 'DJOKO',
                'cust_alamat' => 'OVIST 5/4 PWT',
                'cust_notelp' => '0818408131',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            206 =>
            array (
                'idcust' => 1249,
                'cust_nomor' => 'MP01306',
                'cust_nama' => 'DEVI',
                'cust_alamat' => 'PERUM GRIYA SATRIA A6 PWT',
                'cust_notelp' => '08172819469',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            207 =>
            array (
                'idcust' => 1250,
                'cust_nomor' => 'MP01383',
                'cust_nama' => 'DANI RESPATI P',
                'cust_alamat' => 'JL P KEMERDEKAAN I/20 PWT',
                'cust_notelp' => '081327096646',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            208 =>
            array (
                'idcust' => 1251,
                'cust_nomor' => 'MP01388',
                'cust_nama' => 'DIAN FARDIANSAH',
                'cust_alamat' => 'JL ARJUNA D2/2 PERUM PG TSI DKH WALUH PWT',
                'cust_notelp' => '085224951225',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            209 =>
            array (
                'idcust' => 1252,
                'cust_nomor' => 'MP00921',
                'cust_nama' => 'DENY RIANTI',
                'cust_alamat' => 'JL G MURIA 545 PWT',
                'cust_notelp' => '081327444441',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            210 =>
            array (
                'idcust' => 1253,
                'cust_nomor' => 'MP00938',
                'cust_nama' => 'DITTA KHARISMA',
                'cust_alamat' => 'JL TIPAR BARU KRANJI PWT',
                'cust_notelp' => '0281 7617208',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            211 =>
            array (
                'idcust' => 1254,
                'cust_nomor' => 'MP00977',
                'cust_nama' => 'DANANG',
                'cust_alamat' => 'DYNASTY HOTEL PWT',
                'cust_notelp' => '081327007075',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            212 =>
            array (
                'idcust' => 1255,
                'cust_nomor' => 'MP01144',
                'cust_nama' => 'DAVID S',
                'cust_alamat' => 'JL KAYU JATI 2/4C PWT',
                'cust_notelp' => '0818804825',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            213 =>
            array (
                'idcust' => 1256,
                'cust_nomor' => 'MP01227',
                'cust_nama' => 'DARYANTO',
                'cust_alamat' => 'JL RASAMALAII/33 TELUK, PWT',
                'cust_notelp' => '081804832764',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            214 =>
            array (
                'idcust' => 1257,
                'cust_nomor' => 'MP01038',
                'cust_nama' => 'DEDDY',
                'cust_alamat' => 'JL BONGCINA KD WRINGIN PWT',
                'cust_notelp' => '085227433303',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            215 =>
            array (
                'idcust' => 1258,
                'cust_nomor' => 'MP01066',
                'cust_nama' => 'DWI AKBAR YULIA',
                'cust_alamat' => 'SOKARAJA KIDUL',
                'cust_notelp' => '081327798009',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            216 =>
            array (
                'idcust' => 1259,
                'cust_nomor' => 'MP01329',
                'cust_nama' => 'DESY RIPTIANI',
                'cust_alamat' => 'KD BANTENG PWT',
                'cust_notelp' => '081327127197',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            217 =>
            array (
                'idcust' => 1260,
                'cust_nomor' => 'MP01056',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'JL MELATI 1 PERUM KARANG ASRI PWT',
                'cust_notelp' => '081327929596',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            218 =>
            array (
                'idcust' => 1261,
                'cust_nomor' => 'MP01031',
                'cust_nama' => 'DADOET',
                'cust_alamat' => 'JL BANK 21 PWT',
                'cust_notelp' => '081327777015',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            219 =>
            array (
                'idcust' => 1262,
                'cust_nomor' => 'MP00912',
                'cust_nama' => 'DYAH',
                'cust_alamat' => 'JL HR BUNYAMIN GG GNG CERMAI 76 PWT',
                'cust_notelp' => '08156924024',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            220 =>
            array (
                'idcust' => 1263,
                'cust_nomor' => 'MP01283',
                'cust_nama' => 'DESTA ARDIAN',
                'cust_alamat' => 'JL EMPAT LIMA 278 PURBALINGGA',
                'cust_notelp' => '08569894756',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            221 =>
            array (
                'idcust' => 1264,
                'cust_nomor' => 'MP01634',
                'cust_nama' => 'GITA',
                'cust_alamat' => 'JL H MADRANI 25A',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            222 =>
            array (
                'idcust' => 1265,
                'cust_nomor' => 'MP01284',
                'cust_nama' => 'DIANA NOVITA A',
                'cust_alamat' => 'JL BOBOSAN GG ARJUNA 71 PWT',
                'cust_notelp' => '081804802444',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            223 =>
            array (
                'idcust' => 1266,
                'cust_nomor' => 'MP01060',
                'cust_nama' => 'DECKI',
                'cust_alamat' => 'PERUM TELUK G CEMARA IV/86 PWT',
                'cust_notelp' => '085213505400',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            224 =>
            array (
                'idcust' => 1267,
                'cust_nomor' => 'MP00878',
                'cust_nama' => 'DWI',
                'cust_alamat' => 'JL RAGA SEMANGSANG GGI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            225 =>
            array (
                'idcust' => 1268,
                'cust_nomor' => 'MP00886',
                'cust_nama' => 'DANUNG',
                'cust_alamat' => 'JL KS TUBUN PWT',
                'cust_notelp' => '081804873923',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            226 =>
            array (
                'idcust' => 1269,
                'cust_nomor' => 'MP00910',
                'cust_nama' => 'DUDDY',
                'cust_alamat' => 'JL JEND SUDIRMAN TIMUR 914 PWT',
                'cust_notelp' => '08161411954',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            227 =>
            array (
                'idcust' => 1270,
                'cust_nomor' => 'MP00888',
                'cust_nama' => 'DIAZ',
                'cust_alamat' => 'GATOT SUBROTO PWT',
                'cust_notelp' => '08122713943',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            228 =>
            array (
                'idcust' => 1271,
                'cust_nomor' => 'MP01276',
                'cust_nama' => 'DAVID BASTIAN',
                'cust_alamat' => 'PERUM PURI INTAN PWT',
                'cust_notelp' => '085266266171',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            229 =>
            array (
                'idcust' => 1272,
                'cust_nomor' => 'MP01247',
                'cust_nama' => 'DIAN S',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081802601505',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            230 =>
            array (
                'idcust' => 1273,
                'cust_nomor' => 'MP01239',
                'cust_nama' => 'DITA LARASATI',
                'cust_alamat' => 'JL KOL SUGIONO III/124 PWT KULON',
                'cust_notelp' => '08172813300',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            231 =>
            array (
                'idcust' => 1274,
                'cust_nomor' => 'MP00875',
                'cust_nama' => 'DHIAN OCTALLYA YS',
                'cust_alamat' => 'WISMA DHARMALOKA KRNG WANGKAL PWT',
                'cust_notelp' => '085227272324',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            232 =>
            array (
                'idcust' => 1275,
                'cust_nomor' => 'MP01130',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'JL KALPATARU III/4 PURWOSARI',
                'cust_notelp' => '081548836304',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            233 =>
            array (
                'idcust' => 1276,
                'cust_nomor' => 'MP01037',
                'cust_nama' => 'DIAN RESTU ADI',
                'cust_alamat' => 'JL SURAMENGGALA 27A PWT',
                'cust_notelp' => '081548842983',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            234 =>
            array (
                'idcust' => 1277,
                'cust_nomor' => 'MP01125',
                'cust_nama' => 'DIDI P',
                'cust_alamat' => 'CINDRAWASIH PWT',
                'cust_notelp' => '08170931101',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            235 =>
            array (
                'idcust' => 1278,
                'cust_nomor' => 'MP00892',
                'cust_nama' => 'DEDY SETIAWAN',
                'cust_alamat' => 'PERUM GRIYA SATRIA BLOK EA2 SUMAMPIR PWT',
                'cust_notelp' => '085227517574',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            236 =>
            array (
                'idcust' => 1279,
                'cust_nomor' => 'MP01110',
                'cust_nama' => 'DEDY SULISTIYANTO',
                'cust_alamat' => 'BANYUMAS',
                'cust_notelp' => '08156296468',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            237 =>
            array (
                'idcust' => 1280,
                'cust_nomor' => 'MP01083',
                'cust_nama' => 'DIDOT',
                'cust_alamat' => 'JL BANK GG III/15 PWT',
                'cust_notelp' => '081327534455',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            238 =>
            array (
                'idcust' => 1281,
                'cust_nomor' => 'MP00981',
                'cust_nama' => 'DAVIT SAEGOEN',
                'cust_alamat' => 'JL DR ANGKA 7 PWT',
                'cust_notelp' => '085647731111',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            239 =>
            array (
                'idcust' => 1282,
                'cust_nomor' => 'MP01345',
                'cust_nama' => 'DEISTA TRI A',
                'cust_alamat' => 'PERUM BERKOH DII/211 PWT',
                'cust_notelp' => '081391056000',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            240 =>
            array (
                'idcust' => 1283,
                'cust_nomor' => 'MP01346',
                'cust_nama' => 'DEWIE AR',
                'cust_alamat' => 'PALEM INDAH A2/14 PWT',
                'cust_notelp' => '08882692626',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            241 =>
            array (
                'idcust' => 1284,
                'cust_nomor' => 'MP01349',
                'cust_nama' => 'DEVI NURMALITA SARI',
                'cust_alamat' => 'JL KOL SUGIONO LE/35 KRANJI PWT',
                'cust_notelp' => '085227636890',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            242 =>
            array (
                'idcust' => 1285,
                'cust_nomor' => 'MP01635',
                'cust_nama' => 'SUKMA',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081327097201',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            243 =>
            array (
                'idcust' => 1286,
                'cust_nomor' => 'MP01319',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'PERUM PURWOKENCANA I BLOK V/9B PWT',
                'cust_notelp' => '081542740888',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            244 =>
            array (
                'idcust' => 1287,
                'cust_nomor' => 'MP01369',
                'cust_nama' => 'DEWI NOVITASARI',
                'cust_alamat' => 'JL PASIR RAJA PWT',
                'cust_notelp' => '08156974858',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            245 =>
            array (
                'idcust' => 1288,
                'cust_nomor' => 'MP01371',
                'cust_nama' => 'DESY PRINAVITA TRI W',
                'cust_alamat' => 'JL SOKA INDAH 33 BERKOH PWT SELATAN',
                'cust_notelp' => '085647800990',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            246 =>
            array (
                'idcust' => 1289,
                'cust_nomor' => 'MP01342',
                'cust_nama' => 'DINCAS D P',
                'cust_alamat' => 'JL SERAYU II/4 PERUM SUMAMPIR PWT',
                'cust_notelp' => '085227579990',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            247 =>
            array (
                'idcust' => 1290,
                'cust_nomor' => 'MP01358',
                'cust_nama' => 'DEDI',
                'cust_alamat' => 'PERUM GRAYA SATRIA II PWT',
                'cust_notelp' => '081326867366',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            248 =>
            array (
                'idcust' => 1291,
                'cust_nomor' => 'MP01359',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'JL KARANG KOBAR PWT',
                'cust_notelp' => '081327166556',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            249 =>
            array (
                'idcust' => 1292,
                'cust_nomor' => 'MP01360',
                'cust_nama' => 'DILA',
                'cust_alamat' => 'JL PEMUDA GG PERKUTUT PWT',
                'cust_notelp' => '081804076575',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            250 =>
            array (
                'idcust' => 1293,
                'cust_nomor' => 'MP01141',
                'cust_nama' => 'DANY TARIGAN',
                'cust_alamat' => 'JL DI PANJAITAN GG SUDAGARAN 40 PWT',
                'cust_notelp' => '085223004449',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            251 =>
            array (
                'idcust' => 1294,
                'cust_nomor' => 'MP01636',
                'cust_nama' => 'AMI',
                'cust_alamat' => 'JL PATRIOT GG MAWAR 2/35 PWT',
                'cust_notelp' => '0281 624519',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            252 =>
            array (
                'idcust' => 1295,
                'cust_nomor' => 'MP00994',
                'cust_nama' => 'DIAH',
                'cust_alamat' => 'JL DR SUPARNO PWT',
                'cust_notelp' => '081911443173',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            253 =>
            array (
                'idcust' => 1296,
                'cust_nomor' => 'MP01155',
                'cust_nama' => 'DENI',
                'cust_alamat' => 'JL KH AGUS SALIM V/29 PWT',
                'cust_notelp' => '085227625115',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            254 =>
            array (
                'idcust' => 1297,
                'cust_nomor' => 'MP00945',
                'cust_nama' => 'C DEASY',
                'cust_alamat' => 'JL MARTADIREJA 59 PWT',
                'cust_notelp' => '08122744708',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            255 =>
            array (
                'idcust' => 1298,
                'cust_nomor' => 'MP01000',
                'cust_nama' => 'DONA D A',
                'cust_alamat' => 'JL DR SUHARSO 25A PWT',
                'cust_notelp' => '0281 7641448',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            256 =>
            array (
                'idcust' => 1299,
                'cust_nomor' => 'MP01148',
                'cust_nama' => 'DEDY SETYAWAN',
                'cust_alamat' => 'JL RIYANTO 20B SUMAMPIR PWT',
                'cust_notelp' => '081327138839',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            257 =>
            array (
                'idcust' => 1300,
                'cust_nomor' => 'MP01079',
                'cust_nama' => 'DWI SUJATMIKO',
                'cust_alamat' => 'SPEED NET',
                'cust_notelp' => '085624334477',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            258 =>
            array (
                'idcust' => 1301,
                'cust_nomor' => 'MP00955',
                'cust_nama' => 'DANANG',
                'cust_alamat' => 'JL MARTADIREJA II/2 MERSI PWT',
                'cust_notelp' => '08172812650',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            259 =>
            array (
                'idcust' => 1302,
                'cust_nomor' => 'MP01234',
                'cust_nama' => 'EMMY T',
                'cust_alamat' => 'JL MANGGA E4/29 GTSI PWT',
                'cust_notelp' => '081327055513',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            260 =>
            array (
                'idcust' => 1303,
                'cust_nomor' => 'MP01142',
                'cust_nama' => 'EKO',
                'cust_alamat' => 'JL KOBER GG TERATE 12 PWT',
                'cust_notelp' => '08156979150',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            261 =>
            array (
                'idcust' => 1304,
                'cust_nomor' => 'MP01333',
                'cust_nama' => 'E MERRY NATALIA S',
                'cust_alamat' => 'JL MANGUNJAYA 4 RT07/03 PWT',
                'cust_notelp' => '085647800859',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            262 =>
            array (
                'idcust' => 1305,
                'cust_nomor' => 'MP01300',
                'cust_nama' => 'EVIE',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '85227220022',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            263 =>
            array (
                'idcust' => 1306,
                'cust_nomor' => 'MP01215',
                'cust_nama' => 'ELI MARINA',
                'cust_alamat' => 'JL SRANDIL 337 KARANG WANGKAL PWT',
                'cust_notelp' => '085624566660',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            264 =>
            array (
                'idcust' => 1307,
                'cust_nomor' => 'MP01316',
                'cust_nama' => 'ESTER WAHYUNINGSIH',
                'cust_alamat' => 'PERUM BERKOH INDAH BII/119 PWT',
                'cust_notelp' => '081327947777',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            265 =>
            array (
                'idcust' => 1308,
                'cust_nomor' => 'MP01347',
                'cust_nama' => 'EKO SUMARTADILAGA',
                'cust_alamat' => 'JL SUNAN KL JAGA GG VI/5A BERKOH PWT',
                'cust_notelp' => '081316724686',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            266 =>
            array (
                'idcust' => 1309,
                'cust_nomor' => 'MP01121',
                'cust_nama' => 'ERLY',
                'cust_alamat' => 'JL TANJLIG PWT',
                'cust_notelp' => '08122959268',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            267 =>
            array (
                'idcust' => 1310,
                'cust_nomor' => 'MP00902',
                'cust_nama' => 'EVI',
                'cust_alamat' => 'NOVIE SALON KARANG WANGKAL PWT',
                'cust_notelp' => '0818282492666',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            268 =>
            array (
                'idcust' => 1311,
                'cust_nomor' => 'MP01211',
                'cust_nama' => 'EVI ANDRIANI ',
                'cust_alamat' => 'JL PRAMUKA RT03/03 PWT KULON',
                'cust_notelp' => '08562608334',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            269 =>
            array (
                'idcust' => 1312,
                'cust_nomor' => 'MP01258',
                'cust_nama' => 'ERVIN',
                'cust_alamat' => 'JL PROF. DR SUHARSO GG KENANGA 7 PWT',
                'cust_notelp' => '08886655996',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            270 =>
            array (
                'idcust' => 1313,
                'cust_nomor' => 'MP01061',
                'cust_nama' => 'ERNA',
                'cust_alamat' => 'JL DAMAR VI/125-126 PERUM TELUK PWT',
                'cust_notelp' => '081542986888',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            271 =>
            array (
                'idcust' => 1314,
                'cust_nomor' => 'MP01252',
                'cust_nama' => 'EVAN PRADANA',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '08562631122',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            272 =>
            array (
                'idcust' => 1315,
                'cust_nomor' => 'MP00998',
                'cust_nama' => 'ERIX',
                'cust_alamat' => 'PASIR PWT',
                'cust_notelp' => '081546779877',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            273 =>
            array (
                'idcust' => 1316,
                'cust_nomor' => 'MP00942',
                'cust_nama' => 'ERNI SUGIARTI',
                'cust_alamat' => 'LINGGASARI RT02/06 KEC KEMBARAN',
                'cust_notelp' => '081564604288',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            274 =>
            array (
                'idcust' => 1317,
                'cust_nomor' => 'MP00870',
                'cust_nama' => 'ESTER',
                'cust_alamat' => 'JL MESJID GG IV/5 PWT',
                'cust_notelp' => '0281 633611',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            275 =>
            array (
                'idcust' => 1318,
                'cust_nomor' => 'MP01035',
                'cust_nama' => 'ENDAH SARAS',
                'cust_alamat' => 'LIMAS AGUNG BLOK I/6 PWT',
                'cust_notelp' => '085227351300',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            276 =>
            array (
                'idcust' => 1319,
                'cust_nomor' => 'MP01637',
                'cust_nama' => 'ARIF',
                'cust_alamat' => 'JL MADRANI GG NAKULA WISMA HARMONI PWT',
                'cust_notelp' => '081931838661',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            277 =>
            array (
                'idcust' => 1320,
                'cust_nomor' => 'MP00930',
                'cust_nama' => 'EGA A',
                'cust_alamat' => 'PERUM BANCAR KEMBAR BLOK I/10 PWT',
                'cust_notelp' => '081328657171',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            278 =>
            array (
                'idcust' => 1321,
                'cust_nomor' => 'MP01223',
                'cust_nama' => 'EKA PRASETYO',
                'cust_alamat' => 'KARANG PUCUNG PWT',
                'cust_notelp' => '0818362136',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            279 =>
            array (
                'idcust' => 1322,
                'cust_nomor' => 'MP01090',
                'cust_nama' => 'EKO SUMANTORO ',
                'cust_alamat' => 'JL KARANG MELATI 10 PWT',
                'cust_notelp' => '0281 635881',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            280 =>
            array (
                'idcust' => 1323,
                'cust_nomor' => 'MP01322',
                'cust_nama' => 'ENTI WAHYUNINGSIH',
                'cust_alamat' => 'GRIYA SATRIA INDAH 2 BLOK N4 SUMAMPIR PWT',
                'cust_notelp' => '081327428367',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            281 =>
            array (
                'idcust' => 1324,
                'cust_nomor' => 'MP00884',
                'cust_nama' => 'EFIK',
                'cust_alamat' => 'KRAMAT KEMBARAN BMS',
                'cust_notelp' => '081542951642',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            282 =>
            array (
                'idcust' => 1325,
                'cust_nomor' => 'MP01034',
                'cust_nama' => 'EKO SUSANTO',
                'cust_alamat' => 'BOBOSAN RT02/01 PWT',
                'cust_notelp' => '08122776605',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            283 =>
            array (
                'idcust' => 1326,
                'cust_nomor' => 'MP00885',
                'cust_nama' => 'EKO KRISTIANTO',
                'cust_alamat' => 'JL MAY JEND PANJAITAN 11 PURBALINGGA',
                'cust_notelp' => '081327430220',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            284 =>
            array (
                'idcust' => 1327,
                'cust_nomor' => 'MP1030',
                'cust_nama' => 'ESTRI',
                'cust_alamat' => 'JL GEREJA 19 PWT',
                'cust_notelp' => '081542975888',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            285 =>
            array (
                'idcust' => 1328,
                'cust_nomor' => 'MP00387',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'LIMAS AGUNG PWT',
                'cust_notelp' => '08195570892',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            286 =>
            array (
                'idcust' => 1329,
                'cust_nomor' => 'MP01054',
                'cust_nama' => 'EDWIN AC ROZZAN',
                'cust_alamat' => 'PERUM GRAHA MUSTIKA A10 PWT',
                'cust_notelp' => '0281 7621172',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            287 =>
            array (
                'idcust' => 1330,
                'cust_nomor' => 'MP00972',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'ADIPURA 5/169 PURWOSARI',
                'cust_notelp' => '0281 639996',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            288 =>
            array (
                'idcust' => 1331,
                'cust_nomor' => 'MP01063',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'REJASARI RT03/02 PWT',
                'cust_notelp' => '081327222434',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            289 =>
            array (
                'idcust' => 1332,
                'cust_nomor' => 'MP00908',
                'cust_nama' => 'EKA NURFITYA HARYANI',
                'cust_alamat' => 'LIMAS PERMAI BLOK E1 PWT',
                'cust_notelp' => '085227522228',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            290 =>
            array (
                'idcust' => 1333,
                'cust_nomor' => 'MP00906',
                'cust_nama' => 'FREDDY',
                'cust_alamat' => 'SMG',
                'cust_notelp' => '08122934886',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            291 =>
            array (
                'idcust' => 1334,
                'cust_nomor' => 'MP01273',
                'cust_nama' => 'FATMA',
                'cust_alamat' => 'ARCA WINANGUN ESTATE AB 2/4 PWT',
                'cust_notelp' => '081327016961',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            292 =>
            array (
                'idcust' => 1335,
                'cust_nomor' => 'MP00877',
                'cust_nama' => 'FIRMAN PRASETYA',
                'cust_alamat' => 'JL A YANI GG1/10 PWT',
                'cust_notelp' => '081327755597',
                'cust_date' => '2007-04-01',
                'cust_author' => 'YUNI',
            ),
            293 =>
            array (
                'idcust' => 1336,
                'cust_nomor' => 'MP01340',
                'cust_nama' => 'FARE IBNU LANI',
                'cust_alamat' => 'SOKARAJA LOR RT03/II PWT',
                'cust_notelp' => '081327462290',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            294 =>
            array (
                'idcust' => 1337,
                'cust_nomor' => 'MP01149',
                'cust_nama' => 'FENTI ISHARYANTI',
                'cust_alamat' => 'JL HOPAN 9 PWT',
                'cust_notelp' => '081328765522',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            295 =>
            array (
                'idcust' => 1338,
                'cust_nomor' => 'MP01326',
                'cust_nama' => 'FANDI/CITRA',
                'cust_alamat' => 'SOKARAJA KULON RT02/II SKRJA BANYUMAS',
                'cust_notelp' => '085647726633',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            296 =>
            array (
                'idcust' => 1339,
                'cust_nomor' => 'MP00985',
                'cust_nama' => 'FIDO',
                'cust_alamat' => 'KR SALAM RT03/03 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            297 =>
            array (
                'idcust' => 1340,
                'cust_nomor' => 'MP01296',
                'cust_nama' => 'FAIZAL ARIEF',
                'cust_alamat' => 'JL BANOWATI 21 PWT',
                'cust_notelp' => '085647638364',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            298 =>
            array (
                'idcust' => 1341,
                'cust_nomor' => 'MP01136',
                'cust_nama' => 'FENNI WIDIARTI',
                'cust_alamat' => 'JL MADRANI 65A GRENDENG PWT',
                'cust_notelp' => '08562907209',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            299 =>
            array (
                'idcust' => 1342,
                'cust_nomor' => 'MP01055',
                'cust_nama' => 'FEGY',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '085227442550',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            300 =>
            array (
                'idcust' => 1343,
                'cust_nomor' => 'MP01003',
                'cust_nama' => 'FEBI ASTI S ',
                'cust_alamat' => 'JL KS TUBUN 84 RT04/06 PWT BARAT',
                'cust_notelp' => '085640752796',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            301 =>
            array (
                'idcust' => 1344,
                'cust_nomor' => 'MP01005',
                'cust_nama' => 'FITA THEREZIA H',
                'cust_alamat' => 'PERUM BERKOH G 3/326 PWT',
                'cust_notelp' => '081806169777',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            302 =>
            array (
                'idcust' => 1345,
                'cust_nomor' => 'MP0956',
                'cust_nama' => 'FATMA',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081327505220',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            303 =>
            array (
                'idcust' => 1346,
                'cust_nomor' => 'MP00959',
                'cust_nama' => 'FIRDAUS',
                'cust_alamat' => 'PERUM KEDUNG WRINGIN/KODIM PWT',
                'cust_notelp' => '085227498999',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            304 =>
            array (
                'idcust' => 1347,
                'cust_nomor' => 'MP01016',
                'cust_nama' => 'FAJAR MUTTAQIN',
                'cust_alamat' => 'LINGGAPURA RT02/03 TANJUNG PWT',
                'cust_notelp' => '08172312454',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            305 =>
            array (
                'idcust' => 1348,
                'cust_nomor' => 'MP01122',
                'cust_nama' => 'FADJAR',
                'cust_alamat' => 'PDAM',
                'cust_notelp' => '08122670720',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            306 =>
            array (
                'idcust' => 1349,
                'cust_nomor' => 'MP01111',
                'cust_nama' => 'FERONIKA INDRIANI',
                'cust_alamat' => 'JL GRIYA SATRIA BLOK C/9 PWT',
                'cust_notelp' => '081804777568',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            307 =>
            array (
                'idcust' => 1350,
                'cust_nomor' => 'MP01023',
                'cust_nama' => 'FAJAR MULIA',
                'cust_alamat' => 'BA I 12/7A',
                'cust_notelp' => '7605553',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            308 =>
            array (
                'idcust' => 1351,
                'cust_nomor' => 'MP01051',
                'cust_nama' => 'FINK FANK',
                'cust_alamat' => 'RADEN STONE',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            309 =>
            array (
                'idcust' => 1352,
                'cust_nomor' => 'MP01302',
                'cust_nama' => 'T GAYUH W',
                'cust_alamat' => 'KETAPANG VI/18 PERUM TELUK PWT',
                'cust_notelp' => '081315811892',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            310 =>
            array (
                'idcust' => 1353,
                'cust_nomor' => 'MP01366',
                'cust_nama' => 'GATOT WIBISONO',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '08123450009',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            311 =>
            array (
                'idcust' => 1354,
                'cust_nomor' => 'MP01380',
                'cust_nama' => 'GANDA',
                'cust_alamat' => 'JL CENDRAWASIH 15 PWT',
                'cust_notelp' => '081804888691',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            312 =>
            array (
                'idcust' => 1355,
                'cust_nomor' => 'MP00911',
                'cust_nama' => 'GUGI L',
                'cust_alamat' => 'JL PALEM BLOK C2/64 PWT',
                'cust_notelp' => '081327070822',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            313 =>
            array (
                'idcust' => 1356,
                'cust_nomor' => 'MP00850',
                'cust_nama' => 'GERID',
                'cust_alamat' => 'LIMAS AGUNG C1/14 PWT',
                'cust_notelp' => '0281 638362',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            314 =>
            array (
                'idcust' => 1357,
                'cust_nomor' => 'MP01041',
                'cust_nama' => 'HAMAM',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '08562601000',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            315 =>
            array (
                'idcust' => 1358,
                'cust_nomor' => 'MP00900',
                'cust_nama' => 'HERRY',
                'cust_alamat' => 'JL DR ANGKA 74 PWT',
                'cust_notelp' => '08156984129',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            316 =>
            array (
                'idcust' => 1359,
                'cust_nomor' => 'MP00937',
                'cust_nama' => 'HENDRA JANUARI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '081802697000',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            317 =>
            array (
                'idcust' => 1360,
                'cust_nomor' => 'MP01044',
                'cust_nama' => 'HERRY WIDJAYANTO',
                'cust_alamat' => 'KARANG SOKA RT05/01 KEC KEMBARAN',
                'cust_notelp' => '081327072904',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            318 =>
            array (
                'idcust' => 1361,
                'cust_nomor' => 'MP01146',
                'cust_nama' => 'HARIADI',
                'cust_alamat' => 'ARCAWINANGUN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            319 =>
            array (
                'idcust' => 1362,
                'cust_nomor' => 'MP00962',
                'cust_nama' => 'HENGKY',
                'cust_alamat' => 'PERUM LEDUG',
                'cust_notelp' => '085647785559',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            320 =>
            array (
                'idcust' => 1363,
                'cust_nomor' => 'MP01332',
                'cust_nama' => 'HELMI SULISTIAN',
                'cust_alamat' => 'SIDABOA RT01/IV ',
                'cust_notelp' => '081327027884',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            321 =>
            array (
                'idcust' => 1364,
                'cust_nomor' => 'MP00851',
                'cust_nama' => 'HASTOMO MEI D',
                'cust_alamat' => 'KROYA',
                'cust_notelp' => '081802727704',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            322 =>
            array (
                'idcust' => 1365,
                'cust_nomor' => 'MP01638',
                'cust_nama' => 'AMANDA',
                'cust_alamat' => 'JL.RA.WIRYAATMAJA PWT',
                'cust_notelp' => '640240',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            323 =>
            array (
                'idcust' => 1366,
                'cust_nomor' => 'MP01639',
                'cust_nama' => 'TANTO',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '081327434403',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            324 =>
            array (
                'idcust' => 1367,
                'cust_nomor' => 'MP01640',
                'cust_nama' => 'ERNA',
                'cust_alamat' => 'UMP',
                'cust_notelp' => '641660',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            325 =>
            array (
                'idcust' => 1368,
                'cust_nomor' => 'MP00798',
                'cust_nama' => 'SRI REJEKI',
                'cust_alamat' => 'BANOWATI 24 PWT',
                'cust_notelp' => '02817605559',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            326 =>
            array (
                'idcust' => 1369,
                'cust_nomor' => 'MP01641',
                'cust_nama' => 'RACHMAT',
                'cust_alamat' => 'PSBS PWT UNSOED',
                'cust_notelp' => '085227578916',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            327 =>
            array (
                'idcust' => 1370,
                'cust_nomor' => 'MP00392',
                'cust_nama' => 'ISYANA CANDRA DEWI',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '085228806558',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            328 =>
            array (
                'idcust' => 1371,
                'cust_nomor' => 'MP01642',
                'cust_nama' => 'ULFA',
                'cust_alamat' => 'JL.STASIUN 4/I PWT BARAT',
                'cust_notelp' => '0281628714',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            329 =>
            array (
                'idcust' => 1372,
                'cust_nomor' => 'MP00893',
                'cust_nama' => 'HARY',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '0281 7641211',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            330 =>
            array (
                'idcust' => 1373,
                'cust_nomor' => 'MP01320',
                'cust_nama' => 'HENI WURIKANTI',
                'cust_alamat' => 'JL SEKOLAH TEKHNIK GGIII PWT',
                'cust_notelp' => '0852274955489',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            331 =>
            array (
                'idcust' => 1374,
                'cust_nomor' => 'MP01321',
                'cust_nama' => 'HUNI KHUZA Y',
                'cust_alamat' => 'AJIBARANG WETAN RT02/XI ',
                'cust_notelp' => '08157074082',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            332 =>
            array (
                'idcust' => 1375,
                'cust_nomor' => 'MP01012',
                'cust_nama' => 'M HUSEN',
                'cust_alamat' => 'RT01/III JOMPO KALI MANAH PURBALINGGA',
                'cust_notelp' => '08562444983',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            333 =>
            array (
                'idcust' => 1376,
                'cust_nomor' => 'MP01230',
                'cust_nama' => 'HENI H PUSPITANINGTYAS',
                'cust_alamat' => 'JL JATI WINANGUN 41 PWT',
                'cust_notelp' => '08122670905',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            334 =>
            array (
                'idcust' => 1377,
                'cust_nomor' => 'MP01025',
                'cust_nama' => 'HARTATI',
                'cust_alamat' => 'SOKAJAYA 4 PWT',
                'cust_notelp' => '0281 628028',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            335 =>
            array (
                'idcust' => 1378,
                'cust_nomor' => 'MP01028',
                'cust_nama' => 'HAYU RIZQI AMALLIA',
                'cust_alamat' => 'PERUM KEDUNG WRINGIN PWT',
                'cust_notelp' => '085227116444',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            336 =>
            array (
                'idcust' => 1379,
                'cust_nomor' => 'MP00932',
                'cust_nama' => 'HENDAWAN',
                'cust_alamat' => 'PURWOKENCANA I/IIB PWT',
                'cust_notelp' => '081327685531',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            337 =>
            array (
                'idcust' => 1380,
                'cust_nomor' => 'MP00868',
                'cust_nama' => 'HENDRO RIZKY',
                'cust_alamat' => 'PERUM LEDUG BHAYANGKARA B15 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            338 =>
            array (
                'idcust' => 1381,
                'cust_nomor' => 'MP01325',
                'cust_nama' => 'INDI SOKOCO',
                'cust_alamat' => 'SAMPANG CILACAP',
                'cust_notelp' => '08122726008',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            339 =>
            array (
                'idcust' => 1382,
                'cust_nomor' => 'MP01323',
                'cust_nama' => 'IKA NATALI DEWI',
                'cust_alamat' => 'PERUM GRIYA SATRIA II BLOK P 46 PWT',
                'cust_notelp' => '08122997939',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            340 =>
            array (
                'idcust' => 1383,
                'cust_nomor' => 'MP01341',
                'cust_nama' => 'IKA SETIAWAN',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '085227166529',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            341 =>
            array (
                'idcust' => 1384,
                'cust_nomor' => 'MP01032',
                'cust_nama' => 'IRIN NURMA N',
                'cust_alamat' => 'PASIR WETAN RT06/01 PWT',
                'cust_notelp' => '0281 624410',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            342 =>
            array (
                'idcust' => 1385,
                'cust_nomor' => 'MP00894',
                'cust_nama' => 'INDRI',
                'cust_alamat' => 'PERUM PURI HIJAU P1 C/2 PWT',
                'cust_notelp' => '081542978787',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            343 =>
            array (
                'idcust' => 1386,
                'cust_nomor' => 'MP00965',
                'cust_nama' => 'IRIE TANSLAYAVIA',
                'cust_alamat' => 'JL PROF DR SUHARSO PWT',
                'cust_notelp' => '085227488999',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            344 =>
            array (
                'idcust' => 1387,
                'cust_nomor' => 'MP00881',
                'cust_nama' => 'IWAN D',
                'cust_alamat' => 'JL MOCH BESAR RT02/03 PWT',
                'cust_notelp' => '0281 7620284',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            345 =>
            array (
                'idcust' => 1388,
                'cust_nomor' => 'MP01216',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'HR BUNYAMIN P2-11 PWT',
                'cust_notelp' => '081548821617',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            346 =>
            array (
                'idcust' => 1389,
                'cust_nomor' => 'MP00927',
                'cust_nama' => 'INA',
                'cust_alamat' => 'JL PROF SUHARSO 3 PWT',
                'cust_notelp' => '08882687561',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            347 =>
            array (
                'idcust' => 1390,
                'cust_nomor' => 'MP01643',
                'cust_nama' => 'NOVA',
                'cust_alamat' => 'JL KADEMANGAN 1 PWT WETAN',
                'cust_notelp' => '085227121121',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            348 =>
            array (
                'idcust' => 1391,
                'cust_nomor' => 'MP01354',
                'cust_nama' => 'INDARTO',
                'cust_alamat' => 'PONDOK RT06/01 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            349 =>
            array (
                'idcust' => 1392,
                'cust_nomor' => 'MP01218',
                'cust_nama' => 'IMAN S',
                'cust_alamat' => 'JL KOBER 344 PWT',
                'cust_notelp' => '081327643343',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            350 =>
            array (
                'idcust' => 1393,
                'cust_nomor' => 'MP01217',
                'cust_nama' => 'IRMANDA IKA MEILANA',
                'cust_alamat' => 'JL A JAELANI GRIYA KAYLA 2 PWT UTRA',
                'cust_notelp' => '085227443300',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            351 =>
            array (
                'idcust' => 1394,
                'cust_nomor' => 'MP01152',
                'cust_nama' => 'INTAN',
                'cust_alamat' => 'JL DR ANGKA 75B PWT',
                'cust_notelp' => '081327678679',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            352 =>
            array (
                'idcust' => 1395,
                'cust_nomor' => 'MP01145',
                'cust_nama' => 'IRMA SOSILOWATI',
                'cust_alamat' => 'REMPOAH RT05/05 BATUR RADEN PWT',
                'cust_notelp' => '085647605671',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            353 =>
            array (
                'idcust' => 1396,
                'cust_nomor' => 'MP01117',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            354 =>
            array (
                'idcust' => 1397,
                'cust_nomor' => 'MP01084',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '08886651187',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            355 =>
            array (
                'idcust' => 1398,
                'cust_nomor' => 'MP01243',
                'cust_nama' => 'IKA PRASETYA',
                'cust_alamat' => 'JL RIYANTO RT1/1 SUMAMPIR PWT',
                'cust_notelp' => '08156976629',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            356 =>
            array (
                'idcust' => 1399,
                'cust_nomor' => 'MP01232',
                'cust_nama' => 'IRMA SETIAWATI',
                'cust_alamat' => 'PERUM BOJANEGARA ',
                'cust_notelp' => '0281 7635070',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            357 =>
            array (
                'idcust' => 1400,
                'cust_nomor' => 'MP01259',
                'cust_nama' => 'ICHA',
                'cust_alamat' => 'JL GNG KELUD 39 PABUARAN PWT',
                'cust_notelp' => '085227519119',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            358 =>
            array (
                'idcust' => 1401,
                'cust_nomor' => 'MP01132',
                'cust_nama' => 'ICE FARANTINA',
                'cust_alamat' => 'JL PAHLAWAN GG V/1 PWT',
                'cust_notelp' => '081327038931',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            359 =>
            array (
                'idcust' => 1402,
                'cust_nomor' => 'MP00963',
                'cust_nama' => 'IRFAN',
                'cust_alamat' => 'KARANG JAMBU PWT',
                'cust_notelp' => '0281 623626',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            360 =>
            array (
                'idcust' => 1403,
                'cust_nomor' => 'MP00859',
                'cust_nama' => 'IMEL',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '0811281311',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            361 =>
            array (
                'idcust' => 1404,
                'cust_nomor' => 'MP01065',
                'cust_nama' => 'IKA NURMASITOH',
                'cust_alamat' => 'SOKARAJA KIDUL',
                'cust_notelp' => '081319099472',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            362 =>
            array (
                'idcust' => 1405,
                'cust_nomor' => 'MP01310',
                'cust_nama' => 'IRGUS CAHYA',
                'cust_alamat' => 'JATIWINANGUN 40 PWT',
                'cust_notelp' => '08157902115',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            363 =>
            array (
                'idcust' => 1406,
                'cust_nomor' => 'MP00953',
                'cust_nama' => 'INDRI HAPSARI',
                'cust_alamat' => 'JL DR SUPARNO 770 PWT',
                'cust_notelp' => '08164289221',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            364 =>
            array (
                'idcust' => 1407,
                'cust_nomor' => 'MP00926',
                'cust_nama' => 'ICHA',
                'cust_alamat' => 'JL BEROBAHAN TIMUR PWT',
                'cust_notelp' => '08156899164',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            365 =>
            array (
                'idcust' => 1408,
                'cust_nomor' => 'MP01190',
                'cust_nama' => 'JOHANES',
                'cust_alamat' => '-',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            366 =>
            array (
                'idcust' => 1409,
                'cust_nomor' => 'MP01233',
                'cust_nama' => 'JIBETH',
            'cust_alamat' => 'KARANG SALAM (PUSPA RINI) PWT',
                'cust_notelp' => '081328017744',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            367 =>
            array (
                'idcust' => 1410,
                'cust_nomor' => 'MP01384',
                'cust_nama' => 'JULIA SEKAR NINGSIH ',
                'cust_alamat' => 'JL ADIPURA III/110 PWT',
                'cust_notelp' => '081805973889',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            368 =>
            array (
                'idcust' => 1411,
                'cust_nomor' => 'MP01255',
                'cust_nama' => 'JOSANO',
                'cust_alamat' => 'KALI BOGOR PWT',
                'cust_notelp' => '081329222561',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            369 =>
            array (
                'idcust' => 1412,
                'cust_nomor' => 'MP01350',
                'cust_nama' => 'JAROT SARWO',
                'cust_alamat' => 'JL KOBER 40 PWT',
                'cust_notelp' => '08172810666',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            370 =>
            array (
                'idcust' => 1413,
                'cust_nomor' => 'MP01254',
                'cust_nama' => 'JONI',
                'cust_alamat' => 'BOBOSAN RT01/01 3 GG AGUNG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            371 =>
            array (
                'idcust' => 1414,
                'cust_nomor' => 'MP01103',
                'cust_nama' => 'KILLY',
                'cust_alamat' => 'BANCAR KEMBAR ESTAT BLOK D/2 PWT',
                'cust_notelp' => '81542880795',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            372 =>
            array (
                'idcust' => 1415,
                'cust_nomor' => 'MP01381',
                'cust_nama' => 'KARTIKA PERMATA SARI',
                'cust_alamat' => 'JL SURAMENGGALA 88 REJASARI PWT',
                'cust_notelp' => '085224450500',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            373 =>
            array (
                'idcust' => 1416,
                'cust_nomor' => 'MP01375',
                'cust_nama' => 'KYKY',
                'cust_alamat' => 'JL M YUSUP 1247 PWT UTRA',
                'cust_notelp' => '081391111891',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            374 =>
            array (
                'idcust' => 1417,
                'cust_nomor' => 'MP00861',
                'cust_nama' => 'KARUNIA S B',
                'cust_alamat' => 'JL SEKOLAH TEKHNIK PWT',
                'cust_notelp' => '085227440372',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            375 =>
            array (
                'idcust' => 1418,
                'cust_nomor' => 'MP01336',
                'cust_nama' => 'KAWAN',
                'cust_alamat' => 'JL SERAYU RAYA 584 RT01/02 SUMAMPIR PWT',
                'cust_notelp' => '08562618999',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            376 =>
            array (
                'idcust' => 1419,
                'cust_nomor' => 'MP00856',
                'cust_nama' => 'KRESNA  ',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '081327090737',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            377 =>
            array (
                'idcust' => 1420,
                'cust_nomor' => 'MP01199',
                'cust_nama' => 'LIYA',
                'cust_alamat' => 'JL ULAM SARI 109 RT03/05 PWT',
                'cust_notelp' => '085227330340',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            378 =>
            array (
                'idcust' => 1421,
                'cust_nomor' => 'MP01331',
                'cust_nama' => 'LEOLITA AYU SALMIA',
                'cust_alamat' => 'JL PATRIOT GG MAWAR II/25 PWT',
                'cust_notelp' => '081327347683',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            379 =>
            array (
                'idcust' => 1422,
                'cust_nomor' => 'MP00979',
                'cust_nama' => 'LENNY',
                'cust_alamat' => 'JL BERINGIN BLOK C1/168 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            380 =>
            array (
                'idcust' => 1423,
                'cust_nomor' => 'MP01309',
                'cust_nama' => 'LHIAN',
                'cust_alamat' => 'REJASARI PWT',
                'cust_notelp' => '081548812886',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            381 =>
            array (
                'idcust' => 1424,
                'cust_nomor' => 'MP01318',
                'cust_nama' => 'LEDIA NOTRI VIANI',
                'cust_alamat' => 'WANGON',
                'cust_notelp' => '085227638500',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            382 =>
            array (
                'idcust' => 1425,
                'cust_nomor' => 'MP01187',
                'cust_nama' => 'LILIN BL',
                'cust_alamat' => 'JL KEMUTUG LOR RT09/II BATURRADEN PWT',
                'cust_notelp' => '081327444498',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            383 =>
            array (
                'idcust' => 1426,
                'cust_nomor' => 'MP01644',
                'cust_nama' => 'WAVA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085227447470',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            384 =>
            array (
                'idcust' => 1427,
                'cust_nomor' => 'MP01064',
                'cust_nama' => 'LIA',
                'cust_alamat' => 'GG KRANJI 7 PWT',
                'cust_notelp' => '085215293652',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            385 =>
            array (
                'idcust' => 1428,
                'cust_nomor' => 'MP01286',
                'cust_nama' => 'LUSY SUCIATI',
                'cust_alamat' => 'BANJAR PATRAMAN',
                'cust_notelp' => '081323478770',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            386 =>
            array (
                'idcust' => 1429,
                'cust_nomor' => 'MP01134',
                'cust_nama' => 'LIA ARDIANINGRUM',
                'cust_alamat' => 'JL JEND SUDIRMAN 235 SKJ',
                'cust_notelp' => '081327302152',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            387 =>
            array (
                'idcust' => 1430,
                'cust_nomor' => 'MP01070',
                'cust_nama' => 'LARAS PERWITASARI',
                'cust_alamat' => 'WISMA PUTRI DARMALOKA PWT',
                'cust_notelp' => '08156188086',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            388 =>
            array (
                'idcust' => 1431,
                'cust_nomor' => 'MP01114',
                'cust_nama' => 'LIEM',
                'cust_alamat' => 'PABUARAN PURWOKERTO',
                'cust_notelp' => '08122712552',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            389 =>
            array (
                'idcust' => 1432,
                'cust_nomor' => 'MP01262',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'PERUM BANCAR KEMBAR BLOK I PWT',
                'cust_notelp' => '081329705609',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            390 =>
            array (
                'idcust' => 1433,
                'cust_nomor' => 'MP00983',
                'cust_nama' => 'LINA ROMANTI',
                'cust_alamat' => 'KARANG MANGU PWT',
                'cust_notelp' => '08121554715',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            391 =>
            array (
                'idcust' => 1434,
                'cust_nomor' => 'MP00897',
                'cust_nama' => 'LIENSIS MEIARSIH',
                'cust_alamat' => 'UMP PWT',
                'cust_notelp' => '085221638626',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            392 =>
            array (
                'idcust' => 1435,
                'cust_nomor' => 'MP00917',
                'cust_nama' => 'LYLY',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '0281 7615757',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            393 =>
            array (
                'idcust' => 1436,
                'cust_nomor' => 'MP01048',
                'cust_nama' => 'LIAH',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081327566443',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            394 =>
            array (
                'idcust' => 1437,
                'cust_nomor' => 'MP01026',
                'cust_nama' => 'LUTHFI MAULIDDINA',
                'cust_alamat' => 'KARANG LEWAS PWT',
                'cust_notelp' => '085215096661',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            395 =>
            array (
                'idcust' => 1438,
                'cust_nomor' => 'MP01004',
                'cust_nama' => 'LUCIANA W',
                'cust_alamat' => 'PERUM PH VII/41 PWT',
                'cust_notelp' => '0281 641102',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            396 =>
            array (
                'idcust' => 1439,
                'cust_nomor' => 'MP00988',
                'cust_nama' => 'LEO YUDA FATTAH',
                'cust_alamat' => 'JL S PARMAN GG BUNTU 12 PWT',
                'cust_notelp' => '0281 635412',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            397 =>
            array (
                'idcust' => 1440,
                'cust_nomor' => 'MP00866',
                'cust_nama' => 'LINGGA B P',
                'cust_alamat' => 'JL KOBER GG TERATAI 5 PWT',
                'cust_notelp' => '0281 628490',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            398 =>
            array (
                'idcust' => 1441,
                'cust_nomor' => 'MP01157',
                'cust_nama' => 'LIAN',
                'cust_alamat' => 'JL BOBOSAN 12 PWT',
                'cust_notelp' => '081391205799',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            399 =>
            array (
                'idcust' => 1442,
                'cust_nomor' => 'MP00964',
                'cust_nama' => 'LIA',
                'cust_alamat' => 'PURWOKETO',
                'cust_notelp' => '0811281781',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            400 =>
            array (
                'idcust' => 1443,
                'cust_nomor' => 'MP00940',
                'cust_nama' => 'MERRY',
                'cust_alamat' => 'JL SUHARSO PWT',
                'cust_notelp' => '0818294403',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            401 =>
            array (
                'idcust' => 1444,
                'cust_nomor' => 'MP01287',
                'cust_nama' => 'M YUSUF',
                'cust_alamat' => 'KEBUMEN',
                'cust_notelp' => '081513627614',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            402 =>
            array (
                'idcust' => 1445,
                'cust_nomor' => 'MP01348',
                'cust_nama' => 'MAYA PUSPITASARI',
                'cust_alamat' => 'JL KOL SUGIONO IE 35 KRANJI PWT',
                'cust_notelp' => '085647773008',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            403 =>
            array (
                'idcust' => 1446,
                'cust_nomor' => 'MP01207',
                'cust_nama' => 'MEITY',
                'cust_alamat' => 'KEBON DALEM PWT',
                'cust_notelp' => '7632320',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            404 =>
            array (
                'idcust' => 1447,
                'cust_nomor' => 'MP01377',
                'cust_nama' => 'MIRANTI/AGUS',
                'cust_alamat' => 'COMPERTA DONAN CILACAP',
                'cust_notelp' => '08156801728',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            405 =>
            array (
                'idcust' => 1448,
                'cust_nomor' => 'MP01024',
                'cust_nama' => 'MITA R',
                'cust_alamat' => 'BA I 12/7A PWT',
                'cust_notelp' => '7605553',
                'cust_date' => '2007-04-02',
                'cust_author' => 'YUNI',
            ),
            406 =>
            array (
                'idcust' => 1449,
                'cust_nomor' => 'MP01645',
                'cust_nama' => 'IDA',
                'cust_alamat' => 'A YANI PWT',
                'cust_notelp' => '622860',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            407 =>
            array (
                'idcust' => 1450,
                'cust_nomor' => 'MP01646',
                'cust_nama' => 'YUNDI',
                'cust_alamat' => 'JLPROFDRSOEHARSO H 43 PWT',
                'cust_notelp' => '0818282989',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            408 =>
            array (
                'idcust' => 1451,
                'cust_nomor' => 'MP01647',
                'cust_nama' => 'HAPSANI PRASETYO',
                'cust_alamat' => 'JL.JATISARI 24B SMP 9 PWT',
                'cust_notelp' => '625362',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            409 =>
            array (
                'idcust' => 1452,
                'cust_nomor' => 'MP01648',
                'cust_nama' => 'GALUH FAJAR PAMUNGKAS',
                'cust_alamat' => 'JL.RIYANTO SMP 9 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            410 =>
            array (
                'idcust' => 1453,
                'cust_nomor' => 'MP01006',
                'cust_nama' => 'MEGA',
                'cust_alamat' => 'JL.JATISARI 88 SUMAMPIR PWT',
                'cust_notelp' => '081328071208',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            411 =>
            array (
                'idcust' => 1454,
                'cust_nomor' => 'MP00989',
                'cust_nama' => 'MAYANG INDRA SARI',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '085647788005',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            412 =>
            array (
                'idcust' => 1455,
                'cust_nomor' => 'MP01092',
                'cust_nama' => 'MUSTHOFA LUTFI',
                'cust_alamat' => 'BANK MEGA PWT',
                'cust_notelp' => '081327492586',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            413 =>
            array (
                'idcust' => 1456,
                'cust_nomor' => 'MP00960',
                'cust_nama' => 'MUJI OFA LIANA',
                'cust_alamat' => 'JL.RAYA CILONGOK 3/2 AJB',
                'cust_notelp' => '081327065376',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            414 =>
            array (
                'idcust' => 1457,
                'cust_nomor' => 'MP01206',
                'cust_nama' => 'NOVI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '081542956788',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            415 =>
            array (
                'idcust' => 1458,
                'cust_nomor' => 'MP01370',
                'cust_nama' => 'NIA',
                'cust_alamat' => 'PERUM.KALBA INDAH BLOK G14 BMS',
                'cust_notelp' => '085647641096',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            416 =>
            array (
                'idcust' => 1459,
                'cust_nomor' => 'MP01324',
                'cust_nama' => 'NURLISTYORINI',
                'cust_alamat' => 'JL.LET.JEND.POL.SOEMARTO XIV 10 PWT',
                'cust_notelp' => '08122674349',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            417 =>
            array (
                'idcust' => 1460,
                'cust_nomor' => 'MP00984',
                'cust_nama' => 'NINDYA F',
                'cust_alamat' => 'PERUM.GRIYA SATRIA S.16 BANTARSOKA PWT',
                'cust_notelp' => '760411',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            418 =>
            array (
                'idcust' => 1461,
                'cust_nomor' => 'MP00922',
                'cust_nama' => 'NOFITA HANINDYA R (DEA)',
                'cust_alamat' => 'BANK BUANA PWT',
                'cust_notelp' => '081327754854',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            419 =>
            array (
                'idcust' => 1462,
                'cust_nomor' => 'MP01246',
                'cust_nama' => 'NURAMIRUDIN',
                'cust_alamat' => 'JLTRIMUKTI 1 PWT',
                'cust_notelp' => '081327114712',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            420 =>
            array (
                'idcust' => 1463,
                'cust_nomor' => 'MP01251',
                'cust_nama' => 'NIA',
                'cust_alamat' => 'JL.MANGUNJAYA 20 PWT',
                'cust_notelp' => '081327218132',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            421 =>
            array (
                'idcust' => 1464,
                'cust_nomor' => 'MP01205',
                'cust_nama' => 'NANI SETIAWATI',
                'cust_alamat' => 'PERUM LIMAS AGUNG BLOK P5.2 PWT',
                'cust_notelp' => '08156505170',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            422 =>
            array (
                'idcust' => 1465,
                'cust_nomor' => 'MP01344',
                'cust_nama' => 'NESYA',
                'cust_alamat' => 'MANDIRANCAN 4/2 PATIKRAJA',
                'cust_notelp' => '085227621181',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            423 =>
            array (
                'idcust' => 1466,
                'cust_nomor' => 'MP01389',
                'cust_nama' => 'NANA',
                'cust_alamat' => 'JL.KR.KOBAR VII/5 PWT',
                'cust_notelp' => '081391261603',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            424 =>
            array (
                'idcust' => 1467,
                'cust_nomor' => 'MP01267',
                'cust_nama' => 'NINING',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '085227519133',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            425 =>
            array (
                'idcust' => 1468,
                'cust_nomor' => 'MP00845',
                'cust_nama' => 'NOVI A',
                'cust_alamat' => 'AJIBARANG',
                'cust_notelp' => '085647777964',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            426 =>
            array (
                'idcust' => 1469,
                'cust_nomor' => 'MP01183',
                'cust_nama' => 'NIENA/MILA',
                'cust_alamat' => 'JL.RIYANTO SUMAMPIR PWT',
                'cust_notelp' => '081327626388',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            427 =>
            array (
                'idcust' => 1470,
                'cust_nomor' => 'MP00846',
                'cust_nama' => 'NUR ROBI\'ATIN F ',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081327376824',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            428 =>
            array (
                'idcust' => 1471,
                'cust_nomor' => 'MP00872',
                'cust_nama' => 'NIRNA',
                'cust_alamat' => 'WISMA DARMALOKA PURWOKERTO',
                'cust_notelp' => '08122593622',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            429 =>
            array (
                'idcust' => 1472,
                'cust_nomor' => 'MP00925',
                'cust_nama' => 'NOVEL',
                'cust_alamat' => 'KROYA',
                'cust_notelp' => '641888',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            430 =>
            array (
                'idcust' => 1473,
                'cust_nomor' => 'MP01238',
                'cust_nama' => 'NIKEN HAPSARI',
                'cust_alamat' => 'JL.PERINTIS KEMERDEKAAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            431 =>
            array (
                'idcust' => 1474,
                'cust_nomor' => 'MP01266',
                'cust_nama' => 'NANY',
                'cust_alamat' => 'JL.PALEM I PWT',
                'cust_notelp' => '081328764223',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            432 =>
            array (
                'idcust' => 1475,
                'cust_nomor' => 'MP00849',
                'cust_nama' => 'NISHA',
                'cust_alamat' => 'JL.JAELANI 122 KARANGWANGKAL PWT',
                'cust_notelp' => '081802822004',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            433 =>
            array (
                'idcust' => 1476,
                'cust_nomor' => 'MP01101',
                'cust_nama' => 'NURHOTIMAH',
                'cust_alamat' => 'JL.SUNANKALIJAGA III NO 2 PWT',
                'cust_notelp' => '08128280197',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            434 =>
            array (
                'idcust' => 1477,
                'cust_nomor' => 'MP01042',
                'cust_nama' => 'NOVI',
                'cust_alamat' => 'JL.STASIUN I RT 6/I PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            435 =>
            array (
                'idcust' => 1478,
                'cust_nomor' => 'MP01062',
                'cust_nama' => 'NONIX DWI P',
                'cust_alamat' => 'JL.DAMAR 6 NO.137 TELUK PWT',
                'cust_notelp' => '085227356666',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            436 =>
            array (
                'idcust' => 1479,
                'cust_nomor' => 'MP00862',
                'cust_nama' => 'NURUL AINI',
                'cust_alamat' => 'PASIR WETAN 4/3 PWT',
                'cust_notelp' => '0281638612',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            437 =>
            array (
                'idcust' => 1480,
                'cust_nomor' => 'MP01067',
                'cust_nama' => 'NINA YUSTIANA',
                'cust_alamat' => 'SOEPARNO KARANGWANGKAL PWT',
                'cust_notelp' => '085624233317',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            438 =>
            array (
                'idcust' => 1481,
                'cust_nomor' => 'MP00941',
                'cust_nama' => 'NABIL',
                'cust_alamat' => 'KAUMAN LAMA PWT',
                'cust_notelp' => '081327979404',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            439 =>
            array (
                'idcust' => 1482,
                'cust_nomor' => 'MP01020',
                'cust_nama' => 'OTRI',
                'cust_alamat' => 'JL.GERILYA 15 PWT',
                'cust_notelp' => '081327567007',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            440 =>
            array (
                'idcust' => 1483,
                'cust_nomor' => 'MP01353',
                'cust_nama' => 'OCTAVANI N ',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227559494',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            441 =>
            array (
                'idcust' => 1484,
                'cust_nomor' => 'MP01242',
                'cust_nama' => 'OZA',
                'cust_alamat' => 'JALAN BANK PWT',
                'cust_notelp' => '085227660111',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            442 =>
            array (
                'idcust' => 1485,
                'cust_nomor' => 'MP01068',
                'cust_nama' => 'OKIE-I',
                'cust_alamat' => 'JL.ROGOJEMBANGAN 341 BANCARKEMBAR PWT',
                'cust_notelp' => '7605859',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            443 =>
            array (
                'idcust' => 1486,
                'cust_nomor' => 'MP012411',
                'cust_nama' => 'PRAMA SESARI S',
                'cust_alamat' => 'PAMIJEN PWT',
                'cust_notelp' => '085697316474',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            444 =>
            array (
                'idcust' => 1487,
                'cust_nomor' => 'MP00929',
                'cust_nama' => 'PIPIT',
                'cust_alamat' => 'PERUM GRIYA SATRIA PWT',
                'cust_notelp' => '085227319989',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            445 =>
            array (
                'idcust' => 1488,
                'cust_nomor' => 'MP01098',
                'cust_nama' => 'PUJI LESTARI',
                'cust_alamat' => 'AJIBARANG WETAN',
                'cust_notelp' => '081327075291',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            446 =>
            array (
                'idcust' => 1489,
                'cust_nomor' => 'MP01257',
                'cust_nama' => 'PENI',
                'cust_alamat' => 'JLPRAMUKA PWT',
                'cust_notelp' => '0811291400',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            447 =>
            array (
                'idcust' => 1490,
                'cust_nomor' => 'MP01256',
                'cust_nama' => 'SUTARSO',
                'cust_alamat' => 'JL.MOH IKHSAN PURWOKERTO LOR',
                'cust_notelp' => '08156989953',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            448 =>
            array (
                'idcust' => 1491,
                'cust_nomor' => 'MP01268',
                'cust_nama' => 'PRIHANDONO',
                'cust_alamat' => 'JL.JATIWINANGUN GG.ARJUNA 20 PWT',
                'cust_notelp' => '081567649780',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            449 =>
            array (
                'idcust' => 1492,
                'cust_nomor' => 'MP01355',
            'cust_nama' => 'PUJI(EX FERRON) ',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081553233825',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            450 =>
            array (
                'idcust' => 1493,
                'cust_nomor' => 'MP01364',
                'cust_nama' => 'PALUPI DAMAYANTI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08122760736',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            451 =>
            array (
                'idcust' => 1494,
                'cust_nomor' => 'MP01040',
                'cust_nama' => 'PURNOMO AJI',
                'cust_alamat' => 'JL.RIYANTO GG.NUSAINDAH SUMAMPIR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            452 =>
            array (
                'idcust' => 1495,
                'cust_nomor' => 'MP01191',
                'cust_nama' => 'PIPIT',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            453 =>
            array (
                'idcust' => 1496,
                'cust_nomor' => 'MP00869',
                'cust_nama' => 'PANJI',
                'cust_alamat' => 'JL.JATISARI 652 BANCARKEMBAR PWT',
                'cust_notelp' => '085647860602',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            454 =>
            array (
                'idcust' => 1497,
                'cust_nomor' => 'MP01119',
                'cust_nama' => 'PRAMUJI SANDISASMITA',
                'cust_alamat' => 'JL.GNG.SRANDIL I PWT',
                'cust_notelp' => '081802316491',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            455 =>
            array (
                'idcust' => 1498,
                'cust_nomor' => 'MP01007',
                'cust_nama' => 'PANCA',
                'cust_alamat' => 'BERKOH KALIJAGA PWT',
                'cust_notelp' => '085216271565',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            456 =>
            array (
                'idcust' => 1499,
                'cust_nomor' => 'MP00986',
                'cust_nama' => 'RAHMI AZIZAH',
                'cust_alamat' => 'JL.PRAMUKA 7 KEDUNGRANDU PATIKRAJA',
                'cust_notelp' => '08564767030',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            457 =>
            array (
                'idcust' => 1500,
                'cust_nomor' => 'MP01253',
                'cust_nama' => 'RENI SURYANI',
                'cust_alamat' => 'GRIYA SATRIA BLOK K 2 PWT',
                'cust_notelp' => '081327440272',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            458 =>
            array (
                'idcust' => 1501,
                'cust_nomor' => 'MP01150',
                'cust_nama' => 'RAHENDRA',
                'cust_alamat' => 'PEKUNCEN PWT',
                'cust_notelp' => '0816695551',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            459 =>
            array (
                'idcust' => 1502,
                'cust_nomor' => 'MP01202',
                'cust_nama' => 'RANY ERAWATY',
                'cust_alamat' => 'PERUM PENAMBONGAN2/7 PBG',
                'cust_notelp' => '08156605006',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            460 =>
            array (
                'idcust' => 1503,
                'cust_nomor' => 'MP01327',
                'cust_nama' => 'RIZAL"CUPHY"',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            461 =>
            array (
                'idcust' => 1504,
                'cust_nomor' => 'MP00898',
                'cust_nama' => 'RIJAL',
                'cust_alamat' => 'UNSOED PWT',
                'cust_notelp' => '081322200080',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            462 =>
            array (
                'idcust' => 1505,
                'cust_nomor' => 'MP01087',
                'cust_nama' => 'RATNA LISTIANI',
                'cust_alamat' => 'BLOK P.8 NO5 LIMAS AGUNG PWT',
                'cust_notelp' => '0281 7615262',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            463 =>
            array (
                'idcust' => 1506,
                'cust_nomor' => 'MP01308',
                'cust_nama' => 'RIRIN',
                'cust_alamat' => 'PERUM BERKOH EI 265 PWT',
                'cust_notelp' => '08151649273',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            464 =>
            array (
                'idcust' => 1507,
                'cust_nomor' => 'MP01186',
                'cust_nama' => 'RAFFI',
                'cust_alamat' => 'JLLUMBA-LUMBA BLOK K-7 PWT',
                'cust_notelp' => '081327903777',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            465 =>
            array (
                'idcust' => 1508,
                'cust_nomor' => 'MP01328',
                'cust_nama' => 'RANI SETIAWATI',
                'cust_alamat' => 'JL.SOKAJATI RT 02 RW 3 NO.2 PWT',
                'cust_notelp' => '081327706993',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            466 =>
            array (
                'idcust' => 1509,
                'cust_nomor' => 'MP01077',
                'cust_nama' => 'RATIH HENDRIANA',
                'cust_alamat' => 'JL.KAMANDAKA 524 PWT',
                'cust_notelp' => '085227074777',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            467 =>
            array (
                'idcust' => 1510,
                'cust_nomor' => 'MP01076',
                'cust_nama' => 'RIA MERDEKAWATI',
                'cust_alamat' => 'KD.WRINGIN 18 PWT SELATAN',
                'cust_notelp' => '081327117001',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            468 =>
            array (
                'idcust' => 1511,
                'cust_nomor' => 'MP01387',
                'cust_nama' => 'ROSIANA PUSPITASARI',
                'cust_alamat' => 'JLRASAMALA 2 NO.35 TELUK PWT',
                'cust_notelp' => ' 081327559996',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            469 =>
            array (
                'idcust' => 1512,
                'cust_nomor' => 'MP01069',
                'cust_nama' => 'RINA',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN 12 PWT',
                'cust_notelp' => '081327559625',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            470 =>
            array (
                'idcust' => 1513,
                'cust_nomor' => 'MP00939',
                'cust_nama' => 'RINA PERDANA SANTI',
                'cust_alamat' => 'KOBER GGNANAS 7/IV NO1110 PWT',
                'cust_notelp' => '085227320837',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            471 =>
            array (
                'idcust' => 1514,
                'cust_nomor' => 'MP00934',
                'cust_nama' => 'RAKA',
                'cust_alamat' => 'PASIR INDAH PWT',
                'cust_notelp' => '081327026711',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            472 =>
            array (
                'idcust' => 1515,
                'cust_nomor' => 'MP00931',
                'cust_nama' => 'RITA',
            'cust_alamat' => 'LIMAS P2/5 (DOLPHIN COMUNCATION) PWT',
                'cust_notelp' => '081542800006',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            473 =>
            array (
                'idcust' => 1516,
                'cust_nomor' => 'MP00916',
                'cust_nama' => 'RUSWANTO',
                'cust_alamat' => 'SUKADARMAI KR.PUCUNG PWT',
                'cust_notelp' => '081542628864',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            474 =>
            array (
                'idcust' => 1517,
                'cust_nomor' => 'MP01143',
                'cust_nama' => 'RERE',
                'cust_alamat' => 'ARCAWINANGUN BLOK AB 2/7 PWT',
                'cust_notelp' => '08122660420',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            475 =>
            array (
                'idcust' => 1518,
                'cust_nomor' => 'MP01209',
                'cust_nama' => 'RENOFANO F',
                'cust_alamat' => 'SMASA 1 PWT',
                'cust_notelp' => '085226917778',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            476 =>
            array (
                'idcust' => 1519,
                'cust_nomor' => 'MP01250',
                'cust_nama' => 'REGI CANDRA W',
                'cust_alamat' => 'KEDUNGUTER RT 1 RW 2 BMS',
                'cust_notelp' => '7620202',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            477 =>
            array (
                'idcust' => 1520,
                'cust_nomor' => 'MP01045',
                'cust_nama' => 'RETNO MULIAWATI',
                'cust_alamat' => 'KEBON KAPOL 86 PWT',
                'cust_notelp' => '625014',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            478 =>
            array (
                'idcust' => 1521,
                'cust_nomor' => 'MP01135',
                'cust_nama' => 'RACHMA',
                'cust_alamat' => 'RAYA CIKIDANG CILONGOK',
                'cust_notelp' => '081804755558',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            479 =>
            array (
                'idcust' => 1522,
                'cust_nomor' => 'MP00858',
                'cust_nama' => 'RIAN',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '085228801111',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            480 =>
            array (
                'idcust' => 1523,
                'cust_nomor' => 'MP00873',
                'cust_nama' => 'RENO EKA PUTRI',
                'cust_alamat' => 'WISMA DARMA LOKA KARANG WANGKAL PWT',
                'cust_notelp' => '081931983546',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            481 =>
            array (
                'idcust' => 1524,
                'cust_nomor' => 'MP01294',
                'cust_nama' => 'REWA',
                'cust_alamat' => 'GUNUNG MURIA GG.MANGGA 49 PWT',
                'cust_notelp' => '0888265763',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            482 =>
            array (
                'idcust' => 1525,
                'cust_nomor' => 'MP01295',
                'cust_nama' => 'RISKI / INDRA',
                'cust_alamat' => 'JATISARI NO 24B PWT',
                'cust_notelp' => '08886655253',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            483 =>
            array (
                'idcust' => 1526,
                'cust_nomor' => 'MP01281',
                'cust_nama' => 'RAHMAD S',
                'cust_alamat' => 'BUMIAYU',
                'cust_notelp' => '081327218140',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            484 =>
            array (
                'idcust' => 1527,
                'cust_nomor' => 'MP01278',
                'cust_nama' => 'RENI',
                'cust_alamat' => 'PERUM LEDUG PWT',
                'cust_notelp' => '081327360068',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            485 =>
            array (
                'idcust' => 1528,
                'cust_nomor' => 'MP00865',
                'cust_nama' => 'RIO YUDHA D',
                'cust_alamat' => 'GUNUNG SLAMET GRENDENG PWT',
                'cust_notelp' => '085647739870',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            486 =>
            array (
                'idcust' => 1529,
                'cust_nomor' => 'MP01123',
                'cust_nama' => 'RIA ANGRAENI',
                'cust_alamat' => 'WIRYOSUPARNO PWT',
                'cust_notelp' => '08122669922',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            487 =>
            array (
                'idcust' => 1530,
                'cust_nomor' => 'MP00880',
                'cust_nama' => 'RIZKY ANDIKA',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '08122977529',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            488 =>
            array (
                'idcust' => 1531,
                'cust_nomor' => 'MP00896',
                'cust_nama' => 'SUSWANTO',
                'cust_alamat' => 'KATAMSO 14 CILACAP',
                'cust_notelp' => '085227073613',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            489 =>
            array (
                'idcust' => 1532,
                'cust_nomor' => 'MP00919',
                'cust_nama' => 'SARI',
                'cust_alamat' => 'JL.BRIG.JEND.ENCUNG 532 PWT',
                'cust_notelp' => '081327035353',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            490 =>
            array (
                'idcust' => 1533,
                'cust_nomor' => 'MP01285',
                'cust_nama' => 'SRIYONO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081548664609',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            491 =>
            array (
                'idcust' => 1534,
                'cust_nomor' => 'MP01315',
                'cust_nama' => 'SENDY YUNIAN',
                'cust_alamat' => 'DUKUH WALUH PURWOKERTO',
                'cust_notelp' => '08122670558',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            492 =>
            array (
                'idcust' => 1535,
                'cust_nomor' => 'MP01334',
                'cust_nama' => 'SUSI ROSIANA',
                'cust_alamat' => 'JL.KH BAROWI 25 RAWALO',
                'cust_notelp' => '085643021842',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            493 =>
            array (
                'idcust' => 1536,
                'cust_nomor' => 'MP01365',
                'cust_nama' => 'SANTI S',
                'cust_alamat' => 'JLGUNUNG GALUNGGUNG CIREBON',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            494 =>
            array (
                'idcust' => 1537,
                'cust_nomor' => 'MP01367',
                'cust_nama' => 'SEVLI R',
                'cust_alamat' => 'JL.DR SOEPARNO 118 PWT',
                'cust_notelp' => '0281764163',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            495 =>
            array (
                'idcust' => 1538,
                'cust_nomor' => 'MP01153',
                'cust_nama' => 'SHITTA HERASWATI S',
                'cust_alamat' => 'JL.YOS SUDARSO GG.KATES 10 PWT',
                'cust_notelp' => '08562805586',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            496 =>
            array (
                'idcust' => 1539,
                'cust_nomor' => 'MP01372',
                'cust_nama' => 'SOAD',
                'cust_alamat' => 'JL.JEND SUTOYO VI SOKANEGARA PWT',
                'cust_notelp' => '081548887774',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            497 =>
            array (
                'idcust' => 1540,
                'cust_nomor' => 'MP01314',
                'cust_nama' => 'SAMPOERNO GESANG',
                'cust_alamat' => 'RANDUDONGKAL PEMALANG',
                'cust_notelp' => '08521919128',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            498 =>
            array (
                'idcust' => 1541,
                'cust_nomor' => 'MP01249',
                'cust_nama' => 'SISKA',
                'cust_alamat' => 'PURI HIJAU P19 NO 23 PWT',
                'cust_notelp' => '08122671992',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            499 =>
            array (
                'idcust' => 1542,
                'cust_nomor' => 'MP01030',
                'cust_nama' => 'SHANTY',
                'cust_alamat' => 'KOL.SUGIONO I PWT',
                'cust_notelp' => '081327696996',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
        ));
        \DB::table('mgh_customer')->insert(array (
            0 =>
            array (
                'idcust' => 1543,
                'cust_nomor' => 'MP01196',
                'cust_nama' => 'SADEWO',
                'cust_alamat' => 'S.PARMAN 130 PWT',
                'cust_notelp' => '0811291371',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            1 =>
            array (
                'idcust' => 1544,
                'cust_nomor' => 'MP01086',
                'cust_nama' => 'SUGENG P',
                'cust_alamat' => 'JL.RAYA PAMIJEN PWT',
                'cust_notelp' => '081327135330',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            2 =>
            array (
                'idcust' => 1545,
                'cust_nomor' => 'MP01053',
                'cust_nama' => 'SUGENG TRI W',
                'cust_alamat' => 'JL.SOEPARJO RUSTAM SOKARAJA',
                'cust_notelp' => '081328067213',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            3 =>
            array (
                'idcust' => 1546,
                'cust_nomor' => 'MP00974',
                'cust_nama' => 'SUMARSONO',
                'cust_alamat' => 'KRG.PUCUNG PWT',
                'cust_notelp' => '081327531804',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            4 =>
            array (
                'idcust' => 1547,
                'cust_nomor' => 'MP00982',
                'cust_nama' => 'SONY RIZAL',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '085647648142',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            5 =>
            array (
                'idcust' => 1548,
                'cust_nomor' => 'MP01017',
                'cust_nama' => 'SANDI RUMAMBAR',
                'cust_alamat' => 'JL.SOEKARNO HATTA PURBALINGGA',
                'cust_notelp' => '081804744628',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            6 =>
            array (
                'idcust' => 1549,
                'cust_nomor' => 'MP00876',
                'cust_nama' => 'SRI WAGIYATI',
                'cust_alamat' => 'JL.KAMPUS 665 GRENDENG PWT',
                'cust_notelp' => '0281637925',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            7 =>
            array (
                'idcust' => 1550,
                'cust_nomor' => 'MP00890',
                'cust_nama' => 'SUSIAH',
                'cust_alamat' => 'GERILYA TENGAH PWT',
                'cust_notelp' => '081548804880',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            8 =>
            array (
                'idcust' => 1551,
                'cust_nomor' => 'MP00847',
                'cust_nama' => 'SOFIATUN',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081327447026',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            9 =>
            array (
                'idcust' => 1552,
                'cust_nomor' => 'MP00844',
                'cust_nama' => 'SONY',
                'cust_alamat' => 'PURWOSARI PURWOKERTO',
                'cust_notelp' => '639480',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            10 =>
            array (
                'idcust' => 1553,
                'cust_nomor' => 'MP00889',
                'cust_nama' => 'SUBARI ZAENUDDIN',
                'cust_alamat' => 'KRG.KOBAR GG.MAKAM 81D PWT',
                'cust_notelp' => '0816675417',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            11 =>
            array (
                'idcust' => 1554,
                'cust_nomor' => 'MP01277',
                'cust_nama' => 'SAID',
                'cust_alamat' => 'JL.TILPUN I/36 PWT',
                'cust_notelp' => '08888311489',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            12 =>
            array (
                'idcust' => 1555,
                'cust_nomor' => 'MP01226',
                'cust_nama' => 'SIGIT P',
                'cust_alamat' => 'TANJUNG ELOK PWT',
                'cust_notelp' => '7626487',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            13 =>
            array (
                'idcust' => 1556,
                'cust_nomor' => 'MP00968',
                'cust_nama' => 'SANTO',
                'cust_alamat' => 'KARANG RAU PWT',
                'cust_notelp' => '081327652220',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            14 =>
            array (
                'idcust' => 1557,
                'cust_nomor' => 'MP01288',
                'cust_nama' => 'SUDRAJAD FAJRI',
                'cust_alamat' => 'PAGERAJI 3/IV CILONGOK',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            15 =>
            array (
                'idcust' => 1558,
                'cust_nomor' => 'MP01290',
                'cust_nama' => 'SUSATYO',
                'cust_alamat' => 'PERUM KALIBAGOR INDAH CII BMS',
                'cust_notelp' => '08156620147',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            16 =>
            array (
                'idcust' => 1559,
                'cust_nomor' => 'MP01293',
                'cust_nama' => 'SUWANDI',
                'cust_alamat' => 'GLEMPANG PURWOKERTO',
                'cust_notelp' => '081319088818',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            17 =>
            array (
                'idcust' => 1560,
                'cust_nomor' => 'MP01224',
                'cust_nama' => 'SHELLYNA EKA KOMARA',
                'cust_alamat' => 'KAMANDAKA BOBOSAN BARAT PWT',
                'cust_notelp' => '081542804563',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            18 =>
            array (
                'idcust' => 1561,
                'cust_nomor' => 'MP01139',
                'cust_nama' => 'SOFYAN FERI F',
                'cust_alamat' => 'KOL SUGIONO I/28 PWT',
                'cust_notelp' => '081389447475',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            19 =>
            array (
                'idcust' => 1562,
                'cust_nomor' => 'MP01244',
                'cust_nama' => 'SESARIA',
                'cust_alamat' => 'BANOWATI GA JATIWINANGUN PWT',
                'cust_notelp' => '081804876176',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            20 =>
            array (
                'idcust' => 1563,
                'cust_nomor' => 'MP01099',
                'cust_nama' => 'SUMARTONO',
                'cust_alamat' => 'JL.DOKTERAN MAOS I',
                'cust_notelp' => '08138721407',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            21 =>
            array (
                'idcust' => 1565,
                'cust_nomor' => 'MP01080',
                'cust_nama' => 'SAPTO',
                'cust_alamat' => 'BANCAR KEMBAR BLOK VII/18 PWT',
                'cust_notelp' => '081802666987',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            22 =>
            array (
                'idcust' => 1566,
                'cust_nomor' => 'MP01188',
                'cust_nama' => 'SANTI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            23 =>
            array (
                'idcust' => 1567,
                'cust_nomor' => 'MP01073',
                'cust_nama' => 'SANTI',
                'cust_alamat' => 'MARTADIREJA I PWT',
                'cust_notelp' => '02817611825',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            24 =>
            array (
                'idcust' => 1568,
                'cust_nomor' => 'MP00904',
                'cust_nama' => 'SAMUEL',
                'cust_alamat' => 'PANCURAWIS II/41 PWT',
                'cust_notelp' => '085223509172',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            25 =>
            array (
                'idcust' => 1569,
                'cust_nomor' => 'MP00907',
                'cust_nama' => 'SULISTYAWAN P',
                'cust_alamat' => 'GRIYA SATRIA EA 8 PWT',
                'cust_notelp' => '081327602188',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            26 =>
            array (
                'idcust' => 1570,
                'cust_nomor' => 'MP00920',
                'cust_nama' => 'SRI LESTARI WW',
                'cust_alamat' => 'MANGUNJAYA III/980 PWT',
                'cust_notelp' => '081327000120',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            27 =>
            array (
                'idcust' => 1571,
                'cust_nomor' => 'MP00993',
                'cust_nama' => 'SUKARNOWARTO',
                'cust_alamat' => 'KRANJI 23 PWT',
                'cust_notelp' => '0811291760',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            28 =>
            array (
                'idcust' => 1572,
                'cust_nomor' => 'MP00991',
                'cust_nama' => 'SUSIE',
                'cust_alamat' => 'KOMBAS GG.KEMASAN AGGA PWT',
                'cust_notelp' => '081327207777',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            29 =>
            array (
                'idcust' => 1573,
                'cust_nomor' => 'MP00952',
                'cust_nama' => 'SETYO NUGROHO',
                'cust_alamat' => 'MARTADIREJA II NO 4 PWT',
                'cust_notelp' => '0811291908',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            30 =>
            array (
                'idcust' => 1574,
                'cust_nomor' => 'MP01071',
                'cust_nama' => 'TIRA WIBISONO',
                'cust_alamat' => 'JL.RAJAWALI GG.MERAK KOBER PWT',
                'cust_notelp' => '08121559897',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            31 =>
            array (
                'idcust' => 1575,
                'cust_nomor' => 'MP01240',
                'cust_nama' => 'TRIMONO',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            32 =>
            array (
                'idcust' => 1576,
                'cust_nomor' => 'MP01362',
                'cust_nama' => 'TYAS',
                'cust_alamat' => 'SUMAMPIR 268 PWT',
                'cust_notelp' => '08122746104',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            33 =>
            array (
                'idcust' => 1577,
                'cust_nomor' => 'MP01272',
                'cust_nama' => 'R.TONY F',
                'cust_alamat' => 'JOGJA',
                'cust_notelp' => '08122978617',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            34 =>
            array (
                'idcust' => 1578,
                'cust_nomor' => 'MP01376',
                'cust_nama' => 'TEGUH DWI SATRIA',
                'cust_alamat' => 'KOL.SUGIONO I/379 PWT',
                'cust_notelp' => '085647642222',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            35 =>
            array (
                'idcust' => 1579,
                'cust_nomor' => 'MP01156',
                'cust_nama' => 'TEGUH YULIAN S',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            36 =>
            array (
                'idcust' => 1580,
                'cust_nomor' => 'MP01289',
                'cust_nama' => 'TORRY',
                'cust_alamat' => 'KALIBENER PWT',
                'cust_notelp' => '081327007451',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            37 =>
            array (
                'idcust' => 1581,
                'cust_nomor' => 'MP01050',
                'cust_nama' => 'TRIANDY B ',
                'cust_alamat' => 'KEDUNGGEDE I/5 BMS',
                'cust_notelp' => '081327992288',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            38 =>
            array (
                'idcust' => 1582,
                'cust_nomor' => 'MP01085',
                'cust_nama' => 'TOPO',
                'cust_alamat' => 'JL.S.PARMAN OLYMPINDO PWT',
                'cust_notelp' => '0811287289',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            39 =>
            array (
                'idcust' => 1583,
                'cust_nomor' => 'MP01147',
                'cust_nama' => 'TEDDY LIENI',
                'cust_alamat' => 'JL.PRAMUKA 133 PWT',
                'cust_notelp' => '081542954544',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            40 =>
            array (
                'idcust' => 1584,
                'cust_nomor' => 'MP00489',
                'cust_nama' => 'TRIS LESTARI R',
                'cust_alamat' => 'KOBER GG MENUR 4/V PWT',
                'cust_notelp' => '081327276403',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            41 =>
            array (
                'idcust' => 1585,
                'cust_nomor' => 'MP01222',
                'cust_nama' => 'TUTI GUNTARI SE',
                'cust_alamat' => 'SOPARTO 3 PURWOKERTO',
                'cust_notelp' => '02817620263',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            42 =>
            array (
                'idcust' => 1586,
                'cust_nomor' => 'MP01301',
                'cust_nama' => 'TEGUH',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '085647833338',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            43 =>
            array (
                'idcust' => 1587,
                'cust_nomor' => 'MP01263',
                'cust_nama' => 'TRIAS',
                'cust_alamat' => 'KROYA CILACAP',
                'cust_notelp' => '081391111292',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            44 =>
            array (
                'idcust' => 1588,
                'cust_nomor' => 'MP00901',
                'cust_nama' => 'TRIANA K.S',
                'cust_alamat' => 'KALIBENER 5/5 PWT',
                'cust_notelp' => '08156816086',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            45 =>
            array (
                'idcust' => 1589,
                'cust_nomor' => 'MP01178',
                'cust_nama' => 'TITI R',
                'cust_alamat' => 'BANYUMAS',
                'cust_notelp' => '085659831665',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            46 =>
            array (
                'idcust' => 1590,
                'cust_nomor' => 'MP00980',
                'cust_nama' => 'TANTY',
                'cust_alamat' => 'PURWANEGARA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            47 =>
            array (
                'idcust' => 1591,
                'cust_nomor' => 'MP00987',
                'cust_nama' => 'TRI BUDIANTO/NANANG',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '081327773477',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            48 =>
            array (
                'idcust' => 1592,
                'cust_nomor' => 'MP00996',
                'cust_nama' => 'TERRI APRILIANA',
                'cust_alamat' => 'PASIR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            49 =>
            array (
                'idcust' => 1593,
                'cust_nomor' => 'MP01106',
                'cust_nama' => 'TEGUH RUDIANTO',
                'cust_alamat' => 'JLN.GANG SRANDIL 4/3 PWT',
                'cust_notelp' => '081327324844',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            50 =>
            array (
                'idcust' => 1594,
                'cust_nomor' => 'MP01194',
                'cust_nama' => 'TYO',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            51 =>
            array (
                'idcust' => 1595,
                'cust_nomor' => 'MP00947',
                'cust_nama' => 'TRIE LIS SETYOWATI',
                'cust_alamat' => 'A.YANI I 9B PWT',
                'cust_notelp' => '081327735332',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            52 =>
            array (
                'idcust' => 1596,
                'cust_nomor' => 'MP01198',
                'cust_nama' => 'UCE ELIZABETH',
                'cust_alamat' => 'JL.KOLONEL SUGIRI 28 PWT',
                'cust_notelp' => '081327224863',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            53 =>
            array (
                'idcust' => 1597,
                'cust_nomor' => 'MP01078',
                'cust_nama' => 'UBAY',
                'cust_alamat' => 'JL.HR.BOENYAMIN 29 PWT',
                'cust_notelp' => '085647606555',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            54 =>
            array (
                'idcust' => 1598,
                'cust_nomor' => 'MP00995',
                'cust_nama' => 'UKI ABC',
                'cust_alamat' => 'JL.JEND.SUDIRMAN 102 2/III PWT',
                'cust_notelp' => '085869767221',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            55 =>
            array (
                'idcust' => 1599,
                'cust_nomor' => 'MP01221',
                'cust_nama' => 'VIVI',
                'cust_alamat' => 'JL.WIRYODIHARJO PWT',
                'cust_notelp' => '081327797757',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            56 =>
            array (
                'idcust' => 1600,
                'cust_nomor' => 'MP01382',
                'cust_nama' => 'VITA',
                'cust_alamat' => 'JL.TENTARA PELAJAR 6 PURBALINGGA',
                'cust_notelp' => '0816698344',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            57 =>
            array (
                'idcust' => 1601,
                'cust_nomor' => 'MP01105',
                'cust_nama' => 'VELLI ILMA CHANISCIA',
                'cust_alamat' => 'MARTADIREJA III PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            58 =>
            array (
                'idcust' => 1602,
                'cust_nomor' => 'MP01093',
                'cust_nama' => 'VIENA',
                'cust_alamat' => 'JL.HOPAN SOKANEGARA PWT',
                'cust_notelp' => '08882679805',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            59 =>
            array (
                'idcust' => 1603,
                'cust_nomor' => 'MP01100',
                'cust_nama' => 'SHINTA PARAMITA',
                'cust_alamat' => 'JL.PROF MOH YAMIN 39 KRG KLESEM PWT',
                'cust_notelp' => '081804824847',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            60 =>
            array (
                'idcust' => 1604,
                'cust_nomor' => 'MP01305',
                'cust_nama' => 'WARTO',
                'cust_alamat' => 'GRIYA SATRIA I SUMAMPIR PWT',
                'cust_notelp' => '081328735087',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            61 =>
            array (
                'idcust' => 1605,
                'cust_nomor' => 'MP01126',
                'cust_nama' => 'HS.WARDI',
                'cust_alamat' => 'JL.KSATRIAN B PWT',
                'cust_notelp' => '081327211196',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            62 =>
            array (
                'idcust' => 1606,
                'cust_nomor' => 'MP01022',
                'cust_nama' => 'WULAN',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '08121555732',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            63 =>
            array (
                'idcust' => 1607,
                'cust_nomor' => 'MP01219',
                'cust_nama' => 'W.RASYID C',
                'cust_alamat' => 'PETSI K4/2213 PWT',
                'cust_notelp' => '081327389080',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            64 =>
            array (
                'idcust' => 1608,
                'cust_nomor' => 'MP01008',
                'cust_nama' => 'WILLY BRAMANTYA',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081392999559',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            65 =>
            array (
                'idcust' => 1609,
                'cust_nomor' => 'MP00944',
                'cust_nama' => 'WISNU',
                'cust_alamat' => 'PURBALINGGA ',
                'cust_notelp' => '081548895972',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            66 =>
            array (
                'idcust' => 1610,
                'cust_nomor' => 'MP01220',
                'cust_nama' => 'WEMPHY DWI L',
                'cust_alamat' => 'JL.KAUMAN LAMA II PWT',
                'cust_notelp' => '081804888672',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            67 =>
            array (
                'idcust' => 1611,
                'cust_nomor' => 'MP01015',
                'cust_nama' => 'WINDRI E',
                'cust_alamat' => 'PERUM TEGAL SARI INDAH PWT',
                'cust_notelp' => '081804784159',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            68 =>
            array (
                'idcust' => 1612,
                'cust_nomor' => 'MP01279',
                'cust_nama' => 'WAHYU',
                'cust_alamat' => 'PABUARAN INDAH 01 PWT',
                'cust_notelp' => '02817642747',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            69 =>
            array (
                'idcust' => 1613,
                'cust_nomor' => 'MP01197',
                'cust_nama' => 'WILLY',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '08156989192',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            70 =>
            array (
                'idcust' => 1614,
                'cust_nomor' => 'MP01010',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'TELUK',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            71 =>
            array (
                'idcust' => 1615,
                'cust_nomor' => 'MP00958',
                'cust_nama' => 'WAHYU EFENDI',
                'cust_alamat' => 'MANGUNJAYA GG 4 PWT',
                'cust_notelp' => '081578073869',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            72 =>
            array (
                'idcust' => 1616,
                'cust_nomor' => 'MP01120',
                'cust_nama' => 'WIWID',
                'cust_alamat' => 'PERUM BERKOH BLOK BI 136 PWT',
                'cust_notelp' => '0281637137',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            73 =>
            array (
                'idcust' => 1617,
                'cust_nomor' => 'MP01137',
                'cust_nama' => 'WAHYU',
                'cust_alamat' => 'BOBOSAN 23 4/4 PWT',
                'cust_notelp' => '081391010779',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            74 =>
            array (
                'idcust' => 1618,
                'cust_nomor' => 'MP01201',
                'cust_nama' => 'WINI IRNA F',
                'cust_alamat' => 'PATIKRAJA',
                'cust_notelp' => '085226945583',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            75 =>
            array (
                'idcust' => 1619,
                'cust_nomor' => 'MP01113',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'GRIYA SATRIA BANTARSOKA PWT',
                'cust_notelp' => '081329709616',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            76 =>
            array (
                'idcust' => 1620,
                'cust_nomor' => 'MP00905',
                'cust_nama' => 'YOGA PERDANA',
                'cust_alamat' => 'JL.ADIPURA III/105 PWT',
                'cust_notelp' => '08170606098',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            77 =>
            array (
                'idcust' => 1621,
                'cust_nomor' => 'MP01192',
                'cust_nama' => 'YAOMI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            78 =>
            array (
                'idcust' => 1622,
                'cust_nomor' => 'MP00863',
                'cust_nama' => 'YUANA',
                'cust_alamat' => 'GRIYA SATRIA BLOK J I PWT',
                'cust_notelp' => '081804844644',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            79 =>
            array (
                'idcust' => 1623,
                'cust_nomor' => 'MP00853',
                'cust_nama' => 'YULIANTI',
                'cust_alamat' => 'JL.PRAMUKA TIMUR PWT',
                'cust_notelp' => '627381',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            80 =>
            array (
                'idcust' => 1624,
                'cust_nomor' => 'MP01097',
                'cust_nama' => 'YUDIANTO',
                'cust_alamat' => 'BANYUMAS',
                'cust_notelp' => '081548828824',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            81 =>
            array (
                'idcust' => 1625,
                'cust_nomor' => 'MP01014',
                'cust_nama' => 'YOGI',
                'cust_alamat' => 'KL.KOBER 19 PWT',
                'cust_notelp' => '08122671872',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            82 =>
            array (
                'idcust' => 1626,
                'cust_nomor' => 'MP00909',
                'cust_nama' => 'YENI',
                'cust_alamat' => 'JLN.PAHLAWAN GG 3/22 PWT',
                'cust_notelp' => '08562638888',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            83 =>
            array (
                'idcust' => 1627,
                'cust_nomor' => 'MP00966',
                'cust_nama' => 'YANRE',
                'cust_alamat' => 'PERUM MUTIARA PRATAMA BLOK A3 PWT',
                'cust_notelp' => '081327272555',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            84 =>
            array (
                'idcust' => 1628,
                'cust_nomor' => 'MP01112',
                'cust_nama' => 'YOPIE',
                'cust_alamat' => 'JAKARTA,JERUK BALI I',
                'cust_notelp' => '08561875657',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            85 =>
            array (
                'idcust' => 1629,
                'cust_nomor' => 'MP00973',
                'cust_nama' => 'YONGKI PERMANA CUTE',
                'cust_alamat' => 'JL.BANK PWT',
                'cust_notelp' => '081548805251',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            86 =>
            array (
                'idcust' => 1630,
                'cust_nomor' => 'MP01352',
                'cust_nama' => 'YUSUP AGUNG PAMBUDI',
                'cust_alamat' => 'KARANG KOBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            87 =>
            array (
                'idcust' => 1631,
                'cust_nomor' => 'MP00915',
                'cust_nama' => 'YUNITA ISNAWATI',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '081327036573',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            88 =>
            array (
                'idcust' => 1632,
                'cust_nomor' => 'MP01185',
                'cust_nama' => 'YENNY',
                'cust_alamat' => 'JATIWINANGUN GG BAWOR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            89 =>
            array (
                'idcust' => 1633,
                'cust_nomor' => 'MP01248',
                'cust_nama' => 'YUDI',
                'cust_alamat' => 'JL.TIPAR 83 CILACAP',
                'cust_notelp' => '085227111107',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            90 =>
            array (
                'idcust' => 1634,
                'cust_nomor' => 'MP00913',
                'cust_nama' => 'YUSUP ADI',
                'cust_alamat' => 'MANGUNJAYA 55 PWT',
                'cust_notelp' => '08122672366',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            91 =>
            array (
                'idcust' => 1635,
                'cust_nomor' => 'MP00903',
                'cust_nama' => 'YOHANA F',
                'cust_alamat' => 'YOVIE SALON KRG WANGKAL PWT',
                'cust_notelp' => '08122774222',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            92 =>
            array (
                'idcust' => 1636,
                'cust_nomor' => 'MP01225',
                'cust_nama' => 'YIYIN OKTARIA',
                'cust_alamat' => 'PERUM PURWOSARI PWT',
                'cust_notelp' => '081578887120',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            93 =>
            array (
                'idcust' => 1637,
                'cust_nomor' => 'MP01212',
                'cust_nama' => 'YUWONO LISDIYANTHO',
                'cust_alamat' => 'REJASARI PWT',
                'cust_notelp' => '081327278917',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            94 =>
            array (
                'idcust' => 1638,
                'cust_nomor' => 'MP01001',
                'cust_nama' => 'YUDHI A',
                'cust_alamat' => 'BANJARNEGARA 2/4 PURBALINGGA',
                'cust_notelp' => '081327425642',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            95 =>
            array (
                'idcust' => 1639,
                'cust_nomor' => 'MP00999',
                'cust_nama' => 'YANITA BUDIONO',
                'cust_alamat' => 'PERMATA HIJAU VI/56 PWT',
                'cust_notelp' => '081328742547',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            96 =>
            array (
                'idcust' => 1640,
                'cust_nomor' => 'MP01108',
                'cust_nama' => 'YOGA PERMANA W',
                'cust_alamat' => 'JL.KARANG SALAM PWT',
                'cust_notelp' => '081931227733',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            97 =>
            array (
                'idcust' => 1641,
                'cust_nomor' => 'MP01311',
                'cust_nama' => 'YOHANES',
                'cust_alamat' => 'WIRADADI SOKARAJA',
                'cust_notelp' => '081548847600',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            98 =>
            array (
                'idcust' => 1642,
                'cust_nomor' => 'MP01180',
                'cust_nama' => 'YAYUK',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            99 =>
            array (
                'idcust' => 1643,
                'cust_nomor' => 'MP00951',
                'cust_nama' => 'YOSY EVA ROSTANTI',
                'cust_alamat' => 'PERUM GS PWT',
                'cust_notelp' => '085647650451',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            100 =>
            array (
                'idcust' => 1644,
                'cust_nomor' => 'MP00933',
                'cust_nama' => 'ZAPHORETHE',
                'cust_alamat' => 'DEPAN MUTIARA PWT',
                'cust_notelp' => '08562607007',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            101 =>
            array (
                'idcust' => 1645,
                'cust_nomor' => 'MP00967',
                'cust_nama' => 'ZAEN',
                'cust_alamat' => 'LIMAS AGUNG CD6/1PWT',
                'cust_notelp' => '085227360365',
                'cust_date' => '2007-04-02',
                'cust_author' => 'OLLA',
            ),
            102 =>
            array (
                'idcust' => 1646,
                'cust_nomor' => 'MP01575',
                'cust_nama' => 'DIRJO',
                'cust_alamat' => 'TROPIKA',
                'cust_notelp' => '',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            103 =>
            array (
                'idcust' => 1647,
                'cust_nomor' => 'MP01576',
                'cust_nama' => 'PUPUT',
                'cust_alamat' => 'PAMIJEN PWT',
                'cust_notelp' => '08151152756',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            104 =>
            array (
                'idcust' => 1648,
                'cust_nomor' => 'MP01577',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'PAMIJEN PWT',
                'cust_notelp' => '0852158293975',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            105 =>
            array (
                'idcust' => 1649,
                'cust_nomor' => 'MP01578',
                'cust_nama' => 'TESSA',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '08172818910',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            106 =>
            array (
                'idcust' => 1650,
                'cust_nomor' => 'MP01579',
                'cust_nama' => 'META',
                'cust_alamat' => 'JL PALEM C1 48 PWT',
                'cust_notelp' => '081327144570',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            107 =>
            array (
                'idcust' => 1651,
                'cust_nomor' => 'MP01580',
                'cust_nama' => 'ROSMA',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '081648804331',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            108 =>
            array (
                'idcust' => 1652,
                'cust_nomor' => 'MP01581',
                'cust_nama' => 'ALVIRA',
                'cust_alamat' => '',
                'cust_notelp' => '',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            109 =>
            array (
                'idcust' => 1653,
                'cust_nomor' => 'MP01582',
                'cust_nama' => 'DILA',
                'cust_alamat' => 'DR ANGKA 41 PWT',
                'cust_notelp' => '0281626266',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            110 =>
            array (
                'idcust' => 1654,
                'cust_nomor' => 'MP01583',
                'cust_nama' => 'RIMA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '08562624909',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            111 =>
            array (
                'idcust' => 1655,
                'cust_nomor' => 'MP01584',
                'cust_nama' => 'ONO',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '081327296777',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            112 =>
            array (
                'idcust' => 1656,
                'cust_nomor' => 'MP01585',
                'cust_nama' => 'FIFIN',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            113 =>
            array (
                'idcust' => 1657,
                'cust_nomor' => 'MP01586',
                'cust_nama' => 'BENY',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '81391240210',
                'cust_date' => '2007-05-01',
                'cust_author' => 'admin',
            ),
            114 =>
            array (
                'idcust' => 1658,
                'cust_nomor' => 'MP01587',
                'cust_nama' => 'IAN',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-05-01',
                'cust_author' => 'admin',
            ),
            115 =>
            array (
                'idcust' => 1659,
                'cust_nomor' => 'MP01588',
                'cust_nama' => 'IPUT',
                'cust_alamat' => 'MEAD JOHNSON PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-05-01',
                'cust_author' => 'admin',
            ),
            116 =>
            array (
                'idcust' => 1660,
                'cust_nomor' => 'MP01589',
                'cust_nama' => 'LISA',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '',
                'cust_date' => '2007-05-01',
                'cust_author' => 'admin',
            ),
            117 =>
            array (
                'idcust' => 1661,
                'cust_nomor' => 'MP01590',
                'cust_nama' => 'RUBBEN',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '081320628906',
                'cust_date' => '2007-05-02',
                'cust_author' => 'admin',
            ),
            118 =>
            array (
                'idcust' => 1662,
                'cust_nomor' => 'MP01649',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            119 =>
            array (
                'idcust' => 1663,
                'cust_nomor' => 'MP01650',
                'cust_nama' => 'INTAN',
                'cust_alamat' => 'SELASA MALAM ',
                'cust_notelp' => '1-05-2007',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            120 =>
            array (
                'idcust' => 1664,
                'cust_nomor' => 'MP01651',
                'cust_nama' => 'ARDI',
                'cust_alamat' => 'RUKO PH BLOK A 14 PWT',
                'cust_notelp' => '08172812728',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            121 =>
            array (
                'idcust' => 1665,
                'cust_nomor' => 'MP01652',
                'cust_nama' => 'HARSO',
                'cust_alamat' => 'SELASA MALAM ',
                'cust_notelp' => '01052007',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            122 =>
            array (
                'idcust' => 1666,
                'cust_nomor' => 'MP01653',
                'cust_nama' => 'ALEN',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '085227451432',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            123 =>
            array (
                'idcust' => 1667,
                'cust_nomor' => 'MP01654',
                'cust_nama' => 'MAYA',
                'cust_alamat' => 'PURBALINGGA ',
                'cust_notelp' => '7640703',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            124 =>
            array (
                'idcust' => 1668,
                'cust_nomor' => 'MP01655',
                'cust_nama' => 'M.RIDHO',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            125 =>
            array (
                'idcust' => 1669,
                'cust_nomor' => 'MP01656',
                'cust_nama' => 'NIKO',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            126 =>
            array (
                'idcust' => 1670,
                'cust_nomor' => 'MP01657',
                'cust_nama' => 'IIP',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            127 =>
            array (
                'idcust' => 1671,
                'cust_nomor' => 'MP01658',
                'cust_nama' => 'RAHMAN',
                'cust_alamat' => 'PERUM PEMDA PWT',
                'cust_notelp' => '281622990',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            128 =>
            array (
                'idcust' => 1672,
                'cust_nomor' => 'MP01659',
                'cust_nama' => 'MEGAN',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            129 =>
            array (
                'idcust' => 1673,
                'cust_nomor' => 'MP01660',
                'cust_nama' => 'ANA',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            130 =>
            array (
                'idcust' => 1674,
                'cust_nomor' => 'MP01661',
                'cust_nama' => 'ANA',
                'cust_alamat' => 'DEKSA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            131 =>
            array (
                'idcust' => 1675,
                'cust_nomor' => 'MP01662',
                'cust_nama' => 'MOKO',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            132 =>
            array (
                'idcust' => 1676,
                'cust_nomor' => 'MP01663',
                'cust_nama' => 'FAJAR',
                'cust_alamat' => 'PERUM PJKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            133 =>
            array (
                'idcust' => 1677,
                'cust_nomor' => 'MP01664',
                'cust_nama' => 'SUGENG',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            134 =>
            array (
                'idcust' => 1678,
                'cust_nomor' => 'MP01665',
                'cust_nama' => 'SISKA',
                'cust_alamat' => 'CINA CARLI GOLDPWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-01',
                'cust_author' => 'OLLA',
            ),
            135 =>
            array (
                'idcust' => 1679,
                'cust_nomor' => 'MP01667',
                'cust_nama' => 'ABDUL BAKIR',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-03',
                'cust_author' => 'OLLA',
            ),
            136 =>
            array (
                'idcust' => 1680,
                'cust_nomor' => 'MP01668',
                'cust_nama' => 'AMI',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '08156505481',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            137 =>
            array (
                'idcust' => 1681,
                'cust_nomor' => 'MP01669',
                'cust_nama' => 'DEDI',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-04',
                'cust_author' => 'OLLA',
            ),
            138 =>
            array (
                'idcust' => 1683,
                'cust_nomor' => 'MP01593',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-05',
                'cust_author' => 'OLLA',
            ),
            139 =>
            array (
                'idcust' => 1684,
                'cust_nomor' => 'MP01592',
                'cust_nama' => 'OKI',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-05',
                'cust_author' => 'OLLA',
            ),
            140 =>
            array (
                'idcust' => 1685,
                'cust_nomor' => 'MP01594',
                'cust_nama' => 'ARI',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-05',
                'cust_author' => 'OLLA',
            ),
            141 =>
            array (
                'idcust' => 1686,
                'cust_nomor' => 'MP01595',
                'cust_nama' => 'IFAN',
                'cust_alamat' => 'NOAL',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-06',
                'cust_author' => 'OLLA',
            ),
            142 =>
            array (
                'idcust' => 1687,
                'cust_nomor' => 'mp01596',
                'cust_nama' => 'HENI',
                'cust_alamat' => 'PERUM BUMI ARCA INDAH PWT',
                'cust_notelp' => '02817665467',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            143 =>
            array (
                'idcust' => 1688,
                'cust_nomor' => 'MP01597',
                'cust_nama' => 'PUTRI',
                'cust_alamat' => 'PERUMTEL PWT',
                'cust_notelp' => '08562640414',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            144 =>
            array (
                'idcust' => 1689,
                'cust_nomor' => 'MP01598',
                'cust_nama' => 'RINA',
                'cust_alamat' => 'KRG.KLESEM PWT',
                'cust_notelp' => '085647747731',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            145 =>
            array (
                'idcust' => 1690,
                'cust_nomor' => 'MP01599',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'JL.RAYA UNWIKU PWT',
                'cust_notelp' => '02817652524',
                'cust_date' => '2007-04-11',
                'cust_author' => 'OLLA',
            ),
            146 =>
            array (
                'idcust' => 1691,
                'cust_nomor' => 'MP01600',
                'cust_nama' => 'ROSALINA',
                'cust_alamat' => 'JL.BAYANGKARA 6 PWT',
                'cust_notelp' => '081575850000',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            147 =>
            array (
                'idcust' => 1692,
                'cust_nomor' => 'MP01666',
                'cust_nama' => 'TYA',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '638452',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            148 =>
            array (
                'idcust' => 1693,
                'cust_nomor' => 'MP01681',
                'cust_nama' => 'MELATI',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '085227559929',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            149 =>
            array (
                'idcust' => 1694,
                'cust_nomor' => 'MP01670',
                'cust_nama' => 'LILA',
                'cust_alamat' => 'KARANG LEWAS PWT',
                'cust_notelp' => '085227755822',
                'cust_date' => '2007-05-03',
                'cust_author' => 'OLLA',
            ),
            150 =>
            array (
                'idcust' => 1695,
                'cust_nomor' => 'MP01700',
                'cust_nama' => 'MERY',
                'cust_alamat' => 'GLEMPANG PWT',
                'cust_notelp' => '081327534555',
                'cust_date' => '2007-05-03',
                'cust_author' => 'admin',
            ),
            151 =>
            array (
                'idcust' => 1696,
                'cust_nomor' => 'MP01701',
                'cust_nama' => 'IMAS',
                'cust_alamat' => 'SMA 4 PWT',
                'cust_notelp' => '085227634235',
                'cust_date' => '2007-05-03',
                'cust_author' => 'admin',
            ),
            152 =>
            array (
                'idcust' => 1697,
                'cust_nomor' => 'MP01702',
                'cust_nama' => 'JOJO',
                'cust_alamat' => 'AXEL PWT',
                'cust_notelp' => '02817646700',
                'cust_date' => '2007-05-03',
                'cust_author' => 'admin',
            ),
            153 =>
            array (
                'idcust' => 1698,
                'cust_nomor' => 'MP01703',
                'cust_nama' => 'EGAAYU',
                'cust_alamat' => 'JL KSATRIAN H-38 PWT ',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-03',
                'cust_author' => 'admin',
            ),
            154 =>
            array (
                'idcust' => 1699,
                'cust_nomor' => 'MP01704',
                'cust_nama' => 'MONIC',
                'cust_alamat' => 'JL KALPATARU 7 B2 PURWOSARI PWT',
                'cust_notelp' => '08522728939',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            155 =>
            array (
                'idcust' => 1700,
                'cust_nomor' => 'MP01705',
                'cust_nama' => 'TIWI',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '085227553988',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            156 =>
            array (
                'idcust' => 1701,
                'cust_nomor' => 'MP01706 ',
                'cust_nama' => 'ANI',
                'cust_alamat' => 'DR ANGKA 35 PWT',
                'cust_notelp' => '0281 628829',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            157 =>
            array (
                'idcust' => 1702,
                'cust_nomor' => 'MP01707',
                'cust_nama' => 'TANTI',
                'cust_alamat' => 'SIDOBOA',
                'cust_notelp' => '081327225227',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            158 =>
            array (
                'idcust' => 1703,
                'cust_nomor' => 'MP01708',
                'cust_nama' => 'TAUFIK',
                'cust_alamat' => 'JL PRAMUKA 212 PWT',
                'cust_notelp' => '08562646263',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            159 =>
            array (
                'idcust' => 1704,
                'cust_nomor' => 'MP01709',
                'cust_nama' => 'RAMOND',
                'cust_alamat' => 'SOKAJATI PWT',
                'cust_notelp' => '085647714175',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            160 =>
            array (
                'idcust' => 1705,
                'cust_nomor' => 'MP01710',
                'cust_nama' => 'AGUNG NUGROHO',
                'cust_alamat' => 'JL DR ANGKA GG1 33 PWT',
                'cust_notelp' => '0281 637593',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            161 =>
            array (
                'idcust' => 1706,
                'cust_nomor' => 'MP01711',
                'cust_nama' => 'RETNA',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '085227755580',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            162 =>
            array (
                'idcust' => 1707,
                'cust_nomor' => 'MP01712',
                'cust_nama' => 'YUNITA',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085227562626',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            163 =>
            array (
                'idcust' => 1708,
                'cust_nomor' => 'MP01713',
                'cust_nama' => 'MULYADI',
                'cust_alamat' => 'JL ONJER PURBALINGGA',
                'cust_notelp' => '892304',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            164 =>
            array (
                'idcust' => 1709,
                'cust_nomor' => 'MP01714',
                'cust_nama' => 'DARMAWAN INDRA',
                'cust_alamat' => 'JL MERDEKA 26 PWT',
                'cust_notelp' => '7605874',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            165 =>
            array (
                'idcust' => 1710,
                'cust_nomor' => 'MP01715',
                'cust_nama' => 'HELEN',
                'cust_alamat' => 'JL PROF MOH YAMIN GG3 10 PWT SLTN',
                'cust_notelp' => '081391177899',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            166 =>
            array (
                'idcust' => 1711,
                'cust_nomor' => 'MP01716',
                'cust_nama' => 'UUT',
                'cust_alamat' => 'JL PENATUSAN 3/5 PWT',
                'cust_notelp' => '7653016',
                'cust_date' => '2007-05-04',
                'cust_author' => 'YUNI',
            ),
            167 =>
            array (
                'idcust' => 1712,
                'cust_nomor' => 'MP01444',
                'cust_nama' => 'ARIS',
                'cust_alamat' => 'RINGIN TIRTO PWT',
                'cust_notelp' => '7603002',
                'cust_date' => '2007-05-05',
                'cust_author' => 'OLLA',
            ),
            168 =>
            array (
                'idcust' => 1713,
                'cust_nomor' => 'MP011671',
                'cust_nama' => 'BPK HERWAN',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '7647954',
                'cust_date' => '2007-05-05',
                'cust_author' => 'OLLA',
            ),
            169 =>
            array (
                'idcust' => 1714,
                'cust_nomor' => 'MP01672',
                'cust_nama' => 'VIKA',
                'cust_alamat' => 'SPN PWT',
                'cust_notelp' => '628110',
                'cust_date' => '2007-05-05',
                'cust_author' => 'OLLA',
            ),
            170 =>
            array (
                'idcust' => 1715,
                'cust_nomor' => 'MP01673',
                'cust_nama' => 'PARTONO',
                'cust_alamat' => 'KARANG KEMIRI RT 1/4  KRG LEWAS PWT',
                'cust_notelp' => '081327954479',
                'cust_date' => '2007-05-05',
                'cust_author' => 'OLLA',
            ),
            171 =>
            array (
                'idcust' => 1716,
                'cust_nomor' => 'MP01674',
                'cust_nama' => 'ARDHA',
                'cust_alamat' => 'JL.BOBOSAN PWT',
                'cust_notelp' => '624813',
                'cust_date' => '2007-05-05',
                'cust_author' => 'OLLA',
            ),
            172 =>
            array (
                'idcust' => 1717,
                'cust_nomor' => 'MP01675',
                'cust_nama' => 'NINING',
                'cust_alamat' => 'BANJARNEGARA',
                'cust_notelp' => '085226397586',
                'cust_date' => '2007-05-05',
                'cust_author' => 'YUNI',
            ),
            173 =>
            array (
                'idcust' => 1718,
                'cust_nomor' => 'MP01676',
                'cust_nama' => 'SISI',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-05',
                'cust_author' => 'YUNI',
            ),
            174 =>
            array (
                'idcust' => 1719,
                'cust_nomor' => 'MP01677',
                'cust_nama' => 'RIAN',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '085647761086',
                'cust_date' => '2007-05-05',
                'cust_author' => 'YUNI',
            ),
            175 =>
            array (
                'idcust' => 1720,
                'cust_nomor' => 'MP01678',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '08156974590',
                'cust_date' => '2007-05-05',
                'cust_author' => 'YUNI',
            ),
            176 =>
            array (
                'idcust' => 1721,
                'cust_nomor' => 'MP01679',
                'cust_nama' => 'REVY',
                'cust_alamat' => 'BUMI ARCA INDAH BLOK12 8 PWT',
                'cust_notelp' => '081548830214',
                'cust_date' => '2007-05-06',
                'cust_author' => 'YUNI',
            ),
            177 =>
            array (
                'idcust' => 1722,
                'cust_nomor' => 'MP01680',
                'cust_nama' => 'DARTO SP',
                'cust_alamat' => 'JL RINJANI CILACAP',
                'cust_notelp' => '028254760',
                'cust_date' => '2007-04-15',
                'cust_author' => 'admin',
            ),
            178 =>
            array (
                'idcust' => 1723,
                'cust_nomor' => 'MP01682',
                'cust_nama' => 'BONDAN',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '08122734799',
                'cust_date' => '2007-05-06',
                'cust_author' => 'YUNI',
            ),
            179 =>
            array (
                'idcust' => 1724,
                'cust_nomor' => 'MP01683',
                'cust_nama' => 'MARDIAN',
                'cust_alamat' => 'SEMARANG',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-06',
                'cust_author' => 'YUNI',
            ),
            180 =>
            array (
                'idcust' => 1725,
                'cust_nomor' => 'MP01684',
                'cust_nama' => 'AMIRUDIN',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '8122549344',
                'cust_date' => '2007-05-06',
                'cust_author' => 'YUNI',
            ),
            181 =>
            array (
                'idcust' => 1726,
                'cust_nomor' => 'MP01685',
                'cust_nama' => 'PANDU',
                'cust_alamat' => 'GUNUNG SLAMET GG BUGENVIL 515 PWT',
                'cust_notelp' => '081809916526',
                'cust_date' => '2007-05-06',
                'cust_author' => 'YUNI',
            ),
            182 =>
            array (
                'idcust' => 1727,
                'cust_nomor' => 'MP01686',
                'cust_nama' => 'WIWI',
                'cust_alamat' => 'KARANG SALAM PWT',
                'cust_notelp' => '081327123417',
                'cust_date' => '2007-05-06',
                'cust_author' => 'YUNI',
            ),
            183 =>
            array (
                'idcust' => 1728,
                'cust_nomor' => 'MP01687',
                'cust_nama' => 'WIWIT',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085647757700',
                'cust_date' => '2007-05-06',
                'cust_author' => 'OLLA',
            ),
            184 =>
            array (
                'idcust' => 1729,
                'cust_nomor' => 'MP01688',
                'cust_nama' => 'SANTI',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '7666067',
                'cust_date' => '2007-05-06',
                'cust_author' => 'OLLA',
            ),
            185 =>
            array (
                'idcust' => 1730,
                'cust_nomor' => 'MP01689',
                'cust_nama' => 'YANUAR ',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '085647804638',
                'cust_date' => '2007-05-06',
                'cust_author' => 'OLLA',
            ),
            186 =>
            array (
                'idcust' => 1731,
                'cust_nomor' => 'MP01690',
                'cust_nama' => 'BENY',
                'cust_alamat' => 'KARANG LEWAS PWT',
                'cust_notelp' => '626186',
                'cust_date' => '2007-05-06',
                'cust_author' => 'OLLA',
            ),
            187 =>
            array (
                'idcust' => 1732,
                'cust_nomor' => 'MP01691',
                'cust_nama' => 'INDIRA',
                'cust_alamat' => 'JL.PAHLAWAN GG7 TANJUNG PWT',
                'cust_notelp' => '624401',
                'cust_date' => '2007-05-06',
                'cust_author' => 'OLLA',
            ),
            188 =>
            array (
                'idcust' => 1733,
                'cust_nomor' => 'MP01692',
                'cust_nama' => 'NUDIA',
                'cust_alamat' => 'PERUM PH PWT',
                'cust_notelp' => '7617501',
                'cust_date' => '2007-05-06',
                'cust_author' => 'OLLA',
            ),
            189 =>
            array (
                'idcust' => 1734,
                'cust_nomor' => 'MP01693',
                'cust_nama' => 'VIJE',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            190 =>
            array (
                'idcust' => 1735,
                'cust_nomor' => 'MP01694',
                'cust_nama' => 'NOVAL',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            191 =>
            array (
                'idcust' => 1736,
                'cust_nomor' => 'MP01695',
                'cust_nama' => 'TIA',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            192 =>
            array (
                'idcust' => 1737,
                'cust_nomor' => 'MP01696',
                'cust_nama' => 'TRI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            193 =>
            array (
                'idcust' => 1738,
                'cust_nomor' => 'MP01697',
                'cust_nama' => 'RESTI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            194 =>
            array (
                'idcust' => 1739,
                'cust_nomor' => 'MP01698',
                'cust_nama' => 'SETYO',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            195 =>
            array (
                'idcust' => 1740,
                'cust_nomor' => 'MP01699',
                'cust_nama' => 'NUR ',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-11',
                'cust_author' => 'YUNI',
            ),
            196 =>
            array (
                'idcust' => 1741,
                'cust_nomor' => 'MP01717',
                'cust_nama' => 'HERSA',
                'cust_alamat' => 'JL. KAMANDAKA 33 PWT',
                'cust_notelp' => '085869981808',
                'cust_date' => '2007-05-07',
                'cust_author' => 'admin',
            ),
            197 =>
            array (
                'idcust' => 1742,
                'cust_nomor' => 'MP01718',
                'cust_nama' => 'MARWI',
                'cust_alamat' => 'CIAMIS',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            198 =>
            array (
                'idcust' => 1743,
                'cust_nomor' => 'MP01719',
                'cust_nama' => 'MARIANA',
                'cust_alamat' => 'JL KAMPUS 24 PWT',
                'cust_notelp' => '08122794278',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            199 =>
            array (
                'idcust' => 1744,
                'cust_nomor' => 'MP01720',
                'cust_nama' => 'PREMI',
                'cust_alamat' => 'GRIYA SATRIA K4 PWT',
                'cust_notelp' => '081328743456',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            200 =>
            array (
                'idcust' => 1745,
                'cust_nomor' => 'MP01721',
                'cust_nama' => 'SISKA',
                'cust_alamat' => 'JL SUTOYO GG 1/7 PWT',
                'cust_notelp' => '630925',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            201 =>
            array (
                'idcust' => 1746,
                'cust_nomor' => 'MP01722',
                'cust_nama' => 'YOSSA',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '081914949767',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            202 =>
            array (
                'idcust' => 1747,
                'cust_nomor' => 'MP01723',
                'cust_nama' => 'ANI',
                'cust_alamat' => 'KEDUNG BANTENG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            203 =>
            array (
                'idcust' => 1748,
                'cust_nomor' => 'MP01724',
                'cust_nama' => 'SUMANTRI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-13',
                'cust_author' => 'YUNI',
            ),
            204 =>
            array (
                'idcust' => 1749,
                'cust_nomor' => 'MP01725',
                'cust_nama' => 'DHANI',
                'cust_alamat' => 'JL JEND SUDIRMAN PWT',
                'cust_notelp' => '0281 636386',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            205 =>
            array (
                'idcust' => 1750,
                'cust_nomor' => 'MP01726',
                'cust_nama' => 'DINA',
                'cust_alamat' => 'ARCAWINANGUN PWT',
                'cust_notelp' => '085227595906',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            206 =>
            array (
                'idcust' => 1751,
                'cust_nomor' => 'MP01727',
                'cust_nama' => 'INGE',
                'cust_alamat' => 'JATWIN PWT',
                'cust_notelp' => '085227385608',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            207 =>
            array (
                'idcust' => 1752,
                'cust_nomor' => 'MP01728',
                'cust_nama' => 'ALBERTUS',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-30',
                'cust_author' => 'YUNI',
            ),
            208 =>
            array (
                'idcust' => 1753,
                'cust_nomor' => 'MP01729',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-30',
                'cust_author' => 'YUNI',
            ),
            209 =>
            array (
                'idcust' => 1754,
                'cust_nomor' => 'MP01730',
                'cust_nama' => 'SISWI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-30',
                'cust_author' => 'YUNI',
            ),
            210 =>
            array (
                'idcust' => 1755,
                'cust_nomor' => 'MP01731',
                'cust_nama' => 'ROSETA',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-30',
                'cust_author' => 'YUNI',
            ),
            211 =>
            array (
                'idcust' => 1756,
                'cust_nomor' => 'MP01732',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-04-30',
                'cust_author' => 'YUNI',
            ),
            212 =>
            array (
                'idcust' => 1757,
                'cust_nomor' => 'MP01733',
                'cust_nama' => 'MIRA',
                'cust_alamat' => 'JL LETJEND SUPRAPTO 12B PWT',
                'cust_notelp' => '7621977',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            213 =>
            array (
                'idcust' => 1758,
                'cust_nomor' => 'MP01734',
                'cust_nama' => 'PRAM',
                'cust_alamat' => 'AJIBARANG',
                'cust_notelp' => '08121564774',
                'cust_date' => '2007-05-07',
                'cust_author' => 'YUNI',
            ),
            214 =>
            array (
                'idcust' => 1759,
                'cust_nomor' => 'MP01756',
                'cust_nama' => 'WULAN',
                'cust_alamat' => 'BANJAR NEGARA PBG',
                'cust_notelp' => '085227647078',
                'cust_date' => '2007-05-07',
                'cust_author' => 'OLLA',
            ),
            215 =>
            array (
                'idcust' => 1760,
                'cust_nomor' => 'MP01757',
                'cust_nama' => 'JIMMY',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '085647623271',
                'cust_date' => '2007-05-07',
                'cust_author' => 'OLLA',
            ),
            216 =>
            array (
                'idcust' => 1761,
                'cust_nomor' => 'MP01755',
                'cust_nama' => 'UGI',
                'cust_alamat' => 'PLIKEN SOKARAJA',
                'cust_notelp' => '085227667745',
                'cust_date' => '2007-05-07',
                'cust_author' => 'OLLA',
            ),
            217 =>
            array (
                'idcust' => 1762,
                'cust_nomor' => 'MP01754',
                'cust_nama' => 'LIA',
                'cust_alamat' => 'JL.KH WAHID HASIM PWT',
                'cust_notelp' => '636571',
                'cust_date' => '2007-05-07',
                'cust_author' => 'OLLA',
            ),
            218 =>
            array (
                'idcust' => 1763,
                'cust_nomor' => 'MP01753',
                'cust_nama' => 'WIDI',
                'cust_alamat' => 'JL.SARWODADI IV 805 PWT',
                'cust_notelp' => '085869992416',
                'cust_date' => '2007-05-07',
                'cust_author' => 'OLLA',
            ),
            219 =>
            array (
                'idcust' => 1764,
                'cust_nomor' => 'MP01752',
                'cust_nama' => 'DION',
                'cust_alamat' => 'MITRA FM PWT',
                'cust_notelp' => '7662676',
                'cust_date' => '2007-05-07',
                'cust_author' => 'OLLA',
            ),
            220 =>
            array (
                'idcust' => 1765,
                'cust_nomor' => 'MP01735',
                'cust_nama' => 'HERI',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            221 =>
            array (
                'idcust' => 1766,
                'cust_nomor' => 'MP01744',
                'cust_nama' => 'YAYU',
                'cust_alamat' => 'PERUM TANJUNG ELOK PWT',
                'cust_notelp' => '628862',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            222 =>
            array (
                'idcust' => 1767,
                'cust_nomor' => 'MP01745',
                'cust_nama' => 'SENI',
                'cust_alamat' => 'JL.GUNUNG MURIA GG MANGGA GRENDENG PWT',
                'cust_notelp' => '085223223500',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            223 =>
            array (
                'idcust' => 1768,
                'cust_nomor' => 'MP01746',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '085227657647',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            224 =>
            array (
                'idcust' => 1769,
                'cust_nomor' => 'MP01747',
                'cust_nama' => 'PAK BURHAN',
                'cust_alamat' => 'RASAMALA RAYA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            225 =>
            array (
                'idcust' => 1770,
                'cust_nomor' => 'MP01748',
                'cust_nama' => 'VITA',
                'cust_alamat' => 'SIDABOA PATIKRAJA',
                'cust_notelp' => '081391235000',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            226 =>
            array (
                'idcust' => 1771,
                'cust_nomor' => 'MP01749',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'SIDABOA PATIKRAJA',
                'cust_notelp' => '630768',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            227 =>
            array (
                'idcust' => 1772,
                'cust_nomor' => 'MP01758',
                'cust_nama' => 'TITI',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            228 =>
            array (
                'idcust' => 1773,
                'cust_nomor' => 'MP01759',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'PURI HIJAU PWT',
                'cust_notelp' => '081542658191',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            229 =>
            array (
                'idcust' => 1774,
                'cust_nomor' => 'MP01760',
                'cust_nama' => 'WIDIA',
                'cust_alamat' => 'KARANG JAMBU PWT',
                'cust_notelp' => '081328727240',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            230 =>
            array (
                'idcust' => 1775,
                'cust_nomor' => 'MP01761',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'MANGUNJAYA 2 PWT',
                'cust_notelp' => '639883',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            231 =>
            array (
                'idcust' => 1776,
                'cust_nomor' => 'MP01762',
                'cust_nama' => 'BUDIONO',
                'cust_alamat' => 'SEMARANG',
                'cust_notelp' => '08886661780',
                'cust_date' => '2007-05-08',
                'cust_author' => 'OLLA',
            ),
            232 =>
            array (
                'idcust' => 1777,
                'cust_nomor' => 'MP01736',
                'cust_nama' => 'OBET',
                'cust_alamat' => 'JL DI PANJAITAN 128 PWT',
                'cust_notelp' => '7646844',
                'cust_date' => '2007-05-09',
                'cust_author' => 'YUNI',
            ),
            233 =>
            array (
                'idcust' => 1778,
                'cust_nomor' => 'MP01737',
                'cust_nama' => 'DIDI',
                'cust_alamat' => 'BUMIAYU BREBES',
                'cust_notelp' => '085227042025',
                'cust_date' => '2007-05-09',
                'cust_author' => 'YUNI',
            ),
            234 =>
            array (
                'idcust' => 1779,
                'cust_nomor' => 'MP01738',
                'cust_nama' => 'KIKI',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '085227792002',
                'cust_date' => '2007-05-09',
                'cust_author' => 'admin',
            ),
            235 =>
            array (
                'idcust' => 1780,
                'cust_nomor' => 'MP01739',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'BATURADEN PWT',
                'cust_notelp' => '0281 7655317',
                'cust_date' => '2007-05-09',
                'cust_author' => 'admin',
            ),
            236 =>
            array (
                'idcust' => 1781,
                'cust_nomor' => 'MP01740',
                'cust_nama' => 'OTI',
                'cust_alamat' => 'TANJUNG PWT',
                'cust_notelp' => '081542992605',
                'cust_date' => '2007-05-09',
                'cust_author' => 'admin',
            ),
            237 =>
            array (
                'idcust' => 1782,
                'cust_nomor' => 'MP01741',
                'cust_nama' => 'INDRA',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '085227638787',
                'cust_date' => '2007-05-09',
                'cust_author' => 'admin',
            ),
            238 =>
            array (
                'idcust' => 1783,
                'cust_nomor' => 'MP01742',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'PERENG 19 PWT',
                'cust_notelp' => '081395900395',
                'cust_date' => '2007-05-09',
                'cust_author' => 'admin',
            ),
            239 =>
            array (
                'idcust' => 1784,
                'cust_nomor' => 'MP01743',
                'cust_nama' => 'ELOK',
                'cust_alamat' => 'JL OVIST 4 PWT',
                'cust_notelp' => '0281 625308',
                'cust_date' => '2007-05-09',
                'cust_author' => 'YUNI',
            ),
            240 =>
            array (
                'idcust' => 1785,
                'cust_nomor' => 'MP01750',
                'cust_nama' => 'INA',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '081328705468',
                'cust_date' => '2007-05-09',
                'cust_author' => 'YUNI',
            ),
            241 =>
            array (
                'idcust' => 1786,
                'cust_nomor' => 'MP01751',
                'cust_nama' => 'BEBEX',
                'cust_alamat' => 'JL KAMPUS PWT',
                'cust_notelp' => '085668206050',
                'cust_date' => '2007-05-09',
                'cust_author' => 'YUNI',
            ),
            242 =>
            array (
                'idcust' => 1787,
                'cust_nomor' => 'MP01763',
                'cust_nama' => 'SULIS',
                'cust_alamat' => 'SUMPIUH',
                'cust_notelp' => '081391321000',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            243 =>
            array (
                'idcust' => 1788,
                'cust_nomor' => 'MP01764',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085227447472',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            244 =>
            array (
                'idcust' => 1789,
                'cust_nomor' => 'MP01765',
                'cust_nama' => 'ARIEF',
                'cust_alamat' => 'TIPAR BARU PWT TIMUR',
                'cust_notelp' => '081391303031',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            245 =>
            array (
                'idcust' => 1790,
                'cust_nomor' => 'MP01766',
                'cust_nama' => 'IRHAM',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '7665749',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            246 =>
            array (
                'idcust' => 1791,
                'cust_nomor' => 'MP01767',
                'cust_nama' => 'VIKA',
                'cust_alamat' => 'KARANG SALAM PWT',
                'cust_notelp' => '0281 630468',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            247 =>
            array (
                'idcust' => 1792,
                'cust_nomor' => 'MP01768',
                'cust_nama' => 'IRMA',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '326827300',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            248 =>
            array (
                'idcust' => 1793,
                'cust_nomor' => 'MP01769',
                'cust_nama' => 'HARI',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '085227315369',
                'cust_date' => '2007-05-10',
                'cust_author' => 'YUNI',
            ),
            249 =>
            array (
                'idcust' => 1794,
                'cust_nomor' => 'MP01770',
                'cust_nama' => 'EFI',
                'cust_alamat' => 'ASPOL SPN PWT',
                'cust_notelp' => '085647773020',
                'cust_date' => '2007-05-10',
                'cust_author' => 'OLLA',
            ),
            250 =>
            array (
                'idcust' => 1795,
                'cust_nomor' => 'MP01771',
                'cust_nama' => 'MAYA',
                'cust_alamat' => 'INDOSAT PWT',
                'cust_notelp' => '631777',
                'cust_date' => '2007-05-10',
                'cust_author' => 'OLLA',
            ),
            251 =>
            array (
                'idcust' => 1796,
                'cust_nomor' => 'MP01772',
                'cust_nama' => 'MINI',
                'cust_alamat' => 'KRESNA REKSA FINANCE',
                'cust_notelp' => '626270',
                'cust_date' => '2007-05-10',
                'cust_author' => 'OLLA',
            ),
            252 =>
            array (
                'idcust' => 1800,
                'cust_nomor' => 'MP1000',
                'cust_nama' => 'VOUCHER',
                'cust_alamat' => 'MULEGH AROMATIC',
                'cust_notelp' => '08122721945',
                'cust_date' => '2007-05-11',
                'cust_author' => 'OLLA',
            ),
            253 =>
            array (
                'idcust' => 1801,
                'cust_nomor' => 'MP01773',
                'cust_nama' => 'NUR',
                'cust_alamat' => 'KEBUMEN',
                'cust_notelp' => '081327368184',
                'cust_date' => '2007-05-11',
                'cust_author' => 'OLLA',
            ),
            254 =>
            array (
                'idcust' => 1802,
                'cust_nomor' => 'MP01774',
                'cust_nama' => 'ANISA',
                'cust_alamat' => 'PERUM BERKOH PWT',
                'cust_notelp' => '640478',
                'cust_date' => '2007-05-11',
                'cust_author' => 'OLLA',
            ),
            255 =>
            array (
                'idcust' => 1803,
                'cust_nomor' => 'MP01775',
                'cust_nama' => 'ITONKZ',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '085691623603',
                'cust_date' => '2007-05-11',
                'cust_author' => 'OLLA',
            ),
            256 =>
            array (
                'idcust' => 1804,
                'cust_nomor' => 'MP01776',
                'cust_nama' => 'PHITONE',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '081311043411',
                'cust_date' => '2007-05-11',
                'cust_author' => 'OLLA',
            ),
            257 =>
            array (
                'idcust' => 1805,
                'cust_nomor' => 'mp01777',
                'cust_nama' => 'AAL',
                'cust_alamat' => 'JL KAMPUS PWT',
                'cust_notelp' => '081318078425',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            258 =>
            array (
                'idcust' => 1806,
                'cust_nomor' => 'MP01778',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'JL KAMPUS PWT',
                'cust_notelp' => '085227440419',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            259 =>
            array (
                'idcust' => 1807,
                'cust_nomor' => 'MP01779',
                'cust_nama' => 'GEBYAR',
                'cust_alamat' => 'KEDUNG WULUH',
                'cust_notelp' => '640260',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            260 =>
            array (
                'idcust' => 1808,
                'cust_nomor' => 'MP01780',
                'cust_nama' => 'AWANG',
                'cust_alamat' => 'CILONGOK',
                'cust_notelp' => '08567926837',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            261 =>
            array (
                'idcust' => 1809,
                'cust_nomor' => 'MP01781',
                'cust_nama' => 'ANA',
                'cust_alamat' => 'BANJAR NEGARA',
                'cust_notelp' => '081327630630',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            262 =>
            array (
                'idcust' => 1810,
                'cust_nomor' => 'MP01782',
                'cust_nama' => 'AFIF',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '08159040950',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            263 =>
            array (
                'idcust' => 1811,
                'cust_nomor' => 'MP01783',
                'cust_nama' => 'ERI',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '081327252750',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            264 =>
            array (
                'idcust' => 1812,
                'cust_nomor' => 'MP01784',
                'cust_nama' => 'JECKO',
                'cust_alamat' => 'GRIYA SATRIA PWT',
                'cust_notelp' => '081327408055',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            265 =>
            array (
                'idcust' => 1813,
                'cust_nomor' => 'MP01785',
                'cust_nama' => 'YESSY',
                'cust_alamat' => 'JL PERINTIS KEMERDEKAAN PWT',
                'cust_notelp' => '081804886333',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            266 =>
            array (
                'idcust' => 1814,
                'cust_nomor' => 'MP01786',
                'cust_nama' => 'IAN',
                'cust_alamat' => 'PURWOSARI INDAH GUNUNG SLAMET PWT',
                'cust_notelp' => '0818249841',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            267 =>
            array (
                'idcust' => 1815,
                'cust_nomor' => 'MP01787',
                'cust_nama' => 'ADHI HARYANTO',
                'cust_alamat' => 'JL ADIPATI MERSI 68B PWT',
                'cust_notelp' => '0281 633745',
                'cust_date' => '2007-05-11',
                'cust_author' => 'YUNI',
            ),
            268 =>
            array (
                'idcust' => 1816,
                'cust_nomor' => 'MP01788',
                'cust_nama' => 'FITRIYA',
                'cust_alamat' => 'MADRANI 18 PWT',
                'cust_notelp' => '085227722666',
                'cust_date' => '2007-05-12',
                'cust_author' => 'YUNI',
            ),
            269 =>
            array (
                'idcust' => 1817,
                'cust_nomor' => 'MP01789',
                'cust_nama' => 'BAYU',
                'cust_alamat' => 'JL PURI INTAN PWT',
                'cust_notelp' => '085647862220',
                'cust_date' => '2007-05-12',
                'cust_author' => 'YUNI',
            ),
            270 =>
            array (
                'idcust' => 1818,
                'cust_nomor' => 'MP01790',
                'cust_nama' => 'ITA',
                'cust_alamat' => 'JL RIYANTO SUMAMPIR PWT',
                'cust_notelp' => '081542720282',
                'cust_date' => '2007-05-12',
                'cust_author' => 'YUNI',
            ),
            271 =>
            array (
                'idcust' => 1819,
                'cust_nomor' => 'MP01791',
                'cust_nama' => 'EVY',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '0281 640030',
                'cust_date' => '2007-05-12',
                'cust_author' => 'YUNI',
            ),
            272 =>
            array (
                'idcust' => 1820,
                'cust_nomor' => 'MP01792',
                'cust_nama' => 'SINTA',
                'cust_alamat' => 'MERSI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            273 =>
            array (
                'idcust' => 1821,
                'cust_nomor' => 'MP01793',
                'cust_nama' => 'IQBAL',
                'cust_alamat' => 'JL.GUNUNG SLAMET GG MAWAR PWT',
                'cust_notelp' => '085647737720',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            274 =>
            array (
                'idcust' => 1822,
                'cust_nomor' => 'MP01794',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'KAUMAN LAMA GGII PWT',
                'cust_notelp' => '085227436820',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            275 =>
            array (
                'idcust' => 1823,
                'cust_nomor' => 'MP01795',
                'cust_nama' => 'YENI',
                'cust_alamat' => 'KARANG SALAM PWT',
                'cust_notelp' => '08122716301',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            276 =>
            array (
                'idcust' => 1824,
                'cust_nomor' => 'MP01796',
                'cust_nama' => 'PAK FIRDAUS',
                'cust_alamat' => 'JL.DR.GUMBREK 719 PWT',
                'cust_notelp' => '7621715',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            277 =>
            array (
                'idcust' => 1825,
                'cust_nomor' => 'MP01797',
                'cust_nama' => 'UKI',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            278 =>
            array (
                'idcust' => 1826,
                'cust_nomor' => 'MP01798',
                'cust_nama' => 'SRYONO',
                'cust_alamat' => 'PT.SAPTA SARI PWT',
                'cust_notelp' => '634750',
                'cust_date' => '2007-05-12',
                'cust_author' => 'OLLA',
            ),
            279 =>
            array (
                'idcust' => 1827,
                'cust_nomor' => 'MP01799',
                'cust_nama' => 'INDRI',
                'cust_alamat' => 'SOKARAJA ',
                'cust_notelp' => '08562627299',
                'cust_date' => '2007-05-13',
                'cust_author' => 'OLLA',
            ),
            280 =>
            array (
                'idcust' => 1828,
                'cust_nomor' => 'MP01800',
                'cust_nama' => 'RIYAN',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081804858666',
                'cust_date' => '2007-05-13',
                'cust_author' => 'OLLA',
            ),
            281 =>
            array (
                'idcust' => 1829,
                'cust_nomor' => 'MP01801',
                'cust_nama' => 'BENI',
                'cust_alamat' => 'WATER HITER PWT',
                'cust_notelp' => '08179840047',
                'cust_date' => '2007-05-13',
                'cust_author' => 'YUNI',
            ),
            282 =>
            array (
                'idcust' => 1830,
                'cust_nomor' => 'MP01802',
                'cust_nama' => 'DANI',
                'cust_alamat' => 'JL TEGAL MULYA 3/19 LEDUG PWT',
                'cust_notelp' => '081327442211',
                'cust_date' => '2007-05-13',
                'cust_author' => 'YUNI',
            ),
            283 =>
            array (
                'idcust' => 1831,
                'cust_nomor' => 'MP01803',
                'cust_nama' => 'SINDU',
                'cust_alamat' => 'ENSEVAL',
                'cust_notelp' => '08122750062',
                'cust_date' => '2007-05-13',
                'cust_author' => 'YUNI',
            ),
            284 =>
            array (
                'idcust' => 1832,
                'cust_nomor' => 'MP01804',
                'cust_nama' => 'RONI',
                'cust_alamat' => 'BOBOSAN',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-13',
                'cust_author' => 'YUNI',
            ),
            285 =>
            array (
                'idcust' => 1833,
                'cust_nomor' => 'MP01805',
                'cust_nama' => 'YOGA',
                'cust_alamat' => 'GRIYA KARANG INDAH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-13',
                'cust_author' => 'YUNI',
            ),
            286 =>
            array (
                'idcust' => 1834,
                'cust_nomor' => 'MP01806',
                'cust_nama' => 'PAK IZUL',
                'cust_alamat' => 'BAF PWT',
                'cust_notelp' => '02817622203',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            287 =>
            array (
                'idcust' => 1835,
                'cust_nomor' => 'MP01807',
                'cust_nama' => 'RINA',
                'cust_alamat' => 'PERUMAHAN DUKU WALUH PWT',
                'cust_notelp' => '7653051',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            288 =>
            array (
                'idcust' => 1836,
                'cust_nomor' => 'MP01808',
                'cust_nama' => 'ASIH',
                'cust_alamat' => 'JL BALAI KAMBANG 29 BANTAR SOKA PWT',
                'cust_notelp' => '0281 634529',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            289 =>
            array (
                'idcust' => 1837,
                'cust_nomor' => 'MP01809',
                'cust_nama' => 'ERNI',
                'cust_alamat' => 'WATUMAS PWT',
                'cust_notelp' => '081542601212',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            290 =>
            array (
                'idcust' => 1838,
                'cust_nomor' => 'MP01810',
                'cust_nama' => 'RUBEN',
                'cust_alamat' => 'PURWOKENCANA PWT',
                'cust_notelp' => '7632203',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            291 =>
            array (
                'idcust' => 1839,
                'cust_nomor' => 'MP01811',
                'cust_nama' => 'RATIH WULANDARI',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '085227465099',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            292 =>
            array (
                'idcust' => 1840,
                'cust_nomor' => 'MP01812',
                'cust_nama' => 'RUDIANTO',
                'cust_alamat' => 'GRIYA SATRIA INDAH 2 PWT',
                'cust_notelp' => '7605554',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            293 =>
            array (
                'idcust' => 1841,
                'cust_nomor' => 'MP01813',
                'cust_nama' => 'SHINTA CUTE',
                'cust_alamat' => 'BIOKOS',
                'cust_notelp' => '',
                'cust_date' => '2007-05-14',
                'cust_author' => 'OLLA',
            ),
            294 =>
            array (
                'idcust' => 1842,
                'cust_nomor' => 'MP01814',
                'cust_nama' => 'TYAS',
                'cust_alamat' => 'JL BANK GG 4/12 PWT',
                'cust_notelp' => '7652346',
                'cust_date' => '2007-05-15',
                'cust_author' => 'YUNI',
            ),
            295 =>
            array (
                'idcust' => 1843,
                'cust_nomor' => 'MP01815',
                'cust_nama' => 'JIHAN',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '0282 534073',
                'cust_date' => '2007-05-15',
                'cust_author' => 'YUNI',
            ),
            296 =>
            array (
                'idcust' => 1682,
                'cust_nomor' => 'MP01591',
                'cust_nama' => 'FITRIA',
                'cust_alamat' => 'PERUM LEDUG SEJAHTERA JL KRESNA BLOK B/3 PWT',
                'cust_notelp' => '85647620010',
                'cust_date' => '2007-04-04',
                'cust_author' => 'OLLA',
            ),
            297 =>
            array (
                'idcust' => 1844,
                'cust_nomor' => 'MP01816',
                'cust_nama' => 'MEDINA',
                'cust_alamat' => 'JL GERILYA 847 KRG PUCUNG PWT',
                'cust_notelp' => '085227470271',
                'cust_date' => '2007-05-15',
                'cust_author' => 'YUNI',
            ),
            298 =>
            array (
                'idcust' => 1845,
                'cust_nomor' => 'MP018135',
                'cust_nama' => 'NING',
                'cust_alamat' => 'JL.JEN SUD 898 PWT',
                'cust_notelp' => '08164289732',
                'cust_date' => '2007-05-15',
                'cust_author' => 'YUNI',
            ),
            299 =>
            array (
                'idcust' => 1846,
                'cust_nomor' => 'MP01820',
                'cust_nama' => 'BANGKIT',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '081548873580',
                'cust_date' => '2007-05-15',
                'cust_author' => 'OLLA',
            ),
            300 =>
            array (
                'idcust' => 1847,
                'cust_nomor' => 'MP01818',
                'cust_nama' => 'SEPTI',
                'cust_alamat' => 'PERUM GRIYA TEGAL SARI INDAH PWT',
                'cust_notelp' => '081327406869',
                'cust_date' => '2007-05-15',
                'cust_author' => 'OLLA',
            ),
            301 =>
            array (
                'idcust' => 1848,
                'cust_nomor' => 'MP01819',
                'cust_nama' => 'OVI',
                'cust_alamat' => 'WONOSOBO',
                'cust_notelp' => '085227288775',
                'cust_date' => '2007-05-15',
                'cust_author' => 'OLLA',
            ),
            302 =>
            array (
                'idcust' => 1849,
                'cust_nomor' => 'MP01821',
                'cust_nama' => 'WAHYU',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '081392188399',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            303 =>
            array (
                'idcust' => 1850,
                'cust_nomor' => 'MP01822',
                'cust_nama' => 'MAYA',
                'cust_alamat' => 'JL GNG SLAMET GG KENANGA 13 PWT',
                'cust_notelp' => '08562647829',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            304 =>
            array (
                'idcust' => 1851,
                'cust_nomor' => 'MP01823',
                'cust_nama' => 'GALIH',
                'cust_alamat' => 'JL JEND SUPRAPTO GG I/7A PWT',
                'cust_notelp' => '085227520471',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            305 =>
            array (
                'idcust' => 1852,
                'cust_nomor' => 'MP01824',
                'cust_nama' => 'ARINDA',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '085860310032',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            306 =>
            array (
                'idcust' => 1853,
                'cust_nomor' => 'MP01825',
                'cust_nama' => 'LISTYANI',
                'cust_alamat' => 'OTSUKA',
                'cust_notelp' => '08156736728',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            307 =>
            array (
                'idcust' => 1854,
                'cust_nomor' => 'MP01826',
                'cust_nama' => 'NONIES',
                'cust_alamat' => 'PURWOKENCANA BLOK 7/3B PWT',
                'cust_notelp' => '081391252600',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            308 =>
            array (
                'idcust' => 1855,
                'cust_nomor' => 'MP01827',
                'cust_nama' => 'LELI',
                'cust_alamat' => 'DANADA MOTOR',
                'cust_notelp' => '081327448466',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            309 =>
            array (
                'idcust' => 1856,
                'cust_nomor' => 'MP01828',
                'cust_nama' => 'PRASETYO',
                'cust_alamat' => 'JL KAMPER 4 /36 PERUM TANJUNG ELOK PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            310 =>
            array (
                'idcust' => 1857,
                'cust_nomor' => 'MP01829',
                'cust_nama' => 'ANTONI',
                'cust_alamat' => 'BASECAMP CHEERS GG SLAMET',
                'cust_notelp' => '0818284181',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            311 =>
            array (
                'idcust' => 1858,
                'cust_nomor' => 'MP01830',
                'cust_nama' => 'KIKI',
                'cust_alamat' => 'JL JEND SUPRAPTO GG1/7A PWT',
                'cust_notelp' => '085647917007',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            312 =>
            array (
                'idcust' => 1859,
                'cust_nomor' => 'MP01831',
                'cust_nama' => 'DENI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            313 =>
            array (
                'idcust' => 1860,
                'cust_nomor' => 'MP01832',
                'cust_nama' => 'RIZKI',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '628364',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            314 =>
            array (
                'idcust' => 1861,
                'cust_nomor' => 'MP01833',
                'cust_nama' => 'EVAN',
                'cust_alamat' => 'JL DR ANGKA PWT',
                'cust_notelp' => '0281 621814',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            315 =>
            array (
                'idcust' => 1862,
                'cust_nomor' => 'MP01834',
                'cust_nama' => 'NIA',
                'cust_alamat' => 'GUNUNG SUMBING PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            316 =>
            array (
                'idcust' => 1863,
                'cust_nomor' => 'MP01835',
                'cust_nama' => 'METY',
                'cust_alamat' => 'KOST AR RAHMA DPN GOR',
                'cust_notelp' => '0818279621',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            317 =>
            array (
                'idcust' => 1864,
                'cust_nomor' => 'MP01836',
                'cust_nama' => 'ANI',
                'cust_alamat' => 'SANDOZ',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            318 =>
            array (
                'idcust' => 1865,
                'cust_nomor' => 'MP01837',
                'cust_nama' => 'NN',
                'cust_alamat' => '-',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-16',
                'cust_author' => 'YUNI',
            ),
            319 =>
            array (
                'idcust' => 1866,
                'cust_nomor' => 'MP01838',
                'cust_nama' => 'OKHEN',
                'cust_alamat' => 'ARCAWINANGUN RT 03/09 PWT',
                'cust_notelp' => '0281 622791',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            320 =>
            array (
                'idcust' => 1867,
                'cust_nomor' => 'MP01839',
                'cust_nama' => 'SARI',
                'cust_alamat' => 'KESATRIAN I PWT',
                'cust_notelp' => '0281 637524',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            321 =>
            array (
                'idcust' => 1868,
                'cust_nomor' => 'MP01840',
                'cust_nama' => 'IDA',
                'cust_alamat' => 'KESATRIAN I PWT',
                'cust_notelp' => '0281 637524',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            322 =>
            array (
                'idcust' => 1869,
                'cust_nomor' => 'MP01841',
                'cust_nama' => 'MEGA',
                'cust_alamat' => 'BAI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            323 =>
            array (
                'idcust' => 1870,
                'cust_nomor' => 'MP01842',
                'cust_nama' => 'NUNI',
                'cust_alamat' => 'JATWIN PWT',
                'cust_notelp' => '081392200091',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            324 =>
            array (
                'idcust' => 1871,
                'cust_nomor' => 'MP01843',
                'cust_nama' => 'YUNI',
                'cust_alamat' => 'JATWIN PWT',
                'cust_notelp' => '081328053308',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            325 =>
            array (
                'idcust' => 1872,
                'cust_nomor' => 'MP01844',
                'cust_nama' => 'ELEN',
                'cust_alamat' => 'JL GERILYA PWT',
                'cust_notelp' => '0281 631194',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            326 =>
            array (
                'idcust' => 1873,
                'cust_nomor' => 'MP01845',
                'cust_nama' => 'KUSMAN',
                'cust_alamat' => 'REJASARI PWT',
                'cust_notelp' => '08180284415',
                'cust_date' => '2007-05-17',
                'cust_author' => 'YUNI',
            ),
            327 =>
            array (
                'idcust' => 1874,
                'cust_nomor' => 'MP01850',
                'cust_nama' => 'LILA',
                'cust_alamat' => 'JL.KOBER GG KENANGA PWT',
                'cust_notelp' => '085227297351',
                'cust_date' => '2007-05-17',
                'cust_author' => 'OLLA',
            ),
            328 =>
            array (
                'idcust' => 1875,
                'cust_nomor' => 'MP01849',
                'cust_nama' => 'SANTI',
                'cust_alamat' => 'BANTAR SOKA 48 PWT',
                'cust_notelp' => '085643000990',
                'cust_date' => '2007-05-17',
                'cust_author' => 'OLLA',
            ),
            329 =>
            array (
                'idcust' => 1876,
                'cust_nomor' => 'MP01848',
                'cust_nama' => 'YOHANES',
                'cust_alamat' => 'TELKOMSEL S PARMAN PWT',
                'cust_notelp' => '08122994382',
                'cust_date' => '2007-05-17',
                'cust_author' => 'OLLA',
            ),
            330 =>
            array (
                'idcust' => 1877,
                'cust_nomor' => 'MP01847',
                'cust_nama' => 'VACKY',
                'cust_alamat' => 'WATUMAS PWT',
                'cust_notelp' => '085227703999',
                'cust_date' => '2007-05-17',
                'cust_author' => 'OLLA',
            ),
            331 =>
            array (
                'idcust' => 1878,
                'cust_nomor' => 'MP01817',
                'cust_nama' => 'ARIF',
                'cust_alamat' => 'ADIPURA 4 NO 7 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-24',
                'cust_author' => 'OLLA',
            ),
            332 =>
            array (
                'idcust' => 1879,
                'cust_nomor' => 'MP01846',
                'cust_nama' => 'ANGEL',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '081327716277',
                'cust_date' => '2007-05-18',
                'cust_author' => 'OLLA',
            ),
            333 =>
            array (
                'idcust' => 1880,
                'cust_nomor' => 'MP01851',
                'cust_nama' => 'CHACHA',
                'cust_alamat' => 'SAWANGAN PWT',
                'cust_notelp' => '08569892568',
                'cust_date' => '2007-05-18',
                'cust_author' => 'OLLA',
            ),
            334 =>
            array (
                'idcust' => 1881,
                'cust_nomor' => 'MP01852',
                'cust_nama' => 'CICI',
                'cust_alamat' => 'KARANG LEWAS',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-18',
                'cust_author' => 'OLLA',
            ),
            335 =>
            array (
                'idcust' => 1882,
                'cust_nomor' => 'MP01853',
                'cust_nama' => 'IBEN',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-18',
                'cust_author' => 'OLLA',
            ),
            336 =>
            array (
                'idcust' => 1883,
                'cust_nomor' => 'MP01854',
                'cust_nama' => 'SARAH',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-18',
                'cust_author' => 'OLLA',
            ),
            337 =>
            array (
                'idcust' => 1884,
                'cust_nomor' => 'MP01855',
                'cust_nama' => 'TISKA',
                'cust_alamat' => 'JL 45 NO 16 LEDUG PWT',
                'cust_notelp' => '085647608648',
                'cust_date' => '2007-05-18',
                'cust_author' => 'admin',
            ),
            338 =>
            array (
                'idcust' => 1885,
                'cust_nomor' => 'MP01856',
                'cust_nama' => 'MERISA',
                'cust_alamat' => 'KETAPANG RAYA NO 12 PERUM TELUK PWT',
                'cust_notelp' => '085227024473',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            339 =>
            array (
                'idcust' => 1886,
                'cust_nomor' => 'MP01857',
                'cust_nama' => 'ANGGORO',
                'cust_alamat' => 'GATOT SUBROTO 40 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            340 =>
            array (
                'idcust' => 1887,
                'cust_nomor' => 'MP01858',
                'cust_nama' => 'AGUS SUTORO',
                'cust_alamat' => 'JL PROF DR SUHARSO TIMUR PWT',
                'cust_notelp' => '0281 634526',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            341 =>
            array (
                'idcust' => 1888,
                'cust_nomor' => 'MP01859',
                'cust_nama' => 'FRISA',
                'cust_alamat' => 'JL JATI SARI PWT',
                'cust_notelp' => '0281 634534',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            342 =>
            array (
                'idcust' => 1889,
                'cust_nomor' => 'MP01860',
                'cust_nama' => 'ASTRI',
                'cust_alamat' => 'JL JATI SARI PWT',
                'cust_notelp' => '081392939006',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            343 =>
            array (
                'idcust' => 1890,
                'cust_nomor' => 'MP01861',
                'cust_nama' => 'YURISKE',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '085647670315',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            344 =>
            array (
                'idcust' => 1891,
                'cust_nomor' => 'MP01862',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'OVIST 4 PWT',
                'cust_notelp' => '0281 631938',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            345 =>
            array (
                'idcust' => 1892,
                'cust_nomor' => 'MP01863',
                'cust_nama' => 'NITA',
                'cust_alamat' => 'BERKOH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            346 =>
            array (
                'idcust' => 1893,
                'cust_nomor' => 'MP01864',
                'cust_nama' => 'HENTI',
                'cust_alamat' => 'SAWANGAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            347 =>
            array (
                'idcust' => 1894,
                'cust_nomor' => 'MP01865',
                'cust_nama' => 'VIVI',
                'cust_alamat' => 'BANCAR KEMBAR BLOK II/1 PWT',
                'cust_notelp' => '081804700055',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            348 =>
            array (
                'idcust' => 1895,
                'cust_nomor' => 'MP01866',
                'cust_nama' => 'SINDI',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '0281 622437',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            349 =>
            array (
                'idcust' => 1896,
                'cust_nomor' => 'MP01867',
                'cust_nama' => 'MEILAN',
                'cust_alamat' => 'KEDUNG UTER BANYUMAS ',
                'cust_notelp' => '0281 7653143',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            350 =>
            array (
                'idcust' => 1897,
                'cust_nomor' => 'MP01868',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'KARANG NANGKA PWT',
                'cust_notelp' => '085327772242',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            351 =>
            array (
                'idcust' => 1898,
                'cust_nomor' => 'MP01869',
                'cust_nama' => 'NIKE',
                'cust_alamat' => 'PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-19',
                'cust_author' => 'admin',
            ),
            352 =>
            array (
                'idcust' => 1899,
                'cust_nomor' => 'MP01870',
                'cust_nama' => 'YUSTIANA',
                'cust_alamat' => 'JL LETJEND POL SUMARTO 754 A PURWANEGARA',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-20',
                'cust_author' => 'admin',
            ),
            353 =>
            array (
                'idcust' => 1900,
                'cust_nomor' => 'MP01871',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-20',
                'cust_author' => 'admin',
            ),
            354 =>
            array (
                'idcust' => 1901,
                'cust_nomor' => 'MP01872',
                'cust_nama' => 'RATIH',
                'cust_alamat' => 'JL JEND SUTOYO GG 2 SAWANGAN PWT',
                'cust_notelp' => '0281 621407',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            355 =>
            array (
                'idcust' => 1902,
                'cust_nomor' => 'MP01873',
                'cust_nama' => 'TUBAGUS ASEP',
                'cust_alamat' => 'GRIYA SATRIA INDAH P8 PWT',
                'cust_notelp' => '081542999222',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            356 =>
            array (
                'idcust' => 1903,
                'cust_nomor' => 'MP01874',
                'cust_nama' => 'RASYID',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-20',
                'cust_author' => 'admin',
            ),
            357 =>
            array (
                'idcust' => 1904,
                'cust_nomor' => 'MP01875',
                'cust_nama' => 'RESTA',
                'cust_alamat' => 'PABUARAN PWT',
                'cust_notelp' => '081391284474',
                'cust_date' => '2007-05-20',
                'cust_author' => 'admin',
            ),
            358 =>
            array (
                'idcust' => 1905,
                'cust_nomor' => 'MP01876',
                'cust_nama' => 'DAVID',
                'cust_alamat' => 'UNSOED PWT',
                'cust_notelp' => '085647710585',
                'cust_date' => '2007-05-20',
                'cust_author' => 'admin',
            ),
            359 =>
            array (
                'idcust' => 1906,
                'cust_nomor' => 'MP01877',
                'cust_nama' => 'AGUS',
                'cust_alamat' => 'GRIYA SATRIA BANCAR KEMBAR PWT',
                'cust_notelp' => '08152114387',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            360 =>
            array (
                'idcust' => 1907,
                'cust_nomor' => 'MP01878',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'HERI KOST DR ANGKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            361 =>
            array (
                'idcust' => 1908,
                'cust_nomor' => 'MP01879',
                'cust_nama' => 'RUBI',
                'cust_alamat' => 'JL CENDRAWASIH PWT',
                'cust_notelp' => '081511009285',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            362 =>
            array (
                'idcust' => 1909,
                'cust_nomor' => 'MP01880',
                'cust_nama' => 'PRABU',
                'cust_alamat' => 'WATER HEITHER',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            363 =>
            array (
                'idcust' => 1910,
                'cust_nomor' => 'MP01881',
                'cust_nama' => 'LARAS',
                'cust_alamat' => 'JL SUPARNO 96',
                'cust_notelp' => '081542013677',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            364 =>
            array (
                'idcust' => 1911,
                'cust_nomor' => 'MP01882',
                'cust_nama' => 'EVAN',
                'cust_alamat' => 'SOKARAJA PWT',
                'cust_notelp' => '081227613884',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            365 =>
            array (
                'idcust' => 1912,
                'cust_nomor' => 'MP01883',
                'cust_nama' => 'DITA',
                'cust_alamat' => 'KRANJI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            366 =>
            array (
                'idcust' => 1913,
                'cust_nomor' => 'MP01884',
                'cust_nama' => 'ANA',
                'cust_alamat' => 'TANJUNG PWT',
                'cust_notelp' => '08882667308',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            367 =>
            array (
                'idcust' => 1914,
                'cust_nomor' => 'MP01885',
                'cust_nama' => 'TOPAN',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '081327001012',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            368 =>
            array (
                'idcust' => 1915,
                'cust_nomor' => 'MP01886',
                'cust_nama' => 'BILKIS SAFIRA',
                'cust_alamat' => 'JUNKIES A YANI',
                'cust_notelp' => '0281 7668072',
                'cust_date' => '2007-05-21',
                'cust_author' => 'admin',
            ),
            369 =>
            array (
                'idcust' => 1916,
                'cust_nomor' => 'MP01887',
                'cust_nama' => 'DANIEL',
                'cust_alamat' => 'HELIOS PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            370 =>
            array (
                'idcust' => 1917,
                'cust_nomor' => 'MP01888',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'TANJUNG PWT',
                'cust_notelp' => '0281 640086',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            371 =>
            array (
                'idcust' => 1918,
                'cust_nomor' => 'MP01889',
                'cust_nama' => 'QIQI',
                'cust_alamat' => 'PURWOSARI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            372 =>
            array (
                'idcust' => 1919,
                'cust_nomor' => 'MP01890',
                'cust_nama' => 'NUFI',
                'cust_alamat' => 'KOTIP',
                'cust_notelp' => '0281 631176',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            373 =>
            array (
                'idcust' => 1920,
                'cust_nomor' => 'MP01891',
                'cust_nama' => 'ANITA',
                'cust_alamat' => 'PENATUSAN PWT',
                'cust_notelp' => '081548854885',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            374 =>
            array (
                'idcust' => 1921,
                'cust_nomor' => 'MP01892',
                'cust_nama' => 'INES',
                'cust_alamat' => 'KARANG JAMBU',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            375 =>
            array (
                'idcust' => 1922,
                'cust_nomor' => 'MP01893',
                'cust_nama' => 'DIAH',
                'cust_alamat' => 'PURWNEGARA PWT',
                'cust_notelp' => '081327457307',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            376 =>
            array (
                'idcust' => 1923,
                'cust_nomor' => 'MP01894',
                'cust_nama' => 'SUKO',
                'cust_alamat' => 'JL TENTARA PELAJAR PWT',
                'cust_notelp' => '081804796644',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            377 =>
            array (
                'idcust' => 1924,
                'cust_nomor' => 'MP01895',
                'cust_nama' => 'LINA',
                'cust_alamat' => 'KARANG LEWAS PWT',
                'cust_notelp' => '085227581901',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            378 =>
            array (
                'idcust' => 1925,
                'cust_nomor' => 'MP01896',
                'cust_nama' => 'OHI',
                'cust_alamat' => 'RAGA SEMANGSANG PWT',
                'cust_notelp' => '081227496050',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            379 =>
            array (
                'idcust' => 1926,
                'cust_nomor' => 'MP01897',
                'cust_nama' => 'IRAWAN',
                'cust_alamat' => 'GRIYA SATRIA BLOK D4',
                'cust_notelp' => '081802330813',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            380 =>
            array (
                'idcust' => 1927,
                'cust_nomor' => 'MP01898',
                'cust_nama' => 'WIWI',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            381 =>
            array (
                'idcust' => 1928,
                'cust_nomor' => 'MP01899',
                'cust_nama' => 'NN',
                'cust_alamat' => '-',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-22',
                'cust_author' => 'admin',
            ),
            382 =>
            array (
                'idcust' => 1929,
                'cust_nomor' => 'MP01900',
                'cust_nama' => 'SANGGA',
                'cust_alamat' => 'JEND SUD 200 PWT',
                'cust_notelp' => '085227444433',
                'cust_date' => '2007-05-23',
                'cust_author' => 'admin',
            ),
            383 =>
            array (
                'idcust' => 1930,
                'cust_nomor' => 'MP01901',
                'cust_nama' => 'PAMELA',
                'cust_alamat' => 'LIMAS AGUNG PWT',
                'cust_notelp' => '0281 638261',
                'cust_date' => '2007-05-23',
                'cust_author' => 'admin',
            ),
            384 =>
            array (
                'idcust' => 1931,
                'cust_nomor' => 'MP01902',
                'cust_nama' => 'ANGGI',
                'cust_alamat' => '-',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-23',
                'cust_author' => 'admin',
            ),
            385 =>
            array (
                'idcust' => 1932,
                'cust_nomor' => 'MP01903',
                'cust_nama' => 'LILI',
                'cust_alamat' => 'JL KAMANDAKA 38 PWT',
                'cust_notelp' => '0281 7618015',
                'cust_date' => '2007-05-23',
                'cust_author' => 'admin',
            ),
            386 =>
            array (
                'idcust' => 1933,
                'cust_nomor' => 'MP01904',
                'cust_nama' => 'IAN',
                'cust_alamat' => 'GRENDENG',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            387 =>
            array (
                'idcust' => 1934,
                'cust_nomor' => 'MP01905',
                'cust_nama' => 'ENDAH',
                'cust_alamat' => 'ARCAWINANGUN',
                'cust_notelp' => '0281 7656070',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            388 =>
            array (
                'idcust' => 1935,
                'cust_nomor' => 'MP01906',
                'cust_nama' => 'ICAL',
                'cust_alamat' => 'LA P 8',
                'cust_notelp' => '085224406444',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            389 =>
            array (
                'idcust' => 1936,
                'cust_nomor' => 'MP01907',
                'cust_nama' => 'DANI ',
                'cust_alamat' => 'STASIUN GLOBAL PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            390 =>
            array (
                'idcust' => 1937,
                'cust_nomor' => 'MP01908',
                'cust_nama' => 'MERI',
                'cust_alamat' => 'SANBE',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-24',
                'cust_author' => 'admin',
            ),
            391 =>
            array (
                'idcust' => 1938,
                'cust_nomor' => 'MP01909',
                'cust_nama' => 'IQBAL',
                'cust_alamat' => 'GRENDENG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-23',
                'cust_author' => 'YUNI',
            ),
            392 =>
            array (
                'idcust' => 1939,
                'cust_nomor' => 'MP01910',
                'cust_nama' => 'CHRISTY',
                'cust_alamat' => 'BROBAHAN PWT',
                'cust_notelp' => '0818281285',
                'cust_date' => '2007-05-23',
                'cust_author' => 'YUNI',
            ),
            393 =>
            array (
                'idcust' => 1940,
                'cust_nomor' => 'MP01911',
                'cust_nama' => 'YUNI',
                'cust_alamat' => 'MES DYNASTI',
                'cust_notelp' => '085227301110',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            394 =>
            array (
                'idcust' => 1941,
                'cust_nomor' => 'MP01912',
                'cust_nama' => 'JOE',
                'cust_alamat' => 'DUKUH WALUH PWT',
                'cust_notelp' => '085227647788',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            395 =>
            array (
                'idcust' => 1942,
                'cust_nomor' => 'MP01913',
                'cust_nama' => 'ENG',
                'cust_alamat' => 'JL KALI BENER PWT',
                'cust_notelp' => '0811262029',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            396 =>
            array (
                'idcust' => 1943,
                'cust_nomor' => 'MP01914',
                'cust_nama' => 'HAPPY',
                'cust_alamat' => 'KARANG PUCUNG PWT',
                'cust_notelp' => '0281 7649171',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            397 =>
            array (
                'idcust' => 1944,
                'cust_nomor' => 'MP01915',
                'cust_nama' => 'SEPTI',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '0281 638064',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            398 =>
            array (
                'idcust' => 1945,
                'cust_nomor' => 'MP01916',
                'cust_nama' => 'OJI',
                'cust_alamat' => 'MAOS CILACAP',
                'cust_notelp' => '695209',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            399 =>
            array (
                'idcust' => 1946,
                'cust_nomor' => 'MP01917',
                'cust_nama' => 'DEVI',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '085227580085',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            400 =>
            array (
                'idcust' => 1947,
                'cust_nomor' => 'MP01918',
                'cust_nama' => 'NINA',
                'cust_alamat' => 'SPG SUSU BENDERA',
                'cust_notelp' => '638890',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            401 =>
            array (
                'idcust' => 1948,
                'cust_nomor' => 'MP01919',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'DR SUPARNO 96 PWT',
                'cust_notelp' => '08996617785',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            402 =>
            array (
                'idcust' => 1949,
                'cust_nomor' => 'MP01920',
                'cust_nama' => 'NANA',
                'cust_alamat' => 'JL KAMPUS 617 PWT',
                'cust_notelp' => '081391325550',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            403 =>
            array (
                'idcust' => 1950,
                'cust_nomor' => 'MP01921',
                'cust_nama' => 'MITA',
                'cust_alamat' => 'JL VETERAN 65 KALI BOGOR PWT',
                'cust_notelp' => '081327027836',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            404 =>
            array (
                'idcust' => 1951,
                'cust_nomor' => 'MP01922',
                'cust_nama' => 'ALI',
                'cust_alamat' => 'KUDUS',
                'cust_notelp' => '085225000437',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            405 =>
            array (
                'idcust' => 1952,
                'cust_nomor' => 'MP01923',
                'cust_nama' => 'RIPNO',
                'cust_alamat' => 'OBAT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-25',
                'cust_author' => 'YUNI',
            ),
            406 =>
            array (
                'idcust' => 1953,
                'cust_nomor' => 'MP01924',
                'cust_nama' => 'YOSI',
                'cust_alamat' => 'BUMI ARCA INDAH BAI 10 PWT',
                'cust_notelp' => '081327696554',
                'cust_date' => '2007-05-26',
                'cust_author' => 'YUNI',
            ),
            407 =>
            array (
                'idcust' => 1954,
                'cust_nomor' => 'MP01925',
                'cust_nama' => 'EDI',
                'cust_alamat' => 'KEDAWUHAN RT 6/2 MADUKARA BANJAR NEGARA',
                'cust_notelp' => '081327409804',
                'cust_date' => '2007-05-26',
                'cust_author' => 'YUNI',
            ),
            408 =>
            array (
                'idcust' => 1955,
                'cust_nomor' => 'MP01926',
                'cust_nama' => 'BAYU',
                'cust_alamat' => 'KARANG KLESEM PWT',
                'cust_notelp' => '0281 624926',
                'cust_date' => '2007-05-26',
                'cust_author' => 'YUNI',
            ),
            409 =>
            array (
                'idcust' => 1956,
                'cust_nomor' => 'MP01927',
                'cust_nama' => 'BELA',
                'cust_alamat' => 'PERUM GRIYA TELUK BARU PWT',
                'cust_notelp' => '085227420018',
                'cust_date' => '2007-05-26',
                'cust_author' => 'YUNI',
            ),
            410 =>
            array (
                'idcust' => 1957,
                'cust_nomor' => 'MP01928',
                'cust_nama' => 'ELIYA',
                'cust_alamat' => 'JLJATWIN GG SADEWA 13 PWT',
                'cust_notelp' => '081382346283',
                'cust_date' => '2007-05-26',
                'cust_author' => 'YUNI',
            ),
            411 =>
            array (
                'idcust' => 1958,
                'cust_nomor' => 'MP01929',
                'cust_nama' => 'BERTA',
                'cust_alamat' => 'JATIWINANGUN PWT',
                'cust_notelp' => '08562637000',
                'cust_date' => '2007-05-26',
                'cust_author' => 'OLLA',
            ),
            412 =>
            array (
                'idcust' => 1959,
                'cust_nomor' => 'MP01930',
                'cust_nama' => 'FIAN',
                'cust_alamat' => 'JL.PAHLAWAN 28 PWT',
                'cust_notelp' => '625055',
                'cust_date' => '2007-05-26',
                'cust_author' => 'OLLA',
            ),
            413 =>
            array (
                'idcust' => 1960,
                'cust_nomor' => 'MP01931',
                'cust_nama' => 'IWAN',
                'cust_alamat' => 'YOS SUDARMO PWT',
                'cust_notelp' => '628161',
                'cust_date' => '2007-05-26',
                'cust_author' => 'OLLA',
            ),
            414 =>
            array (
                'idcust' => 1961,
                'cust_nomor' => 'MP01932',
                'cust_nama' => 'MILA',
                'cust_alamat' => 'JL.KENANGA GRENDENG PWT',
                'cust_notelp' => '085227199588',
                'cust_date' => '2007-05-26',
                'cust_author' => 'OLLA',
            ),
            415 =>
            array (
                'idcust' => 1962,
                'cust_nomor' => 'MP01933',
                'cust_nama' => 'WIWI',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '081510129951',
                'cust_date' => '2007-05-26',
                'cust_author' => 'OLLA',
            ),
            416 =>
            array (
                'idcust' => 1963,
                'cust_nomor' => 'MP01934',
                'cust_nama' => 'DINA',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '085692339332',
                'cust_date' => '2007-05-26',
                'cust_author' => 'OLLA',
            ),
            417 =>
            array (
                'idcust' => 1964,
                'cust_nomor' => 'MP01935',
                'cust_nama' => 'HARYOTO',
                'cust_alamat' => 'DR ANGKA 79 PWT',
                'cust_notelp' => '0281 638553',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            418 =>
            array (
                'idcust' => 1965,
                'cust_nomor' => 'MP01936',
                'cust_nama' => 'ANJAR',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081391010495',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            419 =>
            array (
                'idcust' => 1966,
                'cust_nomor' => 'MP01937',
                'cust_nama' => 'ATIKA',
                'cust_alamat' => 'JL PRAMUKA PWT',
                'cust_notelp' => '085227763360',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            420 =>
            array (
                'idcust' => 1967,
                'cust_nomor' => 'MP01938',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'JL KESATRIAN 9 PWT',
                'cust_notelp' => '085227404444',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            421 =>
            array (
                'idcust' => 1968,
                'cust_nomor' => 'MP01939',
                'cust_nama' => 'CACA',
                'cust_alamat' => 'SOKARAJA WETAN ',
                'cust_notelp' => '085647889969',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            422 =>
            array (
                'idcust' => 1969,
                'cust_nomor' => 'MP01940',
                'cust_nama' => 'PUTRI',
                'cust_alamat' => 'SUMPIUH',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            423 =>
            array (
                'idcust' => 1970,
                'cust_nomor' => 'MP01941',
                'cust_nama' => 'IKA',
                'cust_alamat' => 'JL SUPARNO 17 KR WANGKAL PWT',
                'cust_notelp' => '0281 628702',
                'cust_date' => '2007-05-27',
                'cust_author' => 'YUNI',
            ),
            424 =>
            array (
                'idcust' => 1971,
                'cust_nomor' => 'MP01942',
                'cust_nama' => 'IHANG',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '081327055380',
                'cust_date' => '2007-05-27',
                'cust_author' => 'OLLA',
            ),
            425 =>
            array (
                'idcust' => 1972,
                'cust_nomor' => 'MP01943',
                'cust_nama' => 'DEVI',
                'cust_alamat' => 'JL.SUPARNO KARANGWANGKAL PWT',
                'cust_notelp' => '081394444340',
                'cust_date' => '2007-05-27',
                'cust_author' => 'OLLA',
            ),
            426 =>
            array (
                'idcust' => 1973,
                'cust_nomor' => 'MP01944',
                'cust_nama' => 'HARYO',
                'cust_alamat' => 'JL.KRANJI 23 PWT',
                'cust_notelp' => '08122717744',
                'cust_date' => '2007-05-27',
                'cust_author' => 'OLLA',
            ),
            427 =>
            array (
                'idcust' => 1974,
                'cust_nomor' => 'MP01945',
                'cust_nama' => 'WISNU',
                'cust_alamat' => 'PURI INDAH F 21 PWT',
                'cust_notelp' => '08157948484',
                'cust_date' => '2007-05-27',
                'cust_author' => 'OLLA',
            ),
            428 =>
            array (
                'idcust' => 1975,
                'cust_nomor' => 'MP01946',
                'cust_nama' => 'BAYU ADI',
                'cust_alamat' => 'BANYUMAS ',
                'cust_notelp' => '081324602985',
                'cust_date' => '2007-05-27',
                'cust_author' => 'OLLA',
            ),
            429 =>
            array (
                'idcust' => 1976,
                'cust_nomor' => 'MP01947',
                'cust_nama' => 'FAJAR',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '085227240697',
                'cust_date' => '2007-05-27',
                'cust_author' => 'OLLA',
            ),
            430 =>
            array (
                'idcust' => 1977,
                'cust_nomor' => 'MP01948',
                'cust_nama' => 'SUPRIYANTO',
                'cust_alamat' => 'GRIYA KARANG INDAH BLOK G 8 PWT',
                'cust_notelp' => '081575147771',
                'cust_date' => '2007-05-28',
                'cust_author' => 'YUNI',
            ),
            431 =>
            array (
                'idcust' => 1978,
                'cust_nomor' => 'MP01949',
                'cust_nama' => 'BAGUS',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '085234530999',
                'cust_date' => '2007-05-28',
                'cust_author' => 'YUNI',
            ),
            432 =>
            array (
                'idcust' => 1979,
                'cust_nomor' => 'MP01950',
                'cust_nama' => 'REZA',
                'cust_alamat' => 'AJIBARANG PWT',
                'cust_notelp' => '08522711511',
                'cust_date' => '2007-05-28',
                'cust_author' => 'YUNI',
            ),
            433 =>
            array (
                'idcust' => 1980,
                'cust_nomor' => 'MP01951',
                'cust_nama' => 'AGUNG',
                'cust_alamat' => 'JATIWINANGUN',
                'cust_notelp' => '0817718831',
                'cust_date' => '2007-05-28',
                'cust_author' => 'YUNI',
            ),
            434 =>
            array (
                'idcust' => 1981,
                'cust_nomor' => 'MP01952',
                'cust_nama' => 'ROHMAN',
                'cust_alamat' => 'KRANJI PWT',
                'cust_notelp' => '085227498315',
                'cust_date' => '2007-05-28',
                'cust_author' => 'YUNI',
            ),
            435 =>
            array (
                'idcust' => 1982,
                'cust_nomor' => 'MP01953',
                'cust_nama' => 'WURI',
                'cust_alamat' => 'MANGUNJAYA PWT',
                'cust_notelp' => '081327619315',
                'cust_date' => '2007-05-28',
                'cust_author' => 'OLLA',
            ),
            436 =>
            array (
                'idcust' => 1983,
                'cust_nomor' => 'MP01954',
                'cust_nama' => 'JAWA',
                'cust_alamat' => 'MADRANI 64 PWT',
                'cust_notelp' => '633495',
                'cust_date' => '2007-05-28',
                'cust_author' => 'OLLA',
            ),
            437 =>
            array (
                'idcust' => 1984,
                'cust_nomor' => 'MP01955',
                'cust_nama' => 'LINGGA',
                'cust_alamat' => 'MADRANI 64 PWT',
                'cust_notelp' => '633495',
                'cust_date' => '2007-05-28',
                'cust_author' => 'OLLA',
            ),
            438 =>
            array (
                'idcust' => 1985,
                'cust_nomor' => 'MP01956',
                'cust_nama' => 'BATAK',
                'cust_alamat' => 'MADRANI 64 PWT',
                'cust_notelp' => '633495',
                'cust_date' => '2007-05-28',
                'cust_author' => 'OLLA',
            ),
            439 =>
            array (
                'idcust' => 1986,
                'cust_nomor' => 'MP01957',
                'cust_nama' => 'IIN',
                'cust_alamat' => 'PASIR WETAN PWT',
                'cust_notelp' => '085228010427',
                'cust_date' => '2007-05-28',
                'cust_author' => 'OLLA',
            ),
            440 =>
            array (
                'idcust' => 1987,
                'cust_nomor' => 'MP01958',
                'cust_nama' => 'ARI RAHMAWATI',
                'cust_alamat' => 'GALUH PBG',
                'cust_notelp' => '08562634111',
                'cust_date' => '2007-05-29',
                'cust_author' => 'OLLA',
            ),
            441 =>
            array (
                'idcust' => 1988,
                'cust_nomor' => 'MP01959',
                'cust_nama' => 'DEDI',
                'cust_alamat' => 'TANJUNG ELOK JL BERINGIN RAYA 112 PWT',
                'cust_notelp' => '081327943913',
                'cust_date' => '2007-05-29',
                'cust_author' => 'OLLA',
            ),
            442 =>
            array (
                'idcust' => 1989,
                'cust_nomor' => 'MP01960',
                'cust_nama' => 'TANTI',
                'cust_alamat' => 'M.YAMIN 38 PWT',
                'cust_notelp' => '626417',
                'cust_date' => '2007-05-29',
                'cust_author' => 'OLLA',
            ),
            443 =>
            array (
                'idcust' => 1990,
                'cust_nomor' => 'MP01961',
                'cust_nama' => 'VONI',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '626177',
                'cust_date' => '2007-05-29',
                'cust_author' => 'OLLA',
            ),
            444 =>
            array (
                'idcust' => 1991,
                'cust_nomor' => 'MP01962',
                'cust_nama' => 'WAWAN',
                'cust_alamat' => 'WANGON',
                'cust_notelp' => '081542909018',
                'cust_date' => '2007-05-29',
                'cust_author' => 'YUNI',
            ),
            445 =>
            array (
                'idcust' => 1992,
                'cust_nomor' => 'MP01963',
                'cust_nama' => 'ABE',
                'cust_alamat' => 'JL SUHARSO PWT',
                'cust_notelp' => '085227447007',
                'cust_date' => '2007-05-29',
                'cust_author' => 'YUNI',
            ),
            446 =>
            array (
                'idcust' => 1993,
                'cust_nomor' => 'MP01964',
                'cust_nama' => 'FAJAR',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '632324 27',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            447 =>
            array (
                'idcust' => 1994,
                'cust_nomor' => 'MP01965',
                'cust_nama' => 'BOWO',
                'cust_alamat' => 'IKA PHARMINDO',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            448 =>
            array (
                'idcust' => 1995,
                'cust_nomor' => 'MP01966',
                'cust_nama' => 'ELMI',
                'cust_alamat' => 'BELAKANG SR PWT',
                'cust_notelp' => '081327972828',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            449 =>
            array (
                'idcust' => 1996,
                'cust_nomor' => 'MP01967',
                'cust_nama' => 'COLITA',
                'cust_alamat' => 'JL.KRANJI NO 22 PWT',
                'cust_notelp' => '637670',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            450 =>
            array (
                'idcust' => 1997,
                'cust_nomor' => 'MP01968',
                'cust_nama' => 'TARI',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '081548815662',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            451 =>
            array (
                'idcust' => 1998,
                'cust_nomor' => 'MP01969',
                'cust_nama' => 'MITRA',
                'cust_alamat' => 'JL. A. YANI PWT',
                'cust_notelp' => '621087',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            452 =>
            array (
                'idcust' => 1999,
                'cust_nomor' => 'MP01970',
                'cust_nama' => 'HUDA',
                'cust_alamat' => 'SAWANGAN PWT',
                'cust_notelp' => '085227549305',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            453 =>
            array (
                'idcust' => 2000,
                'cust_nomor' => 'MP01971',
                'cust_nama' => 'ANI',
                'cust_alamat' => 'GG.MAKAM KRG KOBAR PWT',
                'cust_notelp' => '085227606420',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            454 =>
            array (
                'idcust' => 2001,
                'cust_nomor' => 'MP01973',
                'cust_nama' => 'ETA',
                'cust_alamat' => 'PANCURAWIS PWT',
                'cust_notelp' => '085227577009',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            455 =>
            array (
                'idcust' => 2002,
                'cust_nomor' => 'MP01974',
                'cust_nama' => 'YENI JANUARTI',
                'cust_alamat' => 'JL.A JAELANI PWT',
                'cust_notelp' => '085223317022',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            456 =>
            array (
                'idcust' => 2003,
                'cust_nomor' => 'MP01975',
                'cust_nama' => 'LASIMAN',
                'cust_alamat' => 'MERAPI PWT',
                'cust_notelp' => '638008',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            457 =>
            array (
                'idcust' => 2004,
                'cust_nomor' => 'MP01976',
                'cust_nama' => 'ARUM',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '633972',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            458 =>
            array (
                'idcust' => 2005,
                'cust_nomor' => 'MP01977',
                'cust_nama' => 'KIKI',
                'cust_alamat' => '(QQ) JLPATRIOT PWT',
                'cust_notelp' => '085227527456',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            459 =>
            array (
                'idcust' => 2006,
                'cust_nomor' => 'MP01978',
                'cust_nama' => 'OKI',
                'cust_alamat' => '(O-Q) KARANG PUCUNG PWT',
                'cust_notelp' => '634616',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            460 =>
            array (
                'idcust' => 2007,
                'cust_nomor' => 'MP01972',
                'cust_nama' => 'ZAKI',
                'cust_alamat' => 'KARANG LEWAS',
                'cust_notelp' => '628884',
                'cust_date' => '2007-05-30',
                'cust_author' => 'OLLA',
            ),
            461 =>
            array (
                'idcust' => 2008,
                'cust_nomor' => 'MP01979',
                'cust_nama' => 'TEDI',
                'cust_alamat' => 'JL KARANG KOBAR 31 PWT',
                'cust_notelp' => '081391183007',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            462 =>
            array (
                'idcust' => 2009,
                'cust_nomor' => 'MP01980',
                'cust_nama' => 'TITIN',
                'cust_alamat' => 'JL WAKAFIAH PWT',
                'cust_notelp' => '0281 621640',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            463 =>
            array (
                'idcust' => 2010,
                'cust_nomor' => 'MP01981',
                'cust_nama' => 'NINGSIH',
                'cust_alamat' => 'JL SKLH TEKHNIK PWT',
                'cust_notelp' => '0281 634166',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            464 =>
            array (
                'idcust' => 2011,
                'cust_nomor' => 'MP01982',
                'cust_nama' => 'IRMA',
                'cust_alamat' => 'JL PEMUDA PWT',
                'cust_notelp' => '0281 640475',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            465 =>
            array (
                'idcust' => 2012,
                'cust_nomor' => 'MP01983',
                'cust_nama' => 'NINDA',
                'cust_alamat' => 'JL PAHLAWAN 8 PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            466 =>
            array (
                'idcust' => 2013,
                'cust_nomor' => 'MP01984',
                'cust_nama' => 'CINDI',
                'cust_alamat' => 'JL GUNUNG SLAMET III/162 PWT',
                'cust_notelp' => '08156094585',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            467 =>
            array (
                'idcust' => 2014,
                'cust_nomor' => 'MP01985',
                'cust_nama' => 'FAJAR',
                'cust_alamat' => 'KARANG KLESEM PWT',
                'cust_notelp' => '0281 7614571',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            468 =>
            array (
                'idcust' => 2015,
                'cust_nomor' => 'MP01986',
                'cust_nama' => 'LENI',
                'cust_alamat' => 'JOGJA',
                'cust_notelp' => '081803218913',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            469 =>
            array (
                'idcust' => 2016,
                'cust_nomor' => 'MP01987',
                'cust_nama' => 'MIETA',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '085223529805',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            470 =>
            array (
                'idcust' => 2017,
                'cust_nomor' => 'MP01988',
                'cust_nama' => 'IDRIS',
                'cust_alamat' => 'HR BUNYAMIN PWT',
                'cust_notelp' => '081326650672',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            471 =>
            array (
                'idcust' => 2018,
                'cust_nomor' => 'MP01989',
                'cust_nama' => 'GEDE',
                'cust_alamat' => 'BUNDA',
                'cust_notelp' => '08122667200',
                'cust_date' => '2007-05-31',
                'cust_author' => 'YUNI',
            ),
            472 =>
            array (
                'idcust' => 2019,
                'cust_nomor' => 'MP01990',
                'cust_nama' => 'UNDI',
                'cust_alamat' => 'PH 6/56',
                'cust_notelp' => '0281 641164',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            473 =>
            array (
                'idcust' => 2020,
                'cust_nomor' => 'MP01991',
                'cust_nama' => 'ARIS',
                'cust_alamat' => 'KARANG KOBAR 25 APWT',
                'cust_notelp' => '0281 7632585',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            474 =>
            array (
                'idcust' => 2021,
                'cust_nomor' => 'MP01992',
                'cust_nama' => 'TRISNI',
                'cust_alamat' => 'MARTADIREJA PWT',
                'cust_notelp' => '0281 639268',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            475 =>
            array (
                'idcust' => 2022,
                'cust_nomor' => 'MP1993',
                'cust_nama' => 'SUGENG',
                'cust_alamat' => 'KARANG MONCOL PURBALINGGA',
                'cust_notelp' => '0281 7601217',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            476 =>
            array (
                'idcust' => 2023,
                'cust_nomor' => 'MP01993',
                'cust_nama' => 'SUGENG',
                'cust_alamat' => 'KARANG MONCOL PURBALINGGA',
                'cust_notelp' => '2817601217',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            477 =>
            array (
                'idcust' => 2024,
                'cust_nomor' => 'MP01994',
                'cust_nama' => 'DONA',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '6596663',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            478 =>
            array (
                'idcust' => 2025,
                'cust_nomor' => 'MP01995',
                'cust_nama' => 'SUTARGO',
                'cust_alamat' => 'TIARA PERMAI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            479 =>
            array (
                'idcust' => 2026,
                'cust_nomor' => 'MP01996',
                'cust_nama' => 'BAGUS',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '081327766555',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            480 =>
            array (
                'idcust' => 2027,
                'cust_nomor' => 'MP01997',
                'cust_nama' => 'INAY',
                'cust_alamat' => 'KALI BAGOR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            481 =>
            array (
                'idcust' => 2028,
                'cust_nomor' => 'MP01998',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'PRO LIMAN KARANG PUCUNG PWT',
                'cust_notelp' => '0281 636888',
                'cust_date' => '2007-06-01',
                'cust_author' => 'YUNI',
            ),
            482 =>
            array (
                'idcust' => 2029,
                'cust_nomor' => 'MP01999',
                'cust_nama' => 'YULI',
                'cust_alamat' => 'HR.BUNYAMIN NO.108 PWT',
                'cust_notelp' => '7600211',
                'cust_date' => '2007-06-01',
                'cust_author' => 'OLLA',
            ),
            483 =>
            array (
                'idcust' => 2030,
                'cust_nomor' => 'MP02000',
                'cust_nama' => 'OSSA',
                'cust_alamat' => 'JL.KRG DUREN SOKARAJA',
                'cust_notelp' => '7620954',
                'cust_date' => '2007-06-01',
                'cust_author' => 'OLLA',
            ),
            484 =>
            array (
                'idcust' => 2031,
                'cust_nomor' => 'MP02001',
                'cust_nama' => 'DIYAH',
                'cust_alamat' => 'JL.JATISARI 5B SUMAMPIR PWT',
                'cust_notelp' => '627827',
                'cust_date' => '2007-06-01',
                'cust_author' => 'OLLA',
            ),
            485 =>
            array (
                'idcust' => 2032,
                'cust_nomor' => 'MP02002',
                'cust_nama' => 'DESI',
                'cust_alamat' => 'D.I PANJAITAN PWT',
                'cust_notelp' => '624946',
                'cust_date' => '2007-06-01',
                'cust_author' => 'OLLA',
            ),
            486 =>
            array (
                'idcust' => 2033,
                'cust_nomor' => 'MP02003',
                'cust_nama' => 'AJI',
                'cust_alamat' => 'JL.TENTARA PELAJAR PWT',
                'cust_notelp' => '081391118800',
                'cust_date' => '2007-06-01',
                'cust_author' => 'OLLA',
            ),
            487 =>
            array (
                'idcust' => 2034,
                'cust_nomor' => 'MP02004',
                'cust_nama' => 'HERI',
                'cust_alamat' => 'CILACAP ',
                'cust_notelp' => '081327291988',
                'cust_date' => '2007-06-01',
                'cust_author' => 'OLLA',
            ),
            488 =>
            array (
                'idcust' => 2035,
                'cust_nomor' => 'MP02005',
                'cust_nama' => 'LUSY',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '081327189671',
                'cust_date' => '2007-06-02',
                'cust_author' => 'OLLA',
            ),
            489 =>
            array (
                'idcust' => 2036,
                'cust_nomor' => 'MP02006',
                'cust_nama' => 'IRA',
                'cust_alamat' => 'DPN GOR PWT',
                'cust_notelp' => '081802274292',
                'cust_date' => '2007-06-02',
                'cust_author' => 'OLLA',
            ),
            490 =>
            array (
                'idcust' => 2037,
                'cust_nomor' => 'MP02007',
                'cust_nama' => 'ERNA',
                'cust_alamat' => 'SUMAMPIR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-02',
                'cust_author' => 'OLLA',
            ),
            491 =>
            array (
                'idcust' => 2038,
                'cust_nomor' => 'MP02008',
                'cust_nama' => 'SISTA',
                'cust_alamat' => 'GLEMPANG PWT',
                'cust_notelp' => '81327301120',
                'cust_date' => '2007-06-02',
                'cust_author' => 'OLLA',
            ),
            492 =>
            array (
                'idcust' => 2039,
                'cust_nomor' => 'MP02009',
                'cust_nama' => 'WINETOU GARTH',
                'cust_alamat' => 'JL GUNUNG GEDE 13 A BANCAR KEMBAR PWT',
                'cust_notelp' => '0281 7649500',
                'cust_date' => '2007-06-02',
                'cust_author' => 'OLLA',
            ),
            493 =>
            array (
                'idcust' => 2040,
                'cust_nomor' => 'MP02010',
                'cust_nama' => 'NITA',
                'cust_alamat' => 'OVIST PWT',
                'cust_notelp' => '0281 7635494',
                'cust_date' => '2007-06-02',
                'cust_author' => 'OLLA',
            ),
            494 =>
            array (
                'idcust' => 2041,
                'cust_nomor' => 'MP02011',
                'cust_nama' => 'RINI',
                'cust_alamat' => 'JL GUNUNG SLAMET 6A GRENDENG PWT',
                'cust_notelp' => '08158755765',
                'cust_date' => '2007-06-03',
                'cust_author' => 'YUNI',
            ),
            495 =>
            array (
                'idcust' => 2042,
                'cust_nomor' => 'MP02012',
                'cust_nama' => 'DEWI',
                'cust_alamat' => 'PURWOKERTO ',
                'cust_notelp' => '081548890314',
                'cust_date' => '2007-06-03',
                'cust_author' => 'YUNI',
            ),
            496 =>
            array (
                'idcust' => 2043,
                'cust_nomor' => 'MP02013',
                'cust_nama' => 'ANUNG',
                'cust_alamat' => 'ARCAWINANGUN PWT',
                'cust_notelp' => '08122569080',
                'cust_date' => '2007-06-03',
                'cust_author' => 'YUNI',
            ),
            497 =>
            array (
                'idcust' => 2044,
                'cust_nomor' => 'MP02014',
                'cust_nama' => 'DEBI',
                'cust_alamat' => 'KARANG WANGKAL PWT',
                'cust_notelp' => '0281 621864',
                'cust_date' => '2007-06-03',
                'cust_author' => 'YUNI',
            ),
            498 =>
            array (
                'idcust' => 2045,
                'cust_nomor' => 'MP02015',
                'cust_nama' => 'RIO',
                'cust_alamat' => 'KOL SUGIONO PWT',
                'cust_notelp' => '081327290210',
                'cust_date' => '2007-06-03',
                'cust_author' => 'YUNI',
            ),
            499 =>
            array (
                'idcust' => 2046,
                'cust_nomor' => 'MP02016',
                'cust_nama' => 'MIKA',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '0281 7648703',
                'cust_date' => '2007-06-03',
                'cust_author' => 'YUNI',
            ),
        ));
        \DB::table('mgh_customer')->insert(array (
            0 =>
            array (
                'idcust' => 2047,
                'cust_nomor' => 'MP02017',
                'cust_nama' => 'YONI',
                'cust_alamat' => 'SOKARAJA',
                'cust_notelp' => '085227596699',
                'cust_date' => '2007-06-03',
                'cust_author' => 'OLLA',
            ),
            1 =>
            array (
                'idcust' => 2048,
                'cust_nomor' => 'MP02018',
                'cust_nama' => 'ANI TRISNAWATI',
                'cust_alamat' => 'WANGON ',
                'cust_notelp' => '085647666373',
                'cust_date' => '2007-06-03',
                'cust_author' => 'OLLA',
            ),
            2 =>
            array (
                'idcust' => 2049,
                'cust_nomor' => 'MP02019',
                'cust_nama' => 'SUSAN',
                'cust_alamat' => 'BUMI AYU',
                'cust_notelp' => '085227809707',
                'cust_date' => '2007-06-03',
                'cust_author' => 'OLLA',
            ),
            3 =>
            array (
                'idcust' => 2050,
                'cust_nomor' => 'MP02020',
                'cust_nama' => 'DEDI',
                'cust_alamat' => 'SUMPIUH CLP',
                'cust_notelp' => '08156296468',
                'cust_date' => '2007-06-04',
                'cust_author' => 'OLLA',
            ),
            4 =>
            array (
                'idcust' => 2051,
                'cust_nomor' => ',P02021',
                'cust_nama' => 'RIKI',
                'cust_alamat' => 'JL.PEMUDA GG 1 PWT',
                'cust_notelp' => '085869981814',
                'cust_date' => '2007-06-04',
                'cust_author' => 'OLLA',
            ),
            5 =>
            array (
                'idcust' => 2052,
                'cust_nomor' => 'MP02022',
                'cust_nama' => 'LISA',
                'cust_alamat' => 'BANJAR NEGARA UMP ',
                'cust_notelp' => '0286479505',
                'cust_date' => '2007-06-04',
                'cust_author' => 'YUNI',
            ),
            6 =>
            array (
                'idcust' => 2053,
                'cust_nomor' => 'MP02023',
                'cust_nama' => 'SEPTARIA',
                'cust_alamat' => 'A YANI II NO 2 PWT',
                'cust_notelp' => '640087',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            7 =>
            array (
                'idcust' => 2054,
                'cust_nomor' => 'MP02024',
                'cust_nama' => 'INA',
                'cust_alamat' => 'SUPARNO PWT',
                'cust_notelp' => '08562647030',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            8 =>
            array (
                'idcust' => 2055,
                'cust_nomor' => 'MP02025',
                'cust_nama' => 'ANJAS',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '085694564165',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            9 =>
            array (
                'idcust' => 2056,
                'cust_nomor' => 'MP2026',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '0813914040909',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            10 =>
            array (
                'idcust' => 2057,
                'cust_nomor' => 'MP02027',
                'cust_nama' => 'AYU',
                'cust_alamat' => 'BERINGIN H II NO 367 PWT',
                'cust_notelp' => '08155915785',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            11 =>
            array (
                'idcust' => 2058,
                'cust_nomor' => 'MP02028',
                'cust_nama' => 'TYO ZONE',
                'cust_alamat' => 'JL.PRAMUKA PWT',
                'cust_notelp' => '085647701555',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            12 =>
            array (
                'idcust' => 2059,
                'cust_nomor' => 'MP02029',
                'cust_nama' => 'TYAS',
                'cust_alamat' => 'JL. A YANI GG 6 NO 1 PWT',
                'cust_notelp' => '628205',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            13 =>
            array (
                'idcust' => 2060,
                'cust_nomor' => 'MP02030',
                'cust_nama' => 'ANTO',
                'cust_alamat' => 'PERUMAHAN TELUK PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-05',
                'cust_author' => 'OLLA',
            ),
            14 =>
            array (
                'idcust' => 2061,
                'cust_nomor' => 'MP02026',
                'cust_nama' => 'ILHAM',
                'cust_alamat' => 'GUNUNG MURIA PWT',
                'cust_notelp' => '085215308630',
                'cust_date' => '2007-06-05',
                'cust_author' => 'YUNI',
            ),
            15 =>
            array (
                'idcust' => 2062,
                'cust_nomor' => 'MP02031',
                'cust_nama' => 'SOFYAN',
                'cust_alamat' => 'JL CENDRASWASIH GG KEPUDANG PWT',
                'cust_notelp' => '081324006331',
                'cust_date' => '2007-06-05',
                'cust_author' => 'YUNI',
            ),
            16 =>
            array (
                'idcust' => 2063,
                'cust_nomor' => 'MP02032',
                'cust_nama' => 'WURI',
                'cust_alamat' => 'PURBALINGGA',
                'cust_notelp' => '081327755411',
                'cust_date' => '2007-06-05',
                'cust_author' => 'YUNI',
            ),
            17 =>
            array (
                'idcust' => 2064,
                'cust_nomor' => 'MP02033',
                'cust_nama' => 'ARAF',
                'cust_alamat' => 'JATIWINANGUN 57 PWT',
                'cust_notelp' => '081355204005',
                'cust_date' => '2007-06-05',
                'cust_author' => 'YUNI',
            ),
            18 =>
            array (
                'idcust' => 2065,
                'cust_nomor' => 'MP02034',
                'cust_nama' => 'SAMSUL',
                'cust_alamat' => 'JATIWINANGUN GG 2 PWT',
                'cust_notelp' => '0281 622131',
                'cust_date' => '2007-06-05',
                'cust_author' => 'YUNI',
            ),
            19 =>
            array (
                'idcust' => 2066,
                'cust_nomor' => 'MP02035',
                'cust_nama' => 'BUDI',
                'cust_alamat' => 'JL CONDET RAYA 27 B JKT TIMUR',
                'cust_notelp' => '08561768945',
                'cust_date' => '2007-06-05',
                'cust_author' => 'YUNI',
            ),
            20 =>
            array (
                'idcust' => 2067,
                'cust_nomor' => 'MP02036',
                'cust_nama' => 'AGNES',
                'cust_alamat' => 'JL PRAMUKA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            21 =>
            array (
                'idcust' => 2068,
                'cust_nomor' => 'MP02037',
                'cust_nama' => 'KAREN',
                'cust_alamat' => 'JL CENDRAWASIH 736 PWT',
                'cust_notelp' => '081914995001',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            22 =>
            array (
                'idcust' => 2069,
                'cust_nomor' => 'MP02038',
                'cust_nama' => 'OPAN',
                'cust_alamat' => 'TELUK PWT',
                'cust_notelp' => '08122993760',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            23 =>
            array (
                'idcust' => 2070,
                'cust_nomor' => 'MP02039',
                'cust_nama' => 'ADI',
                'cust_alamat' => 'BANYUMAS ',
                'cust_notelp' => '0281 796103',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            24 =>
            array (
                'idcust' => 2071,
                'cust_nomor' => 'MP02040',
                'cust_nama' => 'DIAN',
                'cust_alamat' => 'GRENDENG',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            25 =>
            array (
                'idcust' => 2072,
                'cust_nomor' => 'MP02041',
                'cust_nama' => 'ANGGA',
                'cust_alamat' => 'JL GG SRANDIL NO 4 PWT',
                'cust_notelp' => '081542841421',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            26 =>
            array (
                'idcust' => 2073,
                'cust_nomor' => 'MP02042',
                'cust_nama' => 'URIP',
                'cust_alamat' => 'KARANG GUDE KARANG LEWAS PWT',
                'cust_notelp' => '081328715288',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            27 =>
            array (
                'idcust' => 2074,
                'cust_nomor' => 'MP02043',
                'cust_nama' => 'VIRLI',
                'cust_alamat' => 'JL ROGO JEMBANGAN BANCAR KEMBAR',
                'cust_notelp' => '081327321351',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            28 =>
            array (
                'idcust' => 2075,
                'cust_nomor' => 'MP02044',
                'cust_nama' => 'VIKA',
                'cust_alamat' => 'GG CERMAI BANCAR KEMBAR PWT',
                'cust_notelp' => '085227164804',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            29 =>
            array (
                'idcust' => 2076,
                'cust_nomor' => 'MP02045',
                'cust_nama' => 'ICHA',
                'cust_alamat' => 'BERKOH',
                'cust_notelp' => '08562611269',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            30 =>
            array (
                'idcust' => 2077,
                'cust_nomor' => 'MP02046',
                'cust_nama' => 'DIYAN',
                'cust_alamat' => 'PERUM LEDUG',
                'cust_notelp' => '085227211770',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            31 =>
            array (
                'idcust' => 2078,
                'cust_nomor' => 'MP02047',
                'cust_nama' => 'ANNIS',
                'cust_alamat' => 'JL BOBOSAN PWT',
                'cust_notelp' => '622159',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            32 =>
            array (
                'idcust' => 2079,
                'cust_nomor' => 'MP02048',
                'cust_nama' => 'AAN',
                'cust_alamat' => 'JL AHMAD YANI PWT',
                'cust_notelp' => '085869777663',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            33 =>
            array (
                'idcust' => 2080,
                'cust_nomor' => 'MP02049',
                'cust_nama' => 'JOHAN',
                'cust_alamat' => 'YOS SUDARMO',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-06',
                'cust_author' => 'YUNI',
            ),
            34 =>
            array (
                'idcust' => 2081,
                'cust_nomor' => 'MP02050',
                'cust_nama' => 'SELLY',
                'cust_alamat' => 'PABUARAN',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            35 =>
            array (
                'idcust' => 2082,
                'cust_nomor' => 'MP02051',
                'cust_nama' => 'AJENG',
                'cust_alamat' => 'BOBOSAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            36 =>
            array (
                'idcust' => 2083,
                'cust_nomor' => 'MP02052',
                'cust_nama' => 'YAYI',
                'cust_alamat' => 'PERUMAHAN TELUK PWT',
                'cust_notelp' => '085227347777',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            37 =>
            array (
                'idcust' => 2084,
                'cust_nomor' => 'MP02053',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'DUKU WALUH PWT',
                'cust_notelp' => '081391123730',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            38 =>
            array (
                'idcust' => 2085,
                'cust_nomor' => 'MP02054',
                'cust_nama' => 'DIDIK',
                'cust_alamat' => 'CILACAP',
                'cust_notelp' => '085227519644',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            39 =>
            array (
                'idcust' => 2086,
                'cust_nomor' => 'MP02055',
                'cust_nama' => 'IZMU',
                'cust_alamat' => 'KOBER PWT',
                'cust_notelp' => '08179135000',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            40 =>
            array (
                'idcust' => 2087,
                'cust_nomor' => 'MP02056',
                'cust_nama' => 'IRFAN/IKA',
                'cust_alamat' => 'KEBOCORAN PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-07',
                'cust_author' => 'OLLA',
            ),
            41 =>
            array (
                'idcust' => 2088,
                'cust_nomor' => 'MP02057',
                'cust_nama' => 'EVAN',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            42 =>
            array (
                'idcust' => 2089,
                'cust_nomor' => 'MP02058',
                'cust_nama' => 'TARA',
                'cust_alamat' => 'AHMAD YANI PWT',
                'cust_notelp' => '081327622204',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            43 =>
            array (
                'idcust' => 2090,
                'cust_nomor' => 'MP02059',
                'cust_nama' => 'ADE',
                'cust_alamat' => 'JL BANK PWT',
                'cust_notelp' => '0281 621839',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            44 =>
            array (
                'idcust' => 2091,
                'cust_nomor' => 'MP02060',
                'cust_nama' => 'EKA',
                'cust_alamat' => 'TRIMURTI PWT',
                'cust_notelp' => '0811254010',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            45 =>
            array (
                'idcust' => 2092,
                'cust_nomor' => 'MP02061',
                'cust_nama' => 'RUDI',
                'cust_alamat' => 'PURWOKERTO',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            46 =>
            array (
                'idcust' => 2093,
                'cust_nomor' => 'MP02062',
                'cust_nama' => 'SIDIK',
                'cust_alamat' => 'MADRANI PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            47 =>
            array (
                'idcust' => 2094,
                'cust_nomor' => 'MP02063',
                'cust_nama' => 'ANAM',
                'cust_alamat' => 'PASIR KRNG LEWAS PWT',
                'cust_notelp' => '0281 7653227',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            48 =>
            array (
                'idcust' => 2095,
                'cust_nomor' => 'MP02064',
                'cust_nama' => 'DIMAS',
                'cust_alamat' => 'JL M IKHSAN 22 PWT',
                'cust_notelp' => '0281 630015',
                'cust_date' => '2007-06-08',
                'cust_author' => 'YUNI',
            ),
            49 =>
            array (
                'idcust' => 2096,
                'cust_nomor' => 'MP02065',
                'cust_nama' => 'EKA KARTIKAWATI',
                'cust_alamat' => 'KEDUNG RANDU PATIKRAJA PWT',
                'cust_notelp' => '081328743261',
                'cust_date' => '2007-06-08',
                'cust_author' => 'OLLA',
            ),
            50 =>
            array (
                'idcust' => 2097,
                'cust_nomor' => 'MP02066',
                'cust_nama' => 'ARINI OTSUKA',
                'cust_alamat' => 'MANGUNJAYA PWT',
                'cust_notelp' => '081391392396',
                'cust_date' => '2007-06-08',
                'cust_author' => 'OLLA',
            ),
            51 =>
            array (
                'idcust' => 2098,
                'cust_nomor' => 'MP02067',
                'cust_nama' => 'HANIFA',
                'cust_alamat' => 'JATILAWANG ',
                'cust_notelp' => '085227404082',
                'cust_date' => '2007-06-08',
                'cust_author' => 'OLLA',
            ),
            52 =>
            array (
                'idcust' => 2099,
                'cust_nomor' => 'MP02068',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'SOKAJATI PWT',
                'cust_notelp' => '085647739513',
                'cust_date' => '2007-06-08',
                'cust_author' => 'OLLA',
            ),
            53 =>
            array (
                'idcust' => 2100,
                'cust_nomor' => 'MP02069',
                'cust_nama' => 'NIA',
                'cust_alamat' => 'DR ANGKA PWT',
                'cust_notelp' => '081802813717',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            54 =>
            array (
                'idcust' => 2101,
                'cust_nomor' => 'MP02070',
                'cust_nama' => 'WURI',
                'cust_alamat' => 'REMPOAH',
                'cust_notelp' => '081542943910',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            55 =>
            array (
                'idcust' => 2102,
                'cust_nomor' => 'MP02072',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'SOKARAJA SVAC',
                'cust_notelp' => '081327402007',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            56 =>
            array (
                'idcust' => 2103,
                'cust_nomor' => 'MP02073',
                'cust_nama' => 'DWI HASTUTI',
                'cust_alamat' => 'PERUM BUMI TANJUNG ELOK JL PINUS8/62',
                'cust_notelp' => '0281 622205',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            57 =>
            array (
                'idcust' => 2104,
                'cust_nomor' => 'MP02074',
                'cust_nama' => 'SISWO RAHARJO',
                'cust_alamat' => 'DS SUKOMULYO GOMBONG',
                'cust_notelp' => '081327353619',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            58 =>
            array (
                'idcust' => 2105,
                'cust_nomor' => 'MP02075',
                'cust_nama' => 'INTAN',
                'cust_alamat' => 'BANCAR KEMBAR PWT',
                'cust_notelp' => '08152892806',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            59 =>
            array (
                'idcust' => 2106,
                'cust_nomor' => 'MP02076',
                'cust_nama' => 'KIKI',
                'cust_alamat' => 'PERINTIS KEMERDEKAAN PWT',
                'cust_notelp' => '0816691628',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            60 =>
            array (
                'idcust' => 2107,
                'cust_nomor' => 'MP02077',
                'cust_nama' => 'AMBAR',
                'cust_alamat' => 'TIARA PERMAI II PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            61 =>
            array (
                'idcust' => 2108,
                'cust_nomor' => 'MP02078',
                'cust_nama' => 'RATIH',
                'cust_alamat' => 'JL KOBER G DAHLIA/4 PWT',
                'cust_notelp' => '0281 7621305',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            62 =>
            array (
                'idcust' => 2109,
                'cust_nomor' => 'MP02079',
                'cust_nama' => 'ANDI',
                'cust_alamat' => 'KARANG PUCUNG PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            63 =>
            array (
                'idcust' => 2110,
                'cust_nomor' => 'MP02080',
                'cust_nama' => 'JIMAN',
                'cust_alamat' => 'GGBIMA JATIWINANGUN PWT',
                'cust_notelp' => '81327179172',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            64 =>
            array (
                'idcust' => 2111,
                'cust_nomor' => 'MP02081',
                'cust_nama' => 'ZUITA',
                'cust_alamat' => 'AJIBARANG',
                'cust_notelp' => '81327992298',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            65 =>
            array (
                'idcust' => 2112,
                'cust_nomor' => 'MP02082',
                'cust_nama' => 'YOHANA',
                'cust_alamat' => 'BUKATEJA PWT',
                'cust_notelp' => '85292481612',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            66 =>
            array (
                'idcust' => 2113,
                'cust_nomor' => 'MP02083',
                'cust_nama' => 'RETNO',
                'cust_alamat' => 'MANGUNJAYA PWT',
                'cust_notelp' => '85647822500',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            67 =>
            array (
                'idcust' => 2114,
                'cust_nomor' => 'MP02084',
                'cust_nama' => 'ENI',
                'cust_alamat' => 'KAUMAN LAMA PWT',
                'cust_notelp' => '81327976432',
                'cust_date' => '2007-05-02',
                'cust_author' => 'OLLA',
            ),
            68 =>
            array (
                'idcust' => 2115,
                'cust_nomor' => 'MP02085',
                'cust_nama' => 'VIA',
                'cust_alamat' => 'PURWOKENCANA PWT',
                'cust_notelp' => '-',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            69 =>
            array (
                'idcust' => 2116,
                'cust_nomor' => 'MP02086',
                'cust_nama' => 'VITA',
                'cust_alamat' => 'JL.PAHLAWAN NO 3 PWT',
                'cust_notelp' => '85227390964',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            70 =>
            array (
                'idcust' => 2117,
                'cust_nomor' => 'MP02087',
                'cust_nama' => 'WIWI',
                'cust_alamat' => 'JL.PEMUDA 19 PURWOKERTO',
                'cust_notelp' => '631738',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            71 =>
            array (
                'idcust' => 2118,
                'cust_nomor' => 'MP02088',
                'cust_nama' => 'CHACHA',
                'cust_alamat' => 'BANTARSOKA PURWOKERTO',
                'cust_notelp' => '642607',
                'cust_date' => '2007-06-09',
                'cust_author' => 'OLLA',
            ),
            72 =>
            array (
                'idcust' => 2119,
                'cust_nomor' => 'MP02089',
                'cust_nama' => 'RESTI',
                'cust_alamat' => 'JL.KAUMAN CILACAP',
                'cust_notelp' => '81327332299',
                'cust_date' => '2007-06-10',
                'cust_author' => 'OLLA',
            ),
            73 =>
            array (
                'idcust' => 2120,
                'cust_nomor' => 'MP02090',
                'cust_nama' => 'JESI',
                'cust_alamat' => 'BUNTU BANYUMAS',
                'cust_notelp' => '8122716467',
                'cust_date' => '2007-06-10',
                'cust_author' => 'OLLA',
            ),
        ));


    }
}
