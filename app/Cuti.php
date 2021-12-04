<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{

    protected $table = 'lap_cuti';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pegawai', 'tanggal', 'id_status_cuti', 'keterangan'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}