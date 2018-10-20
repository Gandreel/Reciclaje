<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RecicloPorValpo</title>
		
		<!-- Integracion de Boostrap (CSS) -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
		<link href="{{asset('css/estilo.css')}}" rel="stylesheet" type="text/css" media="all"/>	
	<body>

		<!-- Menu -->
		<img src="{{asset('img/Valpo-1.png')}}" class="Foto-Menu">
		<ul>
			<li><a href="{{URL::to('/')}}">Inicio</a></li>
			<li>Encuesta
				<ul>
					<li><a href="{{URL::to('Encuesta')}}">Encuesta Informativa</a></li>
				</ul>
			</li>
			<li>Aprende a Reciclar</li>
		</ul>

		<!-- Lugar donde estara el contenido de la pagina -->
		@yield('contenido')
			
		<!-- Integracion de Boostrap (js) -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>
