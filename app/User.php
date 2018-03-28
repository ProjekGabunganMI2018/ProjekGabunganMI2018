<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     * @var array
     */
    protected $fillable = [

        'name', 'email','kontak','alamat','foto'
    ];


     * @var array
     */
    protected $hidden = [

        'password', 'remember_token',
    ];
    public function queryUser(){
        
        return $this->hasMany(App\surat_keluar);
    }
}
