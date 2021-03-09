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

Route::get('/', function () {
    return view('welcome');
});

Route ::get('notas', function(){
    $notas = Notas:: all();

    return view('notas', ['notas' =>$notas]);
});


Route:: get('agregar', function(){
    return view('agregar');
});

Route::post('crear', function(Request $request){
    Notas::create([
        'titulo' => $request -> input('title'),
        'contenido' => $request -> input ('content'),
    ]);

    return redirect('/notas');

})->name('notas.store');

Route:: get('notas/{id}/ediar', function($id) {
    $notas = Notas:: find($id);
    

    return view('editar', ['notas' => $notas]);
}) -> name('notas.edit');


