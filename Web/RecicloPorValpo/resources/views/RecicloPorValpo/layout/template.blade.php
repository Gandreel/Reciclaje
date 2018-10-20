<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RecicloPorValpo</title>
		
		<!-- Integracion de Boostrap (CSS) -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>	
	<body>
		<!-- Lugar donde estara el contenido de la pagina -->
		@yield('contenido')
			
		<!-- Integracion de Boostrap (js) -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>
