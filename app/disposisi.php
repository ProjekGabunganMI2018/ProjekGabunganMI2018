<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    protected $table = 'disposisi';

    protected $fillable = [

    	'keterangan'

    ];

    protected $primaryKey = '';

    public function relasiDisposisi()
    {
    	return $this->belongsTo('App\user');

    }

    @return

    public function relasiDisposisi2()
    {
        return $this->belongsTo('App\surat_masuk');
    }


    @return

    public function relasiDisposisi3()
    {
        return $this->hasMany('App\disposisi');
    }


    @return

    public function relasiDisposisi4()
    {
        return $this->belongsTo('App\disposisi');
    }
}
