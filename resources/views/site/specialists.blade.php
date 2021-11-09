@extends('site.layouts.app')
@section('content')
<div class="container">
<div class="col s12 m7">
          <div class="card lighten-2">
            <div class="card-image">
              <img src="{{url('/images/banner1.png')}}">
              <span class="card-title" style="color:darkorchid">{{$category->name}}</span>
            </div>
            
          </div>
        </div>

  <!-- Start of rows div -->
    <div class="row">

      <div class="col s12 " style="padding-right: 20px;">
       <div class="card z-depth-0" style="margin-top: 80px;">
       <h3 class="center-align">{{$category->name}}      </h3>
        
      </div>
      <div class="row">
          @foreach ($category->specialists as $specialist)
        
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{url('/images/'.$specialist->photo)}}">
            </div>
            <div class="card-content" style="max-height: 350px;    min-height: 350px;">
              <span class="card-title"> {{$specialist->name}}</span>
              {!! $specialist->description !!}

            </div>
            <div class="card-action">
            <a class="animate__swing waves-effect waves-light btn " href="{{$specialist->site}}" target="__blank">Contato</a>     
            </div>

           
            
        </div>
        </div>
          

            @endforeach
	          
        </div>
      
      
      

      
    </div>

    </div>
</div>
        @endsection