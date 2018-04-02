<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Disposisi extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'disposisi';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'keterangan'

    ];

    protected $primaryKey = 'id';

    public function RelasiDisposisi()
    {
        return $this->belongsTo('App\Models\user');

    }

@return

    public function RelasiDisposisi2()
    {
        return $this->belongsTo('App\Models\surat_masuk');
    }


@return

    public function RelasiDisposisi3()
    {
        return $this->hasMany('App\Models\disposisi');
    }


@return

    public function RelasiDisposisi4()
    {
        return $this->belongsTo('App\Models\disposisi');
    }
}
