<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcarTurnoController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SegurosController;
use App\Http\Controllers\CoberturaController;
use App\Http\Controllers\BeneficiosController;
use App\Http\Controllers\AsistenciasController;
use App\Http\Controllers\PagosController;

use App\Http\Controllers\TurnoController;

Route::get('',[HomeController::class,'index']);

Route::resource('ambiente', AmbienteController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('marcar', MarcarTurnoController::class);
Route::resource('planes', PlaneController::class);
Route::resource('rol', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('servicio', ServicioController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('seguros', SegurosController::class);
Route::resource('coberturas', CoberturaController::class);
Route::resource('beneficios', BeneficiosController::class);
Route::resource('asistencias', AsistenciasController::class);
Route::resource('pagos', PagosController::class);


Route::get('/home', [App\Http\Controllers\Api\NotificationsController::class, 'index'])->name('home');
Route::post('/save-token', [App\Http\Controllers\Api\NotificationsController::class, 'saveToken'])->name('save-token');
Route::post('/send-notification', [App\Http\Controllers\Api\NotificationsController::class, 'sendNotification'])->name('send.notification');



