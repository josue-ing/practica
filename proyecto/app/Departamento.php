<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $fillable=[

        'nombre',
        'telefono',
        'direccion'
    
          ];
          public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
}
