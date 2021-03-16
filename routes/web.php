<?php


use App\Models\Notas;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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

Route::get('/', 'App\Http\Controllers\NotasController@welcome');

Route ::get('notas', 'App\Http\Controllers\NotasController@index')->name('notas.index');


Route:: get('agregar', 'App\Http\Controllers\NotasController@agregar');

Route::post('crear', 'App\Http\Controllers\NotasController@crear' )->name('notas.store');

Route:: get('notas/{id}/ediar', 'App\Http\Controllers\NotasController@editar' ) -> name('notas.edit');

Route:: put('notas/{notas}/ediar', 'App\Http\Controllers\NotasController@update' ) -> name('notas.update');

