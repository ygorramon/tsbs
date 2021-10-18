@extends('site.layouts.app')
@section('content')
<div class="container">
<div class="section">



<!-- Row begins -->
  <div class="row">
      @foreach ($posts as $post)
      <div class="col s12 m10">
            <div class="card hoverable">

            <div class="card-image">
               <img src="{{url('/images/'.$post->photo)}}" >
                <a href="{{route('post.site.show', $post->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">chevron_right</i></a>
            </div>

            <div class="card-content">

              <h5 style="font-weight: bold;">{{$post->title}}</h5>
              <p class=" grey-text text-darken-2">{!! substr ($post->description, 0,305) !!}...</p>

          </div>

           <div class="card-action">
              <a href="{{route('post.site.show', $post->slug)}}" class="deep-orange-text">Leia Mais</a>
            </div>

        </div> <!-- Card div ends -->
        </div>
  
@endforeach
  </div>
</div>
{{ $posts->links('site.includes.pagination') }}

</div>

@endsection