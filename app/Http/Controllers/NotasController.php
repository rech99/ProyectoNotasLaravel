<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index(){
        $notas = Notas:: all();
    
        return view('notas', ['notas' =>$notas]);
    }

    public function crear (Request $request){
        Notas::create([
            'titulo' => $request -> input('title'),
            'contenido' => $request -> input ('content'),
        ]);
    
        return redirect('/notas');
    
    }

    public function editar ($id) {
        $notas = Notas:: find($id);
        
    
        return view('editar', ['notas' => $notas]);
    }


    public function agregar (){
        return view('agregar');
    }

    public function welcome () {
        return view('welcome');
    }

    public function update (Notas $notas, Request $request) {

        $notas-> update([
            'titulo'=> $request -> input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/notas');
    }
}
