<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Botol
 */
class MghBotol extends Model
{
    protected $table = 'mgh_dtbotol';

    protected $primaryKey = 'idbotol';

    public $timestamps = true;

    protected $fillable = [
        'idbotol',
        'botol_tipe',
        'botol_harga',
        'botol_stock',
        'botol_date',
        'botol_author',
        'botol_ls_stock',
        'botol_ls_date',
        'botol_ls_author'
    ];

    // protected $guarded = [];

    /**
     *
     * Get the stocks for the botol.
     */
    public function stocks()
    {
        return $this->hasMany('App\Stock', 'stock_idname');
    }


}
