<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_keluar extends Model
{
    protected $table = 'surat_keluar';
    protected $fillable = [

    	'nomor_surat','perihal','isi'

    ];

    protected $primaryKey = 'nomor_surat';


    public function relasiSurat_keluar()
    {
        return $this->hasMany('App\jenis_surat');
    }


    @return

    public function relasiSurat_keluar2()
    {
    	return $this->belongsTo('App\user');

    }


    @return

    public function relasiSurat_keluar3()
    {
    	return $this->belongsTo('App/surat_masuk');

    }

}
