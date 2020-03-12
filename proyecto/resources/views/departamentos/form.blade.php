
<div class="form-group">

        <label for="nombre" class="control-label">{{'nombre'}}</label>
        <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" 
                name="nombre" id="nombre" 
                value="{{isset($departamento->nombre)?$departamento->nombre:old('nombre') }}">
                        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
           <br>     
<div class="form-group">
                <label for="telefono" class="control-label">{{'telefono'}}</label>
                        <input type="text" class="form-control {{$errors->has('telefono')?'is-invalid':''}}"
                        name="telefono" id="telefono" 
                                value="{{isset($departamento->telefono)?$departamento->telefono:old('telefono') }}">
                                {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}
        </div> 
                        <br>
        <div class="form-group">
                <label for="direccion" class="control-label">{{'direccion'}}</label>
                        <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':''}}"
                         name="direccion" id="direccion" 
                                value="{{isset($departamento->direccion)?$departamento->direccion:old('direccion') }}">
                                         {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
                                         </br>
                                        </div>      
                    
               
               
          
                                        
                
                      <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

                        <a class="btn btn-primary" href="{{ url('departamentos') }}"> Regresar</a>
                
            