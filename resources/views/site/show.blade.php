@extends('site.layouts.app')
@section('content')
<div class="container">

  <!-- Start of rows div -->
    <div class="row">

      <div class="col s12 m9 l10" style="padding-right: 20px;">
       <div class="card z-depth-0" style="margin-top: 80px;">
       <h3 class="center-align">{{$post->title}}      </h3>
         <div>
         
        <div class="card-content" style="font-size: 18px; color: #212121;">
        <div class="sharethis-inline-share-buttons"></div>
        
        <img src="{{url('/images/'.$post->photo)}}" class="responsive-img">
       
        <p>{!! $post->description !!}</p>
                <!-- pre code display content as it is if you tab this code below spaces will apear in webpage-->

      <!-- End of pre and code tag-->
        </div>  
       </div>
      </div>

      
      
      <div class="col s12 ">
        <h2 class="header"></h2>
        <div class="card horizontal">
          <div class="card-image">
            <img src="{{url('/images/'.$post->author->photo)}}">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>{!! $post->author->description !!}</p>
            </div>
            <div class="card-action">
            <a class="waves-effect waves-light btn gradient-45deg-deep-orange-orange border-round mt-7 z-depth-4" href="{{$post->author->site}}" target="__blank">Contato</a>
            </div>
          </div>
        </div>
      </div>
      </div>

      
    </div>
  </div>
@endsection