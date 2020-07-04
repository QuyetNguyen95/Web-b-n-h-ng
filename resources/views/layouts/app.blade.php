<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<style type="text/css">
    #scrollUp{
        bottom: 150px !important;
    }
</style>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lavoro | Home 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
         <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

        <!-- CSS  -->

        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">

        <!-- owl.theme CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">

        <!-- owl.transitions CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">

        <!-- font-awesome.min CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

        <!-- font-icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('fonts/font-icon.css')}}">

        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

        <!-- mobile menu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">

        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('custom-slider/css/nivo-slider.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('custom-slider/css/preview.css')}}" type="text/css" media="screen" />

        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">

        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <!-- style CSS
        ============================================ -->

        <!-- responsive CSS

        ============================================ -->
         <link rel="stylesheet" href="{{asset('style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <style type="text/css">
            .error-text{
                color: red;font-style: italic;
            }
             .cart-quantity{
          background: #fdb45e;
          height: 12px;
          width: 12px;
          border-radius: 100%;
          line-height: 12px;
          position: absolute;
          text-align: center;
          top: -38px;
          color: #fff;
          left: 8px;
          font-size: 8px;
        }
        ul.dropdown-cart{
                 min-width: 300px;
            }
            ul.dropdown-cart li .item{
                display:block;
                padding:3px 10px;
                margin: 3px 0;
            }
            ul.dropdown-cart li .item:hover{
                background-color:#f3f3f3;
            }
            ul.dropdown-cart li .item:after{
                visibility: hidden;
                display: block;
                font-size: 0;
                content: " ";
                clear: both;
                height: 0;
            }

            ul.dropdown-cart li .item-left{
                float:left;
            }
            ul.dropdown-cart li .item-left img,
            ul.dropdown-cart li .item-left span.item-info{
                float:left;
            }
            ul.dropdown-cart li .item-left span.item-info{
                margin-left:10px;
            }
            ul.dropdown-cart li .item-left span.item-info span{
                display:block;
            }
            ul.dropdown-cart li .item-right{
                float:right;
            }
            ul.dropdown-cart li .item-right button{
                margin-top:14px;
        </style>
    </head>
    <body class="home-one">
        @include('components.header')
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
           @if(Session::has($msg))
            <div class="alert alert-{{$msg}} alert-dismissible" style="width: 40%; margin-right: : 20px;position: fixed; z-index: 99999;text-align: center; margin-top: -72px; margin-left: 809px;">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               {{Session::get($msg)}}
             </div>
           @endif
        @endforeach
       @yield('content')
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
     <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5de944f543be710e1d20c186/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
<!--End of Tawk.to Script-->
        @include('components.footer')
        <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>

        <!-- bootstrap js
        ============================================ -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- Nivo slider js
        ============================================ -->
        <script src="{{asset('custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{asset('custom-slider/home.js')}}" type="text/javascript"></script>

        <!-- owl.carousel.min js
        ============================================ -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <!-- jquery scrollUp js
        ============================================ -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>

        <!-- price-slider js
        ============================================ -->
        <script src="{{asset('js/price-slider.js')}}"></script>

        <!-- elevateZoom js
        ============================================ -->
        <script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

        <!-- jquery.bxslider.min.js
        ============================================ -->
        <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>

        <!-- mobile menu js
        ============================================ -->
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>

        <!-- wow js
        ============================================ -->
        <script src="{{asset('js/wow.js')}}"></script>

        <!-- plugins js
        ============================================ -->
        <script src="{{asset('js/plugins.js')}}"></script>

        <!-- main js
        ============================================ -->
        <script src="{{asset('js/main.js')}}"></script>
        @yield('script')
    </body>
</html>
