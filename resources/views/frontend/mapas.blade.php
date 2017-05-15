<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->

   <title>Mapas</title>

   <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/jquery.fancybox.min.css')}}">

    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
  
  


  
</head>


<body id="home" class="homepage" style="background: #f5f5f5;">
  

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


<div class="container" style="padding-bottom:50px; ">
  
        <div class="row header">
            <div class="col-md-12">

                    <p class="contact"> Mapas </p>
                
            </div>
        </div>

        <div class= "col-xs-12 col-md-12" aling="center">
            <p style="font-color='black';"> <span class="fa fa-eye"></span> Visto: {{$variable->contador_visitas}} </p>

            
        </div>

        <div class= "col-xs-12 col-md-12">
            <p style="font-color='black';text-align: justify; font-size: 16px" > Con la finalidad de ofrecer información de ubicación de atractivos, áreas rurales y museos. El cantón Pasaje ha trabajado en el diseño de algunos mapas con información importante para conocer Pasaje y sus alrededores. </p>

            
        </div>


        <div class="row">
		<div class='list-group gallery'>

        @if(count($mapas) >0)  

         @foreach($mapas as $map)

          <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="padding-bottom:15px;">

                <a class="fancybox" rel="ligthbox" href="{{url('fotos/'.$map->path)}}">
                    <div class="img-contenedor">

                    <img class="img-responsive4" alt="" src="{{url('fotos/'.$map->path)}}"  />
                     <h2 class="texto5" style="padding-left:5px;"><span class="fondotexto2">{{$map->titulo}}</span></h2>
                     
                     <h2 class="texto4" style="font-weight: normal;padding-left: 5px;padding-bottom: -;padding-bottom: 0px;padding-right: 5px;"><span class="fondotexto">{{$map->descripcion}}</span></h2>
                    </div>
                </a>
            
            </div> <!-- col-6 / end -->

         @endforeach

         @endif

         
           
          

            </div> <!-- list-group / end -->
        </div> <!-- row / end -->


</div>



       


        
                
 
                    
       

 

  
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
    <script src="{{url('frontend/js/jquery.fancybox.min.js')}}"></script>
    
 
    <script src="{{url('frontend/js/main.js')}}"></script>

    <script>
        $(document).ready(function(){
            //FANCYBOX
            //https://github.com/fancyapps/fancyBox
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
   

    </script>



  



   


</body>

</html>

