<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stock
 */
class MghStock extends Model
{
    protected $table = 'mgh_stock';

    protected $primaryKey = 'idstock';

    public $timestamps = true;

    protected $fillable = [
        'idstock',
        'stock_name',
        'stock_idname',
        'stock_awal',
        'stock_order',
        'stock_akhir',
        'stock_date',
        'stock_author',
        'stock_status',
        'stock_keterangan'
    ];

    protected $guarded = [];


}
