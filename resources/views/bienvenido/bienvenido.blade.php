<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href= "{{asset('plugins/bienvenido/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bienvenido/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/login/styles.css')}}">
    
</head>

<body>

<div class="row">
 <div class="login col s12">
	<div class="top">
		<h1 id="title" class="hidden"><span id="logo"> <span>Bienvenido</span></span></h1>
	</div>
	<div class="login-box animated fadeInUp">
       <div class="row">          
         @include('bienvenido.login')
	   </div> 
    </div>
  </div>
</div>
	
<br>
<br>
<br>
<br>
<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Alta Velocidad Y Desarrollo </h5>

            <p class="light"> Gracias a la conexion directa que exite con el sistema registro de clases, usted tendra acceso con sus mismas credenciales a nuestro sistema ,ademas usted podra gestionar de manera detalla las calificaciones de cada uno de sus estudiantes.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">picture_as_pdf</i></h2>
            <h5 class="center">Generacion de Informes</h5>

            <p class="light">Nuestro sistema esta altamente centrador en la generacion de informes,usted tendra la facilidad de generar informes con las caracteristicas que desee.
            También estamos siempre abiertos a la retroalimentación y podemos responder a cualquier pregunta que un usuario puede tener sobre materializarse.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">accessibility</i></h2>
            <h5 class="center">Accesibilidad</h5>

            <p class="light">Proporcionamos acceso a la informacion de sus estudiantes, de una manera rapida,eficaz y rapida desde cualquier lugar que desees conectarte.</p>
          </div>
        </div>
      </div>

    </div>
 </div>   

 <!--  <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>-->

   <div class="slider">
    <ul class="slides">
      <li>
        <img src="{{asset('plugins/bienvenido/images/graficos.jpg')}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="{{asset('plugins/bienvenido/images/calificaciones.jpg')}}"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


  <footer class="page-footer gradient">
          <div class="container">
            <div class="row">
              <div class="col l6 s12 ">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

</body>
<script src="{{asset('plugins/jquery/jquery-3.1.0.js')}}"></script>
<script type="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/2.5.1/jquery-confirm.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script>


     
$('.carousel.carousel-slider').carousel({full_width: true});
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
    	 $('.slider').slider({full_width: true});
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

<script type="text/javascript">

        var docente = document.getElementById('loginDocentes');
        var estudiante= document.getElementById('loginEstudiantes');

        function mostrarDocente() {
            
                docente.style.display="block";
                estudiante.style.display="none";

           
        }

        function mostrarEstudiante() {
            
                docente.style.display="none";
                estudiante.style.display="block";

           
        }

    </script>

</html>