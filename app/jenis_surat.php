<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_surat extends Model
{
    protected $table = 'jenis_surat';
    protected $fillable = [

    	'nama','format_surat','keterangan'

    ];
   

    public function relasiJenis_surat()
    {
        return $this->hasMany('App\surat_keluar');
    }

        @return

    
    public function relasiJenis_surat2()
    {
        return $this->belongsTo('App\surat_masuk');
    }
}
