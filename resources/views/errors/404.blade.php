<!doctype html>
<html class="404 no-js" lang="">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta name="description" content="flat, clean, responsive, application frontend template built with bootstrap 3">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- /meta -->

  <title>Página no encontrada</title>

  <!-- page level plugin styles -->
  <!-- /page level plugin styles -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/font-awesome.css')}}">

  <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/sublime.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/skin.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/fonts.css')}}">
    <link rel="shortcut icon" href="{{url('frontend/images/ico/icon.ico')}}">
  <!-- endbuild -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  
</head>

<!-- body -->

<body>

  <!-- page loading spinner -->
  <div class="pageload">
    <div class="loader"></div>
  </div>
  <!-- /page loading spinner -->

  

  <!-- hero -->
  <section id="top" class="content-section hero vertical-center color-inherit">

    <div class="hero-parallax parallax" style="background: url({{url('frontend/images/error.jpg')}});"></div>

    <div class="overlay overlay-colored-9"></div>

    <div class="container">
      <div class="hero-container">
        <h1 class="animated bounceIn error-number">404</h1>
        <div class="hero-sub-title" data-animation="fadeInRight">
          <p><em>Página no encontrada</em>
          </p>
          <small><em>Lo sentimos, pero la página que estaba buscando no existe </em></small>
          
           <a href="{{url ('/')}}" class="btn btn-success btn-rounded">Ir al Home</a>
        </div>
      </div>
    </div>

  </section>
  <!-- /hero -->

  <!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="{{url('frontend/js/jquery.js')}}"></script>
  <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>

  <!-- endbuild -->

  <!-- page level scripts -->
  <script src="{{url('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
  <!-- /page level scripts -->

  <!-- template scripts -->
  <script src="{{url('frontend/js/main2.js')}}"></script>
  <!-- /template scripts -->

  <!-- page script -->
  <!-- /page script -->



</body>

</html>