<h1>Mis frutas</h1>


<h3><a href="{{action('App\Http\Controllers\FrutaController@create')}}">Crear una fruta </a></h3>

<ul>
@foreach($frutas as $fruta)

    <li>
       <a href="{{action('App\Http\Controllers\FrutaController@detail' ,  ['id'=>$fruta->id])}}">
         {{$fruta->nombre}}
        </a>
</li>
        

@endforeach

</ul>
