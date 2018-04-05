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
        'asal_disposisi_id','keterangan'

    ];

    protected $primaryKey = 'id';

    public function pembuat_disposisi()
    {
        return $this->belongsTo('App\User','pembuat_disposisi_id');
    }

    public function penerima_disposisi()
    {
        return $this->belongsTo('App\User','penerima_disposisi_id');
    }

    public function asal_disposisi()
    {
        return $this->hasMany('App\Models\Disposisi','asal_disposisi_id');
    }

    public function suratmasuk()
    {
        return $this->belongsTo('App\Models\SuratMasuk','surat_masuk_id');
    }

}
