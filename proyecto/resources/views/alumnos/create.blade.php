@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div class="alert alert-primary" role="alert">
    <ul>
        @foreach($errors->all() as $error)

        <li> {{ $error}} </li>
        
        @endforeach
    </ul>

</div> 
@endif 
                    <h3>Ingreso de Alumno</h3>
                
                
                
                <form action="{{ url('/alumnos')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}

                 @include('alumnos.form',['Modo'=>'crear'])

                
                
                </form>
                
                
                
                </div>





@endsection