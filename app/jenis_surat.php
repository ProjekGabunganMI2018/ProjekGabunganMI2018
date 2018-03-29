<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_surat extends Model
{
    protected $table = 'jenis_surat';
    public $incrementing = false;
    protected $fillable = [

    	'nama','format_surat','keterangan'

    ];
   

    public function relasiJenis_surat()
    {
        return $this->belongsTo('App\surat_keluar');
    }

        @return

    
    public function relasiJenis_surat2()
    {
        return $this->belongsTo('App\surat_masuk');
    }
}
