Mostrar la lista de empleados

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
  </head>
  <body>
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


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>

