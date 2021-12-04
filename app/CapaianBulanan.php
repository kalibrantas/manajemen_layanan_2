<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapaianBulanan extends Model
{

    protected $table = 'lkp_capaian_bulanan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pegawai', 'id_atasan', 'nilai_orientasi_pelayanan', 'nilai_integritas','nilai_komitmen','nilai_disiplin','nilai_kerjasama','nilai_kepemimpinan'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}