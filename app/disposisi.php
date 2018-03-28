<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    protected $table = 'disposisi';

    protected $fillable = [

    	'keterangan'

    ];

    protected $primaryKey = 'kodeBranch';

    public function relasiDisposisi()
    {
    	return $this->hasMany('App\user');

    	return $this->hasMany('App\surat_masuk');

        return $this->hasMany('App\disposisi');

        return $this->belongsTo('App\disposisi');

    }
}
