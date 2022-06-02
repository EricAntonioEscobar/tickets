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

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout.destroy');

Route::get('/ti',[TiController::class, 'index'])->middleware('auth.Ti')->name('ti.index');

Route::get('/empleado',[EmpleadoController::class, 'index'])->middleware('auth.Empleado')->name('empleado.index');

Route::get('/admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

Route::get('/SuperAdmin',[SuperAdminController::class, 'index'])->middleware('auth.SuperAdmin')->name('super_administrador.index');

Route::get('/correo',[CorreosController::class, 'store'])->name('correo.index');


//Reset password
Route::get('/reset', [ResetPassController::class, 'index'])->name('reset.pass');
Route::post('/send', [ResetPassController::class, 'send'])->name('send.email');
Route::post('/new/password/', [ResetPassController::class, 'show'])->name('new.password');
Route::post('/update/password', [ResetPassController::class, 'update'])->name('update.password');



