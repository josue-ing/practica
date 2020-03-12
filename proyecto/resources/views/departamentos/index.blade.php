@extends('layouts.app')

@section('content')

<div class="container">
    

@if(Session::has('Mensaje'))
    
    <div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje')}}
    </div>
   

@endif

<a href="{{ url('departamentos/create ') }}" class="btn btn-success" >Agregar Departamento</a>
<br/>
<br/>



<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de Departamento</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($departamentos as $departamento)
  <tr>
           <td>{{$loop->iteration}}</td>

            <td>{{$departamento->nombre}}</td>
            <td>{{$departamento->telefono}}</td>
            <td>{{$departamento->direccion}}</td>
            
            <td>

                <a class="btn btn-warning" href="{{ url('/departamentos/'.$departamento->id.'/edit') }}">Editar 
                </a>



                <form method="post" action="{{ url('/departamentos/'.$departamento->id) }}" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?');">Borrar</button>
                </td>
        </tr>  
</form> 
        @endforeach
    </tbody>
</table>
{{ $departamentos->links() }}
</div>
@endsection