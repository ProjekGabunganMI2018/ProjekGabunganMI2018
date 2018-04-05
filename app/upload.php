<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table = 'upload';
    protected $primaryKey='id_upload';

    protected $guarded =
        [
        'created_at','updated_at'
        ];
}
