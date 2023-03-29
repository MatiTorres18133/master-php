<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
        ->orderBy('id','desc')
        ->get();

        return view('fruta.index', [
            'frutas'=>$frutas
        ]);
    }


    public function create(){
        return view('fruta.create');
        
    }
//=======================GUARDAR ========================

    public function save(Request $request){
        //guardar el registro

        $fruta = DB::table('frutas')->insert(array(
            'nombre'=> $request->input('name'),
            'descripcion'=> $request->input('desc'),
            'precio'=> $request->input('precio'),
            'fecha'=> date('Y-m-d')
        ));

        return redirect()->action('App\Http\Controllers\FrutaController@index');
            
         
    }



//=======================BORRAR ========================
    public function delete($id){
        
        $fruta = DB::table('frutas')->where('id', $id)->delete();       
      
        
        return redirect()->action('App\Http\Controllers\FrutaController@index');
            
    }




//=======================EDITAR ========================

    public function edit($id){
        $fruta = DB::table('frutas')->where('id', $id)->first();
      
        return view('fruta.create',[
            'fruta'=>$fruta,
        ]);

    }

//=======================DETALLES ========================

    public function detail($id){
        $fruta = DB::table('frutas')->where('id', '=',  $id )->first();

        return view('fruta.detalle',[
            'fruta'=>$fruta,
        ]);
    }

    public function update(Request $request){
        $id= $request->input('id');
        $fruta = DB::table('frutas')->where('id', $id)->update(array(
            'nombre'=>$request->input('name'),
            'descripcion'=>$request->input('desc'),
            'precio'=>$request->input('precio')
        ));

        return redirect()->action('App\Http\Controllers\FrutaController@index');
    }
}
