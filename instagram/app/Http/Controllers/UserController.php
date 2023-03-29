<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;



class UserController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function config(){

    return view('user.config');
  }


  public function udpate(Request $request){

    //Conseguir usuario identificado
    $user =\Auth::user();
    $id= $user->id;

    //validacion de formualario
    $validate = $this->validate($request, [
        'name' => ['required', 'string', 'max:255'],
        'surname' => ['required', 'string', 'max:255'],
        'nick' => ['required', 'string', 'max:255','unique:users,nick,'.$id],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
    ]);


    //Recoger los datos del formulario
    $name = $request->input('name');
    $surname = $request->input('surname');
    $nick = $request->input('nick');
    $email = $request->input('email');


    //Subir la imagen

    $image_path = $request->file('image_path');
    if($image_path){
        //Poner nombre unico
        $image_path_name= time().$image_path->getClientOriginalName();
        
        //Guardarla en la carpeta (storage/app/users)
        Storage::disk('users')->put($image_path_name, File::get($image_path));

        //Seteo el nombre del imagen en el objeto
        $user->image = $image_path_name;
    }
    
  



    //Asignar nuevos valores al objecto del usuario
    $user->name = $name;
    $user->surname = $surname;
    $user->nick = $nick;
    $user->email = $email;

    //Ejecutar consulta y cambios en la base de datos
    $result = $user->update();
    

    return redirect()->route('config')
                        ->with(['message'=>'Usuario actualizado correctamente']);

  }


  public function getImage($filename){

    $file= Storage::disk('users')->get($filename);

    return new Response($file,200);

  }
}
