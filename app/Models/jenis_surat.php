<?php

namespace App\Models;

use Eloquent as model;
use Illuminate\Database\Eloquent\SoftDeletes;


class jenis_surat extends Model
{
    use SoftDeletes;

    protected $table = 'jenis_surat';

    const CREATED_AT = 'created_at';
    
    const UPDATED_AT = 'updated_at';
    
    protected $fillable = [

    	'nama','format_surat','keterangan'

    ];
   

    public function relasiJenis_surat()
    {
        return $this->hasMany('App\Models\surat_keluar');
    }

        @return

    
    public function relasiJenis_surat2()
    {
        return $this->hasMany('App\Models\surat_masuk');
    }
}