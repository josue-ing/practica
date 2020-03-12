
          


<div class="form-group">

<label for="nombre" class="control-label">{{'nombre'}}</label>
        <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" 
                name="nombre" id="nombre" 
                value="{{isset($alumno->nombre)?$alumno->nombre:old('nombre') }}">
                        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
               
        <div class="form-group">
                <label for="apellido" class="control-label">{{'apellido'}}</label>
                        <input type="text" class="form-control {{$errors->has('apellido')?'is-invalid':''}}"
                         name="apellido" id="apellido" 
                                 value="{{isset($alumno->apellido)?$alumno->apellido:old('apellido') }}">
                                        {!! $errors->first('apellido','<div class="invalid-feedback">:message</div>') !!}
        </div>
</br>
                        
        <div class="form-group">
                <label for="direccion" class="control-label">{{'direccion'}}</label>
                        <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':''}}"
                         name="direccion" id="direccion" 
                                value="{{isset($alumno->direccion)?$alumno->direccion:old('direccion') }}">
                                         {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
        </div>      
               
       <div class="form-group">
                <label for="telefono" class="control-label">{{'telefono'}}</label>
                        <input type="text" class="form-control {{$errors->has('telefono')?'is-invalid':''}}"
                        name="telefono" id="telefono" 
                                value="{{isset($alumno->telefono)?$alumno->telefono:old('telefono') }}">
                                {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}

                        </div> 
                        </br> 
                  
                        
    
       <div class="form-group">
                <label for="">Empresa</label>
                         <select name="empresa_id" id="inputempresa_id" class="form-control {{$errors->has('empresa_id')?'is-invalid':''}}">
                                <option value="{{isset($alumno->empresa_id)?$alumno->empresa_id:old('empresa_id') }}"
                                >-- Escoja una Empresa --</option>      
                                @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento['id']}}"> {{$departamento ['nombre']}}</option>
                                @endforeach
                        </select> 

        </div>
        
        </br>
        
       <div class="form-group">
                <label for="edad" class="control-label">{{'edad'}}</label>
                        <input type="text" class="form-control {{$errors->has('edad')?'is-invalid':''}}"
                        name="edad" id="edad" 
                                value="{{isset($alumno->edad)?$alumno->edad:old('edad') }}">
                                {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
        </div>           
</br>
                                        <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

                                        <a class="btn btn-primary" href="{{ url('alumnos') }}"> Regresar</a>
        </div>       
            