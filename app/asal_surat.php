<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class asal_surat extends Model
{
	use SoftDeletes;

    protected $table = 'asal_surat';

    const CREATED_AT = 'created_at';

    const UPDATE_AT = 'update_at';

    protected $fillable = [

    	'nama','instansi','kontak','alamat','keterangan'
    ];


    public function relasiAsal_surat()
    {
        return $this->hasMany('App\jenis_surat');

    }
}