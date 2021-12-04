<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccessToken extends Model
{

    protected $table = 'user_access_token';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_instansi', 'token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}