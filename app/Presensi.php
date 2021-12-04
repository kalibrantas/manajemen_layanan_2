<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{

    protected $table = 'lap_presensi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pegawai', 'id_provider', 'time', 'status', 'lokasi'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
