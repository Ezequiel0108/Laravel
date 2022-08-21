Formulario de creación de empleado
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
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
        <a href="{{url('/metodosEmpleado')}}">cancelar</a>

       

    </div>  
    <div class="col s3">
            
    </div>

</div>

</body>
</html>