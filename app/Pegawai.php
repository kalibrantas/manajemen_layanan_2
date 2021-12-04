<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{


    protected $table = 'ldp_pegawai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip', 'nama', 'pangkat', 'golongan', 'jenjang_jabatan', 'nama_jabatan', 'unit_kerja', 'tempat_lahir', 'tgl_lahir','status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}