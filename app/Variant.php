<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode', 'nama', 'harga', 'stock', 'author'
    ];

    public function stocks()
    {
        return $this->hasMany('App\Stock'); 
    }
}
