<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //""empleados es la variable que vamos a consultar atravez del index
       $datos['empleados']=Empleado::paginate(5);
        return view('empleado.index',$datos);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//recibe los datos mandados desde el form
        //
        //request guarda la info asi que le decimos que traiga todo excepto el token que es de la llave
        //o más bien como que guarda todos los datos de la tabla
        $datosform= $request->except('_token');
       
        if($request->hasFile('Foto')){
            $datosform['Foto']=$request->file('Foto')->store('Archivos','public');
        }
       
      
        
        //le mandamos los datos al modelo y se los insertamos
        Empleado::insert($datosform);
      return redirect('metodosEmpleado');
        // return response()->json($datosform);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
        $datos['empleados']=Empleado::paginate(5);
        return view('empleado.showdatos',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        //
        $empleado=Empleado::findOrFail($ID);

        return view('empleado.edit',compact('empleado'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosempleado= $request->except('_token','_method');
        //verifico si me estan enviando una foto
        if($request->hasFile('Foto')){
            //recupero los campos
            $empleado=Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);
            $datosempleado['Foto']=$request->file('Foto')->store('Archivos','public');
           
        }

        Empleado::where('id','=', $id)->update($datosempleado);


        $empleado=Empleado::findOrFail($id);

        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        //buscamos los datos que tiene atravez de su id
        $empleado=Empleado::findOrFail($ID);
       
       if( Storage::delete('public/'.$empleado->Foto)){
        Empleado::destroy($ID);}
        return redirect('metodosEmpleado');
    }
}
