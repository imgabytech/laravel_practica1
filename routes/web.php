<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SubirImagen;
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
    return view('welcome');
});

Route::get('custom-pagination', [TestController::class, 'index']);

Route::get('productos', [ProductoController::class, 'index']); 
Route::get('mostrar/{id}', [ProductoController::class, 'mostrar']); 

Route::get('crear', [ProductoController::class, 'create']);
Route::post('crear/guardar', [ProductoController::class, 'store']); 

Route::get('verEditar/{id}', [ProductoController::class, 'verEditar']); 
Route::put('actualizar/{id}', [ProductoController::class, 'update']); 

Route::delete('eliminar/{id}', [ProductoController::class, 'eliminar']); 


Route::put('salida/{id}', [ProductoController::class, 'salida']); 
Route::put('entrada/{id}', [ProductoController::class, 'entrada']); 

/*Route::put('compra/{id}', [ProductoController::class, 'compra']); */
/*Route::put('venta/{id}', [ProductoController::class, 'update']); */


Route::get('/crearImagen', [SubirImagen::class, 'createForm']);
Route::post('/image-upload', [SubirImagen::class, 'fileUpload'])->name('imageUpload');
