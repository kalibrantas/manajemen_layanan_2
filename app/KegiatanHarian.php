<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanHarian extends Model
{

    protected $table = 'lkp_kegiatan_harian';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pegawai', 'id_kegiatan', 'keterangan_kegiatan', 'angka_Kredit','mutu','created_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}