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

        'no_surat','tanggal','perihal','isi','keterangan','file'

    ];


    protected $primaryKey = 'no_surat';

    public function RelasiSuratMasuk()
    {
        return $this->hasMany('App\Models\SuratKeluar', 'no_surat');
    }

    public function RelasiSuratMasuk2()
    {
        return $this->belongsTo('App\Models\AsalSurat');
    }


    public function RelasiSuratMasuk3()
    {
        return $this->belongsTo('App\Models\JenisSurat');
    }


    public function RelasiSuratMasuk4()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function RelasiSuratMasuk5()
    {
        return $this->hasMany('App\Models\Disposisi');
    }
}
