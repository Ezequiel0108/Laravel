Mostrar la lista de empleados

  
@extends('layouts.app')

@section('content')
   
<div class="container">
  
  
    
    <a href="{{url('metodosEmpleado/create')}}">Agregar nuevo empleado</a>
    <div class="container-fluid">
        <div class="row">
  
                <table class="table table-responsive table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>ApellidoP</th>
                                <th>ApellidoM</th>
                                <th>Correo</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($empleados as $empleado)
                                
                            
                        
                            <tr>
                            <td>{{$empleado->id}}</td>
                            <td>{{$empleado->Nombre}}</td>
                            <td>{{$empleado->ApellidoP}}</td>
                            <td>{{$empleado->ApellidoM}}</td>
                            <td>{{$empleado->Correo}}</td>
                            <td>
                                <!-- El asset indica que accederá a la carpeta storage-->
                                <img src="{{asset('storage'.'/'.$empleado->Foto)}}" width="100" height="100" alt="">
                                </td>
                            <td>
                                <a href="{{url('/metodosEmpleado/'.$empleado->id.'/edit')}}">Editar</a>
                                
                                <form action="{{url('/metodosEmpleado/'.$empleado->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button onclick="return(confirm('¿Seguro quieres borrar?'))" type="submit">Borrar</button>
                                </form>
                            </td>
                            </tr>
                            
                            @endforeach
                    
                        </tbody>
                </table>
        </div>
    </div>
</div>
@endsection

