<!DOCTYPE html>
<html lang="en">
    <head>

        <title>@yield('title','default')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/Materialize/css/materialize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fonts/style.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/login/styles.css')}}">
        <meta charset="utf-8">
    </head>

    <body id="app-layout">

        <header>
            <!-- Navbar goes here -->
                @include('partials.nav')
        <!-- Page Layout here --> 
        </header>
    
        
        
        <div class="row">

            <div class="col s12 m4 l3"> 
                
            </div>

            <div class="col s12 m12 l9 card-panel"> 

                  @yield('content')
            </div>

        </div>
        <!-- JavaScripts  y jquery-->
        <script src="{{asset('plugins/jquery/jquery-3.1.0.js')}}"></script>
        <script type="text/javascript">
            $( document ).ready(function(){
                $(".button-collapse").sideNav();
                $('.collapsible').collapsible();
                 $('.dropdown-button').dropdown('open');
            });
        </script>
        <script src="{{asset('plugins/Materialize/js/materialize.js')}}"></script>
    </body>
</html>
