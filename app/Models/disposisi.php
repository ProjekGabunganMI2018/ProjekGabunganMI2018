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

        'surat_masuk_id','pembuat_disposisi_id','penerima_disposisi_id',
        'asal_disposisi','keterangan'

    ];

    protected $primaryKey = 'id';

    public function RelasiDisposisi()
    {
        return $this->belongsTo('App\Models\User');

    }

    public function RelasiDisposisi2()
    {
        return $this->belongsTo('App\Models\SuratMasuk');
    }


    public function RelasiDisposisi3()
    {
        return $this->hasMany('App\Models\Disposisi');
    }



    public function RelasiDisposisi4()
    {
        return $this->belongsTo('App\Models\Disposisi');
    }
}
