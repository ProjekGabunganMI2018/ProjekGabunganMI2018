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

        'nomor_surat','perihal','isi','jenis_surat_id','peminta_surat_id','pembuat_surat_id','surat_masuk_id','file','keterangan'

    ];

    protected $primaryKey = 'nomor_surat';


    public function RelasiSuratKeluar()
    {
        return $this->belongsTo('App\Models\JenisSurat');
    }



    public function RelasiSuratKeluar2()
    {
        return $this->belongsTo('App\Models\User');

    }



    public function RelasiSuratKeluar3()
    {
        return $this->belongsTo('App\Models\SuratMasuk');

    }

}
