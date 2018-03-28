<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asal_surat extends Model
{
    protected $table = 'asal_surat';


    protected $fillable = [

    	'nama','instansi','kontak','alamat','keterangan'
    ];


    public function relasiAsal_surat()
    {
        return $this->hasMany('App\jenis_surat');

    }
}