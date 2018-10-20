<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RecicloPorValpo</title>
		
		<!-- Integracion de Boostrap (CSS) -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
		<link href="{{asset('css/estilo.css')}}" rel="stylesheet" type="text/css" media="all"/>	
	<body>	
		<div class="row"> 
	
			<!-- Foto Portada -->
			<div class="col-12 menu">
				<img src="{{asset('img/Valpo3.jpg')}}" class="Foto-Menu">
			</div>

			<!-- Navegador -->
			<div class="nav col-12" style="background:#fff">
				<nav class="nav">
					<a class="nav-item nav-link" href="{{URL::to('/')}}">Inicio</a>
					<a class="nav-item nav-link" href="{{URL::to('Encuesta')}}">Encuesta</a>
				</nav>
			</div>

		</div>
		
		<!-- Lugar donde estara el contenido de la pagina -->
		@yield('contenido')

		<!-- Integracion de Boostrap (js) -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>
