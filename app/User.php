<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','idrole','foto','activo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Atributo password
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    /**
    * Atributos Mostrar Foto
    */
    public function getMostrarFotoAttribute()
    {
        return asset($this->foto);
    }
    /**
    * Atributos Codigo Rol
    */
    public function getCodigoRolAttribute()
    {
        $rol = Catalogo::find($this->idrole);
        return $rol->codigo;
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function role()
    {
        return $this->hasOne('\App\Models\Catalogo','id','idrole');
    }



}
