<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class AsalSurat extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'asal_surat';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'nama','instansi','kontak','alamat','keterangan'
    ];


    public function RelasiAsalSurat()
    {
        return $this->hasMany('App\Models\JenisSurat');

    }
}