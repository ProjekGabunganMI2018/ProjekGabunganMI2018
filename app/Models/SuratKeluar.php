<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeluar extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'surat_keluar';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'nomor_surat','perihal','isi','jenis_surat_id','peminta_surat','pembuat_surat_id','surat_masuk_id','file','keterangan'

    ];

    protected $primaryKey = 'nomor_surat';


    public function jenis_surat()
    {
        return $this->belongsTo('App\Models\JenisSurat','jenis_surat_id');
    }

    public function peminta_surat()
    {
        return $this->belongsTo('App\User','peminta_surat_id');
    }

    public function  pembuat_surat()
    {
        return $this->belongsTo('App\User','pembuat_surat_id');
    }

    public function surat_masuk()
    {
        return $this->belongsTo('App\Models\SuratMasuk','surat_masuk_id');

    }

}
