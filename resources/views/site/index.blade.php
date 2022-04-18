@extends('site.layouts.app')
@section('content')

<!--End of banner code -->

<!-- Card Container -->
  <div class="container">
  <div>
	<img src="{{url('/images/banner.png')}}" border="0" height="100%" class="responsive-img">
</div>
    
    
   <div class="carousel">
    <a class="carousel-item" href="https://terapeutadosonodosbebes.com.br/pag_ins_enc_terapeuta_org_redir?utm_medium=org&utm_source=org-redir&utm_content=leads&utm_campaign=SFTB4"><img src="{{url('/images/1.png')}}" width="600"></a>
    <a class="carousel-item" href="https://terapeutadosonodosbebes.com.br/pag_ins_enc_terapeuta_org_redir?utm_medium=org&utm_source=org-redir&utm_content=leads&utm_campaign=SFTB4"><img src="{{url('/images/2.png')}}"></a>
    <a class="carousel-item" href="https://terapeutadosonodosbebes.com.br/pag_ins_enc_terapeuta_org_redir?utm_medium=org&utm_source=org-redir&utm_content=leads&utm_campaign=SFTB4"><img src="{{url('/images/3.png')}}"></a>
    <a class="carousel-item" href="https://terapeutadosonodosbebes.com.br/pag_ins_enc_terapeuta_org_redir?utm_medium=org&utm_source=org-redir&utm_content=leads&utm_campaign=SFTB4"><img src="{{url('/images/4.png')}}"></a>
  </div>
 
  
    <div class="section">

      <!--   Card elements  -->
      <div class="row">
          @foreach ($posts as $key => $post)
        
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{url('/images/'.$post->photo)}}">
            </div>
            <div class="card-content" style="max-height: 350px;    min-height: 350px;">
              <span class="card-title"> {{$post->title}}</span>
              {!! substr ($post->description, 0, 200) !!}...

            </div>
            <div class="card-action">
              <a href="{{route('post.site.show', $post->slug)}}" target="__blank">Leia Mais</a>
            </div>

            <div class="card-action">
              <span class="activator grey-text text-darken-4" href="#">Autor: {{$post->author->name}} <i class="material-icons right">message</i></span>
            </div>
            <div class="card-reveal center">
              <span class="card-title grey-text text-darken-4">{{$post->author->name}}<i class="material-icons right">close</i></span>
              <img class="responsive-img circle z-depth-4" width="100" src="{{url('/images/'.$post->author->photo)}}" alt="">
              <p class="mt-8">
              {!!$post->author->description !!}
              </p>
              
              <a class="animate__swing waves-effect waves-light btn " href="{{$post->author->site}}" target="__blank">Contato</a>            </div>
        </div>
        </div>
          

            @endforeach
	          
        </div>
        
            
	          
        
      

    </div>
   
<!-- end of card section-->

<!-- App landing section-->
  </div>
  
<!-- Different layout for mobile -->

@endsection

@section('js')
<script>
   $(document).ready(function(){
      $('.carousel').carousel();
    });

  </script>
@endsection