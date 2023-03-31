@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}

                </div>

            @endif
            @foreach($images as $image)
            <div class="card pub_image">
                <div class="card-header">
                    @if($image->user->image)
                    <div class="image_path_user_avatar">
                        <img class="m-auto" src="{{ url('/user/avatar/'.$image->user->image)}}">            
                        </div>  
                        @endif 
                    <div class="username">  
                        {{ucfirst($image->user->nick)}}
                    </div>
                </div>
             


                <div class="card-body">
                    <div class="card-body_image">
                    <img class="m-auto" src="{{route('imagefile', ['filename'=>$image->image_path]) }}"/>
                    </div>

                  <div class="likes">

                  </div >


                  <div class="container description">
                
                    <span class="nickname"><a href="#">{{'@'.$image->user->nick}}</a> </span>
                  <p>{{$image->description}}</p>
                  </div >

                    
                </div>
               
            </div>
            @endforeach



        </div>
    </div>
</div>
@endsection
