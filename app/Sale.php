<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'variant_id', 'botol_id', 'mililiter', 'totalmililiter', 'variant_harga', 'botol_harga', 'harga', 'diskon', 'total', 'status', 'author'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function variant()
    {
        return $this->belongsTo('App\Variant');
    }

    public function botol()
    {
        return $this->belongsTo('App\Botol');
    }
}
