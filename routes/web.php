<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\IndexController;
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




Route::get('/area/lista',[AreaController::class, 'lista']);
Route::get('/area/novo', [AreaController::class, 'novo']);
Route::post('/area/salvar', [AreaController::class, 'salvar']);
Route::get('/area/editar/{id}',[AreaController::class, 'editar']);
Route::get('/area/excluir/{id}',[AreaController::class, 'excluir']);

Route::get('/area/url', [AreaController::class, 'url']);


Route::get('/empresa/lista',[EmpresaController::class, 'lista']);
Route::get('/empresa/novo', [EmpresaController::class, 'novo']);
Route::post('/empresa/salvar', [EmpresaController::class, 'salvar']);
Route::get('/empresa/editar/{id}',[EmpresaController::class, 'editar']);
Route::get('/empresa/excluir/{id}',[EmpresaController::class, 'excluir']);

Route::get('/', [IndexController::class, 'index']);



