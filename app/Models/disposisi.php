<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class disposisi extends Model
{
    use SoftDeletes;

    protected $table = 'disposisi';

    const CREATED_AT = 'created_at';
    
    const UPDATED_AT = 'updated_at';
    
    protected $fillable = [

    	'keterangan'

    ];

    protected $primaryKey = 'id';

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
