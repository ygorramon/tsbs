<!DOCTYPE html>
<html lang="pt-br">
<head>
 
 <!-- Meta tags-->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Central do Sono</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>

<body style="background-color:lightcyan">

<!-- Navigation bar -->
  <nav class="pink darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{route('site.index')}}" class="brand-logo">Central do Sono</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('site.index')}}">Início</a></li>
        <li><a href="{{route('site.posts')}}">Todos os Posts</a></li>
        <li><a target="__blank" href="https://terapeutadosonodosbebes.com.br/pag_cap_terapeuta?utm_medium=org&utm_source=org-mid-sites&utm_content=leads&utm_campaign=SFTB2">Seja uma Terapeuta</a></li>

      </ul>

      <ul id="nav-mobile" class="side-nav">
      <li><a href="{{route('site.index')}}">Início</a></li>
        <li><a href="{{route('site.posts')}}">Todos os Posts</a></li>
        
        <li><a target="__blank" href="https://terapeutadosonodosbebes.com.br/pag_cap_terapeuta?utm_medium=org&utm_source=org-mid-sites&utm_content=leads&utm_campaign=SFTB2">Seja uma Terapeuta</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<!-- End of Navigation -->
@yield('content')

<footer class="pink darken-4">
    <div class="container">
      <div class="row">
        <div class="col l9 s12">
        <h5 class="white-text">Odilo Queiroz Saúde</h5>
          <h6 class="white-text"> CNPJ: 33.355.338/0001-15 CEP 64048-152</h6>
          <p class="grey-text text-lighten-4">Teresina /PI  </p>
          <p class="grey-text text-lighten-4"> Odilo de Sousa Queiroz III - CRM-PI: 6122 | RQE 3504</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Mapa do Site</h5>
          <ul>
            <li><a  class="white-text" href="{{route('site.index')}}">Início</a></li>
            <li><a  class="white-text" href="{{route('site.posts')}}">Todos os Posts</a></li>
            <li><a  class="white-text" target="__blank" href="https://terapeutadosonodosbebes.com.br/pag_cap_terapeuta?utm_medium=org&utm_source=org-mid-sites&utm_content=leads&utm_campaign=SFTB2">Seja uma Terapeuta</a></li>

         
          </ul>
        </div>
        
      </div>
    </div>
   
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>
@yield('js')
  </body>
</html>