<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable=[
        'empresa_id',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'edad'
        
    
          ];

          public function departamento()
    {
        return $this->belongsTo('App\Departamento','empresa_id');
    }
}
