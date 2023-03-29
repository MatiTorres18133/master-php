<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index', [
            'titulo'=>$titulo,
            'pagina'=>$pagina
            ]
        );
    }


    public function detalle($year=null){

       return view('pelicula.detalle');
    }


    public function redirigir(){
        return redirect()->action('App\Http\Controllers\PeliculaController@detalle');
    }


    public function formulario(){
        return view('pelicula.formulario');
    }

    public function recibir(Request $request){
        $name = $request->input('name');
        $correo = $request->input('mail');
        
        return "El nombre es: $name y el email es $correo";
    }
}
?>