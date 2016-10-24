<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MghUser
 */
class MghUser extends Model
{
    protected $table = 'mgh_user';

    public $timestamps = false;

    protected $fillable = [
        'iduser',
        'user_name',
        'user_password',
        'user_namalengkap',
        'user_date',
        'user_author'
    ];

    protected $guarded = [];


}
