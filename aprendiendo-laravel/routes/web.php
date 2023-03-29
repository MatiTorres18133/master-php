<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/listado-peliculas', function(){
    $titulo= 'Listado de peliculas';
    return view('peliculas.listado')
        ->with('titulo', $titulo);
});

Route::get('/pelicula/{pagina?}', [
    'uses'=>'App\Http\Controllers\PeliculaController@index',
    'as'=>'index.pelicula'
]);
Route::get('/detalle/{year?}', 
[
    'middleware'=>'testyear',
    'uses'=>'App\Http\Controllers\PeliculaController@detalle',
    'as'=>'detalle.pelicula'
]
);


Route::get('/redirigir', [
    'uses'=>'App\Http\Controllers\PeliculaController@redirigir',
    'as'=>'redirigir.pelicula'
]);

Route::get('/formulario', [
    'uses'=>'App\Http\Controllers\PeliculaController@formulario',
    'as'=>'formulario.pelicula'
]);

Route::post('/recibir', [
    'uses'=>'App\Http\Controllers\PeliculaController@recibir',
    'as'=>'recibir.pelicula'
]);

Route::resource('usuario', 'App\Http\Controllers\UsuarioController');

//RUTAS DE FRUTA
Route::group(['prefix'=>"frutas"],function(){
    Route::get('index','App\Http\Controllers\FrutaController@index');
    Route::get('detail/{id}','App\Http\Controllers\FrutaController@detail');
    Route::get('crear','App\Http\Controllers\FrutaController@create');
    Route::post('save','App\Http\Controllers\FrutaController@save');
    Route::get('delete/{id}','App\Http\Controllers\FrutaController@delete');
    Route::get('edit/{id}','App\Http\Controllers\FrutaController@edit');
    Route::post('update','App\Http\Controllers\FrutaController@update');






})


?>