<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     /* @var array
     */
    protected $fillable = [

        'name', 'email','kontak','alamat','foto','password'
    ];

    protected $hidden = [

        'password', 'remember_token',
    ];

    public function pembuat_surat(){
        
        return $this->hasMany('App\Models\SuratKeluar','pembuat_surat_id');
    }

    public function  peminta_surat(){
        return $this->hasMany('App\Models\SuratKeluar','peminta_surat_id');
    }

    public function  surat_masuk(){
        return $this->hasMany('App\Models\SuratMasuk','tujuan_user_id');
    }

    public function penyimpan_surat(){
        return $this->hasMany('App\Models\SuratMasuk','penyimpan_surat_id');
    }

    public function penerima_disposisi(){
        return $this->hasMany('App\Models\Disposisi','penerima_disposisi_id');
    }

    public function pembuat_disposisi(){
        return $this->hasMany('App\Models\Disposisi','pembuat_disposisi_id');
    }
    
}
