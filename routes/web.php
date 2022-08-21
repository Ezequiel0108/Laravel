<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

//Aquí accedo mediante el namespace le indico que Empleadocontroller es una clase y que acceda al metodo create
//El cual create guarda la vista 
Route::get('create',[App\Http\Controllers\EmpleadoController::class,'create']);
//Aqui como estoy trayendo el "use" no ocupo darle la direccion del namespace está sería la otra forma
//Route::get('create',[EmpleadoController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/empleado', function () {
    return view('empleado.index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

//Aquí traigo a todos los metodos del controlador "EmpleadoController"
// por lo que ya puedo acceder a sus vistas y lo que yo le ponga
Route::resource('metodosEmpleado', App\Http\Controllers\EmpleadoController::class);
Auth::routes();



