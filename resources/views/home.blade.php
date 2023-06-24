@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 py-2 home">
            <div class="page-title mb-3">
                <center><h1>Inicio</h1></center>
            </div>
            <div class="page-content">
            <center><img src="{{ asset('img/logo.png') }}" alt="logo" width="340" height="260"></center>
            <br>
            <br>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="count">{{ $totalTrainings }}</div>
                        <div class="name">{{ __('Categorias') }}</div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="count">{{ $totalFiles }}</div>
                        <div class="name">{{ __('Imagenes/Videos') }}</div>
                    </div>
                </div>
                <div class="mt-2">
                <main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
  <center><div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('img/productividad.jpg') }}" alt="Generic placeholder image" width="180" height="140">
      <h2>Productividad</h2>
      <p>Cronnos da una productividad superior, dando un inventario amigable</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('img/dinero.jfif') }}" alt="Generic placeholder image" width="180" height="140">
      <h2>Economia</h2>
      <p>Con nosotros recibiras el precio más bajo del todo mercado, dandote un respiro a tu bolsillo.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('img/r.png') }}" alt="Generic placeholder image" width="180" height="140">
      <h2>Confiabilidad</h2>
      <p>Nuestra empresa es confiable, amigable y profesional. Tu información, siempre estara en privacidad.</p>
    </div><!-- /.col-lg-4 -->
  </div></center>

<br><br>
  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">
  <br>

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">¿Quienes somos? </span></h2>
      <p class="lead">Somos 3 estudiantes del SENA, con multiples expectativas a futuro, dando soluciones a tus necesidades.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="{{ asset('img/sena.png') }}" alt="SENA" width="180" height="140">
    </div>
  </div>
<br>
  <hr class="featurette-divider">
<br>
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">¿Porque escogernos?</span></h2>
      <p class="lead">Nosotros resolvemos tus necesidades, dando una productividad, organización y profesionalismo. Además de ello, te damos el presupuesto más economico del mercado, dando confiabilidad y privacidad.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="{{ asset('img/OIP.jfif') }}" alt="" width="200" height="180">
    </div>
  </div>
<br>
  <hr class="featurette-divider">




</div>

                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="">CRONNOS B</a>
  </div>
  <!-- Copyright -->
</footer>

@endsection
