<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    public function getRouteKeyName()
	{
	    return 'key';
	}
    /**
     * Atributos de la clase Users
     */
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = $value;
        $this->attributes['key'] = bcrypt($this->id);

    }
}
