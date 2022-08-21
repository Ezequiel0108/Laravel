formulario que terndrá datos en comun con create y edit

</br>Nombre:<input          type="text" value="{{(isset($empleado->Nombre)?$empleado->Nombre:"")}}" name="Nombre"></br>
</br>Apellido paterno<input type="text" value="{{(isset($empleado->ApellidoP)?$empleado->ApellidoP:"")}}" name="ApellidoP"></br>
</br>Apellido materno<input type="text" value="{{(isset($empleado->ApellidoM)?$empleado->ApellidoM:"")}}"name="ApellidoM"></br>
</br>correo <input          type="email"value="{{(isset($empleado->Correo)?$empleado->Correo:"")}}" name="Correo"></br>
</br>Foto <input type="file" value="{{(isset($empleado->Foto)?$empleado->Foto:"")}}"name="Foto" id="Foto"></br>
</br><button type="submit" class="btn btn-primary">Submit</button>

