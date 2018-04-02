<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeteles;

class SuratKeluar extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'surat_keluar';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'nomor_surat','perihal','isi'

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
