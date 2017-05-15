<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GAD PASAJE | Bienvenido</title>
	<!-- core CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/perfect-scrollbar.min.css')}}">
    
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

     <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
   
 
</head><!--/head-->

<body id="home" class="homepage"  style="background: #f2f2f2;">

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->


     
        




      <!-- 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 
               <div class="item">
                  <img src="{{url('frontend/images/slider/bg1.jpg')}}" alt="">
                  <div class="line"> 
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow">
                             <i class="fa fa-chevron-left"></i>
                          </div>
                          <div class="next-arrow">
                             <i class="fa fa-chevron-right"></i>
                          </div>
                        </div> 
                        <h2>PASAJE</h2>
                        <p>Pasaje es un cantón con impresionante potencial para desarrollar el turismo de naturaleza. Su gente, su cultura y su historia, hacen de este bello cantón, un lugar digno de admirar y visitar.

                        </p>
                        <a class="slider_btn" href="#">Leer Más</a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="{{url('frontend/images/slider/bg2.jpg')}}" alt="">
                  <div class="line">
                     <div class="text hide-s"> 
                        <div class="line"> 
                          <div class="prev-arrow ">
                             <i class="fa fa-chevron-left"></i>
                          </div>
                          <div class="next-arrow">
                            <i class="fa fa-chevron-right"></i>
                          </div>
                        </div> 
                       <h2>PASAJE</h2>
                        <p>Pasaje es un cantón con impresionante potencial para desarrollar el turismo de naturaleza. Su gente, su cultura y su historia, hacen de este bello cantón, un lugar digno de admirar y visitar.

                        </p>
                        <a class="slider_btn" href="#">Leer Más</a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="{{url('frontend/images/slider/bg1.jpg')}}" alt="">
                  <div class="line">
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow ">
                             <i class="fa fa-chevron-left"></i>
                          </div>
                          <div class="next-arrow ">
                             <i class="fa fa-chevron-right"></i>
                          </div>
                        </div> 
                        <h2>PASAJE</h2>
                        <p>Pasaje es un cantón con impresionante potencial para desarrollar el turismo de naturaleza. Su gente, su cultura y su historia, hacen de este bello cantón, un lugar digno de admirar y visitar.

                     </p>
                        <a class="slider_btn" href="#">Leer Más</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         CAROUSEL --> 


         <!--Video Section-->
            <section class="content-section video-section">
            
            
            <div class="pattern-overlay" style="background: url({{url('frontend/images/trama1.gif')}});">

                          

                        <div id="topbar">
                                    <div class="line ">

                                            <div  class="col-xs-4 col-md-4 fondo1">   </div>
                                            <div  class="col-xs-4 col-md-4 fondo2"></div>
                                            <div  class="col-xs-4 col-md-4 fondo3"></div>
                                                                                    
                                    </div>  
                            </div> 

                         

                    <div class="espacio">

                            <div  class="col-xs-6 col-md-4" align="center">
                                    <img src="{{url('frontend/images/escudos.png')}}" alt="logo">                           
                                                                
                            </div>

                            <div  class="col-xs-6 col-md-4" align="center">
                                            <img src="{{url('frontend/images/header2.png')}}" alt="logo">                   
                                                                
                            </div>

                        <div class="redessocial" align="center" >
                                <ul class="social-network social-circle">

                                 @if(count($redes) >0)                           

                                        @foreach($redes as $red)

                                                @if($red->id==1)

                                                <li><a href="{{$red->url}}" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                @endif

                                                @if($red->id==2)

                                            <li><a href="{{$red->url}}" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                @endif


                                                @if($red->id==3)

                                                <li><a href="{{$red->url}}" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                                                @endif

                                                @if($red->id==4)
                                                    <li><a href="{{$red->url}}" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                                                @endif

                                                

                                        @endforeach

                                @endif

                                    
                                            
                                            
                                        
                                            
                                        
                                </ul>				
                                                                                    
                            </div>
                     </div>
                     
                     <div class="cabecera">

                     <img class="orla" src="{{url('frontend/images/orla.png')}}" alt="logo">  
                     
                     </div>

          @if(count($videos) >0)  
            @foreach($videos as $video)
                <a id="bgndVideo" class="player" data-property="{videoURL:'{{$video->url}}',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
                        <div class="container">

                        
                            
                            
                                <div class="col-lg-12">

                                <h1>{{$video->titulo}}</h1>
                                <h3 align="justify">
                                {{$video->descripcion}}
                                
                                </h3>

                               <div align="center">
                               
                               
                               

                                <a class="slider_btn" href="#">Ven a descubrirlo</a>

                                </div>

                                
                                </div>
                            
                        </div>
                @endforeach
            @endif
            
                </div>
            </div>
            </section>
<!--Video Section Ends Here-->


         


         <nav id="main-menu" class="navbar navbar-default menu " style="z-index: 100000;" role="banner">

            
            

            

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

                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >OFERTA<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('actividades')}}">Actividades</a>
                                        <ul class="dropdown-menu">

                                        @if($categoriasAct->count())
                                            @foreach($categoriasAct as $cat)

                                                <li><a href="{{url('categoria/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                               


                                            @endforeach
                                        @endif
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('atractivosTuristicos')}}">Atractivos Turísticos</a>
                                        <ul class="dropdown-menu">
                                                @if($categoriasTu->count())
                                                    @foreach($categoriasTu as $cat)

                                                        <li><a href="{{url('categoriaTuristico/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                                    


                                                    @endforeach
                                                @endif
                                        </ul>
                                 </li>   
                                 <li><a href="{{url ('turismoComunitario')}}">Turismo Comunitario</a></li>     
                            </ul>
                        </li>    


                            
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >SERVICIOS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a  href="#">Hospedaje</a>
                                        <ul class="dropdown-menu">
                                                <li><a  href="#">Hosterías</a></li>
                                                <li><a  href="#">Hoteles</a></li>
                                                 <li><a  href="#">Hostales</a></li>
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a  href="#">Alimentación</a>
                                        <ul class="dropdown-menu">
                                                <li><a  href="#">Restaurantes</a></li>
                                                <li><a  href="#">Cafeterias</a></li>
                                                <li><a  href="#">Fuentes de Soda</a></li>
                                                
                                        </ul>
                                 </li> 

                                  <li class="dropdown-submenu">
                                        <a  href="#">Diversión</a>
                                        <ul class="dropdown-menu">
                                                <li><a href="#">Discotecas</a></li>
                                                <li><a  href="#">Centro de eventos</a></li>
                                                <li><a  href="#">Bares</a></li>
                                                 <li><a  href="#">Karaokes</a></li>
                                                
                                        </ul>
                                 </li>   
                                         
                            </ul>
                        </li>    
 

                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >GESTIÓN<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 
                                <li><a href="#">Dirección de Turismo</a></li>
                                <li><a href="#">Agenda de Eventos</a></li>
                                <li><a href="#">Proyectos</a></li>  
                                <li><a href="#">Catastros Turísticos</a></li>               
                            </ul>
                        </li>  

                        

                       
                        
                        <li class="scroll"><a href="{{url ('contactos')}}">CONTACTOS</a></li>

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                        
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>

        

    

  


 <section id="blog">
     <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">Últimas noticias</h2>
                
            </div>

         <div class="row">
            
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="blog-post blog-large" >
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{url('frontend/images/blog/01.jpg')}}" alt="">
                                    
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P class="negro2">With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-danger" href="#">Leer más</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">

                     <div class="blog-post blog-large">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive2" src="{{url('frontend/images/blog/01.jpg')}}" alt="">
                                    
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P class="negro2">With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-danger" href="#">Leer más</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                    </div>

                     <div class="col-lg-6 col-md-6 col-sm-6">

                     <div class="blog-post blog-large">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive2" src="{{url('frontend/images/blog/01.jpg')}}" alt="">
                                    
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P class="negro2">With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-danger" href="#">Leer más</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                    </div>

                </div><!--/.col-sm-8-->

                 <div class="col-lg-4 col-md-4 col-sm-6" >
                    
                    <h3 class="column-title">Noticias</h3>
                    <div class="panel panel-default" style="background: #f5f5f5;">
                    
                    <div class="panel-body" id="menu2">
                    
                    <ul class="demo1" style="overflow-y: hidden; margin-bottom: 0px;">


                            <li style="" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%"> </tr>
                            <td>
                                 <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                 
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p>  
                                
                                </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%"> </tr>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p> 
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%" ></tr>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p>  
                            </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%" ></tr>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p>  
                            </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%" ></tr>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p>  
                            </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%" ></tr>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p> 
                            </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="100%" ></tr>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                <p class="negro2" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... </p>  
                            </td>
                            </tr>
                            </tbody></table>
                            </li>
                        </ul>
                    </div>

                            <div class="panel-footer">
                                
                               
                                <div class="clearfix">
                                    

                                </div>
                                <a class="btn btn-danger" href="#">Ver Más Noticias</a>
                      
                            </div>
                    </div>


                      <h3 class="column-title">Categorias</h3>

                        @if($categorias->count())
                        @foreach($categorias as $categoria)
                         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#{{$categoria->id}}" aria-expanded="false" aria-controls="collapseOne">
                                                <b>{{$categoria->nombre}}</b>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$categoria->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <b><a href="#"> Prueba 1 </a> </b>
                                            <br>
                                            <b><a href="#"> Prueba 2 </a> </b>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
						</div>
                        


                            
                        
                       

                


                
                    
                </div>
                
            

        </div>
	</div>
  </section>







    <!--home-content-top starts from here-->
<section class="home-content-top">
  <div class="container">
    
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    <h1 class="heading1">Noticias de Pasaje</h1>
    <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li  class="active"> <a href="#tab_default_1" data-toggle="tab" > <span class="glyphicon glyphicon-list-alt"></span>  Noticias </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab"> <span class="glyphicon glyphicon-eye-open"></span>  Interesantes</a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab"> <span class="glyphicon glyphicon-check"></span> Destacado </a> </li>
          
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
               <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive2"> </div>
                </div>
                <div class="col-md-8">
                    <a href="#"><h4 class="heading4 negro">Magento Product Upload Services</h4> </a>
                    <p class="negro2" >Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                    
                    <a class="btn btn-danger" href="#">Read More</a>
                </div>
                 </div>

                 <div class="row" style="padding-bottom: 10px;">

                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive2"> </div>
                </div>
                <div class="col-md-8">

                <a href="#"><h4 class="heading4 negro">Magento Product Upload Services</h4> </a>
                    <p class="negro2" >Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>

                        
                         <a class="btn btn-danger" href="#">Read More</a>
                </div>
                </div>

          </div>
          <div class="tab-pane fade" id="tab_default_2">
            

            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive2"> </div>
                </div>
                <div class="col-md-8">
                   <a href="#"><h4 class="heading4 negro">Magento Product Upload Services</h4> </a>
                    <p class="negro2" >Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                    
                    <a class="btn btn-danger" href="#">Read More</a>
                </div>
                 </div>

                 <div class="row" style="padding-bottom: 10px;">

                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive2"> </div>
                </div>
                <div class="col-md-8">
                    <a href="#"><h4 class="heading4 negro">Magento Product Upload Services</h4> </a>
                    <p class="negro2" >Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                        
                       <a class="btn btn-danger" href="#">Read More</a>
                </div>
                </div>


          </div>
          <div class="tab-pane fade" id="tab_default_3">
            
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive2"> </div>
                </div>
                <div class="col-md-8">
                   <a href="#"><h4 class="heading4 negro">Magento Product Upload Services</h4> </a>
                    <p class="negro2" >Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                     <a class="btn btn-danger" href="#">Read More</a>
                </div>
                 </div>

                 <div class="row" style="padding-bottom: 10px;">

                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive2"> </div>
                </div>
                <div class="col-md-8">
                        <a href="#"><h4 class="heading4 negro">Magento Product Upload Services</h4> </a>
                    <p class="negro2" >Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                        
                         <a class="btn btn-danger" href="#">Read More</a>
                </div>
                </div>


          </div>
          
      
        </div>
      </div>
    </div>
  </div>
</section>
<!--home-content-top ends here--> 


    

    

    






  


<div  class="col-xs-12 col-md-12 fondo1">   </div>
    <footer id="footer">
    
        <div class="container">

               <div class="col-xs-12 col-md-12 col-sm-12" style="padding-bottom: 10px; padding-top:15px;" align="center">
                   <img src="{{url('frontend/images/logo3.png')}}" alt="logo">
                

                   
                </div>

            
            
                <div class="col-xs-12 col-md-12 col-sm-12">

                    @if(count($footer) >0)
                        @foreach($footer as $item)
                            <p class="blanco" >Gobierno Autónomo Descentralizado Municipal del Cantón Pasaje <br>
                                {{$item->direccion}} | Telf. {{$item->telefono}} | Fax. {{$item->fax}} | Web: {{$item->web}} | Email: {{$item->email}}
                                <br>® Todos los Derechos Reservados | Pasaje, El Oro, Ecuador {{$item->anio}}
                                
                                </p> 
                        @endforeach
                    @endif

                        <div class="redessocial2" align="center" >
                                <ul class="social-network social-circle">

                                @if(count($redes) >0)


                                 @foreach($redes as $red)

                                                @if($red->id==1)

                                                <li><a href="{{$red->url}}" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                @endif

                                                @if($red->id==2)

                                            <li><a href="{{$red->url}}" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                @endif


                                                @if($red->id==3)

                                                <li><a href="{{$red->url}}" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                                                @endif

                                                @if($red->id==4)
                                                    <li><a href="{{$red->url}}" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                                                @endif

                                                

                                        @endforeach



                                @endif
                                   
                                        
                                </ul>				
                                                                                    
                            </div>
                

                   
                </div>

                
           
        </div>
    </footer><!--/#footer-->

    <script src="{{url('frontend/js/jquery.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    
    <script src="{{url('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('frontend/js/jquery.isotope.min.js')}}"></script>

 
    <script src="{{url('frontend/js/main.js')}}"></script>
    
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>

    

    


    <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });

            
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 

        $(document).ready(function () {

            $(".player").mb_YTPlayer();

        });

     


        $(document).ready(function(){
            var altura = $('.menu').offset().top;
            
            $(window).on('scroll', function(){
                if ( $(window).scrollTop() > altura ){
                    $('.menu').addClass('menu-fixed');
                } else {
                    $('.menu').removeClass('menu-fixed');
                }
            });
        
        });

         $(function () {
                $(".demo1").bootstrapNews({
                    newsPerPage: 1,
                    autoplay: true,
                    pauseOnHover:true,
                    direction: 'up',
                    newsTickerInterval: 4000,
                    onToDo: function () {
                        //console.log(this);
                    }
                });
		
		
        });


        (function () {
    var previousScroll = 0;

    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll){

            //$('.menu').hide('slow');

           $('.menu').addClass('desaparece');
           $('.menu').removeClass('aparece');

           //para abajo
          
       } else {

           //$('.menu').show('slow');
          
            

           $('.menu').addClass('aparece');
           $('.menu').removeClass('desaparece');
           
          

         //para arriba
       }
       previousScroll = currentScroll;
    });
}()); //run this anonymous function immediately

       

      </script>

         
     <script src="{{url('frontend/js/jquery.bootstrap.newsbox.min.js')}}"></script>
     <script src="{{url('frontend/js/jquery.mb.YTPlayer.js')}}"></script>
  
     

     
    


      
</body>
</html>
