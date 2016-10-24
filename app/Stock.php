<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'variant_id', 'botol_id', 'awal', 'order', 'akhir', 'status', 'keterangan', 'author'
    ];

    public function variant()
    {
        return $this->belongsTo('App\Variant');
    }

    public function botol()
    {
        return $this->belongsTo('App\Botol');
    }
}
