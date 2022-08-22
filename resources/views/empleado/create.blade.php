Formulario de creación de empleado
@extends('layouts.app')

@section('content')
   
<div class="container">
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    

   
</head>
<body>
 
    

<div class="row">
    <div class="col s3">
            
    </div>
    <div class="col s6">
       
 <!--El action los datos los recibe el metodo store y prepara los datos por lo que lo mandaremos ahí
el csrf es una llave de seguridad que laravel te pide para indicar que ese forem viene 
del mismo sistema
-->
        <form action="{{url('/metodosEmpleado')}}" method="post" enctype="multipart/form-data">
            @csrf
        @include('empleado.form')
        </form>
        <a href="{{url('/home')}}">cancelar</a>

       

    </div>  
    <div class="col s3">
            
    </div>

</div>

</div>
@endsection

</body>
</html>