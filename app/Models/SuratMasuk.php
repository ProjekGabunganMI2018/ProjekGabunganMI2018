<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class SuratMasuk extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'surat_masuk';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'no_surat', 'tanggal', 'perihal', 'isi', 'keterangan', 'file', 'jenis_surat_id', 'penyimpan_surat_id', 'asal_surat_id', 'tujuan_user_id'

    ];


    protected $primaryKey = 'no_surat';

    public function jenis_surat()
    {
        return $this->belongsTo('App\Models\JenisSurat', 'jenis_surat_id');
    }

    public function penyimpan_surat()
    {
        return $this->belongsTo('App\User', 'penyimpan_surat_id');
    }


    public function asal_surat()
    {
        return $this->belongsTo('App\Models\AsalSurat', 'asal_surat_id');
    }


    public function tujuan_surat()
    {
        return $this->belongsTo('App\User', 'tujuan_users_id');
    }
}