<form action="{{url('/metodosEmpleado/'.$empleado->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
@include('empleado.form')
<img src="{{asset('storage'.'/'.$empleado->Foto)}}" width="100" height="100" alt="">

</form>
<a href="{{url('/metodosEmpleado')}}">Cancelar</a>



