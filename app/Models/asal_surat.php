<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class asal_surat extends Model
{
	use SoftDeletes;

    protected $table = 'asal_surat';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

    	'nama','instansi','kontak','alamat','keterangan'
    ];


    public function relasiAsal_surat()
    {
        return $this->hasMany('App\Models\jenis_surat');

    }
}