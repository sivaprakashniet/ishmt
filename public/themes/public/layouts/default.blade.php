 <!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/inner.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/es-carousel.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/camera.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" href="{{ asset('css/elements.css') }}" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700italic,600italic,400italic,300italic,800,700,600,300|Open+Sans+Condensed:300,700,300italic|Fredericka+the+Great' rel='stylesheet' type='text/css'>
        {!! Theme::asset()->scripts() !!}
    </head>

    <body class="home">
         {!! Theme::partial('header') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
    

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.elastislide.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/camera.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.ui.totop.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/prettify.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/application.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.quicksand.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mobile.customized.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/accordion.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tabs.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/sitemap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/nav-small.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
        <script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
    </script>
<script>
    jQuery("#carousel-blog").elastislide({
        imageW      : 270,
        minItems        : 2,
        speed           : 600,
        easing      : "easeOutQuart",
        margin      : 30,
        border      : 0,
        onClick     : function() {}
    });</script>
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
