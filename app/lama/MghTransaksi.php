<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaksi
 */
class MghTransaksi extends Model
{
    protected $table = 'mgh_sales';

    protected $primaryKey = 'idsales';

    public $timestamps = true;

    protected $fillable = [
        'idsales',
        'sales_idcust',
        'sales_idvariant',
        'sales_mililiter',
        'sales_totalml',
        'sales_idbotol',
        'sales_hargavariant',
        'sales_hargabotol',
        'sales_hargatotal',
        'sales_diskon',
        'sales_hargadiskon',
        'sales_date',
        'sales_author',
        'sales_status'
    ];

    // protected $guarded = [];


}
