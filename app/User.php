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

        'name', 'email','kontak','alamat','foto'
    ];

    protected $hidden = [

        'password', 'remember_token',
    ];

    public function RelasiUser(){
        
        return $this->hasMany('App\Models\SuratKeluar');
    }
    
}
