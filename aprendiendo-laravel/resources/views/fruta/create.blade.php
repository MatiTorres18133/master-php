
@if(isset($fruta) && is_object($fruta))
<h1>Editar fruta</h1>

@else

<h1>Crear una fruta</h1>
@endif


<form action="{{ isset($fruta)? action('App\Http\Controllers\FrutaController@update'):action('App\Http\Controllers\FrutaController@save')}}" method="post">
    {{csrf_field()}}



    
@if(isset($fruta) && is_object($fruta))
<input type="hidden" name="id"  value='{{$fruta->id}}'/>
@endif

    <label for="name">Nombre:</label>
    <br>

    <input type="text" name="name"  value='{{isset($fruta->nombre)? $fruta->nombre: " "}}'/>

    <br>

    <label for="desc">Descripcion:</label>
    <br>
    
    <input type="text" name="desc" value='{{isset($fruta->descripcion)? $fruta->descripcion: " "}}' />
    <br>


    <label for="precio">Precio:</label>
    <br>
    
    <input type="textarea" name="precio" value='{{isset($fruta->precio)? $fruta->precio: " "}}' />
    <br>
    
    

 
    <input type="submit" value="Enviar">

</form>