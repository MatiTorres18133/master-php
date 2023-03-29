<h1>Formulario en laravel</h1>


<form action="{{action('App\Http\Controllers\PeliculaController@recibir')}}" method="post">
    {{csrf_field()}}

    <label for="name">Nombre:</label>
    <br>

    <input type="text" name="name">

    <br>

    <label for="mail">Correo electrónico:</label>
    <br>
    
    <input type="email" name="mail">
    <br>
    

 
    <input type="submit" value="Enviar">

</form>