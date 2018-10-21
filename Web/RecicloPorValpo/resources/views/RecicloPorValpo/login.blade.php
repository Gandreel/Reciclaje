<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }} ">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<!-- Integracion del Template -->
@extends('RecicloPorValpo.layout.template')
<!-- Lugar de posición del contenido -->
@section('contenido')
    <div class="contenedor-form">
        <div>
            
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="{{URL::to('loger')}}" method="post">
                <input type="text" name="username" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <select name="tipo" class="algo">
                    <option value="1">Particular</option>
                    <option value="2">Comuni</option>
                </select>
                <input type="submit" value="Iniciar Sesion">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            </form>
        </div>
        <div class="reset-password">
            <a href="{{ URL::to('registro') }}">Registrarse</a>
        </div>

        <div class="formulario">
            <h2 style="text-align: center;">Te lo dije porfiado</h2>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>    
    <script src="{{ asset('js/main2.js') }}"></script>
    @endsection
</body>
</html>