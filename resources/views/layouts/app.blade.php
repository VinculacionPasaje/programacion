<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        @yield('title')
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="{{url('frontend/css/reset.css')}}">
         <link rel="stylesheet" href="{{url('frontend/css/supersized.css')}}">
          <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
              <link rel="shortcut icon" href="{{url('frontend/images/ico/icon.ico')}}">
        

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

      

        @yield('contenido')

        <!-- Javascript -->
        <script src="{{url('frontend/js/jquery.js')}}"></script>
        <script src="{{url('frontend/js/supersized.3.2.7.min.js')}}"></script>
       
        <script src="{{url('frontend/js/scripts.js')}}"></script>

        <script type="text/javascript">
        jQuery(function($){

            $.supersized({

                // Functionality
                slide_interval     : 4000,    // Length between transitions
                transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                transition_speed   : 1000,    // Speed of transition
                performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

                // Size & Position
                min_width          : 0,    // Min width allowed (in pixels)
                min_height         : 0,    // Min height allowed (in pixels)
                vertical_center    : 1,    // Vertically center background
                horizontal_center  : 1,    // Horizontally center background
                fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
                fit_portrait       : 1,    // Portrait images will not exceed browser height
                fit_landscape      : 0,    // Landscape images will not exceed browser width

                // Components
                slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                slides             : [    // Slideshow Images
                                        {image : '{{url('frontend/images/backgrounds/1.jpg')}}'},
                                        {image : '{{url('frontend/images/backgrounds/2.jpg')}}'},
                                        {image : '{{url('frontend/images/backgrounds/3.jpg')}}'}
                                    ]

            });

        });
       
        </script>
        
           @yield('script')

    </body>

</html>
