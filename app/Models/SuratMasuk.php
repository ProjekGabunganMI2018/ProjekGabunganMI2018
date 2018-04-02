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
        return $this->hasMany('App\Models\surat_keluar', 'no_surat');
    }
@return

    public function RelasiSuratMasuk2()
    {
        return $this->belongsTo('App\Models\asal_surat');
    }

@return

    public function RelasiSuratMasuk3()
    {
        return $this->belongsTo('App\Models\jenis_surat');
    }

@return

    public function RelasiSuratMasuk4()
    {
        return $this->belongsTo('App\Models\user');
    }

@return

    public function RelasiSuratMasuk5()
    {
        return $this->hasMany('App\Models\disposisi');
    }
}
