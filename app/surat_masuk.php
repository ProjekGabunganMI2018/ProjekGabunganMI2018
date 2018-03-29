<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_masuk extends Model
{
    protected $table = 'surat_masuk';


    protected $fillable = [

    'no_surat','tanggal','perihal','isi','keterangan','file'

    ];


    protected $primaryKey = 'no_surat';

    public function relasiSurat_masuk()
    {
        return $this->hasMany('App\surat_keluar', 'no_surat');
    }

    @return

    public function relasiSurat_masuk2()
    {
        return $this->belongsTo('App\asal_surat');
    }

    @return

    public function relasiSurat_masuk3()
    {
        return $this->belongsTo('App\jenis_surat');
    }

    @return

    public function relasiSurat_masuk4()
    {
        return $this->belongsTo('App\user');
    }

    @return

    public function relasiSurat_masuk5()
    {
        return $this->hasMany('App\disposisi');
    }
}
