<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Estetica Brenda</title>

  <meta name="description" content="">
  <meta name="author" content="">
    <!--Page's titule-->
  <link rel="stylesheet" type="text/css" href="/css/stylesPage.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<section class="bienvenidos">
  <div class="container-fluid">

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg  text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" id="index" href="{{url('/')}}"><img id="logo"   src="/imgs/logo.jpg"></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"  href="{{ url('portfolio') }}" id="portafolio">Portafolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('services') }}" id="services">Servicios</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('location') }}" id="contactos">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
 </section>
   @yield('index-content')
  @yield('services-content')
  @yield('location-content')
  @yield('portfolio-content')
  @yield('peinados-content')
  @yield('unas-content')
  @yield('maquillaje-content')



<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!--script src="/js/events.js"></script-->

</body>
</html>