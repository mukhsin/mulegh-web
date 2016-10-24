<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 */
class MghCustomer extends Model
{
    protected $table = 'mgh_customer';

    protected $primaryKey = 'idcust';

    public $timestamps = true;

    protected $fillable = [
        'idcust',
        'cust_nomor',
        'cust_nama',
        'cust_alamat',
        'cust_notelp',
        'cust_date',
        'cust_author'
    ];

    // protected $guarded = [];


}
