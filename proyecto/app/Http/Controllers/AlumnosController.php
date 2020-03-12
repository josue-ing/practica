<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //
        $departamentos =Departamento::all();


        

           
        $datos['alumnos']=Alumno::paginate(5);
        return view('alumnos.index',compact('departamentos'), $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //
        $departamentos = Departamento::all();
       
        return view('alumnos.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $campos=[
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
            'telefono' => 'required|integer',
            'edad' => 'required|integer',
            'empresa_id' => 'required',
            
        ]; 

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 


        
        //$datosEmpleados=request()->all();


        $datosEmpleados=request()->except('_token');

        

        Alumno::insert($datosEmpleados);

        //return response()->json($datosEmpleados);
        
        return redirect('alumnos')->with('Mensaje','Alumno agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $departamentos=Departamento::all();
        $alumno= Alumno::findOrFail($id);

        return view('alumnos.edit', compact('alumno'), compact('departamentos')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        //validacion
        $campos=[
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
            'telefono' => 'required|string|max:100',
            'edad' => 'required|integer',
            
            
           
        ]; 
        

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        

        $datosEmpleados=request()->except(['_token','_method']);
          
        


        Alumno::where('id','=',$id)->update($datosEmpleados);

        //$empleado= Empleados::findOrFail($id);
        //return view('empleados.edit', compact('empleado')); 
        return redirect('alumnos')->with('Mensaje','Alumno modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        Alumno::destroy($id);

       
        return redirect('alumnos')->with('Mensaje','Alumno eliminado');
    }
}
