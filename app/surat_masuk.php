<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_masuk extends Model
{
    protected $table = 'surat_masuk';

    public $incrementing = false;

    protected $fillable = [

    'no_surat','tanggal','perihal','isi','keterangan','file'

    ];


    protected $primaryKey = 'no_surat';

    public function relasiSurat_masuk()
    {
        return $this->hasMany('App\surat_keluar', 'no_surat');

        return $this->hasMany('App\asal_surat');

        return $this->hasMany('App\jenis_surat');

        return $this->belongsTo('App\user');

    }
}
