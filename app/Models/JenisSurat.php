<?php

namespace App\Models;

use Eloquent as model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JenisSurat extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'jenis_surat';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'nama','format_surat','keterangan'

    ];


    public function RelasiJenisSurat()
    {
        return $this->hasMany('App\Models\SuratKeluar');
    }

    public function RelasiJenisSurat2()
    {
        return $this->hasMany('App\Models\SuratMasuk');
    }
}
