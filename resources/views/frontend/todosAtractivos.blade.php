<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->

   <title>Actividades</title>

   <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/mensajes.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/alertify.css')}}">


    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
  
  


  
</head>


<body id="home" class="homepage" style="background: #fff;">
  

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
                                        <a tabindex="-1" href="#">Hospedaje</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Hosterías</a></li>
                                                <li><a tabindex="-1" href="#">Hoteles</a></li>
                                                 <li><a tabindex="-1" href="#">Hostales</a></li>
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Alimentación</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Restaurantes</a></li>
                                                <li><a tabindex="-1" href="#">Cafeterias</a></li>
                                                <li><a tabindex="-1" href="#">Fuentes de Soda</a></li>
                                                
                                        </ul>
                                 </li> 

                                  <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Diversión</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Discotecas</a></li>
                                                <li><a tabindex="-1" href="#">Centro de eventos</a></li>
                                                <li><a tabindex="-1" href="#">Bares</a></li>
                                                 <li><a tabindex="-1" href="#">Karaokes</a></li>
                                                
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

                     
                      
                  
                                                       
                       
                </div>

            



            </div>
        </nav>
    </header>


<div class='oculto'>

<img class="oculto" src="{{url('frontend/images/actividad2.jpg')}}" alt="">

</div>
<p class="sliderTitle4"> Atractivos Turísticos </p>

<div class="container" style="padding-bottom: 70px;">



       <div class="row header">
            <div class="col-md-12">

                    <p class="contact"> Todas los atractivos turísticos </p>


                
            </div>
        </div>

         <div class= "col-xs-12 col-md-12">
            <p style="font-color='black';text-align: justify; font-size: 16px" > 

            Hay una ciudad por descubrir, una sociedad por investigar, una gente por amar y un tiempo por recordar. A través de éstos espacios pretendemos perpetuar la conciencia colectiva con imágenes, documentos, vídeos que sin duda tendrán un valor positivo para el conocimiento de nuestra identidad como asentamiento urbano y para el reconocimiento de nuestros espacios que son paraíso en la tierra.

             </p>

            
        </div>


        



           @foreach($categoriasTu as $cat)

          <div class="col-md-12">

                    <p class="actividades"> {{$cat->categoria}} </p>


                
            </div>
        
          

            
            <div class="col-lg-12 col-md-12 col-sm-12">

                    @foreach($actividades as $act)            
                        @if($cat->id == $act->id_categorias )
                                        
                        <div class="col-lg-4 col-md-4 col-sm-4" style="padding-bottom:25px;">

                                <div class="blog-post blog-large">
                                    <article>
                                        <header class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive5" src="{{url('fotos/'.$act->path)}}" alt="">
                                                
                                            </div>
                                            <div class="entry-date">{{$act->fecha_post}}</div>
                                            <h3 class="entry-title"><a href="#">{{$act->titulo}}</a></h3>
                                        </header>

                                        <div class="entry-content">
                                            <P class="negro2">{{$act->descripcion}}</P>
                                            {!!link_to('atractivosTuristicos/'.$act->id.'', $title = 'Más Información', $attributes = ['class'=>'btn btn-danger btn-md'], $secure = null)!!}
                                          
                                        </div>

                                    </article>
                                </div>
                         </div>
                                
                                            
                                    
                                            
                                        
                            @endif
                     @endforeach 
                 </div>
               
                                     
                                           
         @endforeach   
        


        

    
</div> <!-- /container -->



       


        
                
 
                    
       

 

  
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
    <script src="{{url('administration/dist/js/alertify.js')}}"></script>
     <script src="{{url('administration/dist/js/sweetalert.min.js')}}"></script>

    
 
    <script src="{{url('frontend/js/main.js')}}"></script>

   



  



   


</body>

</html>