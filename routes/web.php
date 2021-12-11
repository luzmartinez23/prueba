<?php

use App\Http\Controllers\ActividadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TemaController;

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

Route::get('/', HomeController::class);
  
Route::resource('cursos', CursoController::class);
Route::resource('materias', MateriaController::class);
Route::put('materias/{id}', 'MateriaController@update');
Route::resource('actividades', ActividadController::class);
Route::put('actividades/{id}', 'ActividadController@update');
Route::resource('temas', TemaController::class);
Route::put('temas/{id}', 'TemaController@update');
Route::resource('roles', RolController::class);
Route::put('roles/{id}', 'RolControllerr@update');

   /* 
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria=null) {
    if($categoria){
    return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso:$curso";
    }
});  */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
