<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
        }

        p {
            color: #333;
            font-size: 1.2em;
            width: 41%; /* Añade esta línea */
            text-align: center; /* Añade esta línea */
        }

        a {
            display: inline-block;
            color: #fff;
            background-color: #0066cc;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        a:hover {
            background-color: #0055a3;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a Carluxe</h1>
    <p>Carluxe es una aplicación web para la gestión de bases de datos de nuestra empresa. Permite a los usuarios autenticados gestionar y acceder a sus datos de manera eficiente. También proporciona un enlace para que los usuarios no autenticados inicien sesión. Su diseño sencillo e interfaz intuitiva hacen que la gestión de bases de datos sea fácil.</p>

    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Iniciar sesión</a><br>
        @endauth
    @endif
</body>
</html>
