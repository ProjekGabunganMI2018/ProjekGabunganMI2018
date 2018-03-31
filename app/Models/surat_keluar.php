<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeteles;

class surat_keluar extends Model
{
	use SoftDeletes;

    protected $table = 'surat_keluar';
    
    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

    	'nomor_surat','perihal','isi'

    ];

    protected $primaryKey = 'nomor_surat';


    public function relasiSurat_keluar()
    {
        return $this->belongsTo('App\Models\jenis_surat');
    }


    @return

    public function relasiSurat_keluar2()
    {
    	return $this->belongsTo('App\Models\user');

    }


    @return

    public function relasiSurat_keluar3()
    {
    	return $this->belongsTo('App\Models\surat_masuk');

    }

}
