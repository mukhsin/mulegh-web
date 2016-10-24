<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Variant
 */
class MghVariant extends Model
{
    protected $table = 'mgh_dtvariant';

    protected $primaryKey = 'idvariant';

    public $timestamps = true;

    protected $fillable = [
        'idvariant',
        'variant_kode',
        'variant_nama',
        'variant_harga',
        'variant_stock',
        'variant_date',
        'variant_author',
        'variant_ls_stock',
        'variant_ls_date',
        'variant_ls_author'
    ];

    protected $guarded = [];


}
