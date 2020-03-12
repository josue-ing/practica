@extends('layouts.app')

@section('content')

<div class="container">
    

@if(Session::has('Mensaje'))
    
    <div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje')}}
    </div>
   

@endif

<a href="{{ url('alumnos/create') }}" class="btn btn-success" style="display:inline" >Agregar Alumno</a>
<br/>
<br/>



<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            
            <th>Nombre Completo</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Empresa</th>

            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{{$loop->iteration}}</td>
           
            
            <td>{{$alumno->nombre}} {{$alumno->apellido}} </td>
             
            <td>{{$alumno->direccion}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>{{$alumno->edad}}</td>

            <td>{{$alumno->departamento->nombre}}
                
            </td>
            
            <td>


            <a class="btn btn-warning" href="{{ url('/alumnos/'.$alumno->id.'/edit') }}">Editar 
            </a>

            

            <form method="post" action="{{ url('/alumnos/'.$alumno->id) }}" style="display:inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?');">Borrar</button>
            </td>
        </tr>
</form>
    @endforeach
    </tbody>
</table>
{{ $alumnos->links() }}
</div>
@endsection