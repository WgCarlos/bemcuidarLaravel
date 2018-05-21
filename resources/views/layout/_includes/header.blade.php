<!doctype html>
<html lang="pt-br">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href='css/estilos.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="cadastro.html">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>@yield('titulo')</title>
</head>
<body>
<nav>
  <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark"> 
    <a class="navbar-brand" href="/"><strong>Bem Cuidar</strong></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label=" Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="container">
              <div class="row">
                <h1 class="text-center"><a href="/" id="home" role="button" class="btn btn-dark btn-lg" ><i class="fas fa-home"></i> Home</a></h1>
              </div>
          </div>
      </li>
    <li class="nav-item">
        <div class="container">
            <div class="row">
              <h1 class="text-center"><a href="#myModal" id="quemsomos" role="button" class="btn btn-dark btn-lg" ><i class="fas fa-users"></i> Quem somos</a></h1>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <div class="container">
            <div class="row">
              <h1 class="text-center"><a href="#myModal" id="profissionais" role="button" class="btn btn-dark btn-lg" ><i class="fab fa-black-tie"></i> Profissionais</a></h1>
            </div>
          </div>
        </li>
        <li class="nav-item">
        <div class="container">    
          <h1 class="text-center"><a href="#myModal" id="faleconosco" role="button" class="btn btn-dark btn-lg" data-toggle="modal"><i class="far fa-envelope"></i> Fale Conosco</a></h1>
       </div>
       </li>
          @if(Auth::guest())
            <li class="nav-item">
              <div class="container">    
                <h1 class="text-center"><a href="{{route('site.login')}}" role="button" class="btn btn-secondary btn-lg"> <i class="far fa-user"></i>Login</a></h1>
              </div>
            </li>
          @else
            <li class="nav-item">
              <div class="container">
                <h1 class="text-center"><a href="#">{{Auth::user()->name}}</a></h1>
              </div>
            </li>
            <li class="nav-item">
              <div class="container">
                <h1 class="text-center"><a href="{{route('site.login.sair')}}">Sair</a></h1>
              </div>
            </li>
          @endif
      
      </ul>
    </div>
  </nav>
</nav>