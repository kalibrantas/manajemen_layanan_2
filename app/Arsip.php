<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{

    protected $table = 'ldp_arsip';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pegawai','id_jenis_arsip', 'nama_arsip', 'file','url'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}