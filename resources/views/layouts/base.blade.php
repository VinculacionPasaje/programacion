<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->
  @yield('title')
   <title>GAD PASAJE | Bienvenido</title>

   <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
  
  


   @yield('head')
</head>


<body id="home" class="homepage">
  

   <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
    <header id="header">
        
        <nav id="main-menu" class="navbar navbar-default navbar-static-top" role="banner">

            
            <div id="topbar">
                        <div class="line ">

                            <div  class="col-xs-4 col-md-4 fondo1">
                                        
                                        
                                    </div>

                            <div  class="col-xs-4 col-md-4 fondo2">
                                        
                                        
                                    </div>

                            <div  class="col-xs-4 col-md-4 fondo3">
                                        
                                        
                                    </div>

                         
                        
                        
                        </div>  
            </div> 

            

            <div class="container">
                
                <div class="navbar-header">
                    

                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    

                    
                    <a class="navbar-brand" href="{{url ('/')}}"><img src="{{url('frontend/images/logo2.png')}}" alt="logo"></a>
                </div>

                


                
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="{{url ('/')}}">INICIO</a></li>
						
						
                          <li class="dropdown">
						
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">PASAJE<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url ('llegar')}}">¿Cómo Llegar?</a></li>
                                <li><a href="{{url ('mapas')}}">Mapas</a></li>  
                                <li><a href="{{url ('traer')}}">¿Que Traer?</a></li> 
                                <li><a href="{{url ('preguntas')}}">Preguntas Frecuentes</a></li>   
                                <li><a href="{{url ('material')}}">Material Turístico</a></li>            
                            </ul>
                             </li> 

                       @yield('menu') 

                        

                       
                        
                        <li class="scroll"><a href="{{url ('contactos')}}">CONTACTOS</a></li>

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>
    </header>

   @yield('header')
 
<div class="container">

 


    <div class="col-lg-9 col-md-9 col-sm-6">
   
    @if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Something went wrong : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
	@endif
    @yield('contenido')

    </div>

    
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- Carousel
                    ================================================== -->
                    <div id="myCarousel" class="carousel slide">        
                        <div class="carousel-inner">           
                            <div class="item active"> 
                                <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide1"></a>
                                <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                </div>
                            </div>
                            <div class="item"> 
                                <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide2"></a>
                                <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                </div>                                                           
                            </div>  
                            <div class="item"> 
                                <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide3"></a>
                                <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                </div>                        
                            </div>                                                                                   
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>                                                                 
                    </div><!-- End Carousel -->  
                </div>
            </div>
       

 
</div>




<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Auction Ends Today</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
 

 @yield('footer')

    <script src="{{url('frontend/js/jquery.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    
 <script src="{{url('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('frontend/js/jquery.isotope.min.js')}}"></script>

 
    <script src="{{url('frontend/js/main.js')}}"></script>



    <script type="text/javascript">

        $('#myCarousel').carousel({
            interval:   4000
        });
      </script>
  

   @yield('script')

   


</body>

</html>