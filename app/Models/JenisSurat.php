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


    public function surat_keluar()
    {
        return $this->hasMany('App\Models\SuratKeluar','jenis_surat_id');
    }

    public function surat_masuk()
    {
        return $this->hasMany('App\Models\SuratMasuk','jenis_surat_id');
    }
}
