<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CorreosController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TiController;
use App\Http\Controllers\ResetPassController;
use App\Mail\CorreosMasivosMailable;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');


////////////////////////////////////////////       SESIÓN  ///////////////////////////////////////////////////////////////////
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout.destroy');

/////////////////////////////////////////       TI                 ////////////////////////////////////////////////////////////

Route::get('ti/usuarios',[TiController::class, 'usuarios'])->middleware('auth.Ti')->name('ti.usuarios');
Route::get('ti/prestamos',[TiController::class, 'prestamos'])->middleware('auth.Ti')->name('ti.prestamos');

/////////////////////////////////////////       EMPLEADO                 //////////////////////////////////////////////////////

Route::get('/empleado',[EmpleadoController::class, 'index'])->middleware('auth.Empleado')->name('empleado.index');
Route::get('empleado/equipos_asignados',[EmpleadoController::class, 'equipos_asignados'])->middleware('auth.Empleado')->name('empleado.equipos_asignados');
Route::get('empleado/solicitar_equipo',[EmpleadoController::class, 'solicitar_equipo'])->middleware('auth.Empleado')->name('empleado.solicitar_equipo');

/////////////////////////////////////////       ADMIN                 /////////////////////////////////////////////////////////

Route::get('admin/inventario',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
Route::get('admin/agregar',[AdminController::class, 'create'])->middleware('auth.admin')->name('admin.create');
Route::get('admin/actualizar',[AdminController::class, 'update'])->middleware('auth.admin')->name('admin.update');

/////////////////////////////////////////       Super admin                 ///////////////////////////////////////////////////

Route::get('/SuperAdmin',[SuperAdminController::class, 'index'])->middleware('auth.SuperAdmin')->name('super_administrador.index');



Route::get('/correo',[CorreosController::class, 'store'])->name('correo.index');

///////////////////////////////////////     /Reset password        //////////////////////////////////////////////////////////////
Route::get('/reset', [ResetPassController::class, 'index'])->name('reset.pass');
Route::post('/send', [ResetPassController::class, 'send'])->name('send.email');
Route::get('/new/password/{user}', [ResetPassController::class, 'show'])->name('new.password');
Route::post('/update/password', [ResetPassController::class, 'update'])->name('update.password');



