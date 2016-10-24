<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Botol extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipe', 'harga', 'stock', 'author'
    ];

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
}
